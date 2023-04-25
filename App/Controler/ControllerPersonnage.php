<?php 

namespace App\Controler;

use App\utils\BddConnect;
use App\utils\Fonctions;
use App\Manager\managerPersonnage;

class ControllerPersonnage extends managerPersonnage{
    
    public function insertPersonnage(){
    if(isset($_SESSION['connected'])){
    $class = new ControllerClasse();
    $data = $class->getAllClass();
    $msg = '';
        if(isset($_POST['submit'])){
            $nom = Fonctions::cleanInput($_POST['nom']);
            $classe = Fonctions::cleanInput($_POST['classe']);
            $createur = $_SESSION['id'];
            if(!empty($nom) AND !empty($classe) AND !empty($createur)){
                $this->setNom($nom);
                $this->setClasse($classe);
                $this->setCreateur($createur);
                if($this->getPersoByInfo()){
                    $msg = 'Le personnage existe déja !';
                    echo '<script>
                                setTimeout(()=>{
                                    modal.style.display = "block";
                                }, 500);
                            </script>';
                }else{
                    $this->addPersonnage();
                    $msg = 'Le personnage à bien été crée !';
                    echo '<script>
                                setTimeout(()=>{
                                    modal.style.display = "block";
                                }, 500);
                            </script>';
                }
                
            }else{
                $msg = 'Veuillez remplir tous les champs';
                echo '<script>
                                setTimeout(()=>{
                                    modal.style.display = "block";
                                }, 500);
                            </script>';
            }
        }
        include './App/Vue/view_add_perso.php';
    }
}}



?>