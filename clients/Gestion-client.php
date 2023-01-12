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

    <br><br>
    <a href="nouveau-client.php"><button id="valid">Nouvel employé</button></a>
    <br><br><br>
    <!-- Comment chercher client dans uen table ??? -->
    <br><br><br><br><br>
    <table class="displaytable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>DATE DE NAISSANCE</th>
                    <th>ADRESSE</th>
                    <th>TELEPHONE</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Affichage de la table

                $reponse = $BDD->query('SELECT idcli, nom, prenom, dateNaissance, adresse, tel FROM CLIENT');
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['idcli']?></td>
                <td><?php echo $donnees['nom']?></td>
                <td><?php echo $donnees['prenom']?></td>
                <td><?php echo $donnees['dateNaissance']?></td>
                <td><?php echo $donnees['adresse']?></td>
                <td><?php echo $donnees['tel']?></td>
                <td><a href='supprimer-client.php?idcli=<?= $donnees["idcli"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='modifier-client.php?idcli=<?= $donnees["idcli"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
                </tr>
                <?php }   ?>
            </tbody>
        </table>
<br><br><br>
</body>
<?php
    include "../includes/footer.php";
?>
</html>