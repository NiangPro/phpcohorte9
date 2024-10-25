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
       <form action="" method="post">
            <div class="form-group">
                <input type="text" placeholder="Veuillez entrer un texte" class="form-control" name="chaine">
                <button type="submit" name="valider" class="btn btn-warning">Tester</button>
            </div>
        </form>

        <?php 
            // on teste si l'utilisateur clique sur le bouton tester
            if (isset($_POST["valider"])) {
                extract($_POST);
                $cpt = 0;

                // on pourcourit la chaine 
                for ($i=0; $i < strlen($chaine) ; $i++) { 
                    // on teste caractere par caractere 
                    if (in_array(strtolower($chaine[$i]), ['i', 'o', 'a', 'e', 'u', 'y'])) {
                        $cpt++;
                    }
                }

                echo "<q>$chaine</q> comporte $cpt voyelle (s)";
            }

        ?>
    </div>

<script src="../assets/bootstrap.bundle.min.js"></script>
</body>
</html>