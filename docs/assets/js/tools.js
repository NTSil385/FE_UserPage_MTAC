
const toolsData = {

    categories: {
        all: {
            id: 'all',
            name: 'Tất cả công cụ',
            icon: 'fa-th-large',
            description: 'Hiển thị tất cả công cụ'
        },
        forms: {
            id: 'forms',
            name: 'Biểu mẫu báo cáo',
            icon: 'fa-file-alt',
            description: 'Các biểu mẫu báo cáo môi trường'
        },
        design: {
            id: 'design',
            name: 'Biển báo',
            icon: 'fa-warning',
            description: 'Công cụ theo dõi và giám sát'
        },
        searching: {
            id: 'searching',
            name: 'Tra cứu chất thải',
            icon: 'fa-search',
            description: 'Các công cụ tính toán môi trường'
        },
       
    },

    // Định nghĩa tools
    tools: [
        {
            id: 'form-5a',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5A',
            description: 'Báo cáo công tác bảo vệ môi trường',
            icon: 'fa-file-alt',
            downloads: '1.2k',
            rating: '4.5',
            status: 'Mới',
            url: '/path/to/form-5a'
        },
        {
            id: 'form-5b',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5B',
            description: 'Báo cáo định kỳ môi trường',
            icon: 'fa-file-alt',
            downloads: '850',
            rating: '4.8',
            status: 'Phổ biến',
            url: '/path/to/form-5b'
        },

        {
            id: 'form-5b',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5B',
            description: 'Báo cáo định kỳ môi trường',
            icon: 'fa-file-alt',
            downloads: '850',
            rating: '4.8',
            status: 'Phổ biến',
            url: '/path/to/form-5b'
        },

        {
            id: 'form-5b',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5B',
            description: 'Báo cáo định kỳ môi trường',
            icon: 'fa-file-alt',
            downloads: '850',
            rating: '4.8',
            status: 'Phổ biến',
            url: '/path/to/form-5b'
        },

        {
            id: 'form-5b',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5B',
            description: 'Báo cáo định kỳ môi trường',
            icon: 'fa-file-alt',
            downloads: '850',
            rating: '4.8',
            status: 'Phổ biến',
            url: '/path/to/form-5b'
        },
        {
            id: 'form-5b',
            category: 'forms',
            title: 'Biểu mẫu BCCT 5B',
            description: 'Báo cáo định kỳ môi trường',
            icon: 'fa-file-alt',
            downloads: '850',
            rating: '4.8',
            status: 'Phổ biến',
            url: '/path/to/form-5b'
        },

        // Thêm các tools khác ở đây
    ]
};

class ToolManager {
    constructor(data) {
        this.data = data;
        this.currentCategory = 'all';
        this.itemsPerPage = 6; // Số items trên mỗi trang (2 hàng x 3 cột)
        this.currentPage = 1;
        this.initializeUI();
        this.initializeEventListeners();
    }

    initializeUI() {
        this.renderCategories();
        this.renderTools();
    }

    renderCategories() {
        const categoryList = $('#categoryList');
        categoryList.empty();

        Object.values(this.data.categories).forEach(category => {
            const count = category.id === 'all' 
                ? this.data.tools.length 
                : this.data.tools.filter(tool => tool.category === category.id).length;

            const categoryElement = `
                <div class="category-item ${category.id === 'all' ? 'active' : ''}" data-category="${category.id}">
                    <div class="category-info">
                        <i class="fas ${category.icon}"></i>
                        <span>${category.name}</span>
                    </div>
                    <span class="badge">${count}</span>
                </div>
            `;
            categoryList.append(categoryElement);
        });
    }

