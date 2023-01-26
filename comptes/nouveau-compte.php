<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Nouveau Compte</title>
</head>
<?php
    include "../includes/connexion-bdd.php";
    include "classe-compte.php";
    include "../clients/classe-client.php";
?>
<body>
    <?php
    include "../includes/navigation.php";

    ?>

<!-- Insertion dans la base de donnée -->

<?php

// récupération des données du formulaire

if (isset($_POST["submit"])){

    $titulaire=$_POST["nomclient"];
    $idcli=$_POST["idcli"];
    $solde=$_POST["solde"];
    $Devise=$_POST["devise"];

// Appele à la méthode de classe client
$compte= new compte;

$query=$compte->createNewAccount($titulaire, $idcli, $solde, $Devise);

if($query){
    echo "<h2>Un comte a été créé pour le client n° ".$idcli. "!</h2>";
}else{
    echo "<h2>Echec de la création de compte</h2>";
}

}

?>


    <!-- Formulaire pour nouveau compte -->
    <div>
    <br><br><br><br><br>
    <fieldset>
        <form action="#" method="post">
            <br><br>
            <div class="Formcompte">
            <label for="nomclient">Titulaire</label>
            <select name="nomclient" class="form-control" id="nomclient" >
                <?php
                    $client = new client;
                    $reponse = $client->displayclient();
                    while ($donnees = $reponse->fetch()){
                ?>
                <option><?=$donnees['nom']."&nbsp".$donnees['prenom']?></option>
                <?php } ?>
            </select>
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="idcli">identifiant client</label>
            <select name="idcli" class="form-control" id="idcli" >
                <?php
                    $client = new client;
                    $reponse = $client->displayclient();
                    while ($donnees = $reponse->fetch()){
                ?>
                <option><?=$donnees['idcli']?></option>
                <?php } ?>
            </select>
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="solde">Solde</label>
            <input type="text" id="solde" name="solde" value="" placeholder="">
            </div>
            <br><br>
            <div class="Formcompte">
            <label for="devise">Devise</label>
            <input type="text" id="devise" name="devise" value="" placeholder="">
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

    
</body>
<?php
    include "../includes/footer.php";
?>
</html>