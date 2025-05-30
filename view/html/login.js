import { isValidEmail, isValidPassword } from "./common.js";

const field = document.getElementById("password");
const passToggle = document.getElementById("togglePassword");
passToggle.addEventListener("click", function (event) {
  if (passToggle.classList.contains("fa-eye")) {
    passToggle.classList.remove("fa-eye");
    passToggle.classList.add("fa-eye-slash");
    field.type = "text";
  } else {
    passToggle.classList.remove("fa-eye-slash");
    passToggle.classList.add("fa-eye");
    field.type = "password";
  }
});

const logbun = document.querySelector("#submit-button");
const email = document.getElementById("email");
const password = document.getElementById("password");
var mailErr = document.getElementById("emailError");
var passErr = document.getElementById("passwordError");
const form = document.getElementById("loginForm");

logbun.addEventListener("click", function (e) {
  e.preventDefault();

  var mailErr = "";
  var passErr = "";
  mailErr.textContent = isValidEmail(email.value);
  passErr.textContent = isValidPassword(password.value);

  if (isValidPassword(password.value) == "" && isValidEmail(email.value) == "")
    form.submit();
});
