<?php
// require_once 'db2.php';

session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: index.php');
	exit();
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESPACE de <?php echo htmlentities(trim($_SESSION['prenom'])); ?> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<title>Espace membre</title>
</head>

<body>
Bonjour <?php
echo htmlentities(trim($_SESSION['prenom']) ."  ". ($_SESSION['nom'])); ?>
<br />Bienvenue. Modifie ta base ou deconnecte toi. <br />
<br />
<button type="button" class="btn btn-primary"><a href="liste2.php" onclick="open('liste2.php', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;">Modifier Base</a></button>
<button type="button" class="btn btn-danger"><a href="deconnexion.php">Deconnexion</a></button>
</body>
</html>
