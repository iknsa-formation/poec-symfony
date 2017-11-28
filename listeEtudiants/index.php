<?php
	 require_once "db.php"
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		
	<title>Formulaire-Liste etudiantes</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-primary">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
		</nav>
	</header>
		<h1>Bienvenue !</h1>
	<form name="connexion" id="connexion" method="post" action="connexion.php">
		<button type="submit" class="btn btn-primary btn-lg">Connection</button>
	</form>
	<form name="inscription" id="inscription" method="post" action="form_inscription.php">
		<button type="submit" class="btn btn-primary btn-lg">Inscription</button>
	</form>
</body>
</html>