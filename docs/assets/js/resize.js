document.addEventListener('DOMContentLoaded', function () {
  // Chọn các phần tử carousel
  const desktopCarousel = document.querySelector('.desktop-carousel');
  const mobileCarousel = document.querySelector('#mobileCarousel');
  
  function handleCarousel() {
    // Xác định kích thước màn hình (768px là điểm phân cách có thể thay đổi theo nhu cầu)
    const isMobile = window.innerWidth < 768;

    if (isMobile) {
      // Hiển thị carousel mobile và ẩn carousel desktop
      desktopCarousel.style.display = 'none';
      mobileCarousel.style.display = 'block';
    } else {
      // Hiển thị carousel desktop và ẩn carousel mobile
      desktopCarousel.style.display = 'block';
      mobileCarousel.style.display = 'none';
    }
  }

  // Gọi hàm khi trang được tải và khi kích thước cửa sổ thay đổi
  handleCarousel();
  window.addEventListener('resize', handleCarousel);
});
