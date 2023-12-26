let hamburger_btn = document.querySelector(".hamburger");
let navbar = document.querySelector(".navbarClass");

hamburger_btn.addEventListener("click" , ()=>{
    navbar.classList.toggle("display_navbar");
    hamburger_btn.children[0].classList.toggle("hamburgerline1");
    hamburger_btn.children[1].classList.toggle("hamburgerline2");
    hamburger_btn.children[2].classList.toggle("hamburgerline3");
})