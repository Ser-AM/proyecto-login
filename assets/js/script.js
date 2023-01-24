
  // Expresion regular para validar emails
  const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

// Validar el nombre
function validarUsername(){
  var usernameField = $('#username');
  var usernameError = $('#username-error');
  usernameField.on('focusout', function() {
    var username = $(this).val().trim();
    if (username.length == 0) {
      usernameError.text('El nombre es requerido');
      usernameField.addClass('error');
    } else {
      usernameError.text('');
      usernameField.removeClass('error');
    }
    checkErrors();
  });
}

// Validar el email
function validarEmail(){
  var emailField = $('#email');
  var emailError = $('#email-error');
  emailField.on('focusout', function() {
    var email = $(this).val().trim();
    if (email.length > 0) {
      // Verificar si el email es válido
      if (emailRegex.test(email)) {
        emailError.text('');
        emailField.removeClass('error');
      } else {
        emailError.text('Ingresa un email válido');
        emailField.addClass('error');
      }
    } else {
      emailError.text('El email es requerido');
      emailField.addClass('error');
    }
    checkErrors();
  });
}

// Validar la contraseña
function validarPassword(){
  var passwordField = $('#password');
  var passwordError = $('#password-error');
  passwordField.on('focusout', function() {
    var password = $(this).val().trim();
    if (password.length == 0) {
      passwordError.text('La contraseña es requerida');
      passwordField.addClass('error');
    }else {
      passwordError.text('');
      passwordField.removeClass('error');
    }
    checkErrors();
  });
}
// Validar la contraseña
function validarPasswordSignup(){
  var passwordField = $('#password');
  var passwordError = $('#password-error');
  passwordField.on('focusout', function() {
    var password = $(this).val().trim();
    if (password.length == 0) {
      passwordError.text('La contraseña es requerida');
      passwordField.addClass('error');
    }else if (password.length < 8) {
      passwordError.text('La contraseña debe tener al menos 8 caracteres');
      passwordField.addClass('error');
    }else if (password.length > 16) {
      passwordError.text('La contraseña debe tener como máximo 16 caracteres');
      passwordField.addClass('error');
    }else if (!/[a-z]/.test(password)) {
      passwordError.text('La contraseña debe tener al menos una letra minúscula');
      passwordField.addClass('error');
      }else if (!/[A-Z]/.test(password)) {
      passwordError.text('La contraseña debe tener al menos una letra mayúscula');
      passwordField.addClass('error');
      } else {
      passwordError.text('');
      passwordField.removeClass('error');
    }
    checkErrors();
  });
}
// Validar la confirmación de contraseña
function validarConfirmacionPassword(){
  var confirmPasswordField = $('#confirm_password');
  var confirmPasswordError = $('#confirm-password-error');
  confirmPasswordField.on('focusout', function() {
    var password = $('#password').val().trim();
    var confirmPassword = $('#confirm_password').val().trim();
    if (password !== confirmPassword) {
    confirmPasswordError.text('Las contraseñas deben coincidir');
    confirmPasswordField.addClass('error');
    } else {
    confirmPasswordError.text('');
    confirmPasswordField.removeClass('error');
    }
    checkErrors();
  });
}

// Función para verificar si hay algún campo con error
function checkErrors() {
  // Verificar si hay algún campo con la clase "error"
  if ($('.error').length > 0) {
    // Si hay algún campo con error, deshabilitar el botón de submit
    $('input[type="submit"]').attr('disabled', true);
  } else {
    // Si no hay ningún campo con error, habilitar el botón de submit
    $('input[type="submit"]').attr('disabled', false);
  }
}

// Ejecutar la función al hacer click en el botón de submit
$('input[type="submit"]').on('click', function() {
  checkErrors();
});

$(document).on("click", "#login-button", function(event) {
  event.preventDefault(); // evitar que se recargue la página
  var formData = $("#login-form").serialize(); // obtener los datos del form
  $.ajax({
      type: "POST",
      url: "./controllers/login_controller.php",
      data: formData,
      success: function(response) {
        response = JSON.parse(response);
        if (response.status == "success") {
            cargarVista({view: "welcome"}, "#contenido")
        } else if (response.status == "error") {
          var message = response.message;
          $("#error-div").text(message);
          $("#error-div").show();
      }else{
            // si no es exitoso, mostrar mensaje de error
            alert("Error desconocido");
        }
      }
  });
});
//  cualquier enlace con el data-view puede indicar cual es la vista que quiere cargar 
$(document).on("click", ".link-cambio-vista", function(e) {
e.preventDefault();
var view = $(this).data("view");
cargarVista({view: view}, "#contenido")
});


//  Cargar por ajax la vista o partial que se quiere.
//  El primer parametro es la vista que se quiere mostrar, el segundo es el elemento en el que se quiere cargar.
//  Hacerlo con ambos parametros hace que sea valida tanto para cambiar de vista del contenido, como para cambiar de sidebar o incluso de header.
function cargarVista(datos, elemento) {
  $.ajax({
      type: 'POST',
      url: 'http://proyecto-login.monroy.dev/controllers/getView.php',
      data: datos,
      success: function(response) {
          $(elemento).html(response);
      }
  });
}
