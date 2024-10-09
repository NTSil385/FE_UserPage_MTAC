const serviceData = {
    "Giấy phép môi trường": {
        "Hồ Chí Minh": {
            "location": 500,
            "agency": {
                "Sở Tài Nguyên Môi Trường": 1200,
                "Phòng Tài Nguyên": 1500
            }
        },
        "Đà nẵng": {
            "location": 1000,
            "agency": {
                "Sở Tài Nguyên Môi Trường": 2000,
                "Phòng Tài Nguyên": 2500
            }
        }
    },
    "Đánh giá tác động môi trường": {
        "Hồ Chí Minh": {
            "location": 700,
            "agency": {
                "Sở Tài Nguyên Môi Trường": 1300,
                "Phòng Tài Nguyên": 1800
            }
        },
        "Hà Nội": {
            "location": 900,
            "agency": {
                "Sở Tài Nguyên Môi Trường": 2100,
                "Phòng Tài Nguyên": 2600
            }
        }
    },
    "Báo cáo tác động môi trường 2022": {
        "Hồ Chí Minh": {
            "location": 800,
            "construction": {
                "Thực hiện viết hồ sơ, viết nộp cơ quan chức năng không đo mẫu": 2500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 1 lần/năm": 3000,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 2 lần/năm": 3500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 3 lần/năm": 3500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 4 lần/năm": 3500,
            }
        },
        "Hà Nội": {
            "location": 1000,
            "construction": {
                "Thực hiện viết hồ sơ, viết nộp cơ quan chức năng không đo mẫu": 2500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 1 lần/năm": 3000,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 2 lần/năm": 3500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 3 lần/năm": 3500,
                "Trọn gói (viết, nộp, đo) 3 mẫu cơ bản, đo 4 lần/năm": 3500,
            }
        }
    }
};

function calculatePrice() {
    // Lấy giá trị từ các input
    const serviceType = document.getElementById("inputServiceForm").value;
    const location = document.getElementById("location").value;
    const agencyOrCategory = document.getElementById("inputAgency").value;

    // Kiểm tra nếu dịch vụ và location tồn tại trong serviceData
    if (serviceData[serviceType] && serviceData[serviceType][location]) {
        let locationPrice = serviceData[serviceType][location].location;
        let agencyPrice = 0;

        // Kiểm tra nếu là "Báo cáo tác động môi trường 2022" thì sẽ lấy từ "hạng mục"
        if (serviceType === "Báo cáo tác động môi trường 2022") {
            agencyPrice = serviceData[serviceType][location].construction[agencyOrCategory];
        } else {
            agencyPrice = serviceData[serviceType][location].agency[agencyOrCategory];
        }

        // Tính tổng giá trị
        const totalPrice = locationPrice + agencyPrice;

        // Hiển thị kết quả
        document.querySelector(".priceDisplay").textContent = `Tổng chi phí: ${totalPrice} VND`;
        showResultColumn();

        // Hiển thị thông tin chi tiết dịch vụ
        displayServiceDetails(serviceType, location, agencyOrCategory, totalPrice);
    } else {
        document.querySelector(".priceDisplay").textContent = "Dữ liệu không hợp lệ!";
    }
}

function displayServiceDetails(serviceType, location, agencyOrCategory, totalPrice) {
    const detailServiceDisplay = document.querySelector('.detail-service');
    detailServiceDisplay.innerHTML = `
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Thông tin</th>
                <th scope="col">Giá trị</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gói dịch vụ</td>
                <td>${serviceType}</td>
            </tr>
            <tr>
                <td>Địa điểm</td>
                <td>${location.charAt(0).toUpperCase() + location.slice(1)}</td>
            </tr>
            <tr>
                <td>Cơ quan cấp hồ sơ / Hạng mục thực hiện</td>
                <td>${agencyOrCategory}</td>
            </tr>
            <tr>
                <td>Tổng chi phí</td>
                <td>${totalPrice} VND</td>
            </tr>
        </tbody>
    </table>
    `;
}

function showResultColumn() {
    // Hiển thị kết quả
    document.getElementById("resultColumn").style.display = "block";
}


// Cập nhật location và hạng mục/cơ quan theo lựa chọn của người dùng
document.getElementById("inputServiceForm").addEventListener("change", function () {
    const serviceType = this.value;
    const locationSelect = document.getElementById("location");
    const agencySelect = document.getElementById("inputAgency");
    locationSelect.innerHTML = "";
    agencySelect.innerHTML = "";

    if (serviceData[serviceType]) {
        // Thêm các địa điểm vào select "location"
        Object.keys(serviceData[serviceType]).forEach(location => {
            const option = document.createElement("option");
            option.value = location;
            option.textContent = location;
            locationSelect.appendChild(option);
        });

        // Tự động cập nhật hạng mục/cơ quan khi chọn location
        locationSelect.addEventListener("change", function () {
            const location = this.value;
            agencySelect.innerHTML = "";

            if (serviceData[serviceType][location]) {
                let items;
                if (serviceType === "Báo cáo tác động môi trường 2022") {
                    items = serviceData[serviceType][location].construction; // Dùng 'construction' cho dịch vụ này
                } else {
                    items = serviceData[serviceType][location].agency; // Dùng 'agency' cho các dịch vụ khác
                }

                // Thêm các hạng mục/cơ quan vào select "inputAgency"
                Object.keys(items).forEach(item => {
                    const option = document.createElement("option");
                    option.value = item;
                    option.textContent = item;
                    agencySelect.appendChild(option);
                });
            }
        });

        // Gọi sự kiện 'change' tự động để cập nhật agency khi người dùng thay đổi dịch vụ
        locationSelect.dispatchEvent(new Event('change'));
    }
});

document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn không cho trang tải lại
    calculatePrice(); // Gọi hàm tính giá
});
