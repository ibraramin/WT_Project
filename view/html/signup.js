import { isValidEmail, isValidPassword, isValidUsername } from "./common.js";

const field = document.getElementById("password");
const field2 = document.getElementById("password2");
const passToggle = document.getElementById("togglePassword");
const passToggle2 = document.getElementById("togglePassword2");
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
passToggle2.addEventListener("click", function (event) {
  if (passToggle2.classList.contains("fa-eye")) {
    passToggle2.classList.remove("fa-eye");
    passToggle2.classList.add("fa-eye-slash");
    field2.type = "text";
  } else {
    passToggle2.classList.remove("fa-eye-slash");
    passToggle2.classList.add("fa-eye");
    field2.type = "password";
  }
});

const logbun = document.querySelector("#signupSubmitButton");
const email = document.getElementById("email");
const password = document.getElementById("password");
const conpassword = document.getElementById("password2");
const username = document.getElementById("username");
var mailErr = document.getElementById("emailError");
var passErr = document.getElementById("passwordError");
var conpassErr = document.getElementById("confirmpasswordError");
var nameErr = document.getElementById("nameError");
const form = document.getElementById("signupForm");

logbun.addEventListener("click", function (e) {
  e.preventDefault();
  mailErr.textContent    = isValidEmail(email.value);
  passErr.textContent    = isValidPassword(password.value);
  conpassErr.textContent = isValidPassword(password.value);
  nameErr.textContent    = isValidUsername(username.value);

  if (password.value != conpassword.value)
    passErr.textContent = "Confirm Password and password has to be same";

  if (
    isValidEmail(email.value) == "" &&
    isValidPassword(password.value) == "" &&
    password.value == conpassword.value &&
    isValidEmail(username.value)
  ) {
    form.submit();
  }
});
