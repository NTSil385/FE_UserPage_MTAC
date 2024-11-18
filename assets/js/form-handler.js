import { wasteLocationData, envDocLocationData,authorityData, formTemplates, resultTemplates, transformFunctions } from './form-templates.js';
import { serviceConfig, WASTE_TYPES } from './price-data.js';
import { calculatePrice } from './price-calculator.js';

function handlePriceCalculation(event, serviceType) {
    const normalizedServiceType = serviceType.replace(/-/g, '');
    
    try {
        const formData = validateAndGetFormData(event, normalizedServiceType);
        
        // Validate business rules theo loại form
        if (normalizedServiceType === 'ctnh') {
            validateBusinessRules(formData);
        }

        // Tính giá - truyền service type đã chuẩn hóa
        const calculatedPrice = calculatePrice(
            formData, 
            serviceConfig[normalizedServiceType]
        );

        console.log('Calculated price:', calculatedPrice); // Debug log

        // Lấy total price từ kết quả tính toán
        const totalPrice = calculatedPrice.total || calculatedPrice;

        // Ẩn form và hiển thị kết quả
        const formContainer = document.querySelector('.quotation-form');
        const resultContainer = document.getElementById('price-result');

        // Truyền giá trị total
        renderPriceResult(formData, totalPrice, serviceConfig[normalizedServiceType]);
        
        resultContainer.style.display = 'block';
        
    } catch (error) {
        handleError(error);
    }
}

function validateAndGetFormData(event, serviceType) {
    const form = event.target;
    const formTemplate = formTemplates[serviceType];
    if (!formTemplate) throw new Error(`Không tìm thấy template cho dịch vụ: ${serviceType}`);

    const formData = {
        service_type: serviceType
    };

    // Duyệt qua tất cả các section trong template
    formTemplate.sections.forEach(section => {
        section.fields.forEach(field => {
            const element = form.querySelector(`[name="${field.name}"]`);
            if (!element) return;

            let value = element.value.trim();
            
            // Chuyển đổi giá trị số
            if (field.type === 'number') {
                value = parseFloat(value) || 0;
            }
            
            // Gán giá trị vào formData theo đúng cấu trúc
            setNestedValue(formData, field.name, value);
        });
    });

    // Validate required fields
    if (!formData.province) {
        throw new Error('Vui lòng chọn tỉnh/thành phố');
    }

    // Gán region dựa trên province đã chọn
    formData.region = formData.province;

    return formData;
}

// Hàm hỗ trợ set giá trị cho object theo path
function setNestedValue(obj, path, value) {
    const keys = path.split('.');
    let current = obj;
    
    for (let i = 0; i < keys.length - 1; i++) {
        if (!current[keys[i]]) {
            current[keys[i]] = {};
        }
        current = current[keys[i]];
    }
    
    current[keys[keys.length - 1]] = value;
}

function validateBusinessRules(formData) {
    if (formData.service_type !== 'ctnh') return;

    const detailSum = (
        formData.waste_details.normal +
        formData.waste_details.light_bulb +
        formData.waste_details.ma13 +
        formData.waste_details.ma14
    );

    if (Math.abs(formData.total_weight - detailSum) > 0.01) {
        throw new Error(`Tổng khối lượng chi tiết (${detailSum}kg) không khớp với tổng khối lượng đã nhập (${formData.total_weight}kg)`);
    }
}

function handleError(error) {
    console.error('Lỗi:', error);
    
    // Show error modal
    showErrorModal(error.message || 'Có lỗi xảy ra khi tính giá. Vui lòng thử lại.');
}

function showErrorModal(message) {
    // Tạo và hiển thị modal error
    alert(message);
}

