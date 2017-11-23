<?php
require_once 'db2.php';

if (count($_POST)>0) {
  $prenom = $_POST ['prenom'];
  $nom = $_POST ['nom'];
  $email = $_POST ['email'];
  $mdp = $_POST ['mdp'];
  $tel = $_POST ['tel'];
  $adresse = $_POST ['adresse'];
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIENVENUE DE BASE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<?php
    if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
    if ((isset($email) && !empty($_POST['email'])) && (isset($_POST['mdp']) &&
    !empty($_POST['mdp'])) && (isset($_POST['mdp_confirm']) && !empty($_POST['mdp']))) {
    if ($_POST['mdp'] != $_POST['mdp_confirm']) {
    $erreur = 'Les 2 mots de passe sont différents.';
	} else {
		$sql = 'SELECT count(*) FROM crud WHERE email="'.$_POST['email'].'"';
		$req = mysqli_query($connection,$sql);
		$data = mysqli_fetch_array($req);
		if ($data[0] == 0) {
		$sql = 'INSERT INTO crud (prenom,nom,email,mdp,tel,adresse)
    VALUES("'.$_POST['prenom'].'","'.$_POST['nom'].'","'.$_POST['email'].'",
    "'.md5($_POST['mdp']).'", "'.$_POST['tel'].'","'.$_POST['adresse'].'")';
		mysqli_query($connection,$sql);
    session_start();
		$_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['nom'] = $_POST['nom'];
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
    prenom: <input type="text" name="prenom" "
    <?php
    if (isset($_POST['prenom']))
    echo htmlentities(trim($_POST['prenom']));
      ?>"><br />
      nom: <input type="text" name="nom" "
      <?php
      if (isset($_POST['nom']))
      echo htmlentities(trim($_POST['nom']));
      ?>"><br />
      Email*: <input type="text" name="email" required=required"
      <?php
      if (isset($_POST['email']))
      echo htmlentities(trim($_POST['email']));
      ?>"><br />
      Mot de passe*: <input type="password" name="mdp" required=required"
      <?php
      if (isset($_POST['mdp']))
      echo htmlentities(trim($_POST['mdp']));
      ?>">
      <br />
      Confirmation du mot de passe*: <input type="password" name="mdp_confirm" value="
      <?php
      if (isset($_POST['mdp_confirm']))
      echo htmlentities(trim($_POST['mdp_confirm']));
      ?>"><br />
      Tel: <input type="text" name="tel" "
      <?php
      if (isset($_POST['tel']))
      echo htmlentities(trim($_POST['tel']));
      ?>"><br />
      Adresse: <input type="text" name="adresse" "
      <?php
      if (isset($_POST['adresse']))
      echo htmlentities(trim($_POST['adresse']));
      ?>"><br />
  <input type="submit" name="inscription" value="Inscription">
  </form>
<?php
if (isset($erreur)) echo '<br />',$erreur;
?>
</body>
</html>
