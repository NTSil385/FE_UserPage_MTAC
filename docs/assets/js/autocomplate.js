const services = [
    {
        name: "Chất thải nguy hại",
        keywords: ["bóng đèn", "kim tiêm", "hóa chất (có chứa thành phần nguy hại)"],
        prices: { "bóng đèn": 100, "kim tiêm": 120, "hóa chất (có chứa thành phần nguy hại)": 220, },
        locationPrices: {
            "hồ chí minh": {
                frequency: { "1 lần/ tháng": 1200, "2 tháng 1 lần": 1400 },
            },
            "hà nội": {
                frequency: { "1 lần/ tháng": 1300, "2 tháng 1 lần": 1500 },
            },
        },
    },
    {
        name: "Chất thải cồng kềnh",
        keywords: ["bàn", "ghế", "tủ"],
        prices: { "bàn": 80, "ghế": 220, "tủ": 150 },
        locationPrices: {
            "hồ chí minh": {
                frequency: { "1 lần/ tháng": 1400, "2 tháng 1 lần": 1800 },
            },
            "hà nội": {
                frequency: { "1 lần/ tháng": 1500, "2 tháng 1 lần": 1900 },
            },
        },
    },
    {
        name: "Chất thải Công nghiệp",
        keywords: ["ba lô", "giày da", "túi xách"],
        prices: { "ba lô": 80, "giày da": 220, "túi xách": 150 },
        locationPrices: {
            "hồ chí minh": {
                frequency: { "1 lần/ tháng": 1400, "2 lần/ tháng": 1800 },
            },
            "hà nội": {
                frequency: { "1 lần/ tháng": 1500, "2 tháng 1 lần": 1900 },
            },
        },
    },
    {
        name: "Chất thải may mặc",
        keywords: ["vải vụn"],
        prices: { "vải vụn": 80,},
        locationPrices: {
            "hồ chí minh": {
                frequency: { "1 lần/ tháng": 1400, "2 lần/ tháng": 1800 },
            },
            "hà nội": {
                frequency: { "1 lần/ tháng": 1500, "2 tháng 1 lần": 1900 },
            },
        },
    },
    
];

let selectedKeywords = [];
let selectedService = null;

let input = document.getElementById("input3");
let keywordList = document.getElementById("keywordList");

// Hàm kiểm tra theo dõi nhập
input.addEventListener("keyup", (e) => {
    removeElements();
    if (input.value.trim() === "") {
        keywordList.style.display = 'none';
        return;
    }

    keywordList.style.display = 'block'; 

    // Lặp qua từng dịch vụ trong services
    services.forEach(service => {
        service.keywords.forEach(keyword => {
            // Kiểm tra nếu keyword bắt đầu bằng giá trị nhập
            if (keyword.toLowerCase().startsWith(input.value.toLowerCase())) {
                let listItem = document.createElement("li");
                listItem.classList.add("list-items");
                listItem.style.cursor = "pointer";
                listItem.setAttribute("onclick", "displayNames('" + keyword + "')");
                listItem.innerHTML = `<b>${keyword.substr(0, input.value.length)}</b>${keyword.substr(input.value.length)}`;
                keywordList.appendChild(listItem);
            }
        });
    });
});

// Function to display selected names as keywords
function displayNames(value) {
    input.value = value;
    removeElements();
    const keyword = value.toLowerCase();
    let serviceFound = null;

    services.forEach(service => {
        if (service.keywords.includes(keyword)) {
            serviceFound = service;
        }
    });

    // Nếu từ khóa thuộc về dịch vụ
    if (serviceFound) {
        if (selectedService && selectedService.name !== serviceFound.name) {
            alert('Từ khóa không thuộc cùng một dịch vụ.');
            input.value = ''; // Reset input
            return;
        }

        if (!selectedKeywords.includes(keyword)) {
            selectedKeywords.push(keyword);
            selectedService = serviceFound;
            document.getElementById('input4').value = serviceFound.name;

            // Gọi hàm cập nhật tần suất
            updateFrequencyOptions();

            displaySelectedKeywords();
            input.value = ''; // Reset input
        }
    }
}

function displaySelectedKeywords() {
    const selectedKeywordsList = document.getElementById('selectedKeywords');
    selectedKeywordsList.innerHTML = '';

    selectedKeywords.forEach((keyword, index) => {
        const li = document.createElement('li');
        li.textContent = keyword;

        const span = document.createElement('span');
        span.textContent = 'x';
        span.onclick = function () {
            removeKeyword(index);
        };

        li.appendChild(span);
        selectedKeywordsList.appendChild(li);
    });
}

function removeKeyword(index) {
    selectedKeywords.splice(index, 1);
    displaySelectedKeywords();

    // Nếu danh sách từ khóa rỗng, reset lại dịch vụ
    if (selectedKeywords.length === 0) {
        selectedService = null;
        document.getElementById("input4").value = '';
    }
}

function removeElements() {
    // clear all the item
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
    keywordList.style.display = 'none'; // Ẩn danh sách sau khi xóa
}

