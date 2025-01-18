// "use strict";

/**
 * MOBILE NAVBAR TOGGLE
 */

// funcao do menu

window.addEventListener("scroll", function () {
  let header = document.querySelector("#header");
  header.classList.toggle("rolagem", window.scrollY > 0);
});

// // tela de login

const telalogin = document.getElementById("telalogin");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  telalogin.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  telalogin.classList.remove("active");
});