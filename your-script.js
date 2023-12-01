document.addEventListener('DOMContentLoaded', function () {
  const loginLink = document.getElementById('login-link');
  const registerLink = document.getElementById('show-register');
  const mainContent = document.getElementById('main-content');
  const loginForm = document.getElementById('login');
  const registerForm = document.getElementById('register');
  const navLinks = document.querySelector('nav ul'); 

  loginLink.addEventListener('click', function (event) {
    event.preventDefault();
    toggleForms(loginForm, registerForm, mainContent);
    hideNavAndSlider();
  });

  registerLink.addEventListener('click', function (event) {
    event.preventDefault();
    toggleForms(registerForm, loginForm, mainContent);
    hideNavAndSlider();
  });

  function toggleForms(showForm, hideForm, hideContent) {
    hideForm.classList.add('hidden');
    showForm.classList.remove('hidden');
    hideContent.classList.add('hidden');
  }

  function hideNavAndSlider() {
    navLinks.classList.add('hidden');
    const slider = document.querySelector('.slider');
    if (slider) {
      slider.style.display = 'none';
    }
  }

  
  const contactForm = document.getElementById('contact-form');

  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      event.preventDefault();
     
    });
  }
});
/*shigjeta per web me dergu ma nalt*/
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
document.addEventListener('DOMContentLoaded', function () {
  const floatingArrow = document.querySelector('.floating-arrow');

  window.addEventListener('scroll', function () {
    if (window.scrollY > window.innerHeight / 2) {
      floatingArrow.classList.add('show');
    } else {
      floatingArrow.classList.remove('show');
    }
  });
});