export function calculatePrice(formData, serviceConfig) {
    const { priceCalculator, priceRules } = serviceConfig;
    const regionConfig = priceRules.regions[formData.province];
    
    if (!regionConfig) {
        throw new Error(`Không tìm thấy cấu hình giá cho khu vực: ${formData.province}`);
    }

    const totalWeight = getTotalWeight(formData, priceCalculator);
    
    const priceRule = totalWeight <= regionConfig.weightThreshold 
        ? regionConfig.below 
        : regionConfig.above;

    let total = 0;

    // Tính phí cơ bản nếu có
    if (priceCalculator.base100kg && priceRule.base100kg) {
        total += priceRule.base100kg;
    }

    // Tính phí theo khối lượng
    if (priceCalculator.type === 'simple' && priceCalculator.useBasePrice) {
        // Cho các dịch vụ đơn giản (CTCN, CTCK)
        total += totalWeight * priceRule.basePrice;
    } else if (priceCalculator.type === 'complex' && priceCalculator.wasteTypes) {
        // Cho dịch vụ phức tạp (CTNH)
        Object.entries(priceCalculator.wasteTypes).forEach(([type, config]) => {
            const weight = formData.waste_details?.[type] || 0;
            if (weight > config.threshold) {
                total += (weight - config.threshold) * priceRule.wasteTypes[type];
            }
        });
    }

    // Tính phí vận chuyển
    if (priceCalculator.transportFeeFromSecondTrip) {
        // Tính từ chuyến thứ 2
        if (formData.transport_trips > 1) {
            total += (formData.transport_trips - 1) * priceRule.transportFee;
        }
    } else if (priceCalculator.transportFeeAllTrips) {
        // Tính tất cả các chuyến
        total += formData.transport_trips * priceRule.transportFee;
    }

    return total;
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