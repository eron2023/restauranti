<?php

class Kontakt{
    private $id;
    private $name;
    private $email;
    private $tema;
    private $mesazhi;


    function __construct($id,$name,$email,$tema,$mesazhi){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->tema = $tema;
            $this->mesazhi = $mesazhi;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getTema(){
        return $this->tema;
    }
    function getEmail(){
        return $this->email;
    }
    function getMesazhi(){
        return $this->mesazhi;
    }
}

?>