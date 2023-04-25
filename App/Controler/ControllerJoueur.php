<?php

namespace App\Controler;

use App\utils\BddConnect;
use App\utils\Fonctions;
use App\Manager\ManagerJoueur;

class ControllerJoueur extends ManagerJoueur{

    public function insertUser(){
        $msg = '';
        if(isset($_POST['submit'])){
            $pseudo = Fonctions::cleanInput($_POST['pseudo']);
            $mail = Fonctions::cleanInput($_POST['mail']);
            $password = Fonctions::cleanInput($_POST['password']);
            if(!empty($pseudo) AND !empty($mail) AND !empty($password)){
                $this->setMail($mail);
                if($this->getJoueurByMail()){
                    $msg = 'Le compte existe déja';
                    echo '<script>
                                setTimeout(()=>{
                                    modal.style.display = "block";
                                }, 500);
                            </script>';
                }else{
                    $this->setPseudo($pseudo);
                    $this->setPassword($password);
                    $this->insertJoueur();
                    $msg = 'le profil de '.$pseudo.' à bien été enregistré';
                }
            }else{
                $msg = 'veuillez remplir les différents champs du formulaire';
                echo '<script>
                            setTimeout(()=>{
                                modal.style.display = "block";
                            }, 500);
                        </script>';

            }
        }
        include './App/Vue/view_add_user.php';
    }

    public function connectJoueur(){
        $msg = '';
        if(isset($_POST['submit'])){
            $pseudo = Fonctions::cleanInput($_POST['pseudo']);
            $password = Fonctions::cleanInput($_POST['password']);
            if(!empty($pseudo) AND !empty($password)){
                $this->setPassword($password);
                $this->setPseudo($pseudo);
                $data = $this->getJoueurByPseudo();
                var_dump($data[0]->password_joueur);
                if($data){
                    if(password_verify($password,$data[0]->password_joueur)){
                        $_SESSION['connected'] = true;
                        $_SESSION['pseudo'] = $data[0]->pseudo_joueur;
                        $_SESSION['mail'] = $data[0]->mail_joueur;
                        $_SESSION['id'] = $data[0]->id_joueur;
                        header('Location: ./');
                    }else{
                        $msg = 'Mot de passe incorect';
                        echo '<script>
                                setTimeout(()=>{
                                    modal.style.display = "block";
                                }, 500);
                            </script>';
                    }
                }
            }else{
                $msg = 'veuillez remplir les différents champs du formulaire';
                echo '<script>
                            setTimeout(()=>{
                                modal.style.display = "block";
                            }, 500);
                        </script>';
            }
        }
        include './App/Vue/view_connect_user.php';
    }

    public function deconnectJoueur(){
        session_destroy();

        header('location:./');
    }
}
?>