    renderTools(categoryId = 'all', searchTerm = '') {
        const toolsGrid = $('#toolsGrid');
        toolsGrid.empty();

        // Lọc tools theo category và search term
        let filteredTools = this.data.tools;
        if (categoryId !== 'all') {
            filteredTools = filteredTools.filter(tool => tool.category === categoryId);
        }
        if (searchTerm) {
            filteredTools = filteredTools.filter(tool => 
                tool.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                tool.description.toLowerCase().includes(searchTerm.toLowerCase())
            );
        }

        // Tính toán phân trang
        const totalPages = Math.ceil(filteredTools.length / this.itemsPerPage);
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const endIndex = startIndex + this.itemsPerPage;
        const paginatedTools = filteredTools.slice(startIndex, endIndex);

        // Render tools cho trang hiện tại
        paginatedTools.forEach(tool => {
            const toolCard = this.createToolCard(tool);
            toolsGrid.append(toolCard);
        });

        // Render pagination
        this.renderPagination(totalPages);
    }

    createToolCard(tool) {
        return `
            <div class="tool-card" data-category="${tool.category}" data-id="${tool.id}">
                <div class="tool-card-header">
                    <div class="tool-icon">
                        <i class="fas ${tool.icon}"></i>
                    </div>
                    ${tool.status ? `<div class="tool-badge">${tool.status}</div>` : ''}
                </div>
                <div class="tool-card-body">
                    <h4 class="tool-title">${tool.title}</h4>
                    <p class="tool-description">${tool.description}</p>
                    <div class="tool-stats">
                        <div class="stat-item" data-stat="downloads">
                            <i class="fas fa-download"></i>
                            <span>${tool.downloads}</span>
                        </div>
                        <div class="stat-item" data-stat="rating">
                            <i class="fas fa-star"></i>
                            <span>${tool.rating}</span>
                        </div>
                    </div>
                </div>
                <div class="tool-card-footer">
                    <button class="btn btn-primary" onclick="window.location.href='${tool.url}'">
                        <i class="fas fa-download"></i>
                        <span>Tải xuống</span>
                    </button>
                </div>
            </div>
        `;
    }

