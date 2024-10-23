<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-4 mt-5">
        <form action="traitement.php" method="post">
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" class="form-control" name="prenom">
            </div>

            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group mb-3">
                <label for="">Telephone</label>
                <input type="text" class="form-control" name="tel">
            </div>
            <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </form>
    </div>

    <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>