let mobileFragment = document.createDocumentFragment();
let desktopFragment = document.createDocumentFragment();

function toggleSections() {
  const mobileSection = document.querySelector('.mobile_client_section');
  const desktopSection = document.querySelector('.desktop-carousel');

  if (window.innerWidth <= 768) { // Tỷ lệ mobile (<= 768px)
    if (desktopSection && desktopSection.parentNode) {
      desktopFragment.appendChild(desktopSection);
    }
    if (!mobileSection.parentNode && mobileFragment.contains(mobileSection)) {
      document.querySelector('.row').appendChild(mobileSection);
    }
  } else { // Tỷ lệ desktop (> 768px)
    if (mobileSection && mobileSection.parentNode) {
      mobileFragment.appendChild(mobileSection);
    }
    if (!desktopSection.parentNode && desktopFragment.contains(desktopSection)) {
      document.querySelector('.row').appendChild(desktopSection);
    }
  }
}

// Gọi hàm khi tải trang
window.addEventListener('load', toggleSections);

// Gọi hàm khi thay đổi kích thước màn hình
window.addEventListener('resize', toggleSections);
