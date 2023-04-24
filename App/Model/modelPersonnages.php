<?php

class ModelPersonnage{
    private ?int $id;
    private ?string $nom;
    private ?ModelClasse $classe;
    

    public function __construct(){
        $this->classe = new ModelClasse;
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

    public function setId($id){
        $this->id = $id;
    }
    public function setPseudo($nom){
        $this->nom = $nom;
    }
    public function setClasse($classe){
        $this->classe = $classe;
    }
}
?>