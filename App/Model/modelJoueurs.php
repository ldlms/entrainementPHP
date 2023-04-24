<?php

class ModelJoueurs{
    private ?int $id;
    private ?string $pseudo;
    private ?string $mail;
    private ?string $password;
    private ?array $listPerso;

    public function __construct(){}

    public function getId(){
        return $this->id;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getListPerso(){
        return $this->listPerso;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setListPerso($listPerso){
        $this->listPerso = $listPerso;
    }
}



?>


