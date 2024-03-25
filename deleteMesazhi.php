<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        
        $Id = $_GET['idM'];
        include_once 'kontaktRepository.php';
        
        
        
        $kontaktRepository = new KontaktRepository();
        
        $kontaktRepository->deleteKontakt($Id);
        
        header("location:mesazhet.php");

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


?>