<?php
session_start();
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userRepo = new UserRepository;
    $user = $userRepo->getUserByEmail($email);
    if($user != null){
        if($user["password"] == $password){
            $_SESSION['isAdmin'] = $user["IsAdmin"];
            $_SESSION['name'] = $user["name"];
            $_SESSION['ID'] = $user["ID"];
            $_SESSION['email'] = $user["email"];
            echo "<script>alert('Log in u krye me sukses!'); window.location.href='index.php';</script>";
        }else{
            echo "<script>alert('Passwordi eshte gabim!');</script>";
        }
    }else{
        echo "<script>alert('Username nuk ekziston!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">
 <style>
    
 </style>
</head>
<body class="Login-Body">

<section id="login" class="hidden">
    <form id="login-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
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
<!-- <script src="skripti.js"></script> -->
</body>
</html>
