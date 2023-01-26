<!DOCTYPE html>
<html lang="en">
<?php
    include "../includes/head.php";
?>
<body>
    <?php
    include "../includes/navigation.php";
    ?>
    <div class="main-container">
    <article class="Retrait">
        <h1>Retrait</h1>
        <p>
            Pour effectuer un retrait:
            
            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="retrait-argent.php">
            <button>Retrait</button>
        </a>
        <br><br><br>
    </article>
    <article class="Versement">
        <h1>Versements</h1>
        <p>
            Pour effectuer un versement:

            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="versement-argent.php">
            <button>Versement</button>
        </a>
        <br><br><br>
    </article>
    <article class="Transfert">
        <h1>Transfert</h1>
        <p>
            Pour transférer d'un compte à un autre :

            Cliquer sur le bouton ci-dessous.
        </p>
        <a href="transfert-argent.php">
            <button>Transfert</button>
        </a>
        <br><br><br>
    </article>
</div>
</body>
<?php
    include "../includes/footer.php";
?>
</html>