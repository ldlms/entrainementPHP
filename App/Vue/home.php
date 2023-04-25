<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body>
    <?php include './App/Vue/view_navbar.php' ;?>
    <?php if(isset($_SESSION['connected'])):?>
        <br>
       <?php echo 'Bonjour '.$_SESSION['pseudo'].' !';
        ?>
    <?php else:?>
        <?php echo 'Bonjour !' 
            ?>
    <?php endif ;?>    
</body>
</html>