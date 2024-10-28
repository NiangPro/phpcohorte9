<?php require_once("navbar.php"); ?>
<div class="container col-md-8 mt-3">
    <h3>Page d'inscription</h3>
    <form action="" method="post">
    <div class="form-group">
            <label for="">Prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tel</label>
            <input type="tel" name="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="mdp" class="form-control">
        </div>
        <button type="submit" name="register" class="btn btn-success mt-3">S'inscrire</button>
    </form>
</div>
<?php require_once("pied.php"); ?>