import { measurementPrices, transportationPrices } from './price-data.js';
export function calculatePrice(formData, serviceConfig) {
    const { priceCalculator, priceRules } = serviceConfig;
    
    // Log để debug
    console.log('formData:', formData);
    console.log('serviceConfig:', serviceConfig);
    console.log('priceCalculator:', priceCalculator);
    console.log('priceRules:', priceRules);
    
    if (priceCalculator.type === 'authority_based') {
        const authorityLevel = formData.authority_level;
        const province = formData.province;
        
        console.log('Authority Level:', authorityLevel);
        console.log('Province:', province);
        console.log('Price Rules:', priceRules);
        
        // Xác định cấp thẩm quyền
        const level = authorityLevel === 'so_tai_nguyen' ? 'department' : 'division';
        
        // Kiểm tra tồn tại của cấu hình
        if (!priceRules[level]) {
            throw new Error(`Không tìm thấy cấu hình cho cấp ${level}`);
        }
        
        // Lấy cấu hình giá theo khu vực
        const regionConfig = priceRules[level].regions[province];
        
        if (!regionConfig) {
            throw new Error(`Không tìm thấy cấu hình giá cho khu vực ${province}`);
        }

        const costs = {
            analysis: calculateAnalysisCost(formData),
            transport: calculateTransportCost(formData),
            appraisal: regionConfig.appraisal || 0,
            documentation: regionConfig.documentation || 0
        };

        console.log('Calculated costs:', costs);

        const total = Object.entries(priceCalculator.components)
            .reduce((sum, [component, isEnabled]) => {
                return isEnabled ? sum + (costs[component] || 0) : sum;
            }, 0);

        return {
            total,
            details: costs
        };
    }

    const provinceConfig = formData.service_type === 'gpmt' 
        ? priceRules[formData.authority_level]?.regions?.[formData.region]
        : priceRules.regions[formData.province];

    if (!provinceConfig) {
        console.error('Không tìm thấy cấu hình giá');
        return { total: 0, details: {} };
    }

    // Xử lý cho các dịch vụ hồ sơ môi trường (GPMT, DTM, DKMT, v.v.)
    if (priceCalculator.type === 'environmental_service') {
        const costs = {
            analysis: calculateAnalysisCost(formData),
            transport: calculateTransportCost(formData),
            appraisal: provinceConfig.appraisal || 0,
            documentation: provinceConfig.documentation || 0
        };
        console.log('Calculated costs:', costs);

        const total = Object.entries(priceCalculator.components)
            .reduce((sum, [component, isEnabled]) => {
                return isEnabled ? sum + (costs[component] || 0) : sum;
            }, 0);
        console.log('Total price:', total);

        return {
            total,
            details: costs
        };
    }

    const totalWeight = getTotalWeight(formData, priceCalculator);
    const priceRule = totalWeight <= (provinceConfig.weightThreshold || 600) 
        ? provinceConfig.below 
        : provinceConfig.above;

    let total = 0;

    if (priceCalculator.base100kg && priceRule.base100kg) {
        total += priceRule.base100kg;
    }

    if (priceCalculator.type === 'simple' && priceCalculator.useBasePrice) {
        total += totalWeight * priceRule.basePrice;
    } else if (priceCalculator.type === 'complex' && priceCalculator.wasteTypes) {
        Object.entries(priceCalculator.wasteTypes).forEach(([type, config]) => {
            const weight = formData.waste_details?.[type] || 0;
            if (weight > config.threshold) {
                total += (weight - config.threshold) * priceRule.wasteTypes[type];
            }
        });
    }

    if (priceCalculator.transportFeeFromSecondTrip) {
        if (formData.transport_trips > 1) {
            total += (formData.transport_trips - 1) * priceRule.transportFee;
        }
    } else if (priceCalculator.transportFeeAllTrips) {
        total += formData.transport_trips * priceRule.transportFee;
    }

    console.log('Transport fee config:', {
        transportFeeFromSecondTrip: priceCalculator.transportFeeFromSecondTrip,
        transportFeeAllTrips: priceCalculator.transportFeeAllTrips,
        fee: priceRule.transportFee
    });

    return total;
}

// Thêm hàm tính chi phí phân tích
function calculateAnalysisCost(formData) {
    const { selectedParameters = [] } = formData;
    return selectedParameters.reduce((total, param) => {
        const paramPrice = measurementPrices.water[param]?.price || 0;
        return total + paramPrice;
    }, 0);
}

// Thêm hàm tính chi phí vận chuyển
function calculateTransportCost(formData) {
    const transportConfig = transportationPrices.regions[formData.province];
    if (!transportConfig) return 0;
    return transportConfig.transport + transportConfig.labor;
}

function getTotalWeight(formData, calculator) {
    if (calculator.type === 'simple') {
        return formData[calculator.weightField] || 0;
    } else if (calculator.type === 'complex') {
        return Object.values(formData.waste_details || {})
            .reduce((sum, weight) => sum + (parseFloat(weight) || 0), 0);
    }
    return 0;
}

