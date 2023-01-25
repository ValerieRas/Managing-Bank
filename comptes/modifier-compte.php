<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>modif compte</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    include "classe-compte.php";

    // Récupération des infos comptes à modifier
    $ID= $_GET['idcompte'];
    $compte = new compte;
    $reponse = $compte->display_oneAcc($ID);
    $donnees = $reponse->fetch(); 

    ?>
     <!-- Formulaire pour modifier compte -->
     <div>
    <br><br><br><br><br>
    <fieldset>
        <form action="#" method="post">
            <div class="Formcompte">
            <label for="idcompte">Identifiant compte:</label>
            <input type="text" id="idcompte" name="idcompte" value="<?=$ID?>" placeholder="">
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="nomclient">Titulaire:</label>
            <input type="text" id="nomclient" name="nomclient" value="<?=$donnees["titulaire"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="solde">Solde:</label>
            <input type="text" id="solde" name="solde" value="<?=$donnees["solde"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="devise">Devise:</label>
            <input type="text" id="devise" name="devise" value="<?=$donnees["devise"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <input type="submit" name="submit" value="submit">
            </div>
            <br><br>
        </form>
    </fieldset>
    </div>
    <br><br><br>

    <!-- Insertion dans la base de donnée -->

    <?php

    // récupération des données du formulaire

    if (isset($_POST["submit"])){

        $titulaire=$_POST["nomclient"];
        $solde=$_POST["solde"];
        $devise=$_POST["devise"];
        
        $ID=$_GET["idcompte"];


    // Modification sur la base de donnée.
    
    $query= $compte->modifAccount($ID, $titulaire, $solde, $devise);
    

    if($query){
        echo "les modifications sont enregistrées";
    }else{
        echo "Echec des modifications";
    }

    }
    
    ?>

</body>
</html>