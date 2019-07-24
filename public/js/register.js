window.onload=function(){
  //Aquí guardo el formulario con sus elementos
  var registerForm = document.forms[0]
  let formulario = document.querySelector('.formV');
  formulario.elements.first_name.focus();
  console.log(formulario.elements);
  console.log(formulario.elements.first_name);
  
  
  //Aquí armo mi función para que se ejecute una vez que el usuario envie ó de enter en cada input
  registerForm.onsubmit = function(evento) {
    //Aquí evito que por defecto se envie el formulario
    //Si el formulario pasa las validaciones doy el ingreso al usuario
    if (!validateRegisterForm()) {
      evento.preventDefault()
    }else{
      registerForm.submit()
    }
  }
  //Esta es la función que valida todos los campos del formulario
  function validateRegisterForm() {
    //Esta manera de programarlo en ECMA6, se llama destructuración de código, tal como pregunto Facu.
    let {first_name, last_name, email, password, password_confirmation, avatar, terminos} = formulario.elements
    //De esta forma se programaba antes del 2015
    //email = registerForm.elements.email
    //password = registerForm.elements.password
    //Y así con cada una de las variables
    //Esta es una forma mas corta de hacer un if simple  
    

    if (!validateFirstName(first_name)) return false;
    if (!validateLastName(last_name)) return false;
    if (!validateEmail(email)) return false;
    if (!validatePassword(password)) return false;
    if (!validatePasswordConfirmation(password, password_confirmation)) return false;
    if (!validateAvatar(avatar)) return false;
    if (!validateTerminos(terminos)) return false;
   return true;
    }
    
    function validateFirstName(first_name) {
      let errorFirstName = document.getElementById('errorFirstName');
      if (first_name.value.length < 2){
        errorFirstName.innerHTML = "Nombre de usuario no puede estar vacio";
        errorFirstName.classList.add('alert-danger');
        first_name.classList.add('is-invalid');
        return false;
      } else{
        errorFirstName.innerHTML = "";
        errorFirstName.classList.remove('alert-danger');
        first_name.classList.remove('is-invalid');
        first_name.classList.add('is-valid');
        formulario.elements.last_name.focus();
        return true;
      }
  
     // swal('Error', 'Ingrese un nombre de usuario válido', 'error')
      
    }

    function validateLastName(last_name) {
      let errorLastName = document.getElementById('errorLastName');
      if (last_name.value.length < 1){
        errorLastName.innerHTML = "El apellido del usuario no puede estar vacio";
        errorLastName.classList.add('alert-danger');
        last_name.classList.add('is-invalid');
        return false;
      } else{
        errorLastName.innerHTML = "";
        errorLastName.classList.remove('alert-danger');
        last_name.classList.remove('is-invalid');
        last_name.classList.add('is-valid');
        formulario.elements.email.focus();
        return true;
      }
  
     // swal('Error', 'Ingrese un nombre de usuario válido', 'error')
      
    }
  
    function validateEmail(email) {
      let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
      let error = document.getElementById('errorEmail');


      if (!re.test(email.value)){ 
        
        email.classList.add('is-invalid'); 
        console.log(errorEmail);
        error.innerHTML= "Debe colocar un email válido";
        error.classList.add('alert-danger');
        //errorEmail.classList.add('alert-danger');
       // email.addEventListener('change',cambioNombre);
      return false
    }else{
      error.innerHTML= "";
      error.classList.remove('alert-danger');
      email.classList.remove('is-invalid'); 
      email.classList.add('is-valid');
      formulario.elements.password.focus()
      return true;
    }

    }
  
    function validatePassword(password) {
      let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
      let errorPassword = document.getElementById('errorPassword');

      if (!re.test(password.value)) {
        errorPassword.innerHTML = "Debe especificar una contraseña válida, minimo 6 digitos";
        errorPassword.classList.add('alert-danger');
        password.classList.add('is-invalid');
        return false;  

      }else{
        errorPassword.innerHTML = "";
        errorPassword.classList.remove('alert-danger');
        password.classList.remove('is-invalid');
        password.classList.add('is-valid');
        formulario.elements.password_confirmation.focus();
        // swal('Error', 'Ingrese una contraseña válida', 'error')
        return true;
      }
  
     
    }
  
    function validatePasswordConfirmation(password,repeat){
      console.log(password.value);
      console.log(repeat.value);
      if (password.value != repeat.value) {
        errorPasswordConfirmation.innerHTML = "Las conraseñas no coinciden";
        errorPasswordConfirmation .classList.add('alert-danger');
        repeat.classList.add('is-invalid');
        return false;  

      }else{
        errorPasswordConfirmation .innerHTML = "";
        errorPasswordConfirmation.classList.remove('alert-danger');
        repeat.classList.remove('is-invalid');
        repeat.classList.add('is-valid');
        formulario.elements.terminos.focus();
        // swal('Error', 'Ingrese una contraseña válida', 'error')
        return true;
      }  
      //swal('Error', 'Las contraseñas no son iguales', 'error')
      
    }
  
    function validateTerminos(terminos) {
      let errorTerminos = document.getElementById('errorTerminos');
      if (!terminosChecked.checked) {
        console.log('Entro terminos');
        console.log(terminosChecked);
        console.log(terminosChecked.checked);
        errorTerminos.innerHTML = "Debe aceptar los terminos y condiciones";
        errorTerminos.classList.add('alert-danger');
        terminosChecked.classList.add('is-invalid');
        return false;
      }else{
        errorTerminos.innerHTML = "";
        errorTerminos.classList.remove('alert-danger');
        terinosChecked.classList.remove('is-invalid');
        terminosChecked.classList.add('is-valid');
        console.log("Se va a salir de terminos");
        return true;

      }
  
     // swal('Error', 'Debe aceptar los términos y condiciones', 'error')
    }
    
    
  
    
}   

