document.getElementById('signupForm').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match. Please try again.');
        event.preventDefault();
    }
});
function changeForm(formType) {
    var registerForm = document.getElementById('registerForm');
    var loginForm = document.getElementById('loginForm');
    if (formType === 'login') {
        registerForm.classList.remove('active');
        loginForm.classList.add('active');
    } else {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
    }
}