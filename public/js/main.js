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

// ---------------- Start upload image trang add car ----------------
// Tạo một mảng chứa các id của hình ảnh và input file
let imageIds = ["profile-img1", "profile-img2", "profile-img3", "profile-img4", "profile-img5"];
let inputIds = ["input-file-img1", "input-file-img2", "input-file-img3", "input-file-img4", "input-file-img5"];

// Duyệt qua mảng và gán sự kiện onchange cho mỗi input file
for (let i = 0; i < inputIds.length; i++) {
    let profilePic = document.getElementById(imageIds[i]);
    let inputFile = document.getElementById(inputIds[i]);
    inputFile.onchange = function() {
        profilePic.src = URL.createObjectURL(inputFile.files[0]);
    };
}

// Upload image từ file input (Avatar)
let profileAvatar = document.getElementById("profile-avatar");
let inputFile = document.getElementById("input-file");
inputFile.onchange = function(){
profileAvatar.src = URL.createObjectURL(inputFile.files[0])
}
// ---------------- End upload image trang add car ----------------

