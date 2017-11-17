
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

  <div class="container">
      <h1 class="ti"> Liste des étudiants</h1>

    <table class="table table-striped">
      <thead>
        <th>id</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>moyenne</th>
      </thead>
      <tbody>
<?php

  $personnes = array(
  1 => array("id" => "1","prenom" => "Moussa","nom" => "Camara","moyenne" =>"15"),
  2 => array("id" => "2","prenom" => "Khaled","nom" => "Sookia","moyenne" =>"19"),
  3 => array("id" => "3","prenom" => "Noemie","nom" => "Kifia","moyenne" =>"9"),
  4 => array("id" => "4","prenom" => "Jean","nom" => "Dupont","moyenne" =>"7"),
  5 => array("id" => "5","prenom" => "Alex","nom" => "Cool","moyenne" =>"10")
);

  foreach($personnes as $key1 => $value1)
{
?>
      <tr>
<?php


  foreach ($value1 as $key2 => $value2)
  {
?>
        <td>
<?php
    echo    $value2. "<br />";
?>
        </td>
<?php
  }
?>
      </tr>
<?php
  }
?>
    </tbody>
  </table>
  </div>
    <div class="container">
      <h2 class="ta"> Liste des étudiants admis</h2>

    <table class="table table-striped">
      <thead>
        <th>id</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>moyenne</th>
      </thead>
      <tbody>
  <?php


    foreach ($personnes as $key1 => $value)
    {
      if ($value["moyenne"] >9)
      {
        ?>
    <tr>
  <?php
        foreach($value as $key2 =>$value2)
        { ?>
          <td>  <?php echo $value2. "<br />";  ?></td>
      <?php  }
      }?>
    </tr>
<?php
      }
  ?>
</tbody>
</table>
  </div>

<div class="container">
  <h2 class="tn"> Liste des étudiants non admis</h2>

<table class="table table-striped">
  <thead>
    <th>id</th>
    <th>Prenom</th>
    <th>Nom</th>
    <th>moyenne</th>
  </thead>
<tbody>
<?php


foreach ($personnes as $key1 => $value)
{
  if ($value["moyenne"] <9)
  {
    ?>
<tr>
<?php
    foreach($value as $key2 =>$value2)
    { ?>
      <td>  <?php echo $value2. "<br />";  ?></td>
  <?php  }
  }?>
</tr>
<?php
  }
?>
</tbody>
</table>
</div>
</body>
</html>
