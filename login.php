<?php
require_once 'dbase.php';
if (!isset($_SESSION)) 
{
  session_start();
}
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
        <?php
        if ((isset($_POST['email']) && isset($_POST['password'])) > 0 ) 
        {
           // var_dump($_POST);die();
         $_SESSION['email'] = $_POST['email'];
         $_SESSION['password'] = $_POST['password'];
         $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
         $check = "SELECT password FROM inscrire WHERE email='".$_SESSION['email']."'";
         // var_dump($check);die();
         $password = mysqli_query($connection,$check);
         foreach ($password as $key => $value) 
         {
           // var_dump($value);die();
           $login = "SELECT * FROM inscrire where email='".$_SESSION['email']."' and password ='".$value['password']."'";
           $isLogged = mysqli_query($connection,$login);
           foreach ($isLogged as $key => $value) 
           {
             if ($value['email'] === $_SESSION['email'] && (password_verify($_SESSION['password'],$value['password']))) 
             {
               $_SESSION['prenom'] = $value['prenom'];
               $_SESSION['nom'] = $value['nom'];
               header("Location:liste1.php");
             }
             else
             {
              header("Location:error.php"); 
             }
            }
           }
         }
         ?>
    <div class="rows">
      <div class="col-md-6">
        <a href="login.php"><img src="image/login.gif"></a>
      </div>
    </div>
    <div class="rows">
      <div class="col-md-6">
        <form class="log" method="POST" action="" name="form">
          <div id="login" class="table-responsive">
            <tbody>
              <tr>
              <td>
              <label class="details" for="email" style="padding-left: 130px" >E-Mail</label>
              <center><span id="titleError" class="errors"><input type="text" id="email" name="email" placeholder="Mail-Id"/></span></center>
              </td>
              </tr>
              <tr>
              <td>
              <label class="details" for="firstname" style="padding-left: 130px" >Password</label>
              <center><input type="password" id="password" name="password" placeholder="Password"/></center>
              </td>
              </tr>
              <tr>
              <td>
              <center><input type="submit" value="Login" ></center>
              </td>
              </tr>
            </tbody>
          </div> 
        </form>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>