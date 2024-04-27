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


// Hiển thị hình ảnh khi chọn từ input file
// document.getElementById('imageInput').addEventListener('change', function() {
//     var preview = document.getElementById('imagePreview');
//     preview.innerHTML = '';
//     var files = this.files;
//     var maxImagesToShow = 5;
//     for (var i = 0; i < Math.min(files.length, maxImagesToShow); i++) {
//         var file = files[i];
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             var img = document.createElement('img');
//             img.style.maxWidth = '170px'; 
//             img.style.marginRight = '10px'; 
//             img.style.marginBottom = '10px'; 
//             img.src = e.target.result;
//             preview.appendChild(img);
//         };
//         reader.readAsDataURL(file);
//     }
// });


// Hiển thị hình ảnh khi chọn từ input file
// document.getElementById('avatarInput').addEventListener('change', function() {
//     var preview = document.getElementById('avatarPreview');
//     preview.innerHTML = '';
//     var files = this.files;
//     var maxImagesToShow = 1;
//     for (var i = 0; i < Math.min(files.length, maxImagesToShow); i++) {
//         var file = files[i];
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             var img = document.createElement('img');
//             img.style.maxWidth = '170px'; 
//             img.style.marginRight = '10px'; 
//             img.style.marginBottom = '10px'; 
//             img.src = e.target.result;
//             preview.appendChild(img);
//         };
//         reader.readAsDataURL(file);
//     }
// });

// Hiển thị hình ảnh khi chọn từ input file (edit car page)
// function previewImages(input, previewId) {
//     var preview = document.getElementById(previewId);
//     preview.innerHTML = '';
//     var files = input.files;
//     var maxImagesToShow = 1;
//     for (var i = 0; i < Math.min(files.length, maxImagesToShow); i++) {
//         var file = files[i];
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             var img = document.createElement('img');
//             img.style.maxWidth = '170px'; 
//             img.style.marginRight = '10px'; 
//             img.style.marginBottom = '10px'; 
//             img.src = e.target.result;
//             preview.appendChild(img);
//         };
//         reader.readAsDataURL(file);
//     }
// }

// Hiển thị avatar khi chọn từ input file (edit car page)
// function previewAvatar(input, previewID) {
//     var preview = document.getElementById(previewID);
//     preview.innerHTML = '';
    
//     var file = input.files[0]; // Chỉ lấy file đầu tiên

//     var reader = new FileReader();
//     reader.onload = function(e) {
//         var img = document.createElement('img');
//         img.style.maxWidth = '170px'; 
//         img.style.marginRight = '10px'; 
//         img.style.marginBottom = '10px'; 
//         img.src = e.target.result;
//         preview.appendChild(img);
//     };
//     reader.readAsDataURL(file);
// }

// Upload image từ file input
let profilePic = document.getElementById("profile-pic");
let inputFile = document.getElementById("input-file");
inputFile.onchange = function(){
    profilePic.src = URL.createObjectURL(inputFile.files[0])
}