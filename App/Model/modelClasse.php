<?php

class ModelClasse{
    private ?int $id;
    private ?string $classe;
    private ?int $pointDeVie;
    private ?int $attaque;
    private ?int $defense;

    public function __construct(){
        
    }

    public function getId(){
        return $this->id;
    }
    public function getClasse(){
        return $this->classe;
    }
    public function getPointDeVie(){
        return $this->pointDeVie;
    }
    public function getAttaque(){
        return $this->attaque;
    }
    public function getDefense(){
        return $this->defense;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setClasse($classe){
        $this->classe = $classe;
    }
    public function setPointDeVie($pointDeVie){
        $this->pointDeVie = $pointDeVie;
    }
    public function setAttaque($attaque){
        $this->attaque = $attaque;
    }
    public function setDefense($defense){
        $this->defense = $defense;
    }
}
?>