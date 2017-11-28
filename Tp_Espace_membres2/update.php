
<?php
require_once "db.php";
 if(!isset($_SESSION)){
        session_start();
    }
?>
<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
        <div class="jumbotron">
    <h1>BIENVENUE</h1>
  </div>
  <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])): ?>
              <ul>
                <li class="btn btn-info">
                    Bonjour <?= $_SESSION['prenom'] ." ".$_SESSION['nom'];?> <a href="logout.php" class="btn btn-danger">Logout</a>
                </li>
              </ul>
                <?php else: ?>
                    <a href="login" class="btn btn-primary">Sign in </a>  or
                    <a href="inscription.php" class="btn btn-primary">Sign up</a>
<?php endif; 
      if(count($_POST)>0) {
        $sql = "UPDATE members set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "', email='" . $_POST["email"] . "', tel='" . $_POST["tel"] . "', adresse='" . $_POST["adresse"] . "' WHERE id='" . $_POST["id"] . "'";
        $update = mysqli_query($connection,$sql);
          if($update){
            ?>
            <div class="alert alert-success" role="alert">
              Modification ok
          </div>
          <?php 
            header("Location:liste.php");
          } else{
          ?>
          <div class="alert alert-danger" role="alert">
            Modification KO
        </div>
        <?php
          }
      } 
    ?>
    </body>
    </html>