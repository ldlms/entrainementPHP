<?php 
class ManagerClasse extends ModelClasse{

    public function getAllClass():?array{
        try{
        $bdd = BddConnect::connexion();
        $req = $bdd->prepare('SELECT id_classe, classe_classe, pointDeVie_classe,attaque_classe,defense_classe FROM classe');
        $req->execute();
        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        return $data;
        }catch(\Exception $e){
            die('message'.$e->getMessage());
        }
    }
}
?>