    renderPagination(totalPages) {
        const paginationContainer = $('#toolsPagination');
        paginationContainer.empty();

        if (totalPages <= 1) {
            paginationContainer.hide();
            return;
        }

        // Nút Previous
        paginationContainer.append(`
            <div class="pagination-item ${this.currentPage === 1 ? 'disabled' : ''}" 
                 data-page="${this.currentPage - 1}">
                <i class="fas fa-chevron-left"></i>
            </div>
        `);

        // Các số trang
        const maxVisiblePages = 5;
        let startPage = Math.max(1, this.currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

        if (endPage - startPage + 1 < maxVisiblePages) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }

        // Trang đầu
        if (startPage > 1) {
            paginationContainer.append(`
                <div class="pagination-item" data-page="1">1</div>
            `);
            if (startPage > 2) {
                paginationContainer.append(`
                    <div class="pagination-item disabled">...</div>
                `);
            }
        }

        // Các trang giữa
        for (let i = startPage; i <= endPage; i++) {
            paginationContainer.append(`
                <div class="pagination-item ${i === this.currentPage ? 'active' : ''}" 
                     data-page="${i}">${i}</div>
            `);
        }

        // Trang cuối
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                paginationContainer.append(`
                    <div class="pagination-item disabled">...</div>
                `);
            }
            paginationContainer.append(`
                <div class="pagination-item" data-page="${totalPages}">${totalPages}</div>
            `);
        }

        // Nút Next
        paginationContainer.append(`
            <div class="pagination-item ${this.currentPage === totalPages ? 'disabled' : ''}" 
                 data-page="${this.currentPage + 1}">
                <i class="fas fa-chevron-right"></i>
            </div>
        `);

        paginationContainer.show();
    }

    initializeEventListeners() {
        // Xử lý chọn category
        $('#categoryList').on('click', '.category-item', (e) => {
            const categoryId = $(e.currentTarget).data('category');
            $('.category-item').removeClass('active');
            $(e.currentTarget).addClass('active');
            this.currentCategory = categoryId;
            this.currentPage = 1; // Reset về trang 1 khi chuyển category
            this.renderTools(categoryId, $('.search-input').val());
        });

        // Xử lý tìm kiếm
        $('.search-input').on('input', (e) => {
            const searchTerm = $(e.target).val();
            this.currentPage = 1; // Reset về trang 1 khi tìm kiếm
            this.renderTools(this.currentCategory, searchTerm);
        });

        // Xử lý bộ lọc
        $('#applyFilters').click(() => {
            this.applyFilters();
        });

        // Xử lý click phân trang
        $('#toolsPagination').on('click', '.pagination-item:not(.disabled)', (e) => {
            const page = $(e.currentTarget).data('page');
            if (page && page !== this.currentPage) {
                this.currentPage = page;
                this.renderTools(this.currentCategory, $('.search-input').val());
                $('#toolsGrid')[0].scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    getFilterValues() {
        return {
            status: {
                new: $('#filterNew').is(':checked'),
                popular: $('#filterPopular').is(':checked')
            },
            rating: $('input[name="ratingFilter"]:checked').val(),
            downloads: $('#downloadFilter').val()
        };
    }

    applyFilters() {
        const filters = this.getFilterValues();
        this.currentPage = 1; // Reset về trang 1 khi áp dụng bộ lọc
        
        let filteredTools = this.data.tools;

        // Lọc theo category hiện tại
        if (this.currentCategory !== 'all') {
            filteredTools = filteredTools.filter(tool => tool.category === this.currentCategory);
        }

        // Lọc theo trạng thái
        if (filters.status.new || filters.status.popular) {
            filteredTools = filteredTools.filter(tool => {
                if (filters.status.new && tool.status === 'Mới') return true;
                if (filters.status.popular && tool.status === 'Phổ biến') return true;
                return false;
            });
        }

        // Lọc theo đánh giá
        if (filters.rating) {
            const minRating = parseFloat(filters.rating);
            filteredTools = filteredTools.filter(tool => 
                parseFloat(tool.rating) >= minRating
            );
        }

        // Lọc theo lượt tải
        if (filters.downloads) {
            const minDownloads = parseInt(filters.downloads);
            filteredTools = filteredTools.filter(tool => {
                const downloads = parseInt(tool.downloads.replace(/[^0-9]/g, ''));
                return downloads >= minDownloads;
            });
        }

        // Cập nhật UI với tools đã lọc
        const toolsGrid = $('#toolsGrid');
        toolsGrid.empty();

        // Tính toán phân trang cho kết quả đã lọc
        const totalPages = Math.ceil(filteredTools.length / this.itemsPerPage);
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const endIndex = startIndex + this.itemsPerPage;
        const paginatedTools = filteredTools.slice(startIndex, endIndex);

        // Render tools đã lọc
        paginatedTools.forEach(tool => {
            const toolCard = this.createToolCard(tool);
            toolsGrid.append(toolCard);
        });

        // Render pagination cho kết quả đã lọc
        this.renderPagination(totalPages);

        // Đóng modal
        $('#filterModal').modal('hide');
    }

    // Reset bộ lọc
    resetFilters() {
        $('#filterNew').prop('checked', false);
        $('#filterPopular').prop('checked', false);
        $('input[name="ratingFilter"]').prop('checked', false);
        $('#downloadFilter').val('');
        this.currentPage = 1;
        this.renderTools(this.currentCategory);
    }
}

// Khởi tạo
$(document).ready(() => {
    const toolManager = new ToolManager(toolsData);
});

// Phương thức để thêm tool mới
function addNewTool(toolData) {
    toolsData.tools.push(toolData);
    const toolManager = new ToolManager(toolsData);
    toolManager.renderTools(toolManager.currentCategory);
}

// Ví dụ thêm tool mới
addNewTool({
    id: 'new-tool',
    category: 'forms',
    title: 'Công cụ mới',
    description: 'Mô tả công cụ mới',
    icon: 'fa-file-alt',
    downloads: '100',
    rating: '4.0',
    status: 'Mới',
    url: '/path/to/new-tool'
});
