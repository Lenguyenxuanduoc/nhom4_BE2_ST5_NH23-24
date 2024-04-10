// Header
let nav = document.querySelector('nav');
window.addEventListener('scroll', ()=>{
    nav.classList.toggle('shadow', window.scrollY > 0);
});

