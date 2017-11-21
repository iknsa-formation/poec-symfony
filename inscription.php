<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIENVENUE DE BASE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])) && (isset($_POST['mdp_confirm']) && !empty($_POST['mdp']))) {
	// on teste les deux mots de passe
	if ($_POST['mdp'] != $_POST['mdp_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		$base = mysqli_connect ('serveur', 'email', 'password');
		mysqli_select_db ('nom_base', $base);

		// on recherche si ce email est déjà utilisé par un autre membre
		$sql = 'SELECT count(*) FROM usera WHERE email="'.mysqli_escape_string($_POST['email']).'"';
		$req = mysqli_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		$data = mysqli_fetch_array($req);

		if ($data[0] == 0) {
		$sql = 'INSERT INTO usera VALUES("", "'.mysqli_escape_string($_POST['email']).'", "'.mysqli_escape_string(md5($_POST['mdp'])).'")';
		mysqli_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysqli_error());

		session_start();
		$_SESSION['email'] = $_POST['email'];
		header('Location: membre.php');
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce email.';
		}
	}
	}
	else {
	$erreur = 'ATTENTION un des champs est vide.';
	}
}
?>

</head>

<body>
Inscription à l'espace membre :<br />
<form action="inscription.php" method="post">
Email*: <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br />
Mot de passe*: <input type="password" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>"><br />
Confirmation du mot de passe*: <input type="password" name="mdp_confirm" value="<?php if (isset($_POST['mdp_confirm'])) echo htmlentities(trim($_POST['mdp_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
<?php
if (isset($erreur)) echo '<br />',$erreur;
?>
</body>
</html>
