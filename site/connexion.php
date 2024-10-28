<?php include_once("navbar.php"); ?>

<div class="container col-md-4 mt-3">
    <h2>Connexion</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="mdp" class="form-control">
        </div>
        <button type="submit" name="login" class="btn btn-success mt-3">Se connecter</button>
    </form>
</div>
<?php include_once("pied.php"); ?>