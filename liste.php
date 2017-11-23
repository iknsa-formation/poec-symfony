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
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">LISTE<span class="text-color">ETUDIANTS</span> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </div>
      </div>
      <div class="rows">
        <div class="col-md-12">
        <?php
        if (count($_POST) > 0 ) 
        {
          // var_dump($_POST);die();
         $_SESSION['email'] = $_POST['email'];
         $_SESSION['password'] = $_POST['password'];
         
         $check = "SELECT password FROM inscrire WHERE email = '".$_SESSION['email']."' ";
         // var_dump($check);die();
         $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
         $password = mysqli_query($connection,$check);
         foreach ($password as $key => $value) 
         {
          // var_dump($value);die();
           $login = "SELECT * FROM inscrire where email = '".$_SESSION['email']."' and password =  '".$value['password']."' ";
            
           $isLogged = mysqli_query($connection,$login);
           foreach ($isLogged as $key => $value) 
           {
             if ($value['email'] === $_SESSION['email'] && (password_verify($_SESSION['password'],$value['password']))) 
             {
               $_SESSION['prenom'] = $value['prenom'];
               $_SESSION['nom'] = $value['nom'];
               header("Location:liste1.php");
             }
             elseif(empty($_POST))
             {?>
              <div class="row">
           <div class="col-md-6">
             <img src="image/images.jpg">
           </div>
           <div class="col-md-6">
             <p>New User click here!</p><a href="inscrire.php"><img src="image/signup.jpg"></a>
             <p>Already a user click here!</p><a href="login.php"><img src="image/signin.jpg"></a>
           </div>
         </div>
              <?php
             }
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