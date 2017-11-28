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
	<title>Formulaire-etudiants</title>
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
	<main>
		<h2>Formulaire Inscription</h2>
		<form action="inscription.php " method="POST">
			<div class="form-row">
				<div class="form-group"> 
					<label for="nom">Nom :</label>
					<input type="text" name="nom" id="nom" placeholder="nom"><br>
				</div>
				<div class="form-group">
					<label for="prenom">Prenom :</label>
					<input type="text" name="prenom" id="prenom" placeholder="prenom"><br>
				</div>
				<div class="form-group">
					<label for="email">Email :</label>
					<input type="text" name="email" id="email" placeholder="email"><br>
				</div>
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="password" name="password" id="password" placeholder="password"><br>
				</div>
				<div class="form-group">
					<label for="fonction">Fonction :</label>
					<input type="text" name="fonction" id="fonction" placeholder="fonction"><br>
				</div>
				<div class="form-group">
					<label for="telephone">Telephone :</label>
					<input type="text" name="telephone" id="telephone" placeholder="telephone"><br>
				</div>
				<div class="form-group">
					<label for="adresse">Adresse :</label>
					<input type="test" name="adresse" id="adresse" placeholder="adresse"><br>
				</div>
				<div>
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</main>
</body>
</html>