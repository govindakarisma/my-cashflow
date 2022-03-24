const togglePassword = document.querySelector('.toggle-password');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function(e) {
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);

  if (document.querySelector('.fa-eye-slash')) {
    const eyeIcon = document.querySelector('.fa-eye-slash');
    eyeIcon.classList.toggle('fa-eye');
    eyeIcon.classList.remove('fa-eye-slash');
  } else {
    const eyeIcon = document.querySelector('.fa-eye');
    eyeIcon.classList.toggle('fa-eye-slash');
    eyeIcon.classList.remove('fa-eye');
  }

  const text = document.querySelector('#show-hide');
  if (text.innerHTML === "Show Password") {
    text.innerHTML = "Hide Password"
  } else {
    text.innerHTML = "Show Password"
  }
});