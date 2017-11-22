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
	<main>
		<form action="login" method="post">
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="test" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label for="password">password :</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="form-group">
				<input type="sumit" class="btn btn-primary" value="Connexion"  name="Se conecter">
			</div>
		</form>
	</main>
</body>
</html>

