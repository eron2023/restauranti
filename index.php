<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant VENECIA</title>
    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <style>
     #pse-ne {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center; 
        text-align: center; 
    }

    .fotoja-pse-ne {
        width: 100%;
        max-width: 400px;
        margin-bottom: 20px;
    }

    #pse-ne img {
        width: 100%;
        height: auto;
    }

    #pse-ne div {
        max-width: 600px; 
    }

    #pse-ne h2 {
        color: white;
    }

    #pse-ne ul {
        list-style: none;
        padding: 0;
    }

    #pse-ne ul li {
        margin-bottom: 10px;
    }

        .menu-foto-permbajtja {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .menu-foto {
            width: 80%;
            max-width: 300px; 
            margin-bottom: 20px;
        }

   @media only screen and (min-width: 768px) {
            
            .slider {
                width: 90%; 
            }
          }
         
 </style>
</head>
<body>
    
<?php
     include 'headeri.php';
     ?>
     
      <section class="slideri">
      <div class="slider">
        <div class="list">
          <div class="item">
            <div class="content">
              <h2>Restaurant Venecia</h2>
              <p>Shërbim në mënyrë të përkryer</p>
            </div>
            <img src="fotot/slider1.jpg" alt="">
          </div>
          <div class="item">
            <div class="content">
              <h2>Restaurant Venecia</h2>
              <p>Elegant me kuzhinë Italiane</p>
            </div>
            <img src="fotot/slider2.jpg" alt="">
          </div>
        </div>
        <div class="buttons">
          <button id="prev"></button>
          <button id="next"></button>
        </div>
        <ul class="dots">
          <li class="active"></li>
          <li></li>
        </ul>
      </div>
    </section>

    
    <section class="menu-totali">
      <div class="menu-title">
        <h2 class="orange-text">Menu</h2>
      </div>
    
      <section class="menu-foto-permbajtja">
        <div class="menu-foto">
          <img src="fotot/hamburgeri.jpg" alt="Menu foto 1">
          <h3 class="menu-foto-header">Hamburger</h3>
          <p class="menu-foto-paragraph">Menuja jonë e gjerë mundëson që të ketë jo vetëm menu tradicionale e moderne por edhe Fast Food që në kohët e sotme po përdoret mjaft shum.</p>
          <button class="menu-foto-button"><a href="menu.php">Fast Food</a></button>
        </div>
      
        <div class="menu-foto">
          <img src="fotot/spaghetti.jpg" alt="Menu foto 2">
          <h3 class="menu-foto-header">Spaghetti</h3>
          <p class="menu-foto-paragraph">Pasta të shijshme me recetë italiane e unike, të servirura me salcë domateje të freskët e me djath mozarella.</p>
          <button class="menu-foto-button"><a href="menu.php">Pasta</a></button>
        </div>
      
        <div class="menu-foto">
          <img src="fotot/flia.jpg" alt="Menu foto 3">
          <h3 class="menu-foto-header">Flia</h3>
          <p class="menu-foto-paragraph">Menu tradicionale shqiptare e shijshme dhe e lëngshme e bërë me shum dashuri nga kuzhinieret tanë.</p>
          <button class="menu-foto-button"><a href="menu.php">Tradicionale</a></button>
        </div>
      </section>
    </section>
      <section id="pse-ne">
        <div class="fotoja-pse-ne">
          <img src="fotot/pse-ne.jpg" alt="Pse-ne foto">
        </div>
        <div class="">
          <h2>Pse zgjedhja e Restaurantit tonë</h2>
          <ul>
            <li>
              <p>Menuja jonë moderne si dhe tradicionale ofron ushqime të ndryshme e të shijshme</p>
            </li>
            <li>
              <p>Shërbimi ynë profesional lejon që ju të ndiheni si në shtëpinë tuaj</p>
            </li>
            <li>
              <p>Vendndodhja jonë bën që ju ta keni afër restaurantin kudo që jeni</p>
            </li>
          </ul>
        </div>
      </section>
    
    
     
    
     
      <section class="na-Kontaktoni"> 
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

          <button type="button"  id="submit-button" onclick="validateContactForm()">Dërgo</button>
      </form>
    </section>
  </section>

    <div class="floating-arrow" onclick="scrollToTop()">
      <i class="fas fa-arrow-up"></i>
    </div>
    
    
     <?php
     include 'footeri.php';
     ?>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <script src="skripti.js"></script>
     
    </body>
    </html>
    