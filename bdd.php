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
        
        <br/>
        <br/>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">    
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

                if($nom!="" && $prenom!="" && $email!=""){
                    $requete = "INSERT INTO users(nom,prenom,telephone,code_postal,mail) VALUES('".$nom."','".$prenom."','".$tel."','".$adresse."','".$email."')";

                    $insert = mysqli_query($connexion,$requete);
                    
                    if($insert)
                        echo "Vous avez bien été enregistré dans la base de données!";
                    else
                        echo "Un problème est survenu, vous n'avez pas été enregistré dans la base de données.";
                }
            ?>
            </div>
        </div>
    </div>

</body>
</html>