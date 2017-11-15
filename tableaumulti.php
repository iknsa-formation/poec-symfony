<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style> .container{
  font-size: 5rem;
  padding: 20px;
  background-color: burlywood;
  color: white;
  }
.ti{
  font-size: 9rem;
}
.incre{
  background-color: black;
}
  </style>

  <div class="container">
      <h1 class="ti"> Tableau dimensionnel</h1>

    <table class="table table-striped">
<?php
$personnes = array(
1 => array("prenom" => "Moussa","nom" => "Camara","telephone" =>"0130212123"),
2 => array("prenom" => "Sofia","nom" => "Gib","telephone" =>"0130653123"),
3 => array("prenom" => "Alain","nom" => "Roy","telephone" =>"0137522123"),
);




foreach($personnes as $key1 => $value1)
{
  echo "<br />"."personne n°" .$key1 . "<br />";

  foreach ($value1 as $key2 => $value2)
  {
    echo  $key2." :" . $value2. "<br />";
  }
}
?>
<div class=incre>
<?php
include "includ.php";
require "require.php";
?>
</div>

</div>
</html>
