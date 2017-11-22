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
		<ul class="nav justify-content-end">
		  <li class="nav-item">
		    <a class="nav-link active" href="#">Active</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Link</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Link</a>
		  </li>
		  <li class="nav-item">
		  	<button type="submit" class="btn btn-danger" >Deconnexion</button>
  		   </li>
	</ul>
	</header>

	<form name="connexion" id="connexion" method="post" action="connexion.php">
		<button type="submit" class="btn btn-primary btn-lg">Connection</button>
	</form>
	<form name="inscription" id="inscription" method="post" action="form_inscription.php">
		<button type="submit" class="btn btn-primary btn-lg">Inscription</button>
	</form>
</body>
</html>