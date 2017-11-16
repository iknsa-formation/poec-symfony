<?php
$nom = $_POST ['lastname'];
$prenom = $_POST ['firstname'];
$adresse = $_POST ['adresse'];
$fonction = $_POST ['fonction'];
if (count($_POST) >0){


    echo "nom : ".$nom."<br/>";
    echo "prenom : ".$prenom."<br/>";
    echo "adresse : ".$adresse."<br/>";
    echo "fonction : ".$fonction."<br/>";
}
$sql = "INSERT INTO users(firstname,lastname,adresse,fonction)
VALUES('".$prenom."', '".$nom."','".$adresse."', '".$fonction."')";
?>
