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
