let link=document.querySelector(".loginButton");
let popup=document.querySelector(".formLogin");
let close=popup.querySelector(".formLogin-close");
let form=document.querySelector(".formLogin");
let email=popup.querySelector("[name=email]");
let pass=popup.querySelector("[name=pass]");
// let free_text=popup.querySelector("[name=free-text]");

// let isStorageSupport=true;
// let storage="";
//
// try {
  //   storage=localStorage.getItem("name");
  // } catch (err) {
    //   isStorageSupport=false;
    // }

    link.addEventListener("click", function (evt) {
      evt.preventDefault();
      popup.classList.add("login-popup-show");

      //   if (storage) {
        //   login.value=storage;
        //   email.focus();
        // } else {
          //   login.focus();
          // }
        });

        close.addEventListener("click", function (evt) {
          evt.preventDefault();
          popup.classList.remove("login-popup-show");
          popup.classList.remove("login-popup-error");
        });

        form.addEventListener("submit", function (evt) {
          if (!pass.value || !email.value) {
            evt.preventDefault();
            popup.classList.remove("login-popup-error");
            popup.offsetWidth = popup.offsetWidth;
            popup.classList.add("login-popup-error");
          }
        });
        //  else {
          //   if (isStorageSupport) {
            //   localStorage.setItem("name", pass.value);
            //   }
            //   }
            // });

            // window.addEventListener("keydown", function (evt) {
              //   if (evt.keyCode===27) {
                //     evt.preventDefault();
                //     if (popup.classList.contains("login-popup-show")) {
                  //       popup.classList.remove("login-popup-show");
                  //     popup.classList.remove("login-popup-error");
                  //   }
                  // }
                  // });
