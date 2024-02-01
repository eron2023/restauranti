<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $foodPrices = [
        'Hamburger' => 5.99,
        'Pica' => 8.99,
        'Spaghetti' => 3.99
    ];

  
    if (isset($_POST['food_order'])) {
        $selectedFood = $_POST['food'];
        $orderMessage = "Ushqimet e Porositura: ";

       
        $Totali = 0;
        foreach ($selectedFood as $foodItem) {
            $quantity = intval($foodItem['quantity']);
            
            
            if (isset($foodItem['item'])) {
                $item = $foodItem['item'];

                if (isset($foodPrices[$item])) {
                    $subtotal = $foodPrices[$item] * $quantity;
                    $formattedSubtotal = number_format($subtotal, 2, ',', '.') . '€'; 
                    $orderMessage .= "$quantity $item - $formattedSubtotal, ";
                    $Totali += $subtotal;
                }
            }
        }

        $formattedTotal = number_format($Totali, 2, ',', '.') . '€'; 
        $orderMessage .= "<br>Totali: $formattedTotal";
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

        input[type="number"] {
            width: 40px;
            text-align: center;
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
        form {
            text-align: center;
        }
        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            border: 4px solid rgb(174, 98, 44); 
            margin-bottom: 10px; 
            margin-top: 10px; 
           
        }
    </style>
</head>
<body>
    <?php include 'headeri.php'; ?>
    <h1 id="headeri-na-kontaktoni" style="color: rgb(174, 98, 44)">Porosit Online</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
       
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">
            <div style="flex: 0 0 300px; margin: 10px;">
                <img src="fotot/hamburgeri.jpg" alt="Hamburger" style="width: 100%; height: auto; border-radius: 10px;">
                <br>
                <label>
                    <input type="checkbox" name="food[0][item]" value="Hamburger"> Hamburgeri - 5.99€
                    <br>
                    Sasia: <input type="number" name="food[0][quantity]" value="1" min="1">
                </label>
            </div>
            <div style="flex: 0 0 300px; margin: 10px;">
                <img src="fotot/picaa.jpg" alt="Pizza" style="width: 100%; height: auto; border-radius: 10px;">
                <br>
                <label>
                    <input type="checkbox" name="food[1][item]" value="Pica"> Pica - 8.99€
                    <br>
                    Sasia: <input type="number" name="food[1][quantity]" value="1" min="1">
                </label>
            </div>
            <div style="flex: 0 0 300px; margin: 10px;">
                <img src="fotot/spaghetti.jpg" alt="Spaghetti" style="width: 100%; height: auto; border-radius: 10px;">
                <br>
                <label>
                    <input type="checkbox" name="food[2][item]" value="Spaghetti"> Spaghetti - 3.99€
                    <br>
                    Sasia: <input type="number" name="food[2][quantity]" value="1" min="1">
                </label>
            </div>
        </div>
        <br>
        <button type="submit" name="food_order">Perfundo Porosine</button>
    </form>
    
    <?php
   
    if (isset($orderMessage)) {
        echo '<p style="color: white;">' . $orderMessage . '</p>';
    }
    ?>

    <?php include 'footeri.php'; ?>
</body>
</html>
