<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-4 mt-5">
        <?php

            // $person = ["prenom" => "Bassirou", "nom" => "Niang"];

            // extract($person);

            // echo $prenom;

            
            if (isset($_POST["valider"])) {
                extract($_POST);

                if (ctype_digit($tel) && strlen($tel) == 9 && in_array(substr($tel, 0, 2), ["70", "75", "76", "77", "78", "88", "33"])) {
                    echo "numero valide :".$tel;
                }else{
                    echo "Numero invalide :".$tel;
                }
            }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" placeholder="Veuillez entrer votre numero de telephone" class="form-control" name="tel">
                <button type="submit" name="valider" class="btn btn-warning">Tester</button>
            </div>
        </form>
    </div>

<script src="../assets/bootstrap.bundle.min.js"></script>
</body>
</html>