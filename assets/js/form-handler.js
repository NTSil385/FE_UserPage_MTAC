import { wasteLocationData, envDocLocationData,authorityData, formTemplates, resultTemplates, transformFunctions } from './form-templates.js';
import { serviceConfig, WASTE_TYPES } from './price-data.js';
import { calculatePrice } from './price-calculator.js';

function handlePriceCalculation(event, serviceType) {
    const normalizedServiceType = serviceType.replace(/-/g, '');
    
    try {
        const formData = validateAndGetFormData(event, normalizedServiceType);
        

        if (normalizedServiceType === 'ctnh') {
            validateBusinessRules(formData);
        }

    
        const calculatedPrice = calculatePrice(
            formData, 
            serviceConfig[normalizedServiceType]
        );

        console.log('Calculated price:', calculatedPrice);

 
        const totalPrice = calculatedPrice.total || calculatedPrice;

      
        const formContainer = document.querySelector('.quotation-form');
        const resultContainer = document.getElementById('price-result');

      
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

    formTemplate.sections.forEach(section => {
        section.fields.forEach(field => {
            const element = form.querySelector(`[name="${field.name}"]`);
            if (!element) return;

            let value = element.value.trim();
            
            // Validate required fields
            if (field.required && !value) {
                if (field.name === 'authority_level') {
                    throw new Error('Vui lòng chọn cấp thẩm quyền');
                } else if (field.name === 'region') {
                    throw new Error('Vui lòng chọn tỉnh/thành phố');
                } else {
                    throw new Error(`Vui lòng nhập ${field.label.toLowerCase()}`);
                }
            }
            
         
            if (field.type === 'number') {
                value = parseFloat(value) || 0;
            }
            
            
            setNestedValue(formData, field.name, value);
        });
    });

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
        throw new Error(`Tổng khối lượng chi tiết (${detailSum}kg) không khớp với tổng khối lượng đã nhp (${formData.total_weight}kg)`);
    }
}

function handleError(error) {
    console.error('Lỗi:', error);
    
   
    showErrorModal(error.message || 'Có lỗi xảy ra khi tính giá. Vui lòng thử lại.');
}

function showErrorModal(message) {
    
    alert(message);
}



// Hàm format tiền tệ
function formatCurrency(amount) {
    if (!amount || isNaN(amount)) return '0';
    return new Intl.NumberFormat('vi-VN').format(amount);
}


