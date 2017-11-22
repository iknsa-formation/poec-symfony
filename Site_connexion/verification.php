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

                    $req = "SELECT nom, mdp FROM users WHERE nom='".$_POST['nom']."' AND mdp='".$_POST['mdp']."'";
                    $re = mysqli_query($connexion,$req);
                    $exist = mysqli_num_rows($re);
                
                    if(!$exist){
                        echo "<div class='alert alert-danger' role='alert'>Erreur de connexion</div>";
                    }
                    else{
                        session_start();
                        $_SESSION['nom'] = $_POST['nom'];
                        $_SESSION['mdp'] = $_POST['mdp'];

                        header("location: liste.php");
                    }
                ?>
           
            </div>
        </div>
    </div>

</body>
</html>
