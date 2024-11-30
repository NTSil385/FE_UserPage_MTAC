import { formTemplates } from './form-templates.js';
import { handlePriceCalculation, getFieldOptions } from './form-handler.js';

const serviceConfig = {
    categories: {
        waste: {
            id: 'waste',
            name: 'Xử lý chất thải',
            icon: 'bi-trash3',
            services: [
                {
                    id: 'ctnh',
                    name: 'Xử lý chất thải nguy hại',
                    description: 'Giải pháp xử lý chất thải nguy hại an toàn và đúng quy định',
                    icon: 'bi-radioactive',
                    features: [
                        'Thu gom tận nơi',
                        'Xử lý đúng quy trình',
                        'Cấp chứng từ CTNH'
                    ],
                    formTemplate: 'ctnh'
                },
                {
                    id: 'ctcn',
                    name: 'Xử lý chất thải công nghiệp',
                    description: 'Dịch vụ xử lý chất thải công nghiệp chuzyên nghiệp',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'ctcn'
                },
                {
                    id: 'ctcn-gd',
                    name: 'Xử lý chất công nghiệp - giày da',
                    description: 'Giải pháp xử lý chất thải nguy hại an toàn và đúng quy định',
                    icon: 'bi-radioactive',
                    features: [
                        'Thu gom tận nơi',
                        'Xử lý đúng quy trình',
                        'Cấp chứng từ CTNH'
                    ],
                    formTemplate: 'ctcngd'
                },
                {
                    id: 'ctck',
                    name: 'Xử lý chất thải cồng kềnh',
                    description: 'Dịch vụ xử lý chất thải công nghiệp chuyên nghiệp',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'ctck'
                },

                
            ]
        },
        doc: {
            id: 'doc',
            name: 'Hồ sơ môi trường',
            icon: 'bi-file-earmark-text',
            services: [
                {
                    id: 'dtm',
                    name: 'Báo cáo đánh giá tác động môi trường sơ bộ (ĐTM sơ bộ)',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-radioactive',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dtm'
                },
                {
                    id: 'dmh',
                    name: 'Báo cáo đánh giá tác động môi trường sơ bộ (ĐTM các cấp)',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'bcct-gpmt',
                    name: 'Báo cáo công tác bảo vệ môi trường cho đối tượng làm giấy phép môi trường',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'bcct-dkmt',
                    name: 'Báo cáo công tác bảo vệ môi trường cho đối tượng đăng ký môi trường',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'dkmt',
                    name: 'Đăng ký môi trường (DKMT)',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dkmt'
                },
                {
                    id: 'gpmt',
                    name: 'Giấy phép môi trường',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'gpmt'
                },
                {
                    id: 'ptxnct',
                    name: 'Hồ sơ phân định chất thải công nghiệp phải kiểm soát',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'ptxnct'
                },
                {
                    id: 'hsdk',
                    name: 'Hồ sơ đo kiểm môi trường lao động',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'hsbcdk',
                    name: 'Hồ sơ báo cáo định kỳ sau khi được cấp giấy phép khai thác nước dưới đất',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'hsbc-xtdk',
                    name: 'Hồ sơ báo cáo tình hình xả thải định kỳ',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'hsxn-tn',
                    name: 'Hồ sơ xin xác nhận thoát nước thải vào hệ thống thoát nước chung của thành phố',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'dvcs-skmt',
                    name: 'Dịch vụ chăm sóc sức khỏe môi trường cho doanh nghiệp',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'khvh-tn',
                    name: 'Kế hoạch vận hành thủ nghiệm các công trình xử lý môi trường',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                    icon: 'bi-boxes',
                    features: [
                        'Thu gom định kỳ',
                        'Phân loại chuyên nghiệp',
                        'Báo cáo chi tiết'
                    ],
                    formTemplate: 'dmhForm'
                },
                {
                    id: 'hsdkmt',
                    name: 'Hồ sơ đo kiểm môi trường lao động',
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
    },
    itemsPerPage: 6, 
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
                <div class="dropdown-menu--service">
                    ${category.services.map(service => `
                        <div class="dropdown-item--service" 
                             data-service-id="${service.id}"
                             data-category-id="${category.id}">
                            ${service.name}
                        </div>
                    `).join('')}
                </div>
            `;
            
            categoriesContainer.appendChild(categoryEl);
        });
    }


    function renderServiceGrids() {
        Object.values(serviceConfig.categories).forEach(category => {
            const grid = document.createElement('div');
            grid.className = 'services-grid';
            grid.id = `${category.id}-services`;
            grid.style.display = 'none';

            // Tạo container cho grid và pagination
            const gridContainer = document.createElement('div');
            gridContainer.className = 'services-grid-container';

      
            category.services.forEach((service, index) => {
                const card = document.createElement('div');
                card.className = 'service-card';
                card.dataset.serviceId = service.id;
                card.dataset.categoryId = category.id;
                card.dataset.page = Math.floor(index / serviceConfig.itemsPerPage) + 1;
                
                card.innerHTML = `
                    <a href="#" class="select-btn" data-service-id="${service.id}">
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

                    </div>
                    </a>
                `;
                
                grid.appendChild(card);
            });

     
            if (category.services.length > serviceConfig.itemsPerPage) {
                const pagination = createPagination(category.services.length, category.id);
                gridContainer.appendChild(grid);
                gridContainer.appendChild(pagination);
                contentContainer.appendChild(gridContainer);
            } else {
                contentContainer.appendChild(grid);
            }

    
            updatePageDisplay(category.id, 1);
        });
    }

  
    function renderForms() {
        const contentContainer = document.querySelector('.quotation-content');
        
        Object.values(serviceConfig.categories).forEach(category => {
            category.services.forEach(service => {
                const formTemplate = formTemplates[service.formTemplate];
                if (!formTemplate) return;

                const form = document.createElement('div');
                form.className = 'quotation-form';
                form.id = `form-${service.id}`;
                form.style.display = 'none';
                form.dataset.categoryId = category.id;
                form.dataset.serviceType = service.id;

                form.innerHTML = `
                    <h3>${formTemplate.title}</h3>
                    <form id="${service.id}Form" data-service-type="${service.id}">
                        ${formTemplate.sections.map(section => `
                            <div class="form-section">
                                <h4>${section.title}</h4>
                                <div class="form-row">
                                    ${section.fields.map(field => renderFormField(field, service.id)).join('')}
                                </div>
                            </div>
                        `).join('')}
                       
                        <div class="form-actions">
                            <button onclick="window.location.reload()" type="button" class="btn-back">Quay lại</button>
                            <button type="submit" class="btn-submit">Xem báo giá</button>
                        </div>
                    </form>
                `;

                contentContainer.appendChild(form);
            });
        });

    
        document.querySelectorAll('.quotation-form form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const serviceType = this.dataset.serviceType;
                handlePriceCalculation(e, serviceType);
            });
        });
    }

    function renderFormField(field, serviceType) {
        switch (field.type) {
            case 'text':
            case 'number':
                return `
                    <div class="form-group">
                        <label for="${field.name}">${field.label}</label>
                        <input type="${field.type}" 
                               id="${field.name}" 
                               name="${field.name}" 
                               ${field.required ? 'required' : ''}
                               ${field.min !== undefined ? `min="${field.min}"` : ''}
                               ${field.max !== undefined ? `max="${field.max}"` : ''}
                               class="form-control">
                    </div>
                `;
            case 'select':
                const options = getFieldOptions(field, serviceType);
                
                return `
                    <div class="form-group">
                        <label for="${field.name}">${field.label}</label>
                        <select id="${field.name}" 
                                name="${field.name}" 
                                ${field.required ? 'required' : ''}
                                class="form-control">
                            <option value="">Chọn ${field.label}</option>
                            ${options.map(opt => 
                                `<option value="${opt.value}">${opt.label}</option>`
                            ).join('')}
                        </select>
                    </div>
                `;
            default:
                return '';
        }
    }

  
    function handleCategoryClick(e) {
        const categoryHeader = e.target.closest('.category-header');
        if (!categoryHeader) return;

        const category = categoryHeader.closest('.category');
        const categoryId = category.dataset.categoryId;

        
        document.querySelectorAll('.category').forEach(c => {
            if (c !== category) {
                c.classList.remove('expanded');
                c.querySelector('.dropdown-menu--service').style.display = 'none';
            }
        });

   
        category.classList.toggle('expanded');

     
        const visibleForm = document.querySelector('.quotation-form[style*="display: block"]');
        const visibleResult = document.querySelector('#price-result[style*="display: block"]');
        if (visibleForm || visibleResult) {
          
            if (visibleForm.dataset.categoryId !== categoryId ) {
              
                visibleForm.style.display = 'none';
                if (visibleResult) {
                    visibleResult.style.display = 'none';
                }
             
                document.querySelectorAll('.services-grid').forEach(grid => {
                    grid.style.display = grid.id === `${categoryId}-services` ? 'grid' : 'none';
                });
                
                document.querySelector('.pagination').style.display = 'flex';

              
                document.querySelectorAll('.dropdown-menu--service').forEach(menu => {
                    menu.style.display = 'none';
                    menu.innerHTML = '';
                });
            }
        } else {
          
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
        
        
        document.querySelectorAll('.services-grid').forEach(grid => {
            grid.style.display = 'none';
        });

   
        const category = document.querySelector(`.category[data-category-id="${categoryId}"]`);
        if (category) {
            const dropdownMenu = category.querySelector('.dropdown-menu--service');
            dropdownMenu.innerHTML = ''; // Clear existing items
            
        
            const services = serviceConfig.categories[categoryId].services;
            services.forEach(service => {
                const item = document.createElement('div');
                item.className = 'dropdown-item--service';
                item.textContent = service.name;
                item.dataset.serviceId = service.id;
                item.dataset.categoryId = categoryId;
                
                
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

     
        showServiceForm(serviceId, categoryId);
    }

    // Xử lý click vào dropdown item
    function handleDropdownItemClick(e) {
        const item = e.target.closest('.dropdown-item--service');
        if (!item) return;

        const serviceId = item.dataset.serviceId;
        const categoryId = item.dataset.categoryId;

        // Ẩn tất cả form
        document.querySelectorAll('.quotation-form').forEach(form => {
            form.style.display = 'none';
        });

        
        showServiceForm(serviceId, categoryId);

        // Cập nhật trạng thái active trong dropdown
        const category = document.querySelector(`.category[data-category-id="${categoryId}"]`);
        if (category) {
            const dropdownItems = category.querySelectorAll('.dropdown-item--service');
            dropdownItems.forEach(dropItem => {
                dropItem.classList.toggle('active', dropItem === item);
            });
        }
    }


    function showServiceForm(serviceId) {
        // Ẩn tất cả các form và phân trang
        document.querySelectorAll('.quotation-form, .pagination').forEach(el => {
            el.style.display = 'none';
        });

      
        const form = document.getElementById(`form-${serviceId}`);
        if (form) {
            form.style.display = 'block';
        }
    }


    // Xử lý submit form
    function initFormHandlers() {
        document.querySelectorAll('.quotation-form form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const serviceId = this.closest('.quotation-form').dataset.serviceType;
                handlePriceCalculation(e, serviceId);
            });
        });

        scrollToResultHeader();
    }

    // Nếu dùng JavaScript thuần
function scrollToResultHeader() {
    const headerElement = document.getElementById('result-header');
    if (headerElement) {
      const offsetTop = headerElement.offsetTop;
      window.scrollTo({
        top: offsetTop - 20, // Trừ đi 20px để tạo khoảng cách
        behavior: 'smooth'
      });
    }
  }
  

    // Thêm các hàm mới để xử lý phân trang
    function createPagination(totalItems, categoryId) {
        
        if (totalItems <= serviceConfig.itemsPerPage) {
            return null; 
        }

        const totalPages = Math.ceil(totalItems / serviceConfig.itemsPerPage);
        const pagination = document.createElement('div');
        pagination.className = 'pagination';
        pagination.innerHTML = `
            <button class="prev-page" data-category="${categoryId}">
                <i class="bi bi-chevron-left"></i>
            </button>
            <span class="page-info" data-category="${categoryId}">
                Trang <span class="current-page">1</span>/${totalPages}
            </span>
            <button class="next-page" data-category="${categoryId}">
                <i class="bi bi-chevron-right"></i>
            </button>
        `;

        pagination.querySelector('.prev-page').addEventListener('click', () => changePage(categoryId, 'prev'));
        pagination.querySelector('.next-page').addEventListener('click', () => changePage(categoryId, 'next'));

        return pagination;
    }

    function changePage(categoryId, direction) {
        const grid = document.getElementById(`${categoryId}-services`);
        const cards = grid.querySelectorAll('.service-card');
        const totalPages = Math.ceil(cards.length / serviceConfig.itemsPerPage);
        const currentPage = parseInt(grid.dataset.currentPage) || 1;

        let newPage = currentPage;
        if (direction === 'prev' && currentPage > 1) {
            newPage = currentPage - 1;
        } else if (direction === 'next' && currentPage < totalPages) {
            newPage = currentPage + 1;
        }

        updatePageDisplay(categoryId, newPage);
    }

    function updatePageDisplay(categoryId, pageNumber) {
        const grid = document.getElementById(`${categoryId}-services`);
        const cards = grid.querySelectorAll('.service-card');
        
        
        grid.dataset.currentPage = pageNumber;
        
       
        cards.forEach(card => {
            card.style.display = parseInt(card.dataset.page) === pageNumber ? 'block' : 'none';
        });

        
        const pageInfo = document.querySelector(`.page-info[data-category="${categoryId}"] .current-page`);
        if (pageInfo) {
            pageInfo.textContent = pageNumber;
        }
    }

    renderCategories();
    renderServiceGrids();
    renderForms();
    initFormHandlers();

   
    categoriesContainer.addEventListener('click', handleCategoryClick);
    contentContainer.addEventListener('click', e => {
        handleServiceSelection(e);
    });

    const firstCategory = document.querySelector('.category');
    if (firstCategory) {
        firstCategory.querySelector('.category-header').click();
    }

    document.querySelectorAll('.services-menu').forEach(menu => {
        const button = menu.querySelector('button');
        const submenu = menu.querySelector('.services-submenu');
        
        button.addEventListener('click', () => {
            const isOpen = menu.classList.contains('open');
            
            // Đóng tất cả các menu khác
            document.querySelectorAll('.services-menu.open').forEach(openMenu => {
                if (openMenu !== menu) {
                    openMenu.classList.remove('open');
                }
            });
            
            // Toggle menu hiện tại
            menu.classList.toggle('open');
        });
    });

    // Đóng menu khi click ra ngoài
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.services-menu')) {
            document.querySelectorAll('.services-menu.open').forEach(menu => {
                menu.classList.remove('open');
            });
        }
    });

    // Xử lý toggle sidebar
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.quotation-sidebar');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        
        // Lấy tất cả dropdown menus thay vì chỉ một
        const dropdownMenus = document.querySelectorAll('.dropdown-menu--service');
        
        if (sidebar.classList.contains('collapsed')) {
            // Ẩn tất cả dropdown menus
            dropdownMenus.forEach(menu => {
                menu.style.display = 'none';
            });
        } else {
            // Khi mở sidebar - chỉ hiển thị dropdown của category đang expanded
            const expandedCategory = document.querySelector('.category.expanded');
            if (expandedCategory) {
                const activeDropdown = expandedCategory.querySelector('.dropdown-menu--service');
                if (activeDropdown) {
                    activeDropdown.style.display = 'block';
                }
            }
        }
    });

});

