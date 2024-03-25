<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        $userId = $_GET['id'];
        include_once 'userRepository.php';
        
        
        
        $userRepository = new UserRepository();
        
        $user  = $userRepository->getUserById($userId);

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h3 {
    text-align: center;
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #000;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #333;
}</style>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['ID']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user['name']?>"> <br> <br>
        <input type="text" name="surname"  value="<?=$user['surname']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['ID'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$name,$surname,$email,$username,$password); 
    header("location: MonitoroUsers.php");
}


?>