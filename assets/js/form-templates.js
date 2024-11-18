export const locationData = {
    'hcm': 'TP Hồ Chí Minh',
    'hcm_kcx': 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận',
    'longan': 'Long An',
    'binhduong': 'Bình Dương',
    'dongnai': 'Đồng Nai'
};

export const authorityData = {
    'so_tai_nguyen': 'Sở Tài nguyên và Môi trường',
    'phong_tai_nguyen': 'Phòng Tài nguyên và Môi trường'
};

export const formTemplates = {
    ctnh: {
        title: 'Xử lý chất thải nguy hại',
        weightFields: {
            type: 'multiple',
            totalField: 'total_weight',
            fields: ['waste_details.normal', 'waste_details.light_bulb', 'waste_details.ma13', 'waste_details.ma14']
        },
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'select', name: 'province', label: 'Tỉnh/Thành phố', required: true,
                      options: [
                          { value: 'hcm', label: 'TP Hồ Chí Minh' },
                          { value: 'hcm_kcx', label: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' }
                      ]
                    }
                ]
            },
            {
                title: 'Thông tin khối lượng chất thải',
                fields: [
                    { type: 'number', name: 'transport_trips', label: 'Số chuyến vận chuyển', required: true, min: 1 },
                    { type: 'number', name: 'total_weight', label: 'Tổng khối lượng chất thải xử lý', required: true, unit: 'kg', min: 0 },
                    { type: 'number', name: 'waste_details.normal', label: 'Khối lượng chất thải thông thường', required: true, unit: 'kg', min: 0 },
                    { type: 'number', name: 'waste_details.light_bulb', label: 'Khối lượng bóng đèn', required: true, unit: 'kg', min: 0 },
                    { type: 'number', name: 'waste_details.ma13', label: 'Khối lượng mã 13', required: true, unit: 'kg', min: 0 },
                    { type: 'number', name: 'waste_details.ma14', label: 'Khối lượng mã 14', required: true, unit: 'kg', min: 0 }
                ]
            }
        ]
    },
    ctcn: {
        title: 'Xử lý chất thải công nghiệp',
        weightFields: {
            type: 'single',
            field: 'textile_weight'
        },
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'select', name: 'province', label: 'Tỉnh/Thành phố', required: true,
                      options: [
                          { value: 'hcm', label: 'TP Hồ Chí Minh' },
                          { value: 'hcm_kcx', label: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' }
                      ]
                    }
                ]
            },
            {
                title: 'Thông tin khối lượng chất thải',
                fields: [
                    { type: 'number', name: 'transport_trips', label: 'Số chuyến vận chuyển', required: true, min: 1 },
                    { type: 'number', name: 'textile_weight', label: 'Khối lượng vải vụn', required: true, unit: 'kg', min: 0 }
                ]
            }
        ]
    },
    ctcngd: {
        title: 'Xử lý chất thải công nghiệp giày da',
        weightFields: {
            type: 'single',
            field: 'shoe_leather_weight'
        },
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'select', name: 'province', label: 'Tỉnh/Thành phố', required: true,
                      options: [
                          { value: 'hcm', label: 'TP Hồ Chí Minh' },
                          { value: 'hcm_kcx', label: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' }
                      ]
                    }
                ]
            },
            {
                title: 'Thông tin khối lượng chất thải',
                fields: [
                    { type: 'number', name: 'transport_trips', label: 'Số chuyến vận chuyển', required: true, min: 1 },
                    { type: 'number', name: 'shoe_leather_weight', label: 'Khối lượng chất thải', required: true, unit: 'kg', min: 0 }
                ]
            }
        ]
    },
    ctck: {
        title: 'Xử lý chất thải công kềnh',
        weightFields: {
            type: 'single',
            field: 'bulky_waste'
        },
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'select', name: 'province', label: 'Tỉnh/Thành phố', required: true,
                      options: [
                          { value: 'hcm', label: 'TP Hồ Chí Minh' },
                          { value: 'hcm_kcx', label: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' }
                      ]
                    }
                ]
            },
            {
                title: 'Thông tin khối lượng chất thải',
                fields: [
                    { type: 'number', name: 'transport_trips', label: 'Số chuyến vận chuyển', required: true, min: 1 },
                    { type: 'number', name: 'bulky_waste', label: 'Khối lượng chất thải cồng kềnh', required: true, unit: 'kg', min: 0 }
                ]
            }
        ]
    },
    'dtm': {
        title: 'Báo cáo công tác bảo vệ môi trường',
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'text', name: 'company_name', label: 'Tên doanh nghiệp', required: true },
                    { type: 'text', name: 'company_address', label: 'Địa chỉ doanh nghiệp', required: true }
                ]
            },
            {
                title: 'Thông tin báo cáo',
                fields: [
                    { 
                        type: 'select', 
                        name: 'province', 
                        label: 'Địa điểm thực hiện', 
                        required: true,
                        options: [
                            { value: 'hcm', label: 'TP Hồ Chí Minh' }
                        ]
                    },
                    {
                        type: 'select',
                        name: 'authority_level',
                        label: 'Cấp thẩm quyền',
                        required: true,
                        options: [
                            { value: 'so_tai_nguyen', label: 'Sở Tài nguyên và Môi trường' },
                            { value: 'phong_tai_nguyen', label: 'Phòng Tài nguyên và Môi trường' }
                        ]
                    }
                ]
            }
        ]
    }
};

