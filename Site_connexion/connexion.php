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
                <form method="post" action="verification.php">
                    <div class="form-group">
                        <label>Mail:</label>
                            <input type="text" class="form-control" name="mail" id="mail" required>
                        <label>Mot de passe:</label>
                            <input type="password" class="form-control" name="mdp" id="mdp" required>
                        <button type="submit" class="btn btn-info">Valider</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>

</body>
</html>
