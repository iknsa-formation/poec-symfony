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
            <div class="col-md-4">    
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
                
                $req = "SELECT mail FROM users WHERE mail='".$email."'";
                $r_mail = mysqli_query($connexion,$req);
                
                $requete_insert = "INSERT INTO users(nom,prenom,mdp,telephone,code_postal,mail) VALUES('".$nom."','".$prenom."','".$mdp."','".$tel."','".$adresse."','".$email."')";
                
                if($nom!="" && $prenom!="" && $email!="" && $mdp!="" && $conf_mdp!=""){   
                    $nbrow = mysqli_num_rows($r_mail);  //compter le nombre de lignes retournent la requete

                    //si le nb de lignes est supérieur à zero, il existe deja une adresse mail identique
                    if($nbrow>0){ 
                        echo "<div class='alert alert-danger' role='alert'>Vous êtes déjà enregistré.</div>";
                    }
                    else{
                        if($mdp==$conf_mdp){
                            $insert = mysqli_query($connexion,$requete_insert);
                            echo "<div class='alert alert-success' role='alert'>Vous avez bien été enregistré.</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger' role='alert'>Veuillez indiquer le même mot de passe</div>";
                        }
                    }
                }
            ?>
            </div>
        </div>
    </div>

</body>
</html>