<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>avec bootstrap</title>
    <!-- Bootstrap ... des que je saurais come y fo-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

<body>

  <?php
  $etudiant = array('moussa','thierry','solange','yannick','charleen','Arokyiraja');
  for ($i=0; $i < count($etudiant) ; $i++)
  {
  echo $etudiant[$i]."<br/>";
  }
  ?>

  <br />
<br />
  <?php
  $infos = array
  ( 'prenom' =>'Thierry',
    'nom' =>'Fendian',
    'age' =>'44',
    'adresse' =>'ici ... pour le moment...',
  );
  echo $infos['prenom']."<br/>"."<br/>";
  echo $infos['nom']."<br/>"."<br/>";
  echo $infos['age']."<br/>"."<br/>";
  echo $infos['adresse']."<br/>"."<br/>";

  foreach($infos as $key => $value) {
    echo $key. ' : ' . $value."<br />";
  }
  ?>

<br />
<br />
 <h3>Travail sur les tablos Multi-dimensionnel</h3>
 <?php
 $personnes = array(
 1 => array('prenom' => 'thierry', 'nom' => 'fendian', 'telephone' => '0102030405'),
 2 => array('prenom' => 'moussa', 'nom' => 'camaro', 'telephone' => '0203040506'),
 3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '0304050607')
 );
 foreach($personnes as $cle1 => $valeur1)
 {
   echo "<br/>"."personne n°". $cle1 . "<br/>";
   foreach($valeur1 as $cle2 => $valeur2)
   {
  echo $cle2 ." : " . $valeur2 . "<br/>";
    }
 }
 ?>
 <br>
 <br>
<h3>Travail sur "Include" et "Require"</h3>
<?php
include "Accueil.html";
?>
</body>
</html>
