<?php
require_once "data.php";
?>
<!doctype html>
<html>

	<head>

		<title>site numero 1</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Inscription.css">
	</head>

	<body>
		<h1 id="inscription">Inscription</h1>

		<div id="form1">
			<form action="form.php" method="post">
				<div>
					<label>E-mail</label>
					<input type="email" name="email" id="email" require/>
				</div>
				<div>
					<label>Mot de passe</label>
					<input type="password" name="password" id="password" require/>
				</div>
				<div>
					<label>Prenom</label>
					<input type="text" name="firstname" id="firstname" require/>
				</div>
				<div class="pseudo">
					<label>Pseudo</label>
					<input type="text" name="pseudo" id="pseudo" require/>
				</div>
				<div>
					<input type="submit" name="submit" id="submit" value="s'inscrire" />
				</div>
			</form>
		</div>
	</body>

</html>
