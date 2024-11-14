const priceResultTemplate = {
    render: function(data, calculatedPrice) {
        return `
            <div class="price-result">
                <h2 class="text-center">Kết quả tra cứu</h2>
                <h3 class="text-center">Tổng chi phí: ${formatCurrency(calculatedPrice)} VNĐ</h3>
                <p class="text-center font-italic">Chi phí thực hiện dịch vụ trọn gói</p>

                <div class="action-buttons d-flex justify-content-center gap-3 mb-4">
                    <div class="action-item text-center">
                        <div class="icon-wrapper">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>Biểu mẫu hợp đồng</div>
                    </div>
                    <div class="action-item text-center">
                        <div class="icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>Quy trình xử lý báo giá</div>
                    </div>
                    <div class="action-item text-center">
                        <div class="icon-wrapper">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div>Chú thích thuật ngữ</div>
                    </div>
                </div>

                <div class="price-details">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Thông tin</th>
                                <th>Giá trị</th>
                            </tr>
                            <tr>
                                <td>Gói dịch vụ</td>
                                <td>Xử lý chất thải nguy hại</td>
                            </tr>
                            <tr>
                                <td>Địa điểm</td>
                                <td>${data.province}</td>
                            </tr>
                            <tr>
                                <td>Tổng khối lượng</td>
                                <td>${data.total_weight}kg</td>
                            </tr>
                            <tr>
                                <td>Tổng chi phí</td>
                                <td>${formatCurrency(calculatedPrice)} VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="result-notes mt-4">
                    <h4>Kết quả thực hiện:</h4>
                    <p><strong>Sau khi đồng ý sử dụng dịch vụ:</strong> Hoàn tất hợp đồng đầy đủ 2 chữ ký giữa khách hàng và chủ xử lý.</p>
                    <p><strong>Ngay sau khi tiếp nhận CTNH:</strong> Môi Trường Á Châu hoàn thành trả chứng từ CTNH liên số 03.</p>
                    <p><strong>Sau khi hoàn tất việc xử lý CTNH:</strong> Môi Trường Á Châu hoàn trả chứng từ CTNH liên số 4 sau khi đã được xử lý</p>

                    <h4>Ghi chú:</h4>
                    <ul>
                        <li>Nếu khách hàng có phát sinh thêm chuyến vận chuyển thì chi phí cho mỗi chuyến là: ${formatCurrency(data.transportFee)}đ</li>
                        <li>Đơn giá chưa có phí bảo vệ môi trường đối với chất thải rắn nguy hại</li>
                        <li>Giá trị dịch vụ chưa bao gồm VAT. (VAT được áp dụng tại thời điểm xuất hóa đơn theo quy định hiện hành)</li>
                    </ul>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button class="btn btn-primary" onclick="window.print()">In báo giá</button>
                    <button class="btn btn-secondary" onclick="showForm()">Tạo báo giá mới</button>
                </div>
            </div>
        `;
    }
};

function formatCurrency(number) {
    return new Intl.NumberFormat('vi-VN').format(number);
}

function showForm() {
    // Logic để quay lại form
    document.getElementById('price-form').style.display = 'block';
    document.getElementById('price-result').style.display = 'none';
}

export { priceResultTemplate }; 