function validateForm() {
    // Validate các trường bắt buộc
    const requiredFields = [
        { name: 'province', label: 'Tỉnh/Thành phố' },
        { name: 'total_weight', label: 'Tổng khối lượng' },
        { name: 'transport_trips', label: 'Số chuyến vận chuyển' },
        { name: 'normal_waste', label: 'Khối lượng chất thải thông thường' },
        { name: 'light_bulb_weight', label: 'Khối lượng bóng đèn' },
        { name: 'ma13_weight', label: 'Khối lượng mã 13' },
        { name: 'ma14_weight', label: 'Khối lượng mã 14' },
        { name: 'contact_name', label: 'Người liên hệ' },
        { name: 'phone', label: 'Số điện thoại' },
        { name: 'email', label: 'Email' }
    ];

    for (const field of requiredFields) {
        const element = document.querySelector(`[name="${field.name}"]`);
        if (!element || !element.value.trim()) {
            alert(`Vui lòng nhập ${field.label}`);
            if (element) element.focus();
            return false;
        }
    }

    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = document.querySelector('[name="email"]').value;
    if (!emailRegex.test(email)) {
        alert('Email không hợp lệ');
        document.querySelector('[name="email"]').focus();
        return false;
    }

    // Validate phone
    const phoneRegex = /^[0-9]{10,11}$/;
    const phone = document.querySelector('[name="phone"]').value;
    if (!phoneRegex.test(phone)) {
        alert('Số điện thoại không hợp lệ (cần 10-11 số)');
        document.querySelector('[name="phone"]').focus();
        return false;
    }


    // Validate tổng khối lượng chi tiết
    const normalWaste = parseFloat(document.querySelector('[name="normal_waste"]').value);
    const lightBulbWeight = parseFloat(document.querySelector('[name="light_bulb_weight"]').value);
    const ma13Weight = parseFloat(document.querySelector('[name="ma13_weight"]').value);
    const ma14Weight = parseFloat(document.querySelector('[name="ma14_weight"]').value);

    const sumWeight = normalWaste + lightBulbWeight + ma13Weight + ma14Weight;
    if (Math.abs(sumWeight - totalWeight) > 0.01) { // Sử dụng sai số nhỏ cho số thực
        showError(`Tổng khối lượng chi tiết (${sumWeight}kg) không khớp với tổng khối lượng chất thải`);
        return false;
    }

    return true;
}

// Khởi tạo form và gắn sự kiện
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#hazardous-form form');
    if (form) {
        form.addEventListener('submit', handlePriceCalculation);
    }

    // Gắn sự kiện cho nút "Tạo báo giá mới"
    document.addEventListener('click', function(e) {
        if (e.target.matches('.btn-secondary')) {
            const formContainer = document.getElementById('hazardous-form');
            const resultContainer = document.getElementById('price-result');
            
            if (formContainer && resultContainer) {
                formContainer.style.display = 'block';
                resultContainer.style.display = 'none';
                
                // Reset form
                const form = formContainer.querySelector('form');
                if (form) form.reset();
            }
        }
    });
});

// Hàm format tiền tệ
function formatCurrency(amount) {
    if (!amount || isNaN(amount)) return '0';
    return new Intl.NumberFormat('vi-VN').format(amount);
}

function getCostLabel(key) {
    const labels = {
        'analysis': 'Chi phí phân tích môi trường',
        'transport': 'Chi phí nhân công, vận chuyển',
        'appraisal': 'Chi phí hội đồng thẩm định',
        'documentation': 'Chi phí thực hiện'
    };
    return labels[key] || key;
}


