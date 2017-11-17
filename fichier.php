<?php
require_once "db.php";
if (count($_POST) >0){


$nom = $_POST ['lastname'];
$prenom = $_POST ['firstname'];
$adresse = $_POST ['adresse'];
$fonction = $_POST ['fonction'];
$isExist = "select lastname from user where lastname='".$nom."'";
// var_dump($nom);die;

$exist = mysqli_query ($connection, $isExist);
// var_dump($isExist);die;
$var = mysqli_num_rows ($exist);
var_dump($exist);die;
    echo "nom : ".$nom."<br/>";
    echo "prenom : ".$prenom."<br/>";
    echo "adresse : ".$adresse."<br/>";
    echo "fonction : ".$fonction."<br/>";

$sql = "INSERT INTO user(firstname,lastname,adresse,fonction)
VALUES('".$prenom."', '".$nom."','".$adresse."', '".$fonction."')";
$insert = mysqli_query ($connection,$sql);

if ($insert) {
  echo "<div class= 'alert alert-succeess' role= 'alert'>
  L'utilisateur $prenom $nom a été ajouté en base! </div>";
    }
}
?>


<!-- $add = mysqli_query ($connection,,$addCell); -->
