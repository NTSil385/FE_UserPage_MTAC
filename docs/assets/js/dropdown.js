document.querySelectorAll('.header-content').forEach(item => {
  item.addEventListener('click', function() {
    document.querySelectorAll('.header-content').forEach(link => {
      link.classList.remove('active');
    });
    this.classList.add('active');
  });
});

document.querySelector('.dropdown-menu').addEventListener('change', function() {
  document.querySelectorAll('.header-content').forEach(link => {
    link.classList.remove('active');
    if (link.textContent === this.selectedOptions[0].textContent) {
      link.classList.add('active');
    }
  });
});


function toggleSubmenu(event) {
  event.preventDefault();
  const parentItem = event.currentTarget.parentElement;
  const submenu = parentItem.querySelector('.submenu');
  const allSubmenus = document.querySelectorAll('.menu-dropdown .submenu');

  // Đóng tất cả submenu khác nếu cần
  allSubmenus.forEach((menu) => {
      if (menu !== submenu) {
          menu.style.opacity = '0';
          menu.style.visibility = 'hidden';
          menu.style.pointerEvents = 'none';
          menu.style.transform = 'translateY(-12px)';
      }
  });

  // Toggle submenu hiện tại
  if (submenu.style.visibility === 'visible') {
      submenu.style.opacity = '0';
      submenu.style.visibility = 'hidden';
      submenu.style.pointerEvents = 'none';
      submenu.style.transform = 'translateY(-12px)';
  } else {
      submenu.style.opacity = '1';
      submenu.style.visibility = 'visible';
      submenu.style.pointerEvents = 'auto';
      submenu.style.transform = 'translateY(0)';
  }
}
