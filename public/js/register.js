// let link=document.querySelector(".loginButton");
// let popup=document.querySelector(".formLogin");
// let close=popup.querySelector(".formLogin-close");
// let form=document.querySelector(".formLogin");
// let email=popup.querySelector("[name=email]");
// let pass=popup.querySelector("[name=password]");
//
// let storage="";
//
// link.addEventListener("click", (evt) => {
//   evt.preventDefault();
//   popup.classList.add("login-popup-show");
//
//   if (storage) {
//     login.value=storage;
//     email.focus();
//   } else {
//     pass.focus();
//   }
// })
//
// close.addEventListener("click", function (evt) {
//   evt.preventDefault();
//   popup.classList.remove("login-popup-show");
//   popup.classList.remove("login-popup-error");
// });
//
// form.addEventListener("submit", function (evt) {
//   if (!pass.value || !email.value || pass.value != password) {
//     evt.preventDefault();
//     popup.classList.remove("login-popup-error");
//     popup.offsetWidth = popup.offsetWidth;
//     popup.classList.add("login-popup-error");
//   }
// });
