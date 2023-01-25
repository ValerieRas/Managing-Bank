<!DOCTYPE html>
<html lang="en">
<?php
    include "../includes/head.php";   
    include "../includes/connexion-bdd.php";
    include "classe-compte.php";
?>
<body>
    <?php
    include "../includes/navigation.php";

    ?>


<br><br>
    <a href="nouveau-compte.php"><button id="valid">Nouveau compte</button></a>
    <br><br><br>
    <!-- Comment chercher client dans une table ??? -->
    <br><br><br><br><br>
    <table class="displaytable">
            <thead>
                <tr>
                    <th>ID Compte</th>
                    <th>Code Banque</th>
                    <th>Code Guichet</th>
                    <th>RIB</th>
                    <th>Titulaire</th>
                    <th>ID Client</th>
                    <th>Solde du compte</th>
                    <th>Devise</th>
                    <th>Date de création</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Affichage de la table

                $compte = new compte;
                $reponse = $compte->displayAccount();
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['idcompte']?></td>
                <td><?php echo $donnees['codeBanq']?></td>
                <td><?php echo $donnees['codeGuichet']?></td>
                <td><?php echo $donnees['cleRib']?></td>
                <td><?php echo $donnees['titulaire']?></td>
                <td><?php echo $donnees['idcli']?></td>
                <td><?php echo $donnees['solde']?></td>
                <td><?php echo $donnees['devise']?></td>
                <td><?php echo $donnees['dateCreation']?></td>
                <td><a href='supprimer-compte.php?idcompte=<?= $donnees["idcompte"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='modifier-compte.php?idcompte=<?= $donnees["idcompte"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
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