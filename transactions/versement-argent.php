<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Versement</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>

    <!-- Formulaire pour le versement d'argent -->
<fieldset>
    <form action="POST">
        
        <label for="compte">Sélectionnez le compte à créditer :</label>

        <select name="compte" id="compte">
            <?php

            ?>
        </select>
        <br><br>
        <label for="vers">Montant à créditer :</label>

        <input type="text" name="vers" id="vers" value="">
        <br><br>

        <input type="submit" name="validerVers" value="Valider">
    </form>
</fieldset>
</body>
</html>