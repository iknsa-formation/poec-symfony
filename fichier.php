<?php
require_once "db.php";

$nom = $_POST ['lastname'];
$prenom = $_POST ['firstname'];
$adresse = $_POST ['adresse'];
$fonction = $_POST ['fonction'];

    if (count($_POST>0)) {
      echo "nom : ".$nom."<br/>";
      echo "prenom : ".$prenom."<br/>";
      echo "adresse : ".$adresse."<br/>";
      echo "fonction : ".$fonction."<br/>";
      }
      $isExist = "select lastname from user where lastname='".$nom."'";
      // var_dump($nom);die;
      $exist = mysqli_query ($connection, $isExist);
      // var_dump($isExist);die;
      $var = mysqli_num_rows ($exist);
      // var_dump($exist);die;

      if ($var > 0){
        echo "<div class= 'alert alert-alert' role= 'alert'>
        <h3>>>>>>>>>>>>>>>> existe déjà <<<<<<<<<<<<<<<</h3> </div>";
      } else {
      $sql = "INSERT INTO user(firstname,lastname,adresse,fonction)
      VALUES('".$prenom."', '".$nom."','".$adresse."', '".$fonction."')";
      $insert = mysqli_query ($connection,$sql);

      if ($insert){
        echo "<div class= 'alert alert-succeess' role= 'alert'>
        L'utilisateur <h3>>>>>>>>>>>>>>>> $prenom $nom a été ajouté en base!
        <<<<<<<<<<<<<<<<<</h3></div>";
      } else {
      echo "<div class= 'alert alert-alert' role= 'crash'> Oops!... out of order ! </div>";
    }
    mysqli_close($connection);
  }
?>
