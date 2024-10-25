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

                <input type="text"  class="form-control" placeholder="Veuillez entrer votre prenom" name="prenom">
            </div>
            <button type="submit" name="tester" class="btn mt-3 btn-outline-success">Tester</button>
        </form>

        <?php 

            function message($msg, $type = "success"){
                echo '<div class="alert mt-3 alert-'.$type.'">'.$msg.'</div>';
            }

            if (isset($_POST["tester"])) {
                $p = trim($_POST["prenom"]);

                if (ctype_alpha($p)) {
                    message("Bonjour ".ucfirst($p));
                    // echo '<div class="alert mt-3 alert-success">Bonjour '.ucfirst($p).'</div>';
                }else{
                    message("Veuillez entrer un prenom correct", "danger");
                    // echo '<div class="alert mt-3 alert-danger">Veuillez entrer un prenom correct</div>';
                }
                
            }

        ?>
    </div>

    <script src="../assets/bootstrap.bundle.min.js"></script>
</body>
</html>