function renderPriceResult(formData, totalPrice, serviceConfig) {
    console.log('Rendering price:', totalPrice); // Debug log
    
    const service = serviceConfig;
    if (!service) throw new Error(`Không tìm thấy cấu hình cho dịch vụ: ${formData.service_type}`);

    const defaultTemplate = resultTemplates.default;
    const serviceTemplate = resultTemplates[formData.service_type];

    let resultHTML = '';

    // Render price section first
    resultHTML += `
        <div class="price-section">
            <h4>Chi phí dự kiến:</h4>
            <div class="price-value">${formatCurrency(totalPrice)} VNĐ</div>
            <p class="price-note">(Giá chưa bao gồm VAT)</p>
        </div>
    `;

    // Render default sections
    if (defaultTemplate?.sections) {
        resultHTML += renderSections(defaultTemplate.sections, formData);
    }

    // Render service-specific sections
    if (serviceTemplate?.weightSection) {
        resultHTML += renderWeightSection(serviceTemplate.weightSection, formData);
    }

    const resultContainer = document.getElementById('price-result');
    resultContainer.innerHTML = `
        <div class="result-container">
            <h3>Báo giá dịch vụ ${service.name}</h3>
            ${resultHTML}
            <div class="action-buttons">
                <button  class="btn btn-outline-primary">Tải xuống báo giá</button>
            </div>
        </div>
    `;
    resultContainer.style.display = 'block';

    // Thêm logic scroll tự động khi màn hình nhỏ hơn 1024px
    if (window.innerWidth <= 1024) {
        setTimeout(() => {
            resultContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 100);
    }
}
function renderSections(sections, formData) {
    return sections.map(section => {
        // Nếu section chỉ có content (như phần ghi chú), render trực tiếp
        if (section.content) {
            return `
                <div class="info-section">
                    <h4>${section.title}</h4>
                    ${section.content}
                </div>
            `;
        }

        const fieldsHTML = section.fields.map(field => {
            let value = getNestedValue(formData, field.name);
            
            // Xử lý transform cho từng loại dịch vụ
            if (field.transform === 'location') {
                const service = serviceConfig[formData.service_type];
                // Kiểm tra service thuộc category nào
                const isWasteService = service?.category === 'waste';
                value = isWasteService 
                    ? wasteLocationData[formData.province] 
                    : envDocLocationData[formData.province];
            } else if (field.transform === 'authority') {
                value = authorityData[value] || value;
            } else if (field.transform === 'projectType') {
                value = transformFunctions.projectType(value);
            } else if (field.transform === 'projectScale') {
                value = transformFunctions.projectScale(value);
            }
            
            return `
                <div class="info-row">
                    <span class="info-label">${field.label}:</span>
                    <span class="info-value">${value || ''}</span>
                </div>
            `;
        }).join('');

        return `
            <div class="info-section">
                <h4>${section.title}</h4>
                ${fieldsHTML}
            </div>
        `;
    }).join('');
}

function renderWeightSection(weightSection, formData) {
    const fieldsHTML = weightSection.fields.map(field => {
        let value = getNestedValue(formData, field.name);
        
        // Thêm xử lý transform
        if (field.transform === 'location') {
            value = locationData[value] || value;
        } else if (field.transform === 'authority') {
            value = authorityData[value] || value;
        }
        
        return `
            <div class="info-row">
                <span class="info-label">${field.label}:</span>
                <span class="info-value">
                    ${value !== undefined ? value : '0'} ${field.unit || ''}
                </span>
            </div>
        `;
    }).join('');

    return `
        <div class="info-section">
            <h4>${weightSection.title}</h4>
            ${fieldsHTML}
        </div>
    `;
}

// Hàm hỗ trợ lấy giá trị từ object theo path
function getNestedValue(obj, path) {
    return path.split('.').reduce((current, key) => 
        current ? current[key] : undefined, obj);
}

// Cập nhật function getTransportFee đ nhận priceData
function getTransportFee(province, priceData) {
    const regionData = priceData.regions[province];
    return regionData?.priceRules?.below600kg?.transportFee || 0;
}

// Thêm transform function cho authority
function getAuthorityLabel(value) {
    const authorityLabels = {
        'so_tai_nguyen': 'Sở Tài nguyên và Môi trường',
        'phong_tai_nguyen': 'Phòng Tài nguyên và Môi trường'
    };
    return authorityLabels[value] || value;
}

function renderFields(fields, formData) {
    return fields.map(field => {
        let value = getNestedValue(formData, field.name);
        
        // Xử lý transform nếu có
        if (field.transform) {
            switch(field.transform) {
                case 'location':
                    // Lấy category từ serviceConfig
                    const serviceCategory = serviceConfig[formData.service_type]?.category;
                    value = serviceCategory === 'waste' 
                        ? wasteLocationData[value]
                        : envDocLocationData[value];
                    break;
                case 'projectType':
                    value = transformFunctions.projectType(value);
                    break;
                case 'projectScale':
                    value = transformFunctions.projectScale(value);
                    break;
                default:
                    if (transformFunctions[field.transform]) {
                        value = transformFunctions[field.transform](value);
                    }
            }
        }

        return `
            <div class="info-row">
                <span class="info-label">${field.label}:</span>
                <span class="info-value">${value || ''}</span>
            </div>
        `;
    }).join('');
}

export { handlePriceCalculation }; 