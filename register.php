<?php
session_start();
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST["registerButton"])) {
    $user = new User(null, $_POST["emri"], $_POST["mbiemri"], $_POST["email"], $_POST["password"]);
    $userRepo = new UserRepository;
    $userTestEmail = $userRepo->getUserByEmail($_POST["email"]);

    if($userTestEmail != null){
        echo "<script>alert('Nuk u insertua!'); window.location.href='Login.php';</script>";
    }
     else {
        $userRepo->insertUser($user);
        echo "<script>
                if (window.confirm('Success!')) {
                    window.location.href='Login.php';
                }
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stil.css">

</head>
<body class="Login-Body">

  <section id="register" class="hidden" style="color: black;">
    <form id="register-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
      <h3 class="login-header">Register</h3>
      <label for="name">Name:</label>
      <input type="text" placeholder="Emri" id="emri" name="emri" required>
      <p id="nameError" style="color: black;" ></p>

      <label for="surname">Surname:</label>
      <input type="text" placeholder="Mbiemri" id="mbiemri" name="mbiemri" required>
      <p id="surnameError" style="color: black;"></p>

      <label for="email">Email:</label>
      <input type="email" placeholder="E-mail" id="email" name="email" required>
      <p id="emailError"style="color: black;"></p>

      <label for="password">Password:</label>
      <input type="password" placeholder="Password" id="password" name="password" required>
      <p id="passwordError"style="color: black;"></p>

      <button type="submit"  name="registerButton" id="registerButton">Register</button>
    </form>
  </section>
  <!-- <script src="skripti.js"></script> -->
</body>
</html>

