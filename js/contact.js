document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const fullNameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const subjectInput = document.getElementById('subject');
    const messageInput = document.getElementById('message');

    const fullNameError = document.getElementById('fullNameError');
    const emailError = document.getElementById('emailError');
    const subjectError = document.getElementById('subjectError');
    const messageError = document.getElementById('messageError');

    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;

            fullNameError.textContent = '';
            emailError.textContent = '';
            subjectError.textContent = '';
            messageError.textContent = '';

            
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

            
            if (subjectInput.value.trim() === '') {
                subjectError.textContent = 'Subject is required.';
                isValid = false;
            }

            
            if (messageInput.value.trim() === '') {
                messageError.textContent = 'Message cannot be empty.';
                isValid = false;
            }

            if (isValid) {
                console.log('Contact form submitted (simulation with simplified validation)');
                console.log('Full Name:', fullNameInput.value.trim());
                console.log('Email:', emailInput.value.trim());
                console.log('Subject:', subjectInput.value.trim());
                console.log('Message:', messageInput.value.trim());
                contactForm.reset();
            } else {
                console.log('Contact form has validation errors.');
            }
        });
    }
});