document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("signupForm");
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirm-password");

  const nameError = document.getElementById("nameError");
  const emailError = document.getElementById("emailError");
  const passwordError = document.getElementById("passwordError");
  const confirmPasswordError = document.getElementById("confirmPasswordError");

  const MIN_PASSWORD_LENGTH = 6;

  form.addEventListener("submit", function (event) {
    let isValid = true;

    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    if (nameInput.value.trim() === "") {
      nameError.textContent = "Full Name is required.";
      isValid = false;
    }

    const emailValue = emailInput.value.trim();
    if (emailValue === "") {
      emailError.textContent = "Email Address is required.";
      isValid = false;
    }

    const passwordValue = passwordInput.value;
    if (passwordValue === "") {
      passwordError.textContent = "Password is required.";
      isValid                   = false;
    } else if (passwordValue.length < MIN_PASSWORD_LENGTH) {
      passwordError.textContent = `Password must be at least ${MIN_PASSWORD_LENGTH} characters long.`;
      isValid = false;
    }

    const confirmPasswordValue = confirmPasswordInput.value;
    if (confirmPasswordValue === "") {
      confirmPasswordError.textContent = "Confirm Password is required.";
      isValid = false;
    } else if (passwordValue !== confirmPasswordValue) {
      confirmPasswordError.textContent = "Passwords do not match.";
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});
