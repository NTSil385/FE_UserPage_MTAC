const serviceConfig = {
    categories: {
        waste: {
            id: 'waste',
            name: 'Xử lý chất thải',
            icon: 'bi-trash3',
            services: [
                {
                    id: 'hazardous',
                    name: 'Xử lý chất thải nguy hại',
                    description: 'Giải pháp xử lý chất thải nguy hại an toàn và đúng quy định',
                    icon: 'bi-radioactive',
                    features: [
                        'Thu gom tận nơi',
                        'Xử lý đúng quy trình',
                        'Cấp chứng từ CTNH'
                    ],
                    formTemplate: 'hazardousForm'
                },
                {
                    id: 'industrial',
                    name: 'Xử lý chất thải công nghiệp',
                    description: 'Dịch vụ xử lý chất thải công nghiệp chuyên nghiệp',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'hazardousForm'
                }
            ]
        },
        doc: {
            id: 'doc',
            name: 'Hồ sơ môi trường',
            icon: 'bi-file-earmark-text',
            services: [
                {
                    id: 'dtm',
                    name: 'Báo cáo đánh giá tác động môi trường sơ bộ (ĐTM sơ bộ',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-radioactive',
                    features: [
                        'Xử lý đúng quy trình',
                    ],
                    formTemplate: 'dtmForm'
                },
                {
                    id: 'dmh',
                    name: 'Báo cáo đánh giá tác động môi trường (ĐMH)',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                }
            ]
        },
        safety: {
            id: 'safety',
            name: 'An toàn lao động',
            icon: 'bi-shield-check',
            services: [
                {
                    id: 'safety-training',
                    name: 'Đào tạo an toàn lao động',
                    description: 'Dịch vụ đào tạo ATLĐ theo NĐ 44/2016/NĐ-CP',
                    icon: 'bi-person-workspace',
                    features: [
                        'Đào tạo theo nghị định',
                        'Cấp chứng chỉ',
                        'Đăng ký với Sở LĐTBXH'
                    ],
                    formTemplate: 'safetyTrainingForm'
                }
            ]
        }
    }
};

