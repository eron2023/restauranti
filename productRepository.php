<?php
include_once 'databaseConnection.php';
include_once 'product.php';

class ProductRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product)
    {

        $conn = $this->connection;

        $id = $product->getId();
        $titulli = $product->getTitulli();
        $imgLink = $product->getImgLink();
        $desc = $product->getDescription();
        $kategoria = $product->getKategoria();
        $userId = $product->getUserId();

        $sql = "INSERT INTO product (ID,Titulli,Img_Link,Description, Kategoria, UserID) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $titulli, $imgLink, $desc ,$kategoria , $userId]);

        echo "<script> alert('Produkti u shtua me sukses!'); </script>";
    }

    function getAllProduktet()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }
    function deleteProduct($id){
        $conn = $this->connection;

        $sql = "DELETE FROM product WHERE ID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }
   function updateProduct($id,$title,$img,$desc,$kategory,$userId){
    $conn = $this->connection;

    $sql = "UPDATE product SET Titulli=?,Img_Link=?, Description=?, Kategoria=?, UserID=? WHERE ID=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$title,$img,$desc,$kategory,$userId,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function getProductById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM product WHERE ID='$id'";

    $statement = $conn->query($sql);
    $user = $statement->fetch();

    return $user;
}
}
