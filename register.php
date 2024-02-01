<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, surname, phone, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $surname, $phone, $email, $password);

    if ($stmt->execute()) {
        echo "Regjistrim i suksesshem!";
        
    } else {
        echo "Regjistrim i Gabuar!";
    }
}
$conn->close();
?>

  <section id="register" class="hidden" style="color: black;">
    <form id="register-form" action="index.php" method="post">
      <h3 class="login-header">Register</h3>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <p id="nameError" style="color: black;" ></p>

      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required>
      <p id="surnameError" style="color: black;"></p>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
      <p id="phoneError" style="color: black;"></p>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
      <p id="emailError"style="color: black;"></p>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <p id="passwordError"style="color: black;"></p>

      <button type="button"  id="registerButton">Register</button>
    </form>
  </section>
  <script src="skripti.js"></script>
</body>
</html>

