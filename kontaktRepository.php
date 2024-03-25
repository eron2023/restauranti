<?php
include_once 'databaseConnection.php';
include_once 'kontakt.php';

class KontaktRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertKontakt($kontakt){

        $conn = $this->connection;

        $name = $kontakt->getName();
        $email = $kontakt->getEmail();
        $tema = $kontakt->getTema();
        $mesazh = $kontakt->getMesazhi();

        $sql = "INSERT INTO kontakt (name,email,tema,mesazhi) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$email,$tema,$mesazh]);

    }
    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM kontakt";

        $statement = $conn->query($sql);
        $kontakts = $statement->fetchAll();

        return $kontakts;
    }
    function deleteKontakt($id){
        $conn = $this->connection;

        $sql = "DELETE FROM kontakt WHERE ID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }
}
?>