// Định nghĩa cấu trúc hiển thị kết quả cho từng loại form
export const resultTemplates = {
    // Template mặc định cho tất cả form
    default: {
        sections: [
            {
                title: 'Thông tin khách hàng',
                fields: [
                    { name: 'contact_name', label: 'Người liên hệ' },
                    { name: 'phone', label: 'Số điện thoại' },
                    { name: 'email', label: 'Email' },
                    { name: 'province', label: 'Khu vực', transform: 'location' }
                ]
            },
        ]
    },
    
    // Template riêng cho từng loại form (chỉ cần định nghĩa phần khác biệt)
    ctnh: {
        weightSection: {
            title: 'Chi tiết khối lượng',
            fields: [
                { name: 'transport_trips', label: 'Số chuyến vận chuyển', unit: 'chuyến' },
                { name: 'waste_details.normal', label: 'Chất thải thông thường', unit: 'kg' },
                { name: 'waste_details.light_bulb', label: 'Bóng đèn', unit: 'kg' },
                { name: 'waste_details.ma13', label: 'Mã 13', unit: 'kg' },
                { name: 'waste_details.ma14', label: 'Mã 14', unit: 'kg' }
            ]
        }
    },
    
    ctcn: {
        weightSection: {
            title: 'Chi tiết khối lượng',
            fields: [
                { name: 'transport_trips', label: 'Số chuyến vận chuyển', unit: 'chuyến' },
                { name: 'textile_weight', label: 'Khối lượng vải vụn', unit: 'kg' }
            ]
        }
    },
    'ctcngd': {
        weightSection: {
            title: 'Chi tiết khối lượng',
            fields: [
                { name: 'transport_trips', label: 'Số chuyến vận chuyển', unit: 'chuyến' },
                { name: 'shoe_leather_weight', label: 'Khối lượng giày da', unit: 'kg' }
            ]
        }
    },
    
    ctck: {
        weightSection: {
            title: 'Chi tiết khối lượng',
            fields: [
                { name: 'transport_trips', label: 'Số chuyến vận chuyển', unit: 'chuyến' },
                { name: 'bulky_waste', label: 'Khối lượng chất thải cồng kềnh', unit: 'kg' }
            ]
        }
    },
    'dtm': {
        weightSection: {
            title: 'Chi tiết báo cáo',
            fields: [
                { name: 'authority_level', label: 'Cấp thẩm quyền', transform: 'authority' }
            ]
        }
    }
};  