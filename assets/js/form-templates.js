const formTemplates = {
    // Form mẫu cho xử lý chất thải nguy hại
    hazardousForm: {
        title: 'Xử lý chất thải nguy hại - Thông tin báo giá',
        sections: [
            {
                title: 'Thông tin doanh nghiệp',
                fields: [
                    {
                        type: 'text',
                        name: 'company_name',
                        label: 'Tên doanh nghiệp',
                        required: true
                    },
                    {
                        type: 'text',
                        name: 'tax_code',
                        label: 'Mã số thuế',
                        required: true
                    },
                    {
                        type: 'text',
                        name: 'address',
                        label: 'Địa chỉ',
                        required: true
                    },
                    {
                        type: 'select',
                        name: 'province',
                        label: 'Tỉnh/Thành phố',
                        required: true,
                        options: [
                            { value: 'hcm', label: 'TP. Hồ Chí Minh' },
                            { value: 'hn', label: 'Hà Nội' },
                            // Thêm các tỉnh thành khác
                        ]
                    }
                ]
            },
            {
                title: 'Thông tin liên hệ',
                fields: [
                    {
                        type: 'text',
                        name: 'contact_name',
                        label: 'Người liên hệ',
                        required: true
                    },
                    {
                        type: 'text',
                        name: 'phone',
                        label: 'Số điện thoại',
                        required: true
                    }
                ]
            }
        ]
    },

    // Form mẫu cho xử lý chất thải công nghiệp
    industrialForm: {
        title: 'Xử lý chất thải công nghiệp - Thông tin báo giá',
        sections: [
            // Tương tự như hazardousForm
        ]
    },

    // Form mẫu cho đào tạo an toàn
    safetyTrainingForm: {
        title: 'Đào tạo an toàn lao động - Thông tin báo giá',
        sections: [
            {
                title: 'Thông tin khóa học',
                fields: [
                    {
                        type: 'select',
                        name: 'training_type',
                        label: 'Loại hình đào tạo',
                        required: true,
                        options: [
                            { value: 'nhom1', label: 'Nhóm 1' },
                            { value: 'nhom2', label: 'Nhóm 2' },
                            { value: 'nhom3', label: 'Nhóm 3' }
                        ]
                    },
                    {
                        type: 'number',
                        name: 'student_count',
                        label: 'Số lượng học viên',
                        required: true
                    }
                ]
            },
            // Thêm các section khác
        ]
    }
}; 