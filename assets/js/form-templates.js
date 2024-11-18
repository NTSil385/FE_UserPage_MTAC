import { serviceConfig } from './price-data.js';

export const wasteLocationData = {
    'hcm': 'TPHCM (Các quận nội thành)',
    'hcm_kcx': 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận',
    'hcm_cg': 'TPHCM - Cần giờ',
    'longan_mkkt': 'Long An - Mộc Hóa, Kiến Tường',
    'longan_other': 'Long An - còn lại',
    'dongnai_bh': 'Đồng Nai - Biên Hòa',
    'dongnai_tbltn': 'Đồng Nai - Trảng Bom, Long Thành, Nhơn Trạch',
    'dongnai_other': 'Đồng Nai - Còn lại',
    'binhduong_main': 'Bình Dương - Thuận An, Dĩ An, Thủ Dầu Một',
    'binhduong_other': 'Bình Dương - còn lại'
};

export const envDocLocationData = {
    'so_tnmt': 'Sở TNMT',
    'hepza': 'Hepza', 
    'long_an': 'Long An',
    'tay_ninh': 'Tây Ninh',
    'tien_giang': 'Tiền Giang',
    'ben_tre': 'Bến Tre',
    'hue_da_nang_quang_nam': 'Huế/Đà Nẵng/Quảng Nam'
};

export const authorityData = {
    'so_tai_nguyen': 'Sở Tài nguyên và Môi trường',
    'phong_tai_nguyen': 'Phòng Tài nguyên và Môi trường'
};

// Hàm chuyển đổi locationData từ object sang array
function convertLocationDataToArray(locationData) {
    return Object.entries(locationData).map(([value, label]) => ({
        value,
        label
    }));
}


// Thêm các hàm transform mới
export const transformFunctions = {
    // ... các transform khác ...
    
    projectType: (value) => {
        const types = {
            'industrial': 'Khu công nghiệp',
            'manufacturing': 'Sản xuất',
            'service': 'Dịch vụ',
            'other': 'Khác'
        };
        return types[value] || value;
    },
    
    projectScale: (value) => {
        const scales = {
            'small': 'Nhỏ (< 5 ha)',
            'medium': 'Trung bình (5-20 ha)',
            'large': 'Lớn (> 20 ha)'
        };
        return scales[value] || value;
    }
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
                    {
                        name: 'province',
                        label: 'Tỉnh/Thành phố',
                        type: 'select',
                        required: true,
                        options: convertLocationDataToArray(wasteLocationData)
                    },
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
    },
    'gpmt': {
        title: 'Giấy phép môi trường',
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'text', name: 'company_name', label: 'Tên doanh nghiệp', required: true }
                ]
            },
            {
                title: 'Thông tin dự án',
                fields: [
                    {
                        name: 'authority_level',
                        label: 'Cấp thẩm quyền',
                        type: 'select',
                        required: true,
                        options: [
                            { value: 'province', label: 'Cấp tỉnh/thành phố' },
                            { value: 'district', label: 'Cấp huyện/quận' }
                        ]
                    },
                    { 
                        name: 'region',
                        label: 'Khu vực thực hiện',
                        type: 'select',
                        required: true,
                        dependsOn: 'authority_level',
                        optionsFrom: {
                            service: 'gpmt',
                            getOptions: (authorityLevel) => {
                                const config = serviceConfig.gpmt?.priceRules?.[authorityLevel];
                                if (!config?.regions) {
                                    console.warn(`Không tìm thấy cấu hình cho ${authorityLevel}`);
                                    return [];
                                }
                                
                                return Object.entries(config.regions).map(([value, data]) => ({
                                    value,
                                    label: data.name || value
                                }));
                            }
                        }
                    }
                ]
            }
        ]
    },
    dkmt: {
        title: 'Đăng ký môi trường',
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { 
                        name: 'province',
                        label: 'Tỉnh/Thành phố',
                        type: 'select',
                        required: true,
                        options: [
                            { value: 'hcm', label: 'TP Hồ Chí Minh' },
                            { value: 'hue', label: 'Huế' }
                        ]
                    }
                ]
            },
            {
                title: 'Thông tin dự án',
                fields: [
                    { 
                        name: 'project_type',
                        label: 'Loại hình dự án',
                        type: 'select',
                        required: true,
                        options: [
                            { value: 'manufacturing', label: 'Sản xuất' },
                            { value: 'service', label: 'Dịch vụ' }
                        ]
                    }
                ]
            }
        ],
        notes: [
            'Cơ quan tiếp nhận: cấp xã/phường hoặc cơ quan hành chính ngang cấp xã/phường',
            'Đăng ký môi trường không phải là thủ tục hành chính nên chỉ có văn bản tiếp nhận hồ sơ/Nội dung tiếp nhận (Có thể không có văn bản mà chỉ là ghi đã nhận) đã đăng ký',
            'Đăng ký môi trường không lấy mẫu – do đó đơn giá chưa bao gồm chi phí phân tích mẫu nếu có trong trường hợp CQNN kiểm tra lấy mẫu',
            'Quy trình rà soát thông tin: Khách hàng cung cấp thông tin: sản phẩm- công suất, ngành nghề hoạt động',
            'Giấy tờ đất: đúng với mục đích sử dụng đất triển khai dự án',
            'Hợp đồng thuê địa điểm'
        ]
    },
    ptxnct: {
        title: 'Hồ sơ phân tích xác nhận phân định chất thải công nghiệp',
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { type: 'text', name: 'contact_name', label: 'Người liên hệ', required: true },
                    { type: 'text', name: 'phone', label: 'Số điện thoại', required: true },
                    { type: 'text', name: 'email', label: 'Email', required: true },
                    { type: 'text', name: 'company_name', label: 'Tên doanh nghiệp', required: true }
                ]
            },
            {
                title: 'Thông tin dự án',
                fields: [
                    { 
                        name: 'province',
                        label: 'Địa bàn thực hiện',
                        type: 'select',
                        required: true,
                        optionsFrom: {
                            service: 'ptxnct',
                            path: 'priceRules.regions'
                        }
                    }
                ]
            }
        ]
    }
};

