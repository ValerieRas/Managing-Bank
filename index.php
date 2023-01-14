<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="#">Gestion des comptes bancaires</a>
        </li>
        <li>
            <a href="./index.php">Home</a>
        </li>
        <li>
            <a href="./clients/Gestion-client.php">Clients</a>
        </li>
        <li>
            <a href="./comptes/Gestion-compte.php">Comptes</a>
        </li>
        <li>
            <a href="./transactions/gestion-transactions.php">Transactions</a>
        </li>
    </ul>
</nav>
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
        <a href="clients/Gestion-client.php">
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
        <a href="comptes/Gestion-compte.php">
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
        <a href="transactions/gestion-transactions.php">
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