<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
<h3>Inscrivez-vous :</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="pseudo">saisir votre pseudo :</label>
            <input type="text" name="pseudo">
            <label for="mail">saisir votre mail :</label>
            <input type="text" name="mail">
            <label for="password">saisir votre mot de passe :</label>
            <input type="password" name="password">
            <input type="submit" value="Ajouter" name="submit">
        </form>
        <div id="myModal" class="modal">
        
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p><?= $msg ?></p>
        </div>
    </div>
</body>
</html>