// Hàm render kết quả báo giá
function renderPriceResult(formData, totalPrice, serviceConfig) {
    const service = serviceConfig;
    
    const resultHTML = `
        <div class="quotation-paper">
            <!-- Watermark -->
            <div class="watermark"></div>
            
            <!-- Header -->
            <header class="quote-header">
                <div class="header-content">
                    <div class="company-section">
                        <h1>CÔNG TY TNHH MTV SX TMDV MÔI TRƯỜNG Á CHÂU</h1>
                        <div class="divider"></div>
                        <p>404 Tân Sơn Nhì, P.Tân Quý, Q.Tân Phú, TP.HCM</p>
                    </div>
                </div>
            </header>

            <!-- Document Title -->
            <div class="document-title">
                <h2>BÁO GIÁ DỊCH VỤ</h2>
            </div>
                            <!-- Price Quote -->
                <section class="content-section price-quote">
                    <div class="price-container">
                        <div class="price-header">TỔNG CHI PHÍ DỊCH VỤ</div>
                        <div class="price-amount">${formatCurrency(totalPrice)} VNĐ</div>
                        <div class="price-note">Giá trọn gói đã bao gồm toàn bộ chi phí thực hiện</div>
                    </div>
                </section>
            <!-- Main Content -->
            <main class="quote-content">
                <!-- Service Information -->
                <section class="content-section service-details">
    <table class="elegant-table">
        <tbody>
            <tr class="main-row">
                <td class="label">Gói dịch vụ</td>
                <td class="value highlight">${service.name}</td>
            </tr>
            <tr class="main-row">
                <td class="label">Địa điểm thực hiện</td>
                <td class="value">${formData.province ? transformFunctions.location(formData.province) : ''}</td>
            </tr>
            <tr class="main-row">
                            ${formData.authority_level ? `
                    
                        <td class="label">Cơ quan cấp hồ sơ: </td>
                        <td class="value">${transformFunctions.authority(formData.authority_level)}</td>
                    
                    ` : ''}
            </tr>
        </tbody>
    </table>
</section>



                <!-- Implementation Process -->
                <section class="content-section process-section">
    <h3>QUY TRÌNH THỰC HIỆN</h3>
    <div class="process-steps">
        <div class="step">
            <div class="step-info">
                <span class="step-number">01</span>
                <div class="step-line"></div>
            </div>
            <div class="step-details">
                <h4>Ký kết hợp đồng</h4>
                <p>Hoàn tất hợp đồng đầy đủ 2 chữ ký giữa khách hàng và chủ xử lý</p>
            </div>
        </div>
        <div class="step">
            <div class="step-info">
                <span class="step-number">02</span>
                <div class="step-line"></div>
            </div>
            <div class="step-details">
                <h4>Tiếp nhận và xử lý</h4>
                <p>Hoàn thành trả chứng từ CTNH liên số 03</p>
            </div>
        </div>
        <div class="step">
            <div class="step-info">
                <span class="step-number">03</span>
            </div>
            <div class="step-details">
                <h4>Hoàn tất dịch vụ</h4>
                <p>Hoàn trả chứng từ CTNH liên số 4 sau khi xử lý</p>
            </div>
        </div>
    </div>
</section>

<!-- Terms and Conditions -->
<section class="content-section terms-section">
    <h3>ĐIỀU KHOẢN VÀ QUY ĐỊNH</h3>
    <div class="terms-grid">
        <div class="term-item">
            <div class="term-icon">
                <i class="bi bi-calendar-check"></i>
            </div>
            <p>Hiệu lực báo giá: 30 ngày</p>
        </div>
        <div class="term-item">
            <div class="term-icon">
                <i class="bi bi-cash"></i>
            </div>
            <p>Chưa bao gồm VAT 10%</p>
        </div>
        <div class="term-item">
            <div class="term-icon">
                <i class="bi bi-credit-card"></i>
            </div>
            <p>Thanh toán: 50% ký kết - 50% hoàn thành</p>
        </div>
    </div>
</section>

                <!-- Signature -->
                <section class="signature-section">
                    <div class="signature-block">
                        <p class="sign-title">Xác nhận của khách hàng</p>
                        <div class="sign-area"></div>
                    </div>
                    <div class="signature-block">
                        <p class="sign-title">Đại diện công ty</p>
                        <div class="sign-area"></div>

                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="quote-footer">
                <div class="footer-contact">
                    <p>Tel: (033) 8351122 | Email: contact@moitruongachau.com</p>
                    <a href="https://www.moitruongachau.com">www.moitruongachau.com</a>
                </div>
            </footer>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn-minimal" onclick="downloadQuotation()">
                    <i class="bi bi-download"></i>
                    <span>Tải xuống</span>
                </button>
                <button class="btn-primary" onclick="submitRequest()">
                    <i class="bi bi-send"></i>
                    <span>Gửi yêu cầu</span>
                </button>
            </div>
        </div>
    `;

    const resultContainer = document.getElementById('price-result');
    resultContainer.innerHTML = resultHTML;
    resultContainer.style.display = 'block';
}
/* Helper function */
function formatNumber(num) {
    return new Intl.NumberFormat('vi-VN').format(num);
}
// Thêm event listener để handle resize window
window.addEventListener('resize', () => {
    const resultContainer = document.getElementById('price-result');
    if (resultContainer && resultContainer.style.display === 'block') {
        if (window.innerWidth <= 1024) {
            resultContainer.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
});

// function renderSections(sections, formData) {
//     return sections.map(section => {
//         if (section.content) {
//             return `
//                 <div class="info-section">
//                     <h4>${section.title}</h4>
//                     ${section.content}
//                 </div>
//             `;
//         }

//         const fieldsHTML = section.fields.map(field => {
//             let value = getNestedValue(formData, field.name);
//             console.log(`Field ${field.name} before transform:`, value); // Debug log
            
//             // Xử lý transform
//             if (field.transform && transformFunctions[field.transform]) {
//                 // Với province, chúng ta cần hiển thị tên đầy đủ từ wasteLocationData hoặc envDocLocationData
//                 if (field.transform === 'province') {
//                     const transformedValue = transformFunctions[field.transform](value);
//                     value = wasteLocationData[transformedValue] || 
//                            envDocLocationData[transformedValue] || 
//                            transformedValue;
//                 } else {
//                     value = transformFunctions[field.transform](value);
//                 }
//                 console.log(`Field ${field.name} after transform:`, value); // Debug log
//             }
            
//             return `
//                 <div class="info-row">
//                     <span class="info-label">${field.label}:</span>
//                     <span class="info-value">${value || ''}</span>
//                 </div>
//             `;
//         }).join('');

//         return `
//             <div class="info-section">
//                 <h4>${section.title}</h4>
//                 ${fieldsHTML}
//             </div>
//         `;
//     }).join('');
// }

// function renderWeightSection(weightSection, formData) {
//     const fieldsHTML = weightSection.fields.map(field => {
//         let value = getNestedValue(formData, field.name);
        
//         // Thêm xử lý transform
//         if (field.transform === 'location') {
//             value = locationData[value] || value;
//         } else if (field.transform === 'authority') {
//             value = authorityData[value] || value;
//         }
        
//         return `
//             <div class="info-row">
//                 <span class="info-label">${field.label}:</span>
//                 <span class="info-value">
//                     ${value !== undefined ? value : '0'} ${field.unit || ''}
//                 </span>
//             </div>
//         `;
//     }).join('');

//     return `
//         <div class="info-section">
//             <h4>${weightSection.title}</h4>
//             ${fieldsHTML}
//         </div>
//     `;
// }

// function renderDocSection(DocSection, formData) {
//     const fieldsHTML = DocSection.fields.map(field => {
//         let value = getNestedValue(formData, field.name);
        
//         // Thêm xử lý transform
//         if (field.transform === 'province') {
//             value = locationData[value] || value;
//         } else if (field.transform === 'authority') {
//             value = authorityData[value] || value;
//         }
        
//         return `
//             <div class="info-row">
//                 <span class="info-label">${field.label}:</span>
//                 <span class="info-value">
//                     ${value !== undefined ? value : '0'} ${field.unit || ''}
//                 </span>
//             </div>
//         `;
//     }).join('');

//     return `
//         <div class="info-section">
//             <h4>${DocSection.title}</h4>
//             ${fieldsHTML}
//         </div>
//     `;
// }

// // Hàm hỗ trợ lấy giá trị từ object theo path
// function getNestedValue(obj, path) {
//     return path.split('.').reduce((current, key) => 
//         current ? current[key] : undefined, obj);
// }


function getFieldOptions(field, serviceType) {
    if (field.optionsFrom) {
        const { service, path } = field.optionsFrom;
        
        console.log('Service:', service);
        console.log('Path:', path);
        console.log('ServiceConfig:', serviceConfig);
        console.log('Service Data:', serviceConfig[service]);
        
        // Lấy data từ path
        const data = serviceConfig[service]?.priceRules?.regions;
        console.log('Regions Data:', data);

        if (data) {
            const options = Object.entries(data).map(([value, data]) => ({
                value,
                label: data.name
            }));
            console.log('Generated Options:', options);
            return options;
        }
    }

    // Trả về options trực tiếp nếu có
    return field.options || [];
}


// Thêm event listener để cập nhật options khi thay đổi cấp thẩm quyền
document.addEventListener('DOMContentLoaded', function() {
    document.body.addEventListener('change', function(e) {
        if (e.target.name === 'authority_level') {
            const regionField = document.querySelector('[name="region"]');
            if (!regionField) return;

            const field = formTemplates.gpmt.sections
                .flatMap(s => s.fields)
                .find(f => f.name === 'region');

            if (field && field.optionsFrom) {
                const options = field.optionsFrom.getOptions(e.target.value);
                updateSelectOptions(regionField, options);
            }
        }
    });
});

function updateSelectOptions(select, options) {
    select.innerHTML = '<option value="">-- Chọn khu vực thực hiện --</option>';
    options.forEach(opt => {
        const option = document.createElement('option');
        option.value = opt.value;
        option.textContent = opt.label;
        select.appendChild(option);
    });
}

export { handlePriceCalculation, getFieldOptions }; 