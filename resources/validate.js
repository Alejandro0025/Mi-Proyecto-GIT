const expresiones = {
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password:
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  telefono: /^\d{7,14}$/, // 7 a 14 numeros.
};

// Condiciones para contraseña
// Minimo 8 caracteres
// Maximo 15
// Al menos una letra mayúscula
// Al menos una letra minucula
// Al menos un dígito
// No espacios en blanco
// Al menos 1 caracter especial

const form = document.getElementById("form-Login");
const inputs = document.querySelectorAll("#form-Login input");

const campos = {
  email: false,
  password: false,
};

const validateForm = (e) => {
  switch (e.target.name) {
    case "email":
      if (expresiones.correo.test(e.target.value)) {
        document.getElementById("email").classList.add("is-valid");
        document.getElementById("email").classList.remove("is-invalid");
        campos.email = true;
      } else {
        document.getElementById("email").classList.remove("is-valid");
        document.getElementById("email").classList.add("is-invalid");
        campos.email = false;
      }
      break;
    case "password":
      if (expresiones.password.test(e.target.value)) {
        document.getElementById("password").classList.add("is-valid");
        document.getElementById("password").classList.remove("is-invalid");
        campos.password = true;
      } else {
        document.getElementById("password").classList.remove("is-valid");
        document.getElementById("password").classList.add("is-invalid");
        campos.password = false;
      }
      break;
  }
};

inputs.forEach((input) => {
  input.addEventListener("keyup", validateForm);
  input.addEventListener("blur", validateForm);
});

// form.addEventListener("click", (e) => {
//   e.preventDefault();
// });
