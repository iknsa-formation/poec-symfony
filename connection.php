<?php
require_once "data.php";
?>

    <!doctype html>
    <html>

    <head>

        <title>site numero 1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="connection.css">
    </head>

    <body>
        <h1 id="titre">Bienvenue veuillez vous connecter</h1>
        <img src="images/4-2-php-logo-transparent.png" id="imgphp" />
        <img src="images/angular.png" id="imgangular" />
        <img src="images/HTML5_Logo_512.png" id="imghtml" />
        <img src="images/javascript-2189147_960_720.png" id="imgjavascript" />


        <div id="form1">
            <form action="verifier_connection.php" method="post">
                <label>Pseudo</label>
                <input type="texte" name="pseudo" id="pseudo" required/>
                <div>
                    <label>Mot de passe</label>
                    <input type="password" name="password" id="password" required />
                </div>
                <div>
                    <input type="submit" name="action" value="connection" id="connection" />
                </div>
                <a id="inscription" href="http://localhost/poec-symphony/Inscription.php">Inscription</a>
                <p id="motDePasseOublier">Mot de passe oublier</p>
            </form>
        </div>
        <img src="images/logo-2582747_960_720.png" id="imgcss" />
    </body>

    </html>
