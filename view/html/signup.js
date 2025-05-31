document.addEventListener("DOMContentLoaded", function () {
  const signupForm = document.getElementById("signupForm");
  const submitButton = document.getElementById("signupSubmitButton");
  const ajaxFormMessagesDiv = document.getElementById("ajaxFormMessages");

  if (signupForm) {
    signupForm.addEventListener("submit", function (event) {
      event.preventDefault();

      ajaxFormMessagesDiv.textContent = "";
      ajaxFormMessagesDiv.className = "";
      ajaxFormMessagesDiv.style.display = "none";

      const originalButtonText = submitButton.textContent;
      submitButton.textContent = "Processing...";
      submitButton.disabled = true;

      const formData = new FormData(signupForm);

      fetch("../../controller/signup-process.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (!response.ok) {
            throw new Error(`Server responded with status: ${response.status}`);
          }
          return response.json();
        })
        .then((data) => {
          ajaxFormMessagesDiv.textContent =
            data.message || "Processing complete.";
          if (data.success) {
            ajaxFormMessagesDiv.classList.add("success");
            ajaxFormMessagesDiv.style.display = "block";
            if (data.redirectUrl) {
              setTimeout(() => {
                window.location.href = data.redirectUrl;
              }, 1500);
            } else {
              submitButton.textContent = originalButtonText;
              submitButton.disabled = false;
            }
          } else {
            ajaxFormMessagesDiv.classList.add("error");
            ajaxFormMessagesDiv.style.display = "block";
            submitButton.textContent = originalButtonText;
            submitButton.disabled = false;
          }
        })
        .catch((error) => {
          console.error("Signup AJAX Error:", error);
          ajaxFormMessagesDiv.textContent =
            "An unexpected error occurred. Please try again.";
          ajaxFormMessagesDiv.classList.add("error");
          ajaxFormMessagesDiv.style.display = "block";
          submitButton.textContent = originalButtonText;
          submitButton.disabled = false;
        });
    });
  }

  const togglePasswordVisibility = (inputId, toggleId) => {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);
    if (input && toggle) {
      toggle.addEventListener("click", function () {
        const type =
          input.getAttribute("type") === "password" ? "text" : "password";
        input.setAttribute("type", type);
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    }
  };
  togglePasswordVisibility("password", "togglePassword");
  togglePasswordVisibility("password2", "togglePassword2");
});
