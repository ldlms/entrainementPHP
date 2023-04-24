<?php
session_start();

include './App/utils/connectBdd.php';
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
        case '':
        include '';
        break;

        case '':
        include '';
        break;

        case '':
        include '';
        break;

        case '':
        include '';
        break;

        default;
        include './App/';
        break;
    }
}
?>