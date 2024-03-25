<?php

class Rezervimi{
    private $id;
    private $userID;
    private $data;
    private $koha;
    private $nr_personave;


    function __construct($id,$userID,$data,$koha,$nr_personave){
            $this->id = $id;
            $this->userID = $userID;
            $this->data = $data;
            $this->koha = $koha;
            $this->nr_personave = $nr_personave;
    }


    function getId(){
        return $this->id;
    }
    function getUserID(){
        return $this->userID;
    }
    function getData(){
        return $this->data;
    }
    function getKoha(){
        return $this->koha;
    }
    function getNrPersonave(){
        return $this->nr_personave;
    }
}

?>