// Định nghĩa cấu trúc hiển thị cho từng loại dịch vụ
export const serviceTemplates = {
    // Template cho form
    forms: {
        weightAndTrips: {
            title: 'Thông tin khối lượng và vận chuyển',
            fields: [
                {
                    name: 'total_weight',
                    label: 'Tổng khối lượng (kg)',
                    type: 'number',
                    required: true
                },
                {
                    name: 'transport_trips',
                    label: 'Số chuyến vận chuyển',
                    type: 'number',
                    required: true
                }
            ]
        },
        wasteDetails: {
            title: 'Chi tiết chất thải',
            fields: [
                {
                    name: 'normal_waste',
                    label: 'Chất thải thông thường (kg)',
                    type: 'number'
                },
                {
                    name: 'light_bulb_weight',
                    label: 'Bóng đèn (kg)',
                    type: 'number'
                }
                // Có thể thêm các loại waste khác
            ]
        }
    },

    // Template cho kết quả
    results: {
        weightAndTrips: {
            title: 'Thông tin khối lượng',
            fields: [
                {
                    name: 'total_weight',
                    label: 'Tổng khối lượng',
                    unit: 'kg'
                },
                {
                    name: 'transport_trips',
                    label: 'Số chuyến vận chuyển',
                    unit: 'chuyến'
                }
            ]
        },
        wasteDetails: {
            title: 'Chi tiết chất thải',
            fields: [
                {
                    name: 'normal_waste',
                    label: 'Chất thải thông thường',
                    unit: 'kg'
                },
                {
                    name: 'light_bulb_weight',
                    label: 'Bóng đèn',
                    unit: 'kg'
                }
            ]
        }
    }
};

// Cấu hình cho từng dịch vụ
export const serviceConfig = {
    'ctnh': {
        name: 'Xử lý chất thải nguy hại',
        templates: ['weightAndTrips', 'wasteDetails'],
        priceCalculation: {
            weightThreshold: 600,
            regions: {
                'hcm': {
                    name: 'TP Hồ Chí Minh',
                    priceRules: {
                        below: {/* giá */},
                        above: {/* giá */}
                    }
                }
                // Thêm regions khác
            }
        }
    },
    'ctcn': {
        name: 'Xử lý chất thải công nghiệp',
        templates: ['weightAndTrips'],
        priceCalculation: {
            weightThreshold: 2000,
            regions: {/* config giá */}
        }
    }
    // Thêm dịch vụ mới dễ dàng
}; 