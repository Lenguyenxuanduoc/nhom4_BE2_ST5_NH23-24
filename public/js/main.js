// Header
let nav = document.querySelector('nav');
window.addEventListener('scroll', ()=>{
nav.classList.toggle('shadow', window.scrollY > 0);
});

function img(anything){
document.querySelector('.slide').src = anything;
}

function change(change){
const line = document.querySelector('.home');
line.style.background = change;
}

// Function to scroll to car review container
function scrollToCarReview(){
const carReviewContainer = document.querySelector('.car-review-container');
const offsetTop = carReviewContainer.offsetTop;
window.scrollTo({
top: offsetTop,
behavior: 'smooth'
});
}

document.addEventListener("DOMContentLoaded", function() {
const specificationsPoints = document.querySelectorAll(".specifications-point");

specificationsPoints.forEach(function(point) {
const score = parseFloat(point.querySelector("h4 span").textContent) * 10;
const scoreBar = point.querySelector(".score-bar");
scoreBar.style.width = score + "%";
scoreBar.style.backgroundColor = '#0073d8';
});
});

// Specifications popup
function openPopup(popupID){
document.getElementById(popupID).style.display = "flex";
}

function closePopup(popupID){
document.getElementById(popupID).style.display = "none";
}

window.addEventListener('click', function(event){
var popup = document.getElementById('specs-popup');
if (event.target == popup){
closePopup('specs-popup');
}
});

window.addEventListener('click', function(event){
var popup = document.getElementById('login-popup');
if (event.target == popup){
closePopup('login-popup');
}
});


// ---------------- Upload Images ----------------
// Tạo một mảng chứa các id của hình ảnh và input file
let imageIds = ["profile-img1", "profile-img2", "profile-img3", "profile-img4", "profile-img5"];
let inputIds = ["input-file-img1", "input-file-img2", "input-file-img3", "input-file-img4", "input-file-img5"];

// Duyệt qua mảng và gán sự kiện onchange cho mỗi input file
for (let i = 0; i < inputIds.length; i++) {
    let profilePic = document.getElementById(imageIds[i]);
    let inputFile = document.getElementById(inputIds[i]);
    if (inputFile){
        inputFile.onchange = function() {
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        };
    }
}

function setInputOnChange(inputId, profilePicId) {
    let profilePic = document.getElementById(profilePicId);
    let inputFile = document.getElementById(inputId);
    
    if (inputFile) {
        inputFile.onchange = function() {
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        };
    }
}

// Upload image từ file input (Avatar) trang add car 
setInputOnChange("input-file-avatar", "profile-avatar");

// Upload image từ file input (Brand Logo) trang add brand
setInputOnChange("input-file-brand-logo", "profile-brand-logo");

// Upload image từ file input (Brand Logo) trang add brand
setInputOnChange("input-file-brand-banner", "profile-brand-banner");



// Lặp qua tất cả các ảnh và thiết lập thuộc tính src của chúng thành một giá trị rỗng
function clearImages() {
    for (let i = 1; i <= 5; i++) {
        let profileImg = document.getElementById('profile-img' + i);
        profileImg.src = ''; // Thiết lập src thành chuỗi rỗng
    }
}

function clearInputs() {
    for (let i = 1; i <= 5; i++) {
        let inputFile = document.getElementById('input-file-img' + i);
        inputFile.value = ''; // Đặt giá trị của input thành chuỗi rỗng
    }
}

// Gắn sự kiện click cho nút "Clear" và gọi hàm clearImages()
document.querySelector('.btn-dark').addEventListener('click', function() {
    clearImages();
    clearInputs();
});


// Hiển thị bảng confirm xóa
// document.addEventListener("DOMContentLoaded", function() {
//     $('#deleteConfirmationModal').on('show.bs.modal', function (event) {
//         var button = $(event.relatedTarget); 
//         var carId = button.data('id'); 
//         var carName = button.data('name');

//         // Update the modal's content
//         var modal = $(this);
//         modal.find('#entityName').text(carName);

//         // Set up the confirm delete button
//         $('#confirmDeleteBtn').off('click').on('click', function() {
//             window.location.href = `/cars/delete/${carId}`;
//         });
//     });
// });


document.addEventListener("DOMContentLoaded", function() {
    $('#deleteConfirmationModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var entityId = button.data('id');
        var entityName = button.data('name');
        var deleteRoute = button.data('delete-route');

        // Update the modal's content
        var modal = $(this);
        modal.find('#entityName').text("" + entityName + "");

        // Set up the confirm delete button
        $('#confirmDeleteBtn').off('click').on('click', function() {
            window.location.href = `/${deleteRoute}/${entityId}`;
        });
    });
});


// Hiển thị thông báo success, error trong 1.2s
setTimeout(function() {
    $('#errorAlert').fadeOut('slow');
}, 1200);

setTimeout(function() {
    $('#successAlert').fadeOut('slow');
}, 1200);