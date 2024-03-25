<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        
        $Id = $_GET['idP'];
        include_once 'productRepository.php';
        
        
        
        $productRepository = new ProductRepository();
        
        $productRepository->deleteProduct($Id);
        
        header("location:productDash.php");

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


?>