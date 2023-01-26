<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Suppression compte</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
    include "classe-compte.php";
?>
<body>
    <?php
    include "../includes/navigation.php";

    $compte = new compte;

    $ID=$_GET['idcompte'];
    
    $reponse = $compte->suppAccount($ID);

    if ($reponse){

        echo "<h2>Le compte avec l'identifiant IDCOMPTE N°". $ID. " a été suprimmé !!</h2>";

    }else{

        echo "<h1>Suppression impossible.</h2>";
    }
    ?>

</body>
<?php
    include "../includes/footer.php";
?>
</html>