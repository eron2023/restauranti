<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        
        $Id = $_GET['idR'];
        include_once 'rezervimiRepository.php';
        
        
        
        $rezervimiRepository = new RezervimiRepository();
        
        $rezervimiRepository->deleteRezervimi($Id);
        
        header("location:productDash.php");

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


?>