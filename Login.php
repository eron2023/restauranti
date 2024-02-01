<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">
  <style>
 .error-message, .success-message {
            color: white;
            text-align: center;
            margin-top: 20px;
        }

        #login-form {
            width: 80%; 
            max-width: 400px; 
            margin: auto; 
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label, input {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }

        button {
        background-color: #37332a; 
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

        a {
            color: blue;
        }
    </style>
</head>
<body class="Login-Body">
<?php
 include 'headeri.php';
    

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $error_message = ""; 
    $success_message = ""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

      
        echo "Email: $email, Password: $password";

        
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

       
        if ($stmt->error) {
            die("Error: " . $stmt->error);
        }

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        
        if ($user && password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

           
            $success_message = "Kyçur me sukses";

            
            header("Location: index.php");
            exit();
        } else {
            
            $error_message = "Email ose Password i gabuar";
        }
    }

    $conn->close(); 
?>

<div class="error-message"><?php echo $error_message; ?></div>
<div class="success-message"><?php echo $success_message; ?></div>

<section id="login" class="hidden">
    <form id="login-form" action="login.php" method="post">
        <h3 class="login-header" style="color: black;">Login</h3>
        <label for="email" style="color: black;">Email:</label>
        <input type="text" id="email" name="email" required>
        <p id="emailError" style="color: black;"></p>

        <label for="password" style="color: black;">Password:</label>
        <input type="password" id="password" name="password" required>
        <p id="passwordError" style="color: black;"></p>
        <button type="submit" name="submit" >Login</button>
        <p style="color: black;">Akoma nuk jeni regjistruar?<a href="register.php" style="color: blue;"> Kliko ketu</a></p>
    </form>
</section>
<script src="skripti.js"></script>
</body>
</html>
