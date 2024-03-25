<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){
        $productId = $_GET['idP'];
        include_once 'productRepository.php';
        
        
        
        $productRepository = new ProductRepository();
        
        $product  = $productRepository->getProductById($productId);

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
img{
    max-width: 400px;
}
input[type="submit"]:hover {
    background-color: #333;
}</style>
</head>
<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" name="id"  value="<?=$product['ID']?>" readonly> <br> <br>
        <input type="text" name="Titulli"  value="<?=$product['Titulli']?>"> <br> <br>
        <img src="<?=$product['Img_Link']?>" alt="Foto"><br> <br>
        <input type="text" name="Description"  value="<?=$product['Description']?>"> <br> <br>
        <input type="text" name="Kategoria"  value="<?=$product['Kategoria']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $product['ID'];
    $title = $_POST['Titulli'];
    $description = $_POST['Description'];
    $kategoria = $_POST['Kategoria'];

    $productRepository->updateProduct($id,$title,$product['Img_Link'],$description,$kategoria,$_SESSION['ID']); 
    header("location: productDash.php");
}

?>