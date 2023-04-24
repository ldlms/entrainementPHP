<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoute ton perso</title>
</head>
<body>
    <h3>ajoute un nouveau personnage</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nomPerso">Le nom du perso</label>
        <input type="text" name="nomPerso">
        <label for="classe">Sa classe</label>
        <select name="classe">
            <?php
                foreach($data as $value){
                    echo '<option value='.$value->id_classe.'>'.$value->classe_classe.'</option>';
                }
            ?>
        </select>
        <input type="submit" value="ajouter" name="submit">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p><?= $msg ?></p>
        </div>
    </form>
</body>
</html>