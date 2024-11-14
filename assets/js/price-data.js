const priceData = {
    provinces: {
        'hcm': {
            base100kg: 4498000,
            transportFee: 1283750,
            normalWasteFee: 12000,
            lightBulbFee: 36000,
            ma13Fee: 13000,
            ma14Fee: 22000
        },
        'hcm_kcx': {
            base100kg: 4998000,
            transportFee: 1673750,
            normalWasteFee: 12000,
            lightBulbFee: 36000,
            ma13Fee: 13000,
            ma14Fee: 22000
        },
        'longan': {
            base100kg: 5409040,
            transportFee: 1875000,
            normalWasteFee: 12000,
            lightBulbFee: 36000,
            ma13Fee: 13000,
            ma14Fee: 22000
        },
        // Thêm các tỉnh khác từ bảng giá...
    }
};

// Hàm tính giá
function calculatePrice(data) {
    const { province, total_weight, transport_trips, normal_waste, light_bulb_weight, ma13_weight, ma14_weight } = data;
    
    if (total_weight > 600) {
        throw new Error('Khối lượng vượt quá 600kg, vui lòng sử dụng bảng giá khác');
    }

    const prices = priceData.provinces[province];
    if (!prices) {
        throw new Error('Không tìm thấy thông tin giá cho tỉnh/thành phố này');
    }

    // Áp dụng công thức:
    // Thành tiền = giá trị cột 100KG + 
    // (số chuyến vận chuyển-1)*đơn giá vận chuyển + 
    // (khối lượng chất thải-100)*đơn giá phát sinh mã bình thường +
    // (khối lượng bóng đèn - 5)*đơn giá bóng đèn + 
    // (khối lượng mã 13 -5)*đơn giá phá sinh mã 13 + 
    // (khối lượng mã 14 -5)*đơn giá phá sinh mã 14

    let total = prices.base100kg;
    
    // Phí vận chuyển thêm
    total += (transport_trips - 1) * prices.transportFee;
    
    // Phí chất thải thông thường vượt định mức
    if (normal_waste > 100) {
        total += (normal_waste - 100) * prices.normalWasteFee;
    }
    
    // Phí bóng đèn vượt định mức
    if (light_bulb_weight > 5) {
        total += (light_bulb_weight - 5) * prices.lightBulbFee;
    }
    
    // Phí mã 13 vượt định mức
    if (ma13_weight > 5) {
        total += (ma13_weight - 5) * prices.ma13Fee;
    }
    
    // Phí mã 14 vượt định mức
    if (ma14_weight > 5) {
        total += (ma14_weight - 5) * prices.ma14Fee;
    }

    return total;
}

export { priceData, calculatePrice }; 