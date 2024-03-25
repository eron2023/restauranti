<?php

class Product{
    private $id;
    private $titulli;
    private $imgLink;
    private $description;
    private $kategoria;
    private $userId;


    function __construct($id,$titulli,$imgLink,$description, $kategoria, $userId){
            $this->id = $id;
            $this->titulli = $titulli;
            $this->imgLink = $imgLink;
            $this->description = $description;
            $this->kategoria = $kategoria;
            $this->userId = $userId;
    }


    function getId(){
        return $this->id;
    }
    function getTitulli(){
        return $this->titulli;
    }
    function getImgLink(){
        return $this->imgLink;
    }
    function getDescription(){
        return $this->description;
    }
    function getKategoria(){
        return $this->kategoria;
    }
    function getUserId(){
        return $this->userId;
    }
}

?>