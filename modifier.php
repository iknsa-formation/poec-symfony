<?php 
require_once'db.php';
$pdoStat = $pdo->prepare('UPDATE users set firstname=:nom, lastname=:prenom, adresse=:adresse, fonction=:fonction WHERE id=:num LIMIT 1');
$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['firstname'], PDO::PARAM_INT);
$pdoStat->bindValue(':prenom', $_POST['lastname'], PDO::PARAM_INT);
$pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_INT);
$pdoStat->bindValue(':fonction', $_POST['fonction'], PDO::PARAM_INT);

$pdoStatIsOk=$pdoStat->execute();
if($pdoStatIsOk)
{
	$message ="<strong> Bravo le contact a été mis à jour</strong>";
}
else
{
	$message="echec de la mise à jour";
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <title>Modification:resultat</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
    <body>
   
    <div class="alert alert-info">
  <center><h1>Resultat de la modification</h1> </center>
</div>
    <h2><?= $message?></h2>
    </body>
    </html>

