$(document).ready(function() {
    // Obtener los campos de input
    var usernameField = $('#username');
    var emailField = $('#email');
    var passwordField = $('#password');
    var confirmPasswordField = $('#confirm_password');
  
    // Obtener los elementos de error
    var usernameError = $('#username-error');
    var emailError = $('#email-error');
    var passwordError = $('#password-error');
    var confirmPasswordError = $('#confirm-password-error');
  
  // Expresion regular para validar emails
  const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

  // Validar el nombre
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


  // Validar el email
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

  // Validar la contraseña
  passwordField.on('focusout', function() {
    var password = $(this).val().trim();
    if (password.length == 0) {
      passwordError.text('La contraseña es requerida');
      passwordField.addClass('error');
    } else {
      passwordError.text('');
      passwordField.removeClass('error');
    }
    checkErrors();
  });
  
  // Validar la confirmación de contraseña
  confirmPasswordField.on('focusout', function() {
    var confirmPassword = $(this).val().trim();
    var password = passwordField.val().trim();
    console.log(password, confirmPassword);
    if (password !== confirmPassword) {
    confirmPasswordError.text('Las contraseñas deben coincidir');
    confirmPasswordField.addClass('error');
    } else {
    confirmPasswordError.text('');
    confirmPasswordField.removeClass('error');
    }
    checkErrors();
  });

// Obtener el botón de submit
var submitButton = $('input[type="submit"]');

// Función para verificar si hay algún campo con error
function checkErrors() {
  // Verificar si hay algún campo con la clase "error"
  if ($('.error').length > 0) {
    // Si hay algún campo con error, deshabilitar el botón de submit
    submitButton.attr('disabled', true);
  } else {
    // Si no hay ningún campo con error, habilitar el botón de submit
    submitButton.attr('disabled', false);
  }
}

// Ejecutar la función al hacer click en el botón de submit
submitButton.on('click', function() {
  checkErrors();
});

});
  