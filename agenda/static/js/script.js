const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");

navToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

// funcao do menu

window.addEventListener("scroll", function () {
  let header = document.querySelector("#header");
  header.classList.toggle("rolagem", window.scrollY > 0);
});

// Função da area de cadastro cliente da opção de visualizar a senha
const passwordIcons = document.querySelectorAll(".password-icon");

passwordIcons.forEach((icon) => {
  icon.addEventListener("click", function () {
    const input = this.parentElement.querySelector(".form-control");
    input.type = input.type === "password" ? "text" : "password";
    this.classList.toggle("fa-eye");
  });
});