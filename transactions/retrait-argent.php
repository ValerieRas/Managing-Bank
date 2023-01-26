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
    include "../comptes/classe-compte.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>
    
    <!-- Formulaire pour le retrait d'argent -->
<fieldset>
    <form action="" method="POST">

        <label for="comptedebit">Sélectionnez le compte à débiter :</label>
        <select name="comptedebit" id="comptedebit">
            <option>Compte à débiter</option>
            <?php
                $compte = new compte;
                $reponse = $compte->displayAccount();
                while ($donnees = $reponse->fetch()){
            ?>
            <option><?=$donnees['titulaire']?></option>
            <?php } ?>
        </select>
        <br><br>
        <label for="retrait">Montant à débiter :</label>
 
        <input type="text" name="retrait" id="retrait" value="">
        <br><br>

        <input type="submit" name="validerRetrait" value="Valider">

    </form>
</fieldset>
<?php
    if (isset($_POST['validerRetrait'])) {
        $titulaire = $_POST['comptedebit'];
        $montant = $_POST['retrait'];
        $compte = new compte();
        $retrait = $compte->debitercompte($titulaire,$montant);
       

        echo "<h2>Retrait effectué avec succès!</h2><br><br><br><a href='../comptes/Gestion-compte.php'><button>Retour aux comptes</button></a>";

    }
?>

</body>
<?php
    include "../includes/footer.php";
?>
</html>