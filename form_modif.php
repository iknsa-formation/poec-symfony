<?php 
require_once'pdo.php';
$pdoStat = $pdo->prepare('SELECT * FROM contact WHERE id=:num Limit 1');
$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
$pdoStatIsOk=$pdoStat->execute();
$row=$pdoStat->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <title> form modification</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
    <body>
   

<div class="alert alert-info">
  <center><h1>Modifier un contact</h1> </center>
</div>
    <center>
    <form action="modifier.php" method="POST">
   <table>
  <tr><td>
    <input type ="hidden" name="numContact" size="50" value="<?= $row['id'];?>"></td></tr>
  
    <tr><td>Preom:</td>
    <td><input type ="text" name="prenom" size="50" value="<?= $row['prenom'];?>"></td></tr>
      <tr><td>Nom:</td>
    <td><input type ="text" name="nom" size="50" value="<?= $row['nom'];?>"></td></tr>
   <tr> <td>Tel:</td>
    <td><input type ="text" name="tel" size="50" value="<?= $row['tel'];?>"></td></tr>
    <tr><td>Mail:</td>
    <td><input type ="text" name="mail" size="50" value="<?= $row['mail'];?>"></td></tr>
     <tr><td>Password:</td>
    <td><input type ="password" name="password" size="50" value="<?= $row['password'];?>"></td></tr>
    <tr><td><button type="submit" class="btn btn-primary"> Modifier</button> </td></tr>
    </table>
    </form>
    </center>
    </body>
    </html>