// Định nghĩa cấu trúc hiển thị kết quả cho từng loại form
export const resultTemplates = {
    default: {
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { name: 'contact_name', label: 'Người liên hệ' },
                    { name: 'phone', label: 'Số điện thoại' },
                    { name: 'email', label: 'Email' },
                    { name: 'province', label: 'Khu vực thực hiện', transform: 'location' }
                ]
            },
            {
                title: 'Ghi chú',
                content: `
                    <ul class="note-list">
                        <li>Nếu khách hàng có phát sinh thêm chuyến vận chuyển thì chi phí cho mỗi chuyến là: 1.283.750đ</li>
                        <li>Đơn giá chưa có phí bảo vệ môi trường đối với chất thải rắn nguy hại</li>
                        <li>Giá trị dịch vụ chưa bao gồm VAT. (VAT được áp dụng tại thời điểm xuất hóa đơn theo quy định hiện hành)</li>
                        <li>Các loại chất thải phải được lưu trữ riêng biệt có dán nhãn và mã CTNH trước khi bàn giao. Chủ nguồn thải phải chịu trách nhiệm trang bị thiết bị và kho lưu chưa phù hợp theo quy định hiện hành về quản lý chất thải.</li>
                        <li>Sản phẩm, dịch vụ, đơn giá và chính sách CCDV được công bó tại đây có thể điều chỉnh, ngừng cung cấp hoặc bổ sung mới để phù hợp với thực tế và quy định pháp luật hiện hành</li>
                    </ul>
                `
            }
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
    gpmt: {
        sections: [
            {
                title: 'Thông tin liên hệ',
                fields: [
                    { name: 'contact_name', label: 'Người liên hệ' },
                    { name: 'phone', label: 'Số điện thoại' },
                    { name: 'email', label: 'Email' }
                ]
            },
            {
                title: 'Thông tin dự án',
                fields: [
                    { name: 'region', label: 'Khu vực thực hiện', transform: 'location' },
                    { name: 'project_type', label: 'Loại hình dự án', transform: 'projectType' },
                    { name: 'project_scale', label: 'Quy mô dự án', transform: 'projectScale' }
                ]
            }
        ]
    },
    // ctnh: {
    //     weightSection: {
    //         title: 'Thông tin khối lượng chất thải',
    //         fields: [
    //             { name: 'transport_trips', label: 'Số chuyến vận chuyển' },
    //             { name: 'waste_details.normal', label: 'Chất thải thông thường', unit: 'kg' },
    //             { name: 'waste_details.light_bulb', label: 'Bóng đèn', unit: 'kg' },
    //             { name: 'waste_details.ma13', label: 'Mã 13', unit: 'kg' },
    //             { name: 'waste_details.ma14', label: 'Mã 14', unit: 'kg' }
    //         ]
    //     }
    // }
};
