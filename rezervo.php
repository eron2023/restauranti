<?php
session_start();
include_once 'rezervimiRepository.php';
include_once 'rezervimi.php';


if(isset($_POST["table_reservation"])){

    $rezervimi = new Rezervimi(null, $_SESSION['ID'], $_POST['reservation_date'], $_POST['reservation_time'], $_POST['number_of_people']);
    $rezervimiRepo = new RezervimiRepository;
    $rezervimiRepo->insertRezervimi($rezervimi);
    echo "<script>
        if (window.confirm('Success!')) {
        }
        </script>";
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Venecia</title>
    <link rel="stylesheet" href="stil.css"> 

    <style>
       


        select, input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            color: #555;
            background-color: #fff;
            width: 60%;
        }

        button {
            width: 150px;
            background-color: rgb(174, 98, 44);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .flex-container {
            display: flex;
            flex-direction: column;
        }

        .text-container {
            text-align: left;
            order: 1; 
        }

        .image-container {
            text-align: right;
            order: 2;
        }

        .image-container img {
            margin-top: 75px;
            max-width: 100%;
            max-height: 400px;
            border-radius: 15px;
        }

        @media only screen and (min-width: 768px) {
            .flex-container {
                flex-direction: row;
                justify-content: space-between;
            }

            .text-container {
                flex: 1;
                margin-right: 20px;
                order: 0; 
            }

            .image-container {
                flex: 1;
                order: 0; 
            }
        }
    </style>
</head>
<body>
    <?php include 'headeri.php'; ?>
    <h1 style="margin-top: 50px;text-align:center;">Rezervo Tavolinën tënde</h1>
    <?php
if(isset($_SESSION['ID'])){
    echo '<form method="post" action="' . $_SERVER["PHP_SELF"] . '">
    <div class="flex-container">
        <div class="text-container">
            <h2>Selekto Rezervimin:</h2>
            <br>
            <label for="reservation_date">Selekto datën:</label>
            <input type="date" name="reservation_date" id="reservation_date" required>

            <label for="reservation_time">Selekto oren:</label>
            <input type="time" name="reservation_time" id="reservation_time" required>
            <script>
                document.getElementById("reservation_date").min = new Date().toISOString().split("T")[0];
            </script>

            <label for="number_of_people">Persona:</label>
            <input type="number" name="number_of_people" id="number_of_people" min="1" value="1">
        </div>

        <div class="image-container">
        
            <img src="fotot/tavolina.jpg" alt="Tavolina">
        </div>
    </div>

    <br>
    <button type="submit" name="table_reservation">Book Table</button>
</form>';
}else{
    echo '<div class="flex-container">
        <div class="text-container">
            <h2>Per te bere rezervim, ju lutem se pari te kyqeni ne llogari.</h2>
        </div>
    </div>';
}
?>

    <?php
        if(isset($_SESSION['ID'])){
        include_once 'rezervimiRepository.php';
        include_once 'rezervimi.php';

        $rezervimiRepo = new RezervimiRepository;
        $rezervimet = $rezervimiRepo->getRezervimetById($_SESSION['ID']);
        echo '<h2>Rezervimet tuaja:</h2>';

        foreach($rezervimet as $rezervimi){
            echo "Tavolinë e rezervuar: " . $rezervimi['Data'] . " në ora " . $rezervimi['Koha']  . " për " . $rezervimi['Numri_Personave']  . " persona<br>";
        }
    }
        
    ?>

    <?php include 'footeri.php'; ?>
</body>
</html>
