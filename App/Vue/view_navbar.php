<?php if(isset($_SESSION['connected'])):?>
    <div id="navbar">
        <li><a href="./">Home</a></li>
        <li><a href="./view_compte.php">Compte</a></li>
        <li><a href="./ajoutPerso">Ajouter un perso</a></li>
        <li><a href="./">Les Classes</a></li>
        <li><a href="./deconnexion">Deconnexion</a></li>
    </div>
<?php else:?>
    <div id="navbar">
        <li><a href="./">Home</a></li>
        <li><a href="./connexion">Connexion</a></li>
        <li><a href="./inscription">inscription</a></li>
        <li><a href="./">Les Classes</a></li>
    </div>
<?php endif ;?>