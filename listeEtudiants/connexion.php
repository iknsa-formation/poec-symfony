<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	
	<title>Formulaire-etudiantes</title>
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
		<form name="login" id= "login" action="login.php" method="post">
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label for="password">password :</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg" value="Connection">Se connecter</button> 
			</div>
		</form>
	</main>
</body>
</html>

