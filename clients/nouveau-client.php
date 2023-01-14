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
    ?>

    <!-- Formulaire pour nouveau client -->
    <div>
    <br><br><br><br><br>
    <fieldset>
        <form action="#" method="post">
            <div class="Formclient">
            <label for="idclient">Identifiant client:</label>
            <input type="text" id="idclient" name="idclient" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="nomclient">Nom:</label>
            <input type="text" id="nomclient" name="nomclient" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="prenclient">Prénom:</label>
            <input type="text" id="prenclient" name="prenclient" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="datenaissance">Date de naissance:</label>
            <input type="text" id="datenaissance" name="datenaissance" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formclient">
            <label for="telclient">Téléphone:</label>
            <input type="text" id="telclient" name="telclient" value="" placeholder="">
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

        $ID=$_POST["idclient"];
        $NOM=$_POST["nomclient"];
        $PRENOM=$_POST["prenclient"];
        $DATE=$_POST["datenaissance"];
        $ADRESSE=$_POST["adresse"];
        $TEL=$_POST["telclient"];

    // écriture la requête
    $sql="INSERT INTO client (idcli,nom,prenom,dateNaissance,adresse,tel)
        VALUES (:idcli,:nom,:prenom,:dateNaissance,:adresse,:tel)";
    

    // Préparation de la requête

    $query= $BDD->prepare($sql);


    // On injecte les valeurs

    $query->bindvalue(":idcli",$ID);
    $query->bindvalue(":nom",$NOM);
    $query->bindvalue(":prenom",$PRENOM);
    $query->bindvalue(":dateNaissance",$DATE);
    $query->bindvalue(":adresse",$ADRESSE);
    $query->bindvalue(":tel",$TEL);

    // on execute la requête

    $query->execute();

    if($query){
        echo "Un nouveau client a été inscrit.";
    }else{
        echo "Echec de l'inscription.";
    }

    }
    
    ?>
</body>
</html>