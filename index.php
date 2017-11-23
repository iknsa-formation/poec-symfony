<?php
require_once 'db2.php';

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIENVENUE DE BASE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))) {
	// $base = mysqli_connect ('serveur', 'email', 'password');
	// mysqli_select_db ('crud', $base);

	// on teste si une entrée de la base contient ce couple email / pass
	$sql = 'SELECT count(*) FROM crud WHERE email="'.$_POST['email'].'" AND mdp="'.md5($_POST['mdp']).'"';


	$req = mysqli_query($connection,$sql);
	$data = mysqli_fetch_array($req);
  //
	// mysqli_free_result($req);
	// mysqli_close();
	if ($data[0] == 1) {
		session_start();

      $req ='SELECT * FROM crud WHERE email="'.$_POST['email'].'"';

      $show = mysqli_query($connection,$req);

      while ($row = mysqli_fetch_assoc($show)) {
        $_SESSION['prenom'] = $row['prenom'];
    		$_SESSION['nom'] =  $row['nom'];
    		$_SESSION['email'] = $row['email'];
    		header('Location: membre.php');
    		exit();
    }
	} else {
		$erreur = 'Compte non reconnu.';
	}

	}

}
?>

<title>Accueil</title>
</head>

<body vertical-align: middle>
Connexion à l'espace membre :<br />
<form action="" method="post">
Email* : <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br />
Mot de passe* : <input type="password" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="inscription.php">Vous inscrire</a>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>
