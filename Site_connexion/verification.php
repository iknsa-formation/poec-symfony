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
                    $mdp_verif = "SELECT id,mdp,mail FROM users WHERE mail='".$_POST['mail']."'";
                    $r = mysqli_fetch_assoc(mysqli_query($connexion,$mdp_verif));
                    $verify = password_verify($_POST['mdp'],$r['mdp']);

                    if(!$verify){
                        echo "<div class='alert alert-danger' role='alert'>Erreur de connexion</div>";
                    }
                    else{
                        session_start();
                        $_SESSION['mail'] = $_POST['mail'];
                        $_SESSION['mdp'] = $_POST['mdp'];
                        $_SESSION['id'] = $r['id'];

                        header("location: liste.php?id=".$_SESSION['id']."");
                    }
                ?>
           
            </div>
        </div>
    </div>

</body>
</html>
