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

    $client = new client;

    $ID=$_GET['idcli'];
    
    $reponse = $client->suppclient($ID);

    if ($reponse){

        echo "<h2>Le client avec l'identifiant IDCLI N°". $ID. " a été suprimmé !!</h2>";

    }else{

        echo "<h1>Suppression impossible.</h2>";
    }
    ?>

</body>
<?php
    include "../includes/footer.php";
?>
</html>