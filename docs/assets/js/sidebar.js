let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

// document.addEventListener("DOMContentLoaded", function() {
//   const navLinks = document.querySelectorAll(".sidebar .nav-links > li > a");
//   const subMenuLinks = document.querySelectorAll(".sidebar .nav-links li .sub-menu a");

//   navLinks.forEach(link => {
//     link.addEventListener("click", function(event) {
//       event.preventDefault();

//       // Xóa class active khỏi tất cả các mục cha li
//       navLinks.forEach(item => item.parentElement.classList.remove("active"));
//       subMenuLinks.forEach(subItem => subItem.classList.remove("active"));

//       // Thêm class active vào mục cha li được click
//       if (this.closest("li")) {
//         this.closest("li").classList.add("active");
//       }
//     });
//   });

//   subMenuLinks.forEach(link => {
//     link.addEventListener("click", function(event) {
//       event.preventDefault();

//       // Xóa class active khỏi tất cả các mục cha li và mục con
//       navLinks.forEach(item => item.parentElement.classList.remove("active"));
//       subMenuLinks.forEach(subItem => subItem.classList.remove("active"));

//       // Thêm class active vào liên kết trong submenu được click
//       this.classList.add("active");

//       // Thêm class active vào mục cha li của mục con
//       if (this.closest("li")) {
//         this.closest("li").parentElement.closest("li").classList.add("active");
//       }
//     });
//   });
// });
