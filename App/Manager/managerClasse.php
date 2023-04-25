<?php 

namespace App\Manager;
use App\utils\BddConnect;
use App\Model\ModelClasse;

class ManagerClasse extends ModelClasse{

    public function getAllClass():?array{
        try{
        
        $req = $this->connexion()->prepare('SELECT id_classes, classe_classes, pointDeVie_classes,attaque_classes,defense_classes FROM classes');
        $req->execute();
        $data = $req->fetchAll(\PDO::FETCH_OBJ);
        return $data;
        }catch(\Exception $e){
            die('message'.$e->getMessage());
        }
    }
}
?>