
<!Doctype html>
<html>
	<head>
		<title>formulaire php</title>
		<meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	<div class="jumbotron">
	<h2>formulaire php avec la methode post</h2>
	</div>
	<form method="POST" action="insert.php">
	<center>
	<table>
	<tr>
		<td><label for="prenom">Prenom:</label></td>
		<td><input type="text" name="firstname" id="prenom" size="50" placeholder="Enter votre prenom"></td>
	</tr>
	<tr>
		<td><label for="nom">nom:</label></td>
		<td><input type="text" name="lastname" id="nom" size="50" placeholder="Enter votre nom"></td>
		</tr>
	<tr>
	<tr>
		<td><label for="adresse">adresse:</label></td>
		<td><input type="text" name="adresse" id="adresse" size="50" placeholder="Enter votre adresse"></td>
	</tr>
	<tr>
		<td><label for="fonction">fonction:</label></td>
		<td><input type="text" name="fonction" id="fonction" size="50" placeholder="Enter votre fonction"></td>
		</tr>
	<tr>
		<td><center><button type="submit" class="btn btn-primary">Envoyer</button></center></td>
	</tr>
	</table>
	</center>
	</form>
	
	</body>
</html>