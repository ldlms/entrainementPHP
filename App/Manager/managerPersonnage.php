<?php
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
        $req->bindParam($nom,PDO::PARAM_STR);
        $req->bindParam($classeNom,PDO::PARAM_STR);
        $req->bindParam($createurId,PDO::PARAM_STR);
        $req->execute();
        }catch(Exception $e){
            die('Error'.$e->getMessage());
        }


    }
}
?>