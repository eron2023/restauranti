<?php 
include_once 'databaseConnection.php';
include_once 'rezervimi.php';

class RezervimiRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertRezervimi($rezervimi){
        $conn = $this->connection;

        $userID = $rezervimi->getUserID();
        $data = $rezervimi->getData();
        $koha = $rezervimi->getKoha();
        $nrPersonave = $rezervimi->getNrPersonave();

        $sql = "INSERT INTO rezervimi (UserID,Data,Koha,Numri_Personave) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$userID,$data,$koha,$nrPersonave]);

    }

    function getAllRezervimi(){
        $conn = $this->connection;

        $sql = "SELECT * FROM rezervimi";

        $statement = $conn->query($sql);
    
        $rezervimet = $statement->fetchAll();

        return $rezervimet;
    }

    function getRezervimetById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM rezervimi WHERE UserID='$id'";

        $statement = $conn->query($sql);
        $rezervimi = $statement->fetchAll();

        return $rezervimi;
    }
    function deleteRezervimi($id){
        $conn = $this->connection;

        $sql = "DELETE FROM rezervimi WHERE ID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }
 
}
?>