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

function openFormXLCHT600() {
    document.getElementById("myForm").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormXLCHT600() {
    document.getElementById("myForm").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormXLCHT_600() {
    document.getElementById("xlct-600").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormXLCHT_600() {
    document.getElementById("xlct-600").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormCTTMM2000() {
    document.getElementById("ctmm2000").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormCTTMM2000() {
    document.getElementById("ctmm2000").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormCTTMM_2000() {
    document.getElementById("ctmm-2000").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormCTTMM_2000() {
    document.getElementById("ctmm-2000").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormGPMT() {
    document.getElementById("gpmt").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormGPMT() {
    document.getElementById("gpmt").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormDGTD() {
    document.getElementById("dgtd").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormDGTD() {
    document.getElementById("dgtd").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormBCCTBVMT2022() {
    document.getElementById("bcctbvm2022").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormBCCTBVMT2022() {
    document.getElementById("bcctbvm2022").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormCTCK2000() {
    document.getElementById("xlctck2000").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormCTCK2000() {
    document.getElementById("xlctck2000").style.display = "none";
    document.body.classList.remove("no-scroll");
}

function openFormCTCK_2000() {
    document.getElementById("xlctck-2000").style.display = "block";
    document.body.classList.add("no-scroll");
    document.getElementById("popupForm").style.display = "none";
}

function closeFormCTCK_2000() {
    document.getElementById("xlctck-2000").style.display = "none";
    document.body.classList.remove("no-scroll");
}




// Thêm sự kiện cho các nút đóng popup của từng form
document.querySelector("#popupForm .close").addEventListener("click", hidePopup);
document.querySelector("#popupFormRegister .close").addEventListener("click", hideRegister);
