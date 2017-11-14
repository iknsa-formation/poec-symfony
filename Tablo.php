<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>avec bootstrap</title>

    <!-- Bootstrap -->
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
<br/><br/>
  <?php
  $infos = array(
    'prenom' =>'Thierry',
    'nom' =>'fendian',
    'age' =>'44',
    'adresse' =>'ici ... pour le moment',
  );
  echo $infos['prenom']."<br/>"."<br/>";
  echo $infos['nom']."<br/>"."<br/>";
  echo $infos['age']."<br/>"."<br/>";
  echo $infos['adresse']."<br/>"."<br/>";

foreach($infos as $key => $value) {
echo $key. ' : ' . $value."<br/>";
 }
 ?>
</body>
</html>
