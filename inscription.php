	<?php
require_once'pdo.php';
//pour hacher le password  
$hash=password_hash($_POST['password'],PASSWORD_BCRYPT);

$requete=$pdo->prepare('SELECT mail from contact where mail=:mail');
$requete->bindValue(':mail', $_POST["mail"], PDO::PARAM_INT);
$requeteIsOk=$requete->execute();
$requete->fetch();


if($requete->rowCount() > 0){
echo "le contact existe deja";
}else{
$pdoStat=$pdo->prepare('INSERT INTO `contact`(`nom`,`prenom`,`tel`,`mail`,`password`) VALUES(:nom,:prenom,:tel,:mail,:password)');
$pdoStat->bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
$pdoStat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdoStat->bindValue(':tel',$_POST['tel'],PDO::PARAM_STR);
$pdoStat->bindValue(':mail',$_POST['mail'],PDO::PARAM_STR);
$pdoStat->bindValue(':password',$hash,PDO::PARAM_STR);
$pdoStatIsOk=$pdoStat->execute();

 if($pdoStatIsOk){
 	

echo "le contact a ete ajouter";
 }
 else
{
  echo "erreur d'insertion";
}
}

?>

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
		<td><label for="nom">nom:</label></td>
		<td><input type="text" name="nom" id="nom" size="50" placeholder="Enter votre nom"></td>
		</tr>
	<tr>
		<td><label for="prenom">Prenom:</label></td>
		<td><input type="text" name="prenom" id="prenom" size="50" placeholder="Enter votre prenom"></td>
	</tr>
	
	<tr>
	<tr>
		<td><label for="tel">tel:</label></td>
		<td><input type="text" name="tel" id="tel" size="50" placeholder="Enter votre tel"></td>
	</tr>
	<tr>
		<td><label for="fonction">mail:</label></td>
		<td><input type="text" name="mail" id="mail" size="50" placeholder="Enter votre mail"></td>
		</tr>
		<tr>
		<td><label for="fonction">password:</label></td>
		<td><input type="text" name="password" id="password" size="50" placeholder="Enter votre password"></td>
		</tr>
	
	<tr>
		<td><center><button type="submit" class="btn btn-primary">Envoyer</button></center></td>
	</tr>
	</table>
	</center>
	</form>
	
	</body>
</html>