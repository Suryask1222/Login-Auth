document.addEventListener('DOMContentLoaded', function () {
    const registerForm = document.querySelector('#register-form');
    const loginForm = document.querySelector('#login-form');

    // Validate forms before submit
    if (registerForm) {
        registerForm.addEventListener('submit', function (e) {
            const name = document.querySelector('#name').value.trim();
            const email = document.querySelector('#email').value.trim();
            const password = document.querySelector('#password').value;
            const confirmPassword = document.querySelector('#confirm_password').value;
            
            let errors = [];

            if (!name || !email || !password || !confirmPassword) {
                errors.push("All fields are required.");
            }

            if (email && !validateEmail(email)) {
                errors.push("Please enter a valid email address.");
            }

            if (password && password.length < 6) {
                errors.push("Password must be at least 6 characters long.");
            }

            if (password !== confirmPassword) {
                errors.push("Passwords do not match.");
            }

            if (errors.length > 0) {
                e.preventDefault();
                showErrors(registerForm, errors);
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            const email = document.querySelector('#email').value.trim();
            const password = document.querySelector('#password').value;
            
            let errors = [];

            if (!email || !password) {
                errors.push("Please enter both email and password.");
            }

            if (errors.length > 0) {
                e.preventDefault();
                showErrors(loginForm, errors);
            }
        });
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function showErrors(form, errors) {
        const existingAlert = document.querySelector('.client-errors');
        if (existingAlert) {
            existingAlert.remove();
        }

        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger client-errors';

        errors.forEach(function (error) {
            const p = document.createElement('p');
            p.textContent = error;
            alertDiv.appendChild(p);
        });

        form.insertBefore(alertDiv, form.firstChild);
        form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
