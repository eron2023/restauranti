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
                 <th>Name</th>
                 <th>Email</th>
                 <th>Tema</th>
                 <th>Mesazhi</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'kontaktRepository.php';

             $kontaktRepository = new KontaktRepository();

             $kontakts = $kontaktRepository->getAllContacts();

             foreach($kontakts as $kontakti){
                echo 
                "
                <tr>
                     <td>$kontakti[ID]</td>
                     <td>$kontakti[name]</td>
                     <td>$kontakti[email] </td>
                     <td>$kontakti[tema] </td>
                     <td>$kontakti[mesazhi] </td>
                     <td><a href='deleteMesazhi.php?idM=$kontakti[ID]'>Delete</a></td>
                     
                ";
             }

            ?>
    </table>
</body>
</html>