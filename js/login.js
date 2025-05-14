document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;
            emailError.textContent = '';
            passwordError.textContent = '';

            
            const emailValue = emailInput.value.trim();
            if (emailValue === '') {
                emailError.textContent = 'Email address is required.';
                isValid = false;
            } else if (emailValue.indexOf('@') === -1) { 
                emailError.textContent = 'Please enter a valid email address (must contain "@").';
                isValid = false;
            }
            if (passwordInput.value.trim() === '') {
                passwordError.textContent = 'Password is required.';
                isValid = false;
            }

            if (isValid) {                
                window.location.href = 'dashboard.html';
            } else {
                console.log('Login form has validation errors.');
            }
        });
    }
});