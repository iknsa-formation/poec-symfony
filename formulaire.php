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
	<form method="POST" action="">
	<center>
	<table>
	<tr>
		<td><label for="prenom">Prenom:</label></td>
		<td><input type="text" name="prenom" id="prenom" size="50" placeholder="Enter votre prenom"></td>
	</tr>
	<tr>
		<td><label for="nom">nom:</label></td>
		<td><input type="text" name="nom" id="nom" size="50" placeholder="Enter votre nom"></td>
		</tr>
	<tr>
		<td><label for="tel">Tel:</label></td>
		<td><input type="text" name="tel" id="tel" size="50" placeholder="Enter votre tel"></td>
	</tr>
	<tr>
		<td><label for="mail">Mail:</label></td>
		<td><input type="text" name="mail" id="mail" size="50" placeholder="Enter votre email"></td>
		</tr>
	<tr>
		<td><input type="radio" name="sexe" value="homme">Homme</td>
		<td><input type="radio" name="sexe" value="femme">Femme</td>
	</tr>

	<tr>
		<td><select name="langue"> 
			<option value="français">français</option>
			<option value="anglais">anglais</option>
			<option value="espagnol">espagnol</option>
			</select></td>
	</tr>
	<tr>
		<td><center><button type="submit" class="btn btn-primary btn-xs">Envoyer</button></center></td>
	</tr>
	</table>
	</center>
	</form>
	</body>
</html>
<?php 
if(count($_POST>0)){
	$prenom=$_POST["prenom"];
	$nom=$_POST["nom"];
	$tel=$_POST["tel"];
	$mail=$_POST["mail"];
	$sexe=$_POST["sexe"];
	$langue=$_POST["langue"];
	echo "<h2>les informations enregistés sont:</h2>";
	echo "prenom: ".$prenom."<br>";
	echo "prenom: ".$nom."<br>";
	echo "tel: ".$tel."<br>";
	echo "mail: ".$mail."<br>";
	echo "vous etes: ".$sexe."<br>";
	echo "vous parlez: ".$langue;		
}
?>