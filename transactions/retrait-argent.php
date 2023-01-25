<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Retrait argent</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>
    
    <!-- Formulaire pour le retrait d'argent -->
<fieldset>
    <form action="POST">

        <label for="compte">Sélectionnez le compte à débiter :</label>

        <select name="compte" id="compte">
            <?php

            ?>
        </select>
        <br><br>
        <label for="retrait">Montant à débiter :</label>
 
        <input type="text" name="retrait" id="retrait" value="">
        <br><br>

        <input type="submit" name="validerRetrait" value="Valider">

    </form>
</fieldset>
</body>
</html>