<?php

namespace App\Manager;
use App\utils\BddConnect;
use App\Model\ModelPersonnage;


class managerPersonnage extends ModelPersonnage{

    public function addPersonnage(){
        $bdd = BddConnect::connexion();
        $nom = $this->getNom();
        $classe = $this->getClasse();
        $classeNom = $classe->getClasse();        
        $createur = $this->getCreateur();
        $createurId = $createur->getId();
        try{
        $req = $bdd->prepare("INSERT INTO 'personnage'('nom_classe','classe_personnage','createur_personnage') VALUES (?,?,?)");
        $req->bindParam($nom,\PDO::PARAM_STR);
        $req->bindParam($classeNom,\PDO::PARAM_STR);
        $req->bindParam($createurId,\PDO::PARAM_STR);
        $req->execute();
        }catch(\Exception $e){
            die('Error'.$e->getMessage());
        }


    }

    public function getPersoByInfo(){
        $nom = $this->getNom();
        $createur = $this->getCreateur();
        $classe = $this->getClasse();
        $req = $this->connexion()->prepare('SELECT nom_personnage,createur_personnage,classe_personnage FROM personnage WHERE nom_personnage=? AND createur_personnage=? AND classe_personnage=?');
        try{
        $req->bindParam(1,$nom,\PDO::PARAM_STR);
        $req->bindParam(2,$createur,\PDO::PARAM_STR);
        $req->bindParam(3,$classe,\PDO::PARAM_STR);
        $req->execute();
        }catch(\Exception $e){
            die('Error'.$e->getMessage());
        }
        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        return $data;
    }
}
?>