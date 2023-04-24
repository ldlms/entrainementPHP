<?php
class ManagerJoueur extends ModelJoueurs{

    public function getJoueurByMail(){
        try{
            $mail = $this->getMail();
            $bdd = BddConnect::connexion();
            $req = $bdd->prepare("SELECT pseudo_joueur,mail_joueur,password_joueur,listPerso_joueur FROM joueur WHERE mail_joueur = ?");
            $req->bindParam(1,$mail, PDO::PARAM_STR);
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch(Exception $e){
            die('Error:'.$e->getMessage());
        }
    }

    public function getJoueurByPseudo(){
        try{
            $pseudo = $this->getPseudo();
            $bdd = BddConnect::connexion();
            $req = $bdd->prepare("SELECT pseudo_joueur,mail_joueur,password_joueur,listPerso_joueur FROM joueur WHERE pseudo_joueur = ?");
            $req->bindParam(1,$pseudo, PDO::PARAM_STR);
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch(Exception $e){
            die('Error:'.$e->getMessage());
        }
    }

    public function insertJoueur(){
        $pseudo = $this->getPseudo();
        $mail = $this->getMail();
        $password = $this->getPassword();
        $hashed = password_hash($password,PASSWORD_BCRYPT);
        $bdd = BddConnect::connexion();
        try{
            $req = $bdd->prepare("INSERT INTO 'joueur'('pseudo_joueur','mail_joueur','password_joueur') VALUES (?,?,?)");
            $req->bindparam(1,$pseudo,PDO::PARAM_STR);
            $req->bindParam(2,$mail,PDO::PARAM_STR);
            $req->bindParam(3,$hashed,PDO::PARAM_STR);
        }catch(Exception $e){
            die('Error:'.$e->getMessage());
        }
    }
}
?>