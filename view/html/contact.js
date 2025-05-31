import { isValidEmail, isValidPassword } from "./common.js";

const form = document.getElementById("contactForm");
const subButton = document.querySelector(".btn-submit-message");
const name = document.getElementById("fullName");
const mail = document.getElementById("email");
const sub = document.getElementById("subject");
const message = document.getElementById("message");
let mailerr = document.getElementById("emailError");
let nameerr = document.getElementById("fullNameError");
let suberr = document.getElementById("subjectError");
let messerr = document.getElementById("messageError");

subButton.addEventListener("click", function (e) {
  e.preventDefault();

  let formIsValid = true;

  if (mailerr) mailerr.textContent = "";
  if (nameerr) nameerr.textContent = "";
  if (suberr) suberr.textContent = "";
  if (messerr) messerr.textContent = "";

  if (name && name.value.trim() === "") {
    if (nameerr) nameerr.textContent = "Name can not be empty";
    formIsValid = false;
  }

  if (mail && mailerr) {
    const emailValidationResult = isValidEmail(mail.value);
    if (emailValidationResult !== "") {
      mailerr.textContent = emailValidationResult;
      formIsValid = false;
    }
  } else if (mail && !mailerr) {
    console.warn("Email error display element (mailerr) not found.");
  }

  if (sub && sub.value.trim() === "") {
    if (suberr) suberr.textContent = "Subject can not be empty";
    formIsValid = false;
  }

  if (message && message.value.trim() === "") {
    if (messerr) messerr.textContent = "Message can not be empty";
    formIsValid = false;
  }

  if (formIsValid) {
    form.submit();
  }
});
