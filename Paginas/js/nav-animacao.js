// Detecta quando a página é rolada
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("visible");
  } else {
    navbar.classList.remove("visible");
  }
});  

function checkScreenSize() {
  if (window.innerWidth > 768) { 
    window.removeEventListener("scroll", scrollHandler); 
    const navbar = document.getElementById("navbar");
    navbar.classList.add("visible"); 
  }
}
function scrollHandler() {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("visible");
  } else {
    navbar.classList.remove("visible");
  }
}

window.addEventListener("load", checkScreenSize);


window.addEventListener("resize", checkScreenSize);

checkScreenSize();
