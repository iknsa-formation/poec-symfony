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
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h2>Exercice PHP</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <a href="index.php">Formulaire d'inscription</a>
                <br/>
                <br/>
            </div>
            <div class="col-md-2">
                <a href="liste.php">Liste des étudiants</a>
                <br/>
                <br/>
            </div>
        </div>
        <br/>
        <br/>
        
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
                $tel = $_POST['tel'];
                $adresse = $_POST['adresse'];
                $email = $_POST['mail'];
                
                $req = "SELECT mail FROM users WHERE mail='".$email."'";
                $r_mail = mysqli_query($connexion,$req);
                
                $requete_insert = "INSERT INTO users(nom,prenom,telephone,code_postal,mail) VALUES('".$nom."','".$prenom."','".$tel."','".$adresse."','".$email."')";
                
                if($nom!="" && $prenom!="" && $email!=""){   
                    $nbrow = mysqli_num_rows($r_mail);  //compter le nombre de lignes retournent la requete

                    //si le nb de lignes est supérieur à zero, il existe deja une adresse mail identique
                    if($nbrow>0){ 
                        echo "<div class='alert alert-danger' role='alert'>Vous êtes déjà enregistré.</div>";
                    }
                    else{
                        $insert = mysqli_query($connexion,$requete_insert);
                        echo "<div class='alert alert-success' role='alert'>Vous avez bien été enregistré.</div>";
                    }
                }
            ?>
            </div>
        </div>
    </div>

</body>
</html>