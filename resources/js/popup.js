let link=document.querySelector(".account-menu-enter");
let popup=document.querySelector(".write-us-form");
let close=popup.querySelector(".write-us-form-close");
let form=document.querySelector(".write-us-form");
let email=popup.querySelector("[name=email]");
let pass=popup.querySelector("[name=password]");

link.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.add("login-popup-show");
});

close.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.remove("login-popup-show");
  popup.classList.remove("is-invalid");
});

form.addEventListener("submit", function (evt) {
  if (!pass.value || !email.value) {
  evt.preventDefault();
  popup.innerHTML = "<h3>Usuario o contraseña incorrecta</h2>";
  // popup.offsetWidth = popup.offsetWidth;
  popup.classList.add("is-invalid");
}
});
