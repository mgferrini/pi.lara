let link=document.querySelector(".loginButton");
let popup=document.querySelector(".formLogin");
let close=popup.querySelector(".formLogin-close");
let form=document.querySelector(".formLogin");
let email=popup.querySelector("[name=email]");
let pass=popup.querySelector("[name=password]");
let errorLogin = document.getElementById('errorLogin');


link.addEventListener("click", (evt) => {
  evt.preventDefault();
  popup.classList.add("login-popup-show");

//   if (storage) {
//     pass.value=storage;
//     email.focus();
//   } else {
//     pass.focus();
//   }
})

close.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.remove("login-popup-show");
  popup.classList.remove("is-invalid");
});

form.addEventListener("submit", (evt) => {
  if (!pass.value || !email.value || pass.value) {
    evt.preventDefault();
    popup.classList.add("is-invalid");
    errorLogin.classList.add('alert-danger');
    errorLogin.innerHTML = "Usuario o Contraseña incorrecta";
  }
});
