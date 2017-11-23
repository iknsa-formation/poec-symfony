

<?php
 session_start();
require_once'pdo.php';
$mail=isset($_POST['mail'])?$_POST['mail']:'';
$password=isset($_POST['password'])?$_POST['password']:'';
if($mail ==''){
	echo "champ non rempli";
}
if (isset($_POST)>0) {
	$_session["mail"]=$mail;
  $_session["password"]=$password;
$pdoStat = $pdo->prepare('SELECT * FROM contact where mail=:mail ');
$pdoStat->bindValue(':mail',$_session['mail'],PDO::PARAM_STR);
$pdoStatIsOk=$pdoStat->execute();
$sql=$pdoStat->fetchAll();
  foreach ($sql as $key => $value) {
      if ($_session['mail'] === $value['mail'] && $_session['password'] === $value['password']) {
      $_session['prenom'] = $value['prenom'];
      $_session['nom'] = $value['nom'];
$show_list = $pdo->prepare('SELECT * FROM contact');
$show=$show_list->execute();
$rows=$show_list->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <title> liste des contacts</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
  <body>
  <table class="table table-bordered"> 
     <thead>
        <tr>
            <th>id</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Tel</th>
            <th>Mai</th>
             <th>supprimer</th>
            <th>Modifier</th>
        </tr>
    </thead>
<?php 
foreach ($rows as $key => $row) :?>
  <tbody>
      <tr>
      

  <td> <?= $row['id'];?></td>  <td><?=$row['prenom'];?></td>  <td><?= $row['nom'];?></td>  <td><?=$row['tel'];?></td>
    
          <td><?= $row['mail'];?></td><td><a href="supprimer.php?numContact=<?=$row['id'] ?>">supprimer</a></td> <td>   <a href="form_modif.php?numContact=<?=$row['id'] ?>">modifier</a></td></tr></tbody> <?php endforeach;?></table>
        <?php 
      }}
      
    } 
        else{
      echo "vous n'avez pas de compte vous devez";?> <a href='inscription.php'>vous inscrire</a>
   <?php }
 
?>

BOnjour<?=$_session['prenom']?><?=$_session['nom']?><a href="layout.php">Layout</a>
</body>
    </html>