document.addEventListener('DOMContentLoaded', function() {
    const categoriesContainer = document.querySelector('.service-categories');
    const contentContainer = document.querySelector('.quotation-content');

    // Render categories trong sidebar
    function renderCategories() {
        Object.values(serviceConfig.categories).forEach(category => {
            const categoryEl = document.createElement('div');
            categoryEl.className = 'category';
            categoryEl.dataset.categoryId = category.id;
            
            categoryEl.innerHTML = `
                <div class="category-header">
                    <i class="bi ${category.icon}"></i>
                    <span>${category.name}</span>
                    <i class="bi bi-chevron-down toggle-icon"></i>
                </div>
                <div class="dropdown-menu"></div>
            `;
            
            categoriesContainer.appendChild(categoryEl);
        });
    }

    // Render service grids
    function renderServiceGrids() {
        Object.values(serviceConfig.categories).forEach(category => {
            const grid = document.createElement('div');
            grid.className = 'services-grid';
            grid.id = `${category.id}-services`;
            grid.style.display = 'none';

            category.services.forEach(service => {
                const card = document.createElement('div');
                card.className = 'service-card';
                card.dataset.serviceId = service.id;
                card.dataset.categoryId = category.id;
                
                card.innerHTML = `
                    <div class="card-header">
                        <div class="service-icon">
                            <i class="bi ${service.icon}"></i>
                        </div>
                        <h4>${service.name}</h4>
                    </div>
                    <div class="card-body">
                        <div class="service-intro">
                            <p class="service-description">${service.description}</p>
                            <ul class="service-features">
                                ${service.features.map(feature => 
                                    `<li><i class="bi bi-check-circle"></i> ${feature}</li>`
                                ).join('')}
                            </ul>
                        </div>
                        <button class="select-btn" data-service-id="${service.id}">
                            Chọn gói này
                        </button>
                    </div>
                `;
                
                grid.appendChild(card);
            });

            contentContainer.appendChild(grid);
        });
    }

    // Render forms
    function renderForms() {
        Object.values(serviceConfig.categories).forEach(category => {
            category.services.forEach(service => {
                const formTemplate = formTemplates[service.formTemplate];
                if (!formTemplate) return;

                const form = document.createElement('div');
                form.className = 'quotation-form';
                form.id = `form-${service.id}`;
                form.style.display = 'none';
                form.dataset.categoryId = category.id;

                form.innerHTML = `
                    <h3>${formTemplate.title}</h3>
                    <form id="${service.id}Form">
                        ${formTemplate.sections.map(section => `
                            <div class="form-section">
                                <h4>${section.title}</h4>
                                <div class="form-row">
                                    ${section.fields.map(field => renderFormField(field)).join('')}
                                </div>
                            </div>
                        `).join('')}
                        <div class="form-actions">
                            <button type="button" class="btn-back">Quay lại</button>
                            <button type="submit" class="btn-submit">Xem báo giá</button>
                        </div>
                    </form>
                `;

                contentContainer.appendChild(form);
            });
        });
    }

    function renderFormField(field) {
        switch (field.type) {
            case 'text':
                return `
                    <div class="form-group">
                        <label>${field.label} ${field.required ? '<span class="required">*</span>' : ''}</label>
                        <input type="text" name="${field.name}" ${field.required ? 'required' : ''}>
                    </div>
                `;
            case 'select':
                return `
                    <div class="form-group">
                        <label>${field.label} ${field.required ? '<span class="required">*</span>' : ''}</label>
                        <select name="${field.name}" ${field.required ? 'required' : ''}>
                            <option value="">Chọn ${field.label.toLowerCase()}</option>
                            ${field.options.map(opt => `
                                <option value="${opt.value}">${opt.label}</option>
                            `).join('')}
                        </select>
                    </div>
                `;
            case 'number':
                return `
                    <div class="form-group">
                        <label>${field.label} ${field.required ? '<span class="required">*</span>' : ''}</label>
                        <input type="number" name="${field.name}" ${field.required ? 'required' : ''}>
                    </div>
                `;
        }
    }

    // Xử lý click vào category header
    function handleCategoryClick(e) {
        const categoryHeader = e.target.closest('.category-header');
        if (!categoryHeader) return;

        const category = categoryHeader.closest('.category');
        const categoryId = category.dataset.categoryId;

        // Đóng tất cả categories khác
        document.querySelectorAll('.category').forEach(c => {
            if (c !== category) {
                c.classList.remove('expanded');
                c.querySelector('.dropdown-menu').style.display = 'none';
            }
        });

        // Toggle category hiện tại
        category.classList.toggle('expanded');

        // Kiểm tra xem có form nào đang hiển thị không
        const visibleForm = document.querySelector('.quotation-form[style*="display: block"]');
        
        if (visibleForm) {
            // Nếu đang ở form và click vào category khác
            if (visibleForm.dataset.categoryId !== categoryId) {
                // Ẩn form hiện tại
                visibleForm.style.display = 'none';
                
                // Hiển thị grid services của category mới
                document.querySelectorAll('.services-grid').forEach(grid => {
                    grid.style.display = grid.id === `${categoryId}-services` ? 'grid' : 'none';
                });
                
                // Reset dropdown menu
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.style.display = 'none';
                    menu.innerHTML = '';
                });
            }
        } else {
            // Nếu không có form nào đang hiển thị, hiển thị grid bình thường
            document.querySelectorAll('.services-grid').forEach(grid => {
                grid.style.display = grid.id === `${categoryId}-services` && 
                                   category.classList.contains('expanded') ? 'grid' : 'none';
            });
        }
    }

    // Xử lý chọn service
    function handleServiceSelection(e) {
        const selectBtn = e.target.closest('.select-btn');
        if (!selectBtn) return;

        const serviceId = selectBtn.dataset.serviceId;
        const card = selectBtn.closest('.service-card');
        const categoryId = card.dataset.categoryId;
        
        // Ẩn grid services
        document.querySelectorAll('.services-grid').forEach(grid => {
            grid.style.display = 'none';
        });

        // Tạo và hiển thị dropdown menu
        const category = document.querySelector(`.category[data-category-id="${categoryId}"]`);
        if (category) {
            const dropdownMenu = category.querySelector('.dropdown-menu');
            dropdownMenu.innerHTML = ''; // Clear existing items
            
            // Tạo dropdown items từ services của category
            const services = serviceConfig.categories[categoryId].services;
            services.forEach(service => {
                const item = document.createElement('div');
                item.className = 'dropdown-item';
                item.textContent = service.name;
                item.dataset.serviceId = service.id;
                item.dataset.categoryId = categoryId;
                
                // Đánh dấu service đang chọn
                if (service.id === serviceId) {
                    item.classList.add('active');
                }
                
                item.addEventListener('click', handleDropdownItemClick);
                dropdownMenu.appendChild(item);
            });

            // Hiển thị dropdown
            category.classList.add('expanded');
            dropdownMenu.style.display = 'block';
        }

        // Hiển thị form
        showServiceForm(serviceId, categoryId);
    }

    // Xử lý click vào dropdown item
    function handleDropdownItemClick(e) {
        const item = e.target.closest('.dropdown-item');
        if (!item) return;

        const serviceId = item.dataset.serviceId;
        const categoryId = item.dataset.categoryId;

        // Ẩn tất cả form
        document.querySelectorAll('.quotation-form').forEach(form => {
            form.style.display = 'none';
        });

        // Hiển thị form được chọn
        showServiceForm(serviceId, categoryId);

        // Cập nhật trạng thái active trong dropdown
        const category = document.querySelector(`.category[data-category-id="${categoryId}"]`);
        if (category) {
            const dropdownItems = category.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(dropItem => {
                dropItem.classList.toggle('active', dropItem === item);
            });
        }
    }

    // Hiển thị form service
    function showServiceForm(serviceId, categoryId) {
        const form = document.getElementById(`form-${serviceId}`);
        if (form) {
            form.style.display = 'block';
            form.dataset.categoryId = categoryId;
        }
    }

    // Xử lý nút "Quay lại"
    function handleBackButton(e) {
        const backBtn = e.target.closest('.btn-back');
        if (!backBtn) return;

        const form = backBtn.closest('.quotation-form');
        const categoryId = form.dataset.categoryId;

        // Ẩn form
        form.style.display = 'none';

        // Hiển thị lại grid
        const grid = document.getElementById(`${categoryId}-services`);
        if (grid) {
            grid.style.display = 'grid';
        }

        // Đóng dropdown menu
        const category = document.querySelector(`.category[data-category-id="${categoryId}"]`);
        if (category) {
            category.classList.remove('expanded');
            const dropdownMenu = category.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'none';
            dropdownMenu.innerHTML = '';
        }
    }

    // Xử lý submit form
    function initFormHandlers() {
        document.querySelectorAll('.quotation-form form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const serviceId = this.id.replace('Form', '');
                const formData = new FormData(this);
                handleFormSubmit(serviceId, formData);
            });
        });
    }

    function handleFormSubmit(serviceId, formData) {
        // Convert FormData to object
        const data = Object.fromEntries(formData.entries());
        console.log('Form submitted:', serviceId, data);
        // Thêm logic xử lý form submit tùy theo service
    }

    // Khởi tạo
    renderCategories();
    renderServiceGrids();
    renderForms();
    initFormHandlers();

    // Event listeners
    categoriesContainer.addEventListener('click', handleCategoryClick);
    contentContainer.addEventListener('click', e => {
        handleServiceSelection(e);
        handleBackButton(e);
    });

    // Hiển thị mặc định category đầu tiên
    const firstCategory = document.querySelector('.category');
    if (firstCategory) {
        firstCategory.querySelector('.category-header').click();
    }
});

