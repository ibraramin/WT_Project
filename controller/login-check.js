document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("loginForm");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");

  const emailError = document.getElementById("emailError");
  const passwordError = document.getElementById("passwordError");

  form.addEventListener("submit", function (event) {
    let isValid = true;

    emailError.textContent = "";
    passwordError.textContent = "";

    if (emailInput.value.trim() === "") {
      emailError.textContent = "Email Address is required.";
      isValid = false;
    }

    if (passwordInput.value === "") {
      passwordError.textContent = "Password is required.";
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});
