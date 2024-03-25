<?php
session_start();
include_once 'kontaktRepository.php';
include_once 'kontakt.php';

if (isset($_POST["Kontakt-submit"])) {
    $kontakt = new Kontakt(null, $_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]);
    $kontaktRepo = new KontaktRepository;
        $kontaktRepo->insertKontakt($kontakt);
          echo "<script>
                  if (window.confirm('Success!')) {
                      window.location.href='menu.php';
                  }
              </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
  
#pse-ne{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  text-align: center; 
  padding: 40px;
  background-color: #262729;
  color: white; 
}

#pse-nes .fotoja-pse-ne img {
  width: 100%;
  height: auto;
}

#pse-ne .teksti-pse-ne {
  width: 50%; 
}

#pse-ne h2 {
  font-size: 2em; 
  margin-bottom: 20px;
  color: rgb(174, 98, 44); 
}

#pse-ne ul {
  list-style: none;
  padding: 0;
}



#pse-ne ul li {
  margin-bottom: 15px; 
  position: relative;
  display: flex;
  align-items: center;
}

#pse-ne ul li::before {
  content: '\2022'; 
  color: rgb(174, 98, 44); 
  font-size: 1.5em; 
  margin-right: 10px; 
}

#pse-ne p {
  font-size: 1.2em; 
  line-height: 1.6; 
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
   
   <section class="menuja">
    <div class="Pjesa-majteB">
      <h1 class="h1B">Modern dhe Tradicional</h1>
      <p>Kuzhina jonë është e pasur me ushqime të gatuara me delikatesë që nga ato tradicionalet, të cilat gjatë degustimit të rikujtojnë pjatat e ngrohta të gjyshes apo ato pjata të shpejta që i gatuajmë në përditshmëri e që shijojnë më shumë tek ne.</p>
      <button class="redirect-button"><a href="kontakti.php">Kontakti</a></button>
    </div>
    <div class="pjesa-e-djathteB">
      <img src="fotot/menu.png" alt="Fotoja ne te djathte te menuja">
      
    </div>
    
  </section>

  
  <section class="menu-totali">
      <div class="menu-title">
        <h2 class="orange-text">Menu</h2>
      </div>
      <section class="menu-foto-permbajtja">
      <?php
        include_once 'productRepository.php';
        include_once 'product.php';

        $productRepo = new ProductRepository;
        $products = $productRepo->getAllProduktet();

        foreach($products as $product){
          echo "
            <div class=\"menu-foto\">
                    <img src=\"" . $product['Img_Link'] . "\" />
                    <h3 class=\"menu-foto-header\">" . $product['Titulli'] . "</h4>
                    <p class=\"menu-foto-paragraph\">" . $product['Description'] . "</p>
                    <button class=\"menu-foto-button\"><a href=\"menu.php\">".$product['Kategoria']."</a></button>
            </div>
          ";
        }
      ?>
      </section>

  <section class="permbajtja2">
    <div class="pjesa-e-majte2">
      <h1 class="h1-2">Fast Food</h1>
      <p>Ne jemi një restaurant i njohur me menu prestigjioze nga vendet e ndryshme të botës</p>
      <ul>
        <li>Ofrojmë shërbim të ngrohtë dhe të shpejtë</li>
        <li>Me një ndërthurje të veqantë të specialiteteve nga kuzhinieret tanë</li>
        <li>Ambient komod dhe elegant</li>
      </ul>
     
    </div>
    <div class="pjesa-e-djathte2">
      <img src="fotot/menufastfood.jpg" alt="Fotoja menu Fast food">
    </div>
  </section>




  <section id="permbajtja3">
    <div class="pjesa-e-majte3">
      <img src="fotot/menupasta.jpg" alt="fotoja menu pasta">
    </div>
    <div class="pjesa-e-djathte3">
      <h2>Pasta elegante italiane</h2>
      <ul>
        <li>
          <p>Menuja jonë ofron Pasta  të ndryshme e të shijshme me receta Italiane</p>
        </li>
        <li>
          <p>Shërbimi ynë profesional lejon që ju të ndiheni si në shtëpinë tuaj</p>
        </li>
        <li>
          <p>Të servirura në mënyrë të përkryer dhe me fruta deti</p>
        </li>
      </ul>
    </div>
  </section>



  <section class="permbajtja4">
    <div class="pjesa-e-majte4">
      <h1 class="h1-4">Ushqime Tradicionale</h1>
      <p>Normalisht që në restaurantin tonë nuk do të mungoj edhe ushqimet tradicionale shqiptare.</p>
      <ul>
        <li>Fli të freskët e të shijshme me djath të dhive.</li>
        <li>Gjellëra të ndryshme nga fasulet e deri tek Gullashi me mish të freskët e të shijshëm</li>
        <li>Ne ofrojmë ambient komod dhe elegant për ti shijuar këto ushqime fasionante.</li>
      </ul>
    </div>
    <div class="pjesa-e-djathte4">
      <img src="fotot/menutradicionale.jpg" alt="Menu Tradicionale">
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
   
  
  
  
      <form id="Kontakti-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        
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

        <button type="submit"  id="submit-button" name="Kontakt-submit">Dërgo</button>
    </form>
  </section>
</section>

<div class="floating-arrow" onclick="scrollToTop()">
  <i class="fas fa-arrow-up"></i>
</div>

<?php
     include 'footeri.php';
     ?>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="skripti.js"></script>
</body>
</html>