function checkConditionalInputs() {
    const input2Value = parseFloat(document.getElementById("input2").value);
    const input4Value = document.getElementById("input4").value;
    const conditionalInputsDiv = document.getElementById("conditionalInputs");
    conditionalInputsDiv.style.display = (input4Value === 'Chất thải nguy hại' && input2Value > 600) ? "flex" : "none";

    // Gọi hàm cập nhật tần suất khi vị trí thay đổi
    updateFrequencyOptions();
}

// Hàm cập nhật các tùy chọn tần suất dựa trên vị trí
function updateFrequencyOptions() {
    const location = document.getElementById("input1").value.toLowerCase();
    const frequencySelect = document.getElementById("inputFrequency");
    frequencySelect.innerHTML = '';

    if (selectedService && selectedService.locationPrices[location]) {
        const frequencies = selectedService.locationPrices[location].frequency;
        for (const frequency in frequencies) {
            const option = document.createElement("option");
            option.value = frequency;
            option.text = frequency;
            frequencySelect.appendChild(option);
        }
    }
}

// Hàm tính toán giá
function calculatePrice_XLCT() {
    const location = document.getElementById("input1").value.toLowerCase();
    const weight = parseFloat(document.getElementById("input2").value);
    const frequency = document.getElementById("inputFrequency").value;
    const masslight = parseFloat(document.getElementById("mass-light").value) || 0;
    const mass13 = parseFloat(document.getElementById("inputMass13").value) || 0;
    const mass14 = parseFloat(document.getElementById("inputMass14").value) || 0;
    
    if (!selectedService || !services.some(s => s.name === selectedService.name)) {
        alert("Vui lòng chọn một từ khóa hợp lệ.");
        return;
    }

    const service = selectedService;

    if (!service.locationPrices[location] || !service.locationPrices[location].frequency[frequency]) {
        alert("Vị trí chưa được hỗ trợ.");
        return;
    }

    const locationPrice = service.locationPrices[location].frequency[frequency];
    const keyword = input.value.toLowerCase();
    const keywordPrice = service.prices[keyword] || 0;
    const totalPrice = (keywordPrice * weight) + locationPrice + (mass13 * 13) + (mass14*14) + (masslight * 110);

    document.querySelector(".priceDisplay").textContent = `Giá dịch vụ: ${totalPrice.toLocaleString()} VND/Năm`;
    // Hiển thị thông tin chi tiết dịch vụ
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
                <td>${service.name}</td>
            </tr>
            <tr>
                <td>Địa điểm</td>
                <td>${location.charAt(0).toUpperCase() + location.slice(1)}</td>
            </tr>
            <tr>
                <td>Khối lượng chất thải thông thường</td>
                <td>${weight ? weight : 'Trống'}</td>
            </tr>
            <tr>
                <td>Khối lượng chất thải bóng đèn</td>
                <td>${masslight ? masslight : 'Trống'}</td>
            </tr>
            <tr>
                <td>Khối lượng mã 13</td>
                <td>${mass13 ? mass13 : 'Trống'}</td>
            </tr>
            <tr>
                <td>Khối lượng mã 14</td>
                <td>${mass14 ? mass14 : 'Trống'}</td>
            </tr>
        </tbody>
    </table>
`;


}
function showResultColumn() {
    document.getElementById('resultColumn').style.display = 'block';
}


document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".tab-button.active").click();

    
    document.getElementById("input1").addEventListener("input", updateFrequencyOptions);
});

function clearResults() {
   
    document.querySelector(".priceDisplay").textContent = "";
    document.querySelector('.detail-service').innerHTML = "";
    
    
    document.getElementById("resultColumn").style.display = "none";

    
    document.getElementById("inputServiceForm").value = "";
    document.getElementById("location").innerHTML = "";
    document.getElementById("inputAgency").innerHTML = "";
}


// Hàm mở tab
function openTab(event, tabName) {
    clearResults(); 

   
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.style.display = 'none';
    });

   
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
        button.classList.remove('active');
    });

    document.getElementById(tabName).style.display = 'block';
    event.currentTarget.classList.add('active');
}


// Hàm reset Form
function clearInputs() {
    
    const form = document.getElementById('form-XLCT');
    form.reset();

   
    const inputIds = ["input1", "input2", "input3", "input4", "mass-light", "inputMass13", "inputMass14"];
    inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) element.value = "";
    });


    const selectElements = form.querySelectorAll('select');
    selectElements.forEach(select => {
        select.selectedIndex = 0;
    });


    document.getElementById('selectedKeywords').innerHTML = '';
    selectedKeywords = [];
    selectedService = null;

    
    document.getElementById('conditionalInputs').style.display = 'none';
    document.getElementById('resultColumn').style.display = 'none';

   
    document.querySelector(".priceDisplay").textContent = "";
    document.querySelector('.detail-service').innerHTML = "";


    updateFrequencyOptions();
}


document.addEventListener('DOMContentLoaded', function() {
    const resetButton = document.querySelector('button');
    if (resetButton && resetButton.textContent.trim() === 'Làm mới') {
        resetButton.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của nút submit
            clearInputs();
        });
    } else {
        console.error('Không tìm thấy nút "Làm mới"');
    }
});
