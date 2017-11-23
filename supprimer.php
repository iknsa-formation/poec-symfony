<?php 
require_once'pdo.php';
$pdoStat=$pdo->prepare('DELETE FROM contact WHERE id= :num LIMIT 1');
$pdoStat->bindValue(':num',$_GET['numContact'], PDO::PARAM_INT);
$pdoStatIsOk=$pdoStat->execute();
if($pdoStatIsOk){
   $message="le contact a ete supprimé";
}
else{
  $message="erreur d'insertion";
}
?>
<!Doctype html>
<html>
  <head>
    <title>suppression</title>
    <meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <?= $message ?>
  
  </body>
</html>





 