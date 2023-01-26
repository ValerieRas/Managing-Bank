<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    include "classe-client.php";

    // Récupération des infos client à modifier
    $ID= $_GET['idcli'];
    $client = new client;
    $reponse = $client->display_oneCli($ID);
    $donnees = $reponse->fetch(); 

    ?>
     <!-- Formulaire pour modifier compte -->
     <div>
    <br><br><br><br><br>
    <fieldset>
        <form action="#" method="post">
            <div class="Formclient">
            <label for="idclient">Identifiant client:</label>
            <input type="text" id="idclient" name="idclient" value="<?=$ID?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="nomclient">Nom:</label>
            <input type="text" id="nomclient" name="nomclient" value="<?=$donnees["nom"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="prenclient">Prénom:</label>
            <input type="text" id="prenclient" name="prenclient" value="<?=$donnees["prenom"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="datenaissance">Date de naissance:</label>
            <input type="date" id="datenaissance" name="datenaissance" value="<?=$donnees["dateNaissance"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" value="<?=$donnees["adresse"]?>" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="telclient">Téléphone:</label>
            <input type="text" id="telclient" name="telclient" value="<?=$donnees["tel"]?>" placeholder="">
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

        $NOM=$_POST["nomclient"];
        $PRENOM=$_POST["prenclient"];
        $DATE=$_POST["datenaissance"];
        $ADRESSE=$_POST["adresse"];
        $TEL=$_POST["telclient"];
        
        $ID=$_GET["idcli"];


    // Modification sur la base de donnée.
    
    $query= $client->modifclient($ID,$NOM,$PRENOM,$DATE,$ADRESSE,$TEL);
    

    if($query){
        echo "les modifications sont enregistrées";
    }else{
        echo "Echec des modifications";
    }

    }
    
    ?>

</body>
<?php
    include "../includes/footer.php";
?>
</html>