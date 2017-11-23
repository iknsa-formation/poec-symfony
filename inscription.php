<?php
require_once 'dbase.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<title>new</title>
</head>
  <body>
    <div class="container">
      <div class="rows">
        <div class="col-md-12">
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="#">LISTE<span class="text-color">ETUDIANTS</span> </a>
           </div>
           <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
           </ul>
           <div class="narvar-form navbar-right">
           <?php 
           if(isset($_SESSION['is_connected']) && $_SESSION['is_connected'])
           { 
            echo "Bonjour ! ".$_SESSION['prenom']." ".$_SESSION['nom'];
           }
           else
           {
            echo "Bienvenu ! Visiteur";
           ?>
            <a href="login.php"><button type="button" class="btn btn-warning btn">SIGN IN</button></a>
            <a href="inscrire.php"><button type="button" class="btn btn-warning btn">SIGN UP</button></a>
           <?php 
           } 
           ?>
           </div>
        </div><!--/.nav-collapse -->
      </nav>
    </div>
  </div>
  <div class="rows">
  <div class="col-md-12">
            <?php
                if (isset($_POST['prenom']) &&  isset($_POST['nom']) &&  isset($_POST['email']) &&  
                    isset($_POST['password']) &&  isset($_POST['tel']) && isset($_POST['adresse']))
                {
                  $prenom = $_POST['prenom'];
                  $nom = $_POST['nom'];
                  $email = $_POST['email'];
                  $tel = $_POST['tel'];
                  $adresse = $_POST['adresse'];
                  $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
                  $isExist = "SELECT email FROM inscrire WHERE email='".$email."' ";
                  $exist = mysqli_query($connection,$isExist);
                  $var = mysqli_num_rows($exist);
                  if ($var > 0) 
                  {
                    echo "<div class='alert alert-danger' role = 'alert'>Email already exists</div>";
                  }
                  else
                  {
                    $sql = "INSERT INTO inscrire (prenom, nom, email, password, tel, adresse) VALUES ('".$prenom."', '".$nom."', '".$email."', '".$hash."', '".$tel."','".$adresse."')";
                    // var_dump($sql);die;;
                    $insert = mysqli_query($connection, $sql);//mysqli_query will return the boolean value true or false.
                  if($insert)
                  {
            ?>
                    <div class="alert alert-success" role="alert">
                        Inscription Réussi!!!!
                    </div>
                  <?php
                  } 
                  else
                  {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                  }
                  }
                }
                  ?>
  </div>
  </div>
  <div class="rows">
    <div class="col-md-12">
      <footer>
        <p>CopyRights@2017</p>
      </footer>
    </div>
  </div>
</div>
</body>
</html>