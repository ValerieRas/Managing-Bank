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
    include "../comptes/classe-compte.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>

    <!-- Formulaire pour le versement d'argent -->
<fieldset>
    <form action="" method="POST">
        
        <label for="comptecredit">Sélectionnez le compte à créditer :</label>
        <select name="comptecredit" id="comptecredit">
            <option>Compte à créditer</option>
            <?php
                $compte = new compte;
                $reponse = $compte->displayAccount();
                while ($donnees = $reponse->fetch()){
            ?>
            <option><?=$donnees['titulaire']?></option>
            <?php } ?>
        </select>
        <br><br>
        <label for="vers">Montant à créditer :</label>

        <input type="text" name="vers" id="vers" value="">
        <br><br>

        <input type="submit" name="validerVers" value="Valider">
    </form>
</fieldset>
<?php
    if (isset($_POST['validerVers'])) {
        $titulaire = $_POST['comptecredit'];
        $montant = $_POST['vers'];
        $compte = new compte();
        $versement = $compte->creditercompte($titulaire,$montant);
        
        echo "<h2>Le versement a été effectué avec succès!</h2><br><br><br><a href='../comptes/Gestion-compte.php'><button>Retour aux comptes</button></a>";
        
    }
?>
</body>
<?php
    include "../includes/footer.php";
?>
</html>