<?php

	require_once 'db.php';

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>recup de données dans base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <?php

        $deleteId = $_GET["id"] ;



        $sql = "DELETE FROM user WHERE ID = ".$deleteId ;



        $requete = mysqli_query($connection, $sql ) ;



        if($requete) {

          echo("supprimé") ;

        } else{

          echo("Echec suppression") ;

        }

    ?>


  </body>

</html>
