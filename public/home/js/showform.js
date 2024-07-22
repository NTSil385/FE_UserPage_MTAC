function showPopup() {
    document.getElementById("popupForm").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupFormRegister").style.display = "none";
}

function hidePopup() {
    document.getElementById("popupForm").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function showRegister() {
    document.getElementById("popupFormRegister").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function hideRegister() {
    document.getElementById("popupFormRegister").style.display = "none";
    document.body.classList.remove("no-scroll");
}

// Thêm sự kiện cho các nút đóng popup của từng form
document.querySelector("#popupForm .close").addEventListener("click", hidePopup);
document.querySelector("#popupFormRegister .close").addEventListener("click", hideRegister);
