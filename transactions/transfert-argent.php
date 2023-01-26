<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>transfert argent</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
    include "../comptes/classe-compte.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>


<!-- Formulaire pour le transfert d'argent -->
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
        <label for="transfert">Montant à tranférer :</label>

        <input type="text" name="transfert" id="transfert" value="">
        <br><br>

        <input type="submit" name="validerTrans" value="Valider">
    </form>
</fieldset>
<?php

if (isset($_POST['validerTrans'])) 
{
    $expediteur = $_POST['comptedebit'];
    $beneficiaire = $_POST['comptecredit'];
    $montant = $_POST['transfert'];
    $compte = new compte();
    $compte->debitercompte($expediteur,$montant);
    $compte->creditercompte($beneficiaire,$montant);

    echo "<h2>Le transert a été effectué avec succès!</h2><br><br><br><a href='../comptes/Gestion-compte.php'><button>Retour aux comptes</button></a>";
}
?>
</body>
<?php
    include "../includes/footer.php";
?>
</html>