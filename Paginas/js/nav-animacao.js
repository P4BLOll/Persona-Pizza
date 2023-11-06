// Detecta quando a página é rolada
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("visible");
  } else {
    navbar.classList.remove("visible");
  }
});  