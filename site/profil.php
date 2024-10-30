<?php include_once("navbar.php"); ?>

<div class="container mt-5">
    <h3>Page Profil</h3>

    <strong>Prenom: </strong> <?php echo $_GET["prenom"]; ?> <br>
    <strong>Nom: </strong> <?= $_GET["nom"] ?> <br>
</div>
<?php include_once("pied.php"); ?>