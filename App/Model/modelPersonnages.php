<?php

class ModelPersonnage{
    private ?int $id;
    private ?string $nom;
    private ?ModelJoueurs $createur;
    private ?ModelClasse $classe;
    

    public function __construct(){
        $this->classe = new ModelClasse;
        $this->createur = new ModelJoueurs;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getClasse(){
        return $this->classe;
    }
    public function getCreateur(){
        return $this->createur;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setClasse($classe){
        $this->classe = $classe;
    }
    public function setCreateur($createur){
        $this->createur = $createur;
    }
}
?>