<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<title></title>
</head>
<body>
<main>
		<h2>Formulaire Utilisateur</h2>

		<form action="utilisateur.php " method="POST">
			<div class="form-row">
				<div class="form-group"> 
					<label for="titre">Titre :</label>
					<input type="text" name="titre" id="titre" placeholder="titre"><br>
				</div>
				<div class="form-group">
					<label for="auteur">Auteur :</label>
					<input type="text" name="auteur" id="auteur" placeholder="auteur"><br>
				</div>
				<div class="form-group">
					<label for="image">Image :</label>
					<input type="text" name="image" id="image" placeholder="image"><br>
				</div>
				<div class="form-group">
					<textarea name="message" id="message" placeholder="Votre message" rows="8" cols="40"></textarea><br>
				</div>
				<div>
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</main>
</body>
</html>

