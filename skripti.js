  /* Login */
document.addEventListener('DOMContentLoaded', function () {
  let emailRegex = /^[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
  let passwordRegex = /^(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*\d).{4,20}$/;

  function validateLoginForm() {
      let emailInput = document.getElementById('email');
      let emailError = document.getElementById('emailError');
      let passwordInput = document.getElementById('password');
      let passwordError = document.getElementById('passwordError');

      emailError.innerText = '';
      passwordError.innerText = '';

      if (!emailRegex.test(emailInput.value)) {
          emailError.innerText = 'Formati i Emailit eshte i gabuar';
          return;
      }

      if (!passwordRegex.test(passwordInput.value)) {
          passwordError.innerText = 'Ju lutem shenoni nje shkronje te madhe se pari dhe nje numer';
          return;
      }

      alert('Jeni Kyqur me Sukses');
      window.location.href = 'faqja-kryesore.html';
  }

  document.getElementById('password').addEventListener('keydown', function (event) {
      if (event.key === 'Enter') {
          validateLoginForm();
      } else if (event.key === 'ArrowUp') {
          document.getElementById('email').focus();
      }
  });

  document.getElementById('email').addEventListener('keydown', function (event) {
      if (event.key === 'Enter') {
          validateLoginForm();
      } else if (event.key === 'ArrowDown') {
          document.getElementById('password').focus();
      }
  });

});
 // Rregjistrimi
 document.addEventListener('DOMContentLoaded', function () {
  let emailRegex = /^[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
  let passwordRegex = /^(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*\d).{4,20}$/;
  let nameRegex = /^[a-zA-Z]+$/;
  let phoneRegex = /^\d{4,10}$/; 
  function validateRegisterForm() {
    let nameInput = document.getElementById('name');
    let surnameInput = document.getElementById('surname');
    let phoneInput = document.getElementById('phone');
    let emailInput = document.getElementById('email');
    let passwordInput = document.getElementById('password');

    let nameError = document.getElementById('nameError');
    let surnameError = document.getElementById('surnameError');
    let phoneError = document.getElementById('phoneError');
    let emailError = document.getElementById('emailError');
    let passwordError = document.getElementById('passwordError');

    nameError.innerText = '';
    surnameError.innerText = '';
    phoneError.innerText = '';
    emailError.innerText = '';
    passwordError.innerText = '';

    if (nameInput.value.trim() === '' || !nameRegex.test(nameInput.value.trim())) {
      nameError.innerText = 'Ju lutem shenoni emrin tuaj ne menyre valide.';
      return;
    } else {
      nameError.innerText = '';
    }

    if (surnameInput.value.trim() === '' || !nameRegex.test(surnameInput.value.trim())) {
      surnameError.innerText = 'Ju lutem shenoni mbiemrin tuaj ne menyre valide.';
      return;
    } else {
      surnameError.innerText = '';
    }

    if (phoneInput.value.trim() === '' || !phoneRegex.test(phoneInput.value.trim())) {
      phoneError.innerText = 'Ju lutem shenoni numrin tuaj të telefonit ne menyre valide.';
      return;
    } else {
      phoneError.innerText = '';
    }

    if (!emailRegex.test(emailInput.value)) {
      emailError.innerText = 'Formati i Emailit eshte i gabuar.';
      return;
    } else {
      emailError.innerText = '';
    }

    if (!passwordRegex.test(passwordInput.value)) {
      passwordError.innerText = 'Ju lutem shenoni nje shkronje te madhe se pari dhe nje numer.';
      return;
    } else {
      passwordError.innerText = '';
    }

    alert('Jeni regjistruar me sukses!');
    window.location.href = 'faqja-kryesore.html';
  }

  function navigateOnArrowPress(event, currentElement, nextElementId, previousElementId) {
    if (event.key === 'ArrowDown') {
      document.getElementById(nextElementId).focus();
    } else if (event.key === 'ArrowUp') {
      document.getElementById(previousElementId).focus();
    }
  }

  function handleEnterKey(event) {
    if (event.key === 'Enter') {
      validateRegisterForm();
    }
  }

  document.getElementById('name').addEventListener('blur', validateRegisterForm);
  document.getElementById('surname').addEventListener('blur', validateRegisterForm);
  document.getElementById('phone').addEventListener('blur', validateRegisterForm);
  document.getElementById('email').addEventListener('blur', validateRegisterForm);
  document.getElementById('password').addEventListener('blur', validateRegisterForm);

  document.getElementById('name').addEventListener('keydown', function (event) {
    navigateOnArrowPress(event, this, 'surname', 'password');
    handleEnterKey(event);
  });

  document.getElementById('surname').addEventListener('keydown', function (event) {
    navigateOnArrowPress(event, this, 'phone', 'name');
    handleEnterKey(event);
  });

  document.getElementById('phone').addEventListener('keydown', function (event) {
    navigateOnArrowPress(event, this, 'email', 'surname');
    handleEnterKey(event);
  });

  document.getElementById('email').addEventListener('keydown', function (event) {
    navigateOnArrowPress(event, this, 'password', 'phone');
    handleEnterKey(event);
  });

  document.getElementById('password').addEventListener('keydown', function (event) {
    navigateOnArrowPress(event, this, 'name', 'email');
    handleEnterKey(event);
  });

  document.getElementById('registerButton').addEventListener('click', validateRegisterForm);
});



/*Kontakti*/

document.addEventListener('DOMContentLoaded', function () {
  let emailRegex = /^[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;

  function validateContactForm() {
      let nameInput = document.getElementById('name');
      let emailInput = document.getElementById('email');
      let subjectInput = document.getElementById('subject');
      let messageInput = document.getElementById('message');

      // Get the corresponding error elements
      let nameError = document.getElementById('nameError');
      let emailError = document.getElementById('emailError');
      let subjectError = document.getElementById('subjectError');
      let messageError = document.getElementById('messageError');

      // Clear previous error messages
      nameError.innerText = '';
      emailError.innerText = '';
      subjectError.innerText = '';
      messageError.innerText = '';

      if (nameInput.value.trim() === '') {
          nameError.innerText = 'Ju lutem shenoni emrin tuaj.';
          return;
      }

      if (!emailRegex.test(emailInput.value)) {
          emailError.innerText = 'Formati i Emailit eshte i gabuar.';
          return;
      }

      if (subjectInput.value.trim() === '') {
          subjectError.innerText = 'Ju lutem shenoni temen.';
          return;
      }

      if (messageInput.value.trim() === '') {
          messageError.innerText = 'Ju lutem shkruani nje mesazh.';
          return;
      }

      alert('Mesazhi u dërgua me sukses!');
      // You may add additional logic to handle form submission
  }

  document.getElementById('message').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      validateContactForm();
    } else if (event.key === 'ArrowUp') {
      document.getElementById('subject').focus();
    }
  });

  document.getElementById('subject').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      validateContactForm();
    } else if (event.key === 'ArrowDown') {
      document.getElementById('message').focus();
    }
  });

  document.getElementById('email').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      validateContactForm();
    } else if (event.key === 'ArrowDown') {
      document.getElementById('subject').focus();
    }
  });

  document.getElementById('name').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      validateContactForm();
    } else if (event.key === 'ArrowDown') {
      document.getElementById('email').focus();
    }
  });

  // You can also add an event listener for the form submission
  document.getElementById('Kontakti-form').addEventListener('submit', function (event) {
    event.preventDefault();
    validateContactForm();
  });
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
/*Slideri*/
let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};

