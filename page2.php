


<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
      <title> suppression du contact</title>
    </head>
    <body>
      <form method="POST" action="">
        <input type="text" id="input" name="input">
        <input type="submit" value="enregistrer">
      </form>
   
    <?php 
echo "<h2>les conditions</h2>";
$numero=$_POST["input"];
if($numero==18){
  echo $numero ." :c est les pompier"."<br>";
}elseif($numero==17){
  echo $numero ." :c est la police"."<br>";
}elseif($numero==06||$numero==07){
  echo $numero . " :c est lE MOBILE"."<br>";
}elseif($numero==01||$numero==02){
  echo $numero ." :c est le fixe"."<br>";
}
?>
 </body>
    </html>