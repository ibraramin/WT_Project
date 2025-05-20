document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const fullNameInput = document.getElementById("fullName");
  const emailInput = document.getElementById("email");
  const subjectInput = document.getElementById("subject");
  const messageInput = document.getElementById("message");

  const fullNameError = document.getElementById("fullNameError");
  const emailError = document.getElementById("emailError");
  const subjectError = document.getElementById("subjectError");
  const messageError = document.getElementById("messageError");

  form.addEventListener("submit", function (event) {
    fullNameError.textContent = "";
    emailError.textContent = "";
    subjectError.textContent = "";
    messageError.textContent = "";

    if (fullNameInput.value.trim() === "") {
      fullNameError.textContent = "Full Name is required.";
    }

    if (emailInput.value.trim() === "") {
      emailError.textContent = "Email Address is required.";
    }

    if (subjectInput.value.trim() === "") {
      subjectError.textContent = "Subject is required.";
    }

    if (messageInput.value.trim() === "") {
      messageError.textContent = "Your Message is required.";
    }

  });
});
