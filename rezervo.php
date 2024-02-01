<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['table_reservation'])) {
        $selectedTime = $_POST['reservation_time'];
        
        
        $selectedDate = isset($_POST['reservation_date']) ? $_POST['reservation_date'] : '';
        
      
        $numberOfPeople = isset($_POST['number_of_people']) ? min($_POST['number_of_people'], 10) : 1;

      
        $reservationMessage = "Tavolinë e rezervuar: " . $selectedDate . " në ora " . $selectedTime . " për " . $numberOfPeople . " persona";
        
    }
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
        body {
            color: white;
            padding: 20px;
        }

        h1, h2, p {
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
        }

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
            margin-bottom: 10px;
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

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="flex-container">
            <div class="text-container">
                <h2>Selekto Rezervimin:</h2>
                <br>
                <label for="reservation_date">Selekto datën:</label>
                <input type="date" name="reservation_date" id="reservation_date" required>

                <label for="reservation_time">Selekto kohen:</label>
                <select name="reservation_time">
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>

                <label for="number_of_people">Persona:</label>
                <input type="number" name="number_of_people" id="number_of_people" min="1" value="1">
            </div>

            <div class="image-container">
            
                <img src="fotot/tavolina.jpg" alt="Tavolina">
            </div>
        </div>

        <br>
        <button type="submit" name="table_reservation">Book Table</button>
    </form>

  
    <?php if (isset($reservationMessage)) : ?>
        <p><?php echo $reservationMessage; ?></p>
    <?php endif; ?>

    <?php include 'footeri.php'; ?>
</body>
</html>
