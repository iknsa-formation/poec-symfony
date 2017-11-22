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
            <?php
                    define("SERVERBDD","localhost");
                    define("NAMEBDD","formation");
                    define("USERBDD","root");
                    define("PASSWORDBDD","");

                    $connexion = new mysqli(SERVERBDD,USERBDD,PASSWORDBDD,NAMEBDD);
                
                    $requete = "SELECT * FROM users WHERE id='".$_GET['id']."'";
                    $r = mysqli_fetch_assoc(mysqli_query($connexion,$requete));
            ?>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"> 
                <form method="post" action="update.php">
                    <label>Nom*:</label>
                            <input type="text" class="form-control" name="nom" id="nom" required value="<?php echo $r['nom'];?>">
                        <label>Prénom*:</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required value="<?php echo $r['prenom'];?>">
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
                    <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $_GET['id'];?>" style="color:white;">Supprimer le compte</a></button>
            </div>
        </div>
    </div>

</body>
</html>
