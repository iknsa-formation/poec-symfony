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
            <div class="col-md-2"> 
                <form method="post" action="bdd.php">
                    <div class="form-group">
                        <label>Nom*:</label>
                            <input type="text" class="form-control" name="nom" id="nom" required>
                        <label>Prénom*:</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                        <label>Mot de passe*:</label>
                            <input type="password" class="form-control" name="mdp" id="mdp" required>
                        <label>Confirmer le mot de passe*:</label>
                            <input type="password" class="form-control" name="conf_mdp" id="conf_mdp" required>
                        <label>Téléphone:</label>
                            <input type="text" class="form-control" name="tel" id="tel" maxlength="10" pattern="[0-9]{10}">
                        <label>Code Postal:</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" maxlength="5" pattern="[0-9]{5}">
                        <label>Mail*:</label>
                            <input type="text" class="form-control" name="mail" id="mail" required>
                        <br/>
                        <button type="submit" class="btn btn-info">Valider</button>
                    </div>
                </form>       
            </div>
        </div>
    </div>

</body>
</html>
