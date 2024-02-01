<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">



</head>
<body>
<?php
     include 'headeri.php';
     ?>
  <section id="headeri-na-kontaktoni">
    <h1>Na Kontaktoni</h1>
  </section>

 
  <section id="Kontakti">
    <div id="Kontakti-majte">
      <div class="info">
        <div class="rrumbullaku">
          <img src="fotot/location.png" alt="Lokacioni foto">
        </div>
        <div class="info-text">
          <h2>Lokacioni:</h2>
          <p>Rruga Adem Jashari Prizren, Kosovë</p>
        </div>
      </div>
    
      <div class="info">
        <div class="rrumbullaku">
          <img src="fotot/orari.png" alt="Orari foto">
        </div>
        <div class="info-text">
          <h2>Orari:</h2>
          <p>Orari i punës: 08:00-20:00.</p>
        </div>
      </div>
    
      <div class="info">
        <div class="rrumbullaku">
          <img src="fotot/email.png" alt="Email foto">
        </div>
        <div class="info-text">
          <h2>Email:</h2>
          <p>restaurantvenecia@gmail.com</p>
        </div>
      </div>
    
      <div class="info">
        <div class="rrumbullaku">
          <img src="fotot/telephone.png" alt="Telefoni foto">
        </div>
        <div class="info-teksti">
          <h2>Telefoni:</h2>
          <p>+383 44 383 249</p>
        </div>
      </div>
    </div>
    



    <form id="Kontakti-form" action="index.php" method="get">
      <div id="nameError" class="error"></div>
      <label for="name">Emri:</label>
      <input type="text" id="name" name="name" required>

      <div id="emailError" class="error"></div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <div id="subjectError" class="error"></div>
      <label for="subject">Tema:</label>
      <input type="text" id="subject" name="subject" required>

      <div id="messageError" class="error"></div>
      <label for="message">Mesazhi:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="button" onclick="validateContactForm()">Dërgo</button>
  </form>
</section>

<div class="floating-arrow" onclick="scrollToTop()">
  <i class="fas fa-arrow-up"></i>
</div>

<div data-aos="fade-up">
  <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=rruga%20adem%20jashari,%20prizren&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
</div>
<?php
     include 'footeri.php';
     ?>
</body>
</html>
