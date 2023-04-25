<?php
session_start();

use App\Controler\ControllerClasse;
use App\Controler\ControllerJoueur;
use App\Controler\ControllerPersonnage;


include './App/utils/BddConnect.php';
include './App/utils/fonctions.php';
include './App/Model/modelClasse.php';
include './App/Model/modelJoueurs.php';
include './App/Model/modelPersonnages.php';
include './App/Manager/managerClasse.php';
include './App/Manager/managerJoueur.php';
include './App/Manager/managerPersonnage.php';
include './App/Controler/controllerClasse.php';
include './App/Controler/controllerJoueur.php';
include './App/Controler/controllerPersonnage.php';

$url = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url['path']) ? $url['path'] : '/';

$joueurController = new ControllerJoueur();
$personnageController = new ControllerPersonnage();
$classeController = new ControllerClasse();

if(isset($_SESSION['connected'])){
    switch($path){
        case '/site/':
            include './App/Vue/home.php';
            break;

        case '/site/profil':
            include './App/Vue/view_compte.php';
            break;

        case '/site/deconnexion':
            $joueurController->deconnectJoueur();
            break;

        case '/site/ajoutPerso':
            $personnageController->insertPersonnage();
            break;

        default:
            include './App/Vue/view_error.php';
            break;
    }
}else{
    switch($path){
        case '/site/':
            include './App/Vue/home.php';
            break;
        case '/site/inscription':
            $joueurController->insertUser();
            break;
        case '/site/connexion':
            $joueurController->connectJoueur();
            break;
        default:
            include './App/Vue/view_error.php';
            break;
    }
}
?>