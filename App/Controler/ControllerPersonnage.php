<?php 

use App\Model\ModelClasse;
class ControllerPersonnage extends managerPersonnage{
    
    public function insertPersonnage(){
    if(isset($_SESSION['connected'])){
    $class = new ModelClasse();
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
                if($this->getpersoByInfo()){
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