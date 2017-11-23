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
                    <?php
                        define("SERVERBDD","localhost");
                        define("NAMEBDD","formation");
                        define("USERBDD","root");
                        define("PASSWORDBDD","");

                        $connexion = new mysqli(SERVERBDD,USERBDD,PASSWORDBDD,NAMEBDD);

                        if(session_start()){
                            echo "<li style='margin-top:15px;'><b>Bonjour ".$_SESSION['mail']." "."</b></li>";
                    ?>
                    <li><button type="button" class="btn btn-outline-danger btn-sm" style='margin-top:10px; margin-left:10px;'><a href="deconnexion.php" style="color:red;">Déconnexion</a></button></li>
                    <?php
                        }

                        $requete = "SELECT * FROM users WHERE id='".$_GET['id']."'";
                        $r = mysqli_fetch_assoc(mysqli_query($connexion,$requete));
                    ?>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4"> 
                <a href="liste.php">Retour à la liste des étudiants</a>
                <br/>
                <br/>                
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"> 
                <form method="post" action="update.php">
                    <label>Nom*:</label>
                            <input type="text" class="form-control" name="nom" id="nom" required value="<?php echo $r['nom'];?>">
                    <label>Prénom*:</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required value="<?php echo $r['prenom'];?>">
                    <label>Mot de passe*:</label>
                            <input type="password" class="form-control" name="mdp" id="mdp" required value="">
                    <label>Confirmer le nouveau mot de passe*:</label>
                            <input type="password" class="form-control" name="conf_mdp" id="conf_mdp" required value="">
                    <label>Téléphone:</label>
                            <input type="text" class="form-control" name="tel" id="tel" maxlength="10" pattern="[0-9]{10}" value="<?php echo $r['telephone'];?>">
                    <label>Code Postal:</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" maxlength="5" pattern="[0-9]{5}" value="<?php echo $r['code_postal'];?>">
                    <label>Mail*:</label>
                            <input type="text" class="form-control" name="mail" id="mail" required value="<?php echo $r['mail'];?>">
                    <br/>
                    <input name="hidden" type=hidden value="<?php echo $_GET['id'];?>"/>
                    <button type="submit" class="btn btn-info">Modifier</button>
                </form>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger"><a href="delete.php" style="color:white;">Supprimer le compte</a></button>
            </div>
        </div>
    </div>

</body>
</html>
