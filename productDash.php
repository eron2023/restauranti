<?php
session_start();
if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){

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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #000;
            text-decoration: underline;
        }

        a:hover {
            font-weight: bold;

        }
        .Admin{
            min-width: 90px;
        }
    </style>
</head>
<body>

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>Titulli</th>
                 <th>Description</th>
                 <th>Kategoria</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'productRepository.php';

             $productRepository = new ProductRepository();

             $products = $productRepository->getAllProduktet();

             foreach($products as $produkti){
                echo 
                "
                <tr>
                     <td>$produkti[ID]</td>
                     <td>$produkti[Titulli]</td>
                     <td>$produkti[Description] </td>
                     <td>$produkti[Kategoria] </td>
                     <td><a href='editProduct.php?idP=$produkti[ID]'>Edit</a></td>
                     <td><a href='deleteProduct.php?idP=$produkti[ID]'>Delete</a></td>
                     
                ";
             }

            ?>
    </table>
</body>
</html>