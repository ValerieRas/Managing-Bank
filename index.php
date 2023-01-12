<!DOCTYPE html>
<html lang="en">
<?php
    include "includes/head.php";
?>
<body>
    <?php
    include "includes/navigation.php";
    ?>
<div class="main-container">
    <article class="Clients">
        <h1>Clients</h1>
        <p>
            Accéder à la section de gestions des clients:
            <ul>
                <li>Ajouter un nouveau client, modifier, supprimer</li>
                <li>Afficher un état</li>
                <li>etc ...</li>
            </ul>
            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="Gestion-client.php">
            <button>Accéder à la page clients</button>
        </a>
        <br><br><br>
    </article>
    <article class="Comptes">
        <h1>Comptes</h1>
        <p>
            Accéder à la section de gestions des comptes:
            <ul>
                <li>Ajouter un nouveau compte, modifier, supprimer</li>
                <li>Afficher un état</li>
                <li>etc ...</li>
            </ul>
            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="Gestion-comptes.php">
            <button>Accéder à la page Comptes</button>
        </a>
        <br><br><br>
    </article>
    <article class="Transactions">
        <h1>Transactions</h1>
        <p>
        Accéder à la section de gestions des transactions:
            <ul>
                <li>Ajouter une nouvelle transaction, modifier, supprimer</li>
                <li>Afficher un état</li>
                <li>etc ...</li>
            </ul>
            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="gestion-transactions.php">
            <button>Accéder à la page Transactions</button>
        </a>
        <br><br><br>
    </article>
</div>
</body>
<?php
    include "includes/footer.php";
?>
</html>