document.addEventListener("DOMContentLoaded", function () {
  const signupForm = document.getElementById("signupForm");
  const submitButton = document.getElementById("signupSubmitButton");
  const ajaxFormMessagesDiv = document.getElementById("ajaxFormMessages");

  signupForm.addEventListener("submit", function (event) {
    event.preventDefault();

    ajaxFormMessagesDiv.textContent = "Processing...";
    ajaxFormMessagesDiv.style.color = "inherit";
    ajaxFormMessagesDiv.className = "";
    ajaxFormMessagesDiv.style.display = "block";

    const formData = new FormData(signupForm);

    fetch("../../controller/signup-process.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())

      .then((data) => {
        ajaxFormMessagesDiv.textContent = data.message;

        if (data.success) {
          ajaxFormMessagesDiv.style.color = "green";
          if (data.redirectUrl) {
            window.location.href = data.redirectUrl;
          }
        } else {
          ajaxFormMessagesDiv.style.color = "red";
        }
      })
      .catch((error) => {
        console.error("Signup AJAX Error:", error);
        ajaxFormMessagesDiv.textContent = "Signup failed or an error occurred.";
        ajaxFormMessagesDiv.style.color = "red";
      });
  });

  const togglePasswordVisibility = (inputId, toggleId) => {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);

    toggle.addEventListener("click", function () {
      input.setAttribute(
        "type",
        input.getAttribute("type") === "password" ? "text" : "password"
      );
      this.classList.toggle("fa-eye");
      this.classList.toggle("fa-eye-slash");
    });
  };

  togglePasswordVisibility("password", "togglePassword");
  togglePasswordVisibility("password2", "togglePassword2");
});
