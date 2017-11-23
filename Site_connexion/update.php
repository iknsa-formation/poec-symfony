<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7"> 
                <?php
                    define("SERVERBDD","localhost");
                    define("NAMEBDD","formation");
                    define("USERBDD","root");
                    define("PASSWORDBDD","");

                    $connexion = new mysqli(SERVERBDD,USERBDD,PASSWORDBDD,NAMEBDD);
                
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $mdp = $_POST['mdp'];
                    $conf_mdp = $_POST['conf_mdp'];
                    $tel = $_POST['tel'];
                    $adresse = $_POST['adresse'];
                    $email = $_POST['mail'];
                    $hidden = $_POST['hidden'];
                
                    $hash = password_hash($mdp,PASSWORD_BCRYPT);
                
                    $modifier = "UPDATE users SET nom='$nom', prenom='$prenom', mdp='$hash', telephone='$tel', code_postal='$adresse', mail='$email' WHERE id=$hidden";
                
                    if($mdp==$conf_mdp){
                        $r = mysqli_query($connexion,$modifier);
                        echo "<div class='alert alert-success' role='alert'>Mise à jour bien prise en compte</div>";
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'>Veuillez indiquer le même mot de passe</div>";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>
