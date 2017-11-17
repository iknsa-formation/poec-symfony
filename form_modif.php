<?php 
require_once'db.php';
$pdoStat = $pdo->prepare('SELECT * FROM users WHERE id=:num Limit 1');
$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
$pdoStatIsOk=$pdoStat->execute();
$contact=$pdoStat->fetch();

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
    <tr>
        <td><input type ="hidden" name="numContact" size="50" value="<?= $contact['id'];?>"></td>
    </tr>
  
     <tr>
        <td>Preom:</td>
        <td><input type ="text" name="firstname" size="50" value="<?= $contact['firstname'];?>"></td>
      </tr>
      <tr>
        <td>Nom:</td>
        <td><input type ="text" name="lastname" size="50" value="<?= $contact['lastname'];?>"></td>
      </tr>
      <tr> 
        <td>adresse:</td>
        <td><input type ="text" name="adresse" size="50" value="<?= $contact['adresse'];?>"></td>
      </tr>
      <tr>
        <td>fonction:</td>
        <td><input type ="text" name="fonction" size="50" value="<?= $contact['fonction'];?>"></td>
    </tr>
    <tr>
        <td><button type="submit" class="btn btn-primary"> Modifier</button> </td>
    </tr>
    </table>
    </form>
    </center>
    </body>
    </html>