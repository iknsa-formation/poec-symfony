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
  color: white
  }
  </style>
  <div class="container">
    <table class="table table-striped">
      <?php
        $infos = array (
          "prenom" => "Moussa",
          "nom" => "Camara",
          "age" => "28",
          "adresse" => "Quelque part",
        );

        foreach($infos as $key => $value)
        {
          echo $key. ": ".$value."<br />";
        }
      ?>
  </div>
</html>
