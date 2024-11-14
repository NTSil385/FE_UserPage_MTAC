export const formTemplates = {
    hazardousForm: {
        title: 'Xử lý chất thải nguy hại - Bước 1: Điền thông tin dự toán',
        sections: [
            {
                title: 'Thông tin liên hệ:',
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
                    },
                    {
                        type: 'text',
                        name: 'email',
                        label: 'Email',
                        required: true
                    },
                    {
                        type: 'select',
                        name: 'province',
                        label: 'Tỉnh/Thành phố',
                        required: true,
                        options: [
                            { value: 'hcm', label: 'TP Hồ Chí Minh' },
                            { value: 'hcm_kcx', label: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận' },
                            { value: 'longan', label: 'Long An' },
                            // Thêm các tỉnh từ bảng giá
                        ]
                    }
                ]
            },
            {
                title: 'Thông tin khối lượng chất thải',
                fields: [
                    {
                        type: 'number',
                        name: 'total_weight',
                        label: 'Tổng khối lượng chất thải (kg)',
                        required: true,
                        min: 0,
                        max: 600
                    },
                    {
                        type: 'number',
                        name: 'transport_trips',
                        label: 'Số chuyến vận chuyển',
                        required: true,
                        min: 1
                    },
                    {
                        type: 'number',
                        name: 'normal_waste',
                        label: 'Khối lượng chất thải thông thường (kg)',
                        required: true,
                        min: 0
                    },
                    {
                        type: 'number',
                        name: 'light_bulb_weight',
                        label: 'Khối lượng bóng đèn (kg)',
                        required: true,
                        min: 0
                    },
                    {
                        type: 'number',
                        name: 'ma13_weight',
                        label: 'Khối lượng mã 13 (kg)',
                        required: true,
                        min: 0
                    },
                    {
                        type: 'number',
                        name: 'ma14_weight',
                        label: 'Khối lượng mã 14 (kg)',
                        required: true,
                        min: 0
                    }
                ]
            },
          
        ],
        submitButton: {
            type: 'button',
            label: 'Xem báo giá',
            className: 'btn btn-primary mt-3',
            onClick: 'handlePriceCalculation'
        }
    }
}; 