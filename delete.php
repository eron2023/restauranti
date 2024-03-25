<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        
        $userId = $_GET['id'];
        include_once 'userRepository.php';
        
        
        
        $userRepository = new UserRepository();
        
        $userRepository->deleteUser($userId);
        
        header("location:MonitoroUsers.php");

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


?>