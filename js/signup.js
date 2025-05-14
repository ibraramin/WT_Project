document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.getElementById('signupForm');
    const fullNameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');

    const fullNameError = document.getElementById('fullNameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');

    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;

            fullNameError.textContent = '';
            emailError.textContent = '';
            passwordError.textContent = '';
            confirmPasswordError.textContent = '';

            
            if (fullNameInput.value.trim() === '') {
                fullNameError.textContent = 'Full name is required.';
                isValid = false;
            }

            
            const emailValue = emailInput.value.trim();
            if (emailValue === '') {
                emailError.textContent = 'Email address is required.';
                isValid = false;
            } else if (emailValue.indexOf('@') === -1) { 
                emailError.textContent = 'Please enter a valid email address (must contain "@").';
                isValid = false;
            }

            
            const passwordValue = passwordInput.value.trim(); 
            if (passwordValue === '') {
                passwordError.textContent = 'Password is required.';
                isValid = false;
            }
            
            const confirmPasswordValue = confirmPasswordInput.value.trim(); 
            if (confirmPasswordValue === '') {
                confirmPasswordError.textContent = 'Please confirm your password.';
                isValid = false;
            } else if (confirmPasswordValue !== passwordValue) { 
                confirmPasswordError.textContent = 'Passwords do not match.';
                isValid = false;
            }

            if (isValid) {
                console.log('Sign Up form submitted (simplified validation)');
                console.log('Full Name:', fullNameInput.value.trim());
                console.log('Email:', emailInput.value.trim());
                console.log('Password:', passwordInput.value.trim()); 

                alert('Sign Up attempt successful! (Frontend validation passed)\nWelcome, ' + fullNameInput.value.trim());
                
            } else {
                console.log('Sign Up form has validation errors.');
            }
        });
    }
});