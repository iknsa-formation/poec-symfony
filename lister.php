<?php 
require_once'db.php';


$pdoStat = $pdo->prepare('SELECT * FROM users');

?>
<?php




$executeIsOk = $pdoStat->execute();

$contacts=$pdoStat->fetchAll();
    
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
    <pre>
    <?php //var_dump($contacts); ?>
    </pre>
    <h1>liste des contacts</h1>
    <table class="table table-striped"> 
     <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Fonction</th>
            <th>Supprimer</th>
            <th>Modiffier</th>
        </tr>
    </thead>
    <?php foreach($contacts as $contact):?>
   
    <tbody>
    	<tr>
    	<td><?= $contact["firstname"]?></td>  <td><?= $contact["lastname"]?> </td><td> <?= $contact["adresse"]?></td><td><?=$contact["fonction"]?></td><td><a href="supprimer.php?numContact=<?=$contact['id'] ?>">supprimer</a></td> <td>   <a href="form_modif.php?numContact=<?=$contact['id'] ?>">modifier</a> </td></tr></tbody>
    <?php endforeach;?>
    </table>
    </body>
    </html>
