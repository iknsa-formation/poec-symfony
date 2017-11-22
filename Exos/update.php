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
                <a href="liste.php">Liste des étudiants</a>
                <br/>
                <br/>
            </div>
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
                    $tel = $_POST['tel'];
                    $adresse = $_POST['adresse'];
                    $email = $_POST['mail'];
                    $hidden = $_POST['hidden'];
                
                    $modifier = "UPDATE users SET nom='$nom', prenom='$prenom', telephone='$tel', code_postal='$adresse', mail='$email' WHERE id=$hidden";
                    $r = mysqli_query($connexion,$modifier);
                    echo "<div class='alert alert-success' role='alert'>Mise à jour bien prise en compte</div>";

                ?>
            </div>
        </div>
    </div>

</body>
</html>
