<?php
require_once 'db2.php';


if (count($_POST)>0) {

  $email = $_POST ['email'];
  $mdp = $_POST ['mdp'];

}

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIENVENUE DE BASE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	// $base = mysqli_connect ('serveur', 'email', 'password');
	// mysqli_select_db ('crud', $base);

	// on teste si une entrée de la base contient ce couple email / pass
	$sql = 'SELECT count(*) FROM crud WHERE email="'.$_POST['email'].'"'.'" AND pass_md5="'.md5($_POST['mdp']).'"';
	$req = mysqli_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
	$data = mysqli_fetch_array($req);

	mysqli_free_result($req);
	mysqli_close();

	// si on obtient une réponse, alors l'utilisateur est un user
	if ($data[0] == 1) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		header('Location: logg.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son email, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>

<title>Accueil</title>
</head>

<body vertical-align: middle>
Connexion à l'espace membre :<br />
<form action="index.php" method="post">
Email* : <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br />
Mot de passe* : <input type="password" name="mdp" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="inscription.php">Vous inscrire</a>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>
