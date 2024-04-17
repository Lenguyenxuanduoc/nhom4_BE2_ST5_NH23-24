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

