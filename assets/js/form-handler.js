import { calculatePrice, priceData } from './price-data.js';

function handlePriceCalculation(event) {
    event.preventDefault();
    
    if (!validateForm()) {
        return;
    }

    try {
        const formData = {
            province: document.querySelector('[name="province"]').value,
            total_weight: parseFloat(document.querySelector('[name="total_weight"]').value),
            transport_trips: parseInt(document.querySelector('[name="transport_trips"]').value),
            normal_waste: parseFloat(document.querySelector('[name="normal_waste"]').value),
            light_bulb_weight: parseFloat(document.querySelector('[name="light_bulb_weight"]').value),
            ma13_weight: parseFloat(document.querySelector('[name="ma13_weight"]').value),
            ma14_weight: parseFloat(document.querySelector('[name="ma14_weight"]').value),
            contact_name: document.querySelector('[name="contact_name"]').value,
            phone: document.querySelector('[name="phone"]').value,
            email: document.querySelector('[name="email"]').value
        };

        // Tính giá
        const totalPrice = calculatePrice(formData);
        const provinceData = priceData.provinces[formData.province];
        
        // Lấy container hiện tại của form
        const formContainer = event.target.closest('.quotation-form');
        
        // Thay thế nội dung form bằng kết quả
        formContainer.innerHTML = `

            <div class="price-result">
                <!-- Row 1: Kết quả tra cứu -->
                    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="result-card main-result">
                <h2>Kết quả tra cứu</h2>
                <div class="total-price">${formatCurrency(totalPrice)} VNĐ</div>
                <div class="subtitle">Chi phí thực hiện dịch vụ trọn gói</div>
            </div>
        </div>
        
    </div>
        <div class="row d-flex mt-5">
        <div class="col-md-4">
            <div class="action-item">
                <i class="bi bi-file-earmark-text"></i>
                <span>Biểu mẫu hợp đồng</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="action-item">
                <i class="bi bi-graph-up"></i>
                <span>Quy trình xử lý báo giá</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="action-item">
                <i class="bi bi-info-circle"></i>
                <span>Chú thích thuật ngữ</span>
            </div>
        </div>
        </div>
                <!-- Row 2: Thông tin và Giá trị -->
                                <div class="row d-flex mt-5">
                    <div class="col-md-6">
                        <div class="info-column">
                            <h5>Thông tin</h5>
                            <div class="info-row">
                                <span class="info-label">Dịch vụ</span>
                                <span class="info-value">Xử lý chất thải nguy hại</span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Địa chỉ</span>
                                <span class="info-value">${
                                    formData.province === 'hcm' ? 'TP Hồ Chí Minh' : formData.province === 'hcm_kcx' ? 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' : formData.province === 'longan' ? 'Long An' : 'Khác'
                                }</span>
                            </div>
                             <div class="info-row">
                                <span class="info-label">Người liên hệ</span>
                                <span class="info-value">${
                                  formData.contact_name
                                }</span>
                            </div>
                             <div class="info-row">
                                <span class="info-label">Số điện thoại</span>
                                <span class="info-value">${
                                  formData.phone
                                }</span>
                            </div>
                             <div class="info-row">
                                <span class="info-label">Email</span>
                                <span class="info-value">${
                                  formData.email
                                }</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="value-section">
                            <h5>Giá trị</h5>
                            <div class="info-row">
                                <span class="info-label">Số chuyến:</span>
                                <span class="info-value">${
                                  formData.transport_trips
                                } chuyến</span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Tổng khối lượng</span>
                                <span class="info-value">${
                                  formData.total_weight
                                }kg</span>
                            </div>

                            <div class="info-row">
                                <span class="info-label">Khối lượng chất thải thông thường</span>
                                <span class="info-value">${formData.normal_waste} kg</span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Khối lượng bóng đèn</span>
                                <span class="info-value">${formData.light_bulb_weight} kg</span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Khối lượng mã 13</span>
                                <span class="info-value">${formData.ma13_weight} kg</span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Khối lượng mã 14</span>
                                <span class="info-value">${formData.ma14_weight} kg</span>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- Row 3: Kết quả thực hiện -->
                    <div class="row d-flex mt-5">
        <div class="result-card result-notes">
            <h4>Kết quả thực hiện:</h4>
            <p><strong>Sau khi đồng ý sử dụng dịch vụ:</strong> Hoàn tất hợp đồng đầy đủ 2 chữ ký giữa khách hàng và chủ xử lý.</p>
            <p><strong>Ngay sau khi tiếp nhận CTNH:</strong> Môi Trường Á Châu hoàn thành trả chứng từ CTNH liên số 03.</p>
            <p><strong>Sau khi hoàn tất việc xử lý CTNH:</strong> Môi Trường Á Châu hoàn trả chứng từ CTNH liên số 4 sau khi đã được xử lý</p>

            <h4>Ghi chú:</h4>
            <ul>
                <li>Nếu khách hàng có phát sinh thêm chuyến vận chuyển thì chi phí cho mỗi chuyến là: ${formatCurrency(provinceData.transportFee)}đ</li>
                <li>Đơn giá chưa có phí bảo vệ môi trường đối với chất thải rắn nguy hại</li>
                <li>Giá trị dịch vụ chưa bao gồm VAT. (VAT được áp dụng tại thời điểm xuất hóa đơn theo quy định hiện hành)</li>
            </ul>
        </div>
    </div>
                        <!-- Footer buttons -->
                <div class="action-footer">
                    
                    <button class="btn btn-secondary" onclick="location.reload()">Trở về</button>
                    <button class="btn btn-primary" onclick="window.print()">In báo giá</button>
                </div>
            </div>

        `;

    } catch (error) {
        alert(error.message);
    }
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

    // Validate khối lượng
    const totalWeight = parseFloat(document.querySelector('[name="total_weight"]').value);
    if (totalWeight > 600) {
        alert('Tổng khối lượng không được vượt quá 600kg');
        document.querySelector('[name="total_weight"]').focus();
        return false;
    }

    // Validate tổng khối lượng chi tiết
    const normalWaste = parseFloat(document.querySelector('[name="normal_waste"]').value);
    const lightBulbWeight = parseFloat(document.querySelector('[name="light_bulb_weight"]').value);
    const ma13Weight = parseFloat(document.querySelector('[name="ma13_weight"]').value);
    const ma14Weight = parseFloat(document.querySelector('[name="ma14_weight"]').value);

    const sumWeight = normalWaste + lightBulbWeight + ma13Weight + ma14Weight;
    if (Math.abs(sumWeight - totalWeight) > 0.01) { // Sử dụng sai số nhỏ cho số thực
        alert('Tổng khối lượng chi tiết phải bằng tổng khối lượng chất thải');
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
function formatCurrency(number) {
    return new Intl.NumberFormat('vi-VN').format(number);
}

export { handlePriceCalculation }; 