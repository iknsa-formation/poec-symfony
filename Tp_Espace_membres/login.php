<?php
    require_once 'db.php';
    if(!isset($_SESSION)){
        session_start();
    }
?>
<DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <?php if(isset($_SESSION['is_connected']) && $_SESSION['is_connected']): ?>
                    Bonjour <?=  $_SESSION['lastname']; ?> <a href="logout" class="btn btn-danger">Logout</a>
                <?php else: ?>
                    <a href="login" class="btn btn-primary">Sign in </a>  or
                    <a href="login" class="btn btn-primary">Sign up</a>
                <?php endif; ?>
  <div class="jumbotron">
    <h1>Connexion</h1>
  </div>
  <?php
         if (count($_POST) > 0) {
           $_SESSION['email'] =  $_POST['email'];
           $_SESSION['password'] =  $_POST['password'];
           $hash = password_hash($_SESSION['password'],PASSWORD_BCRYPT);
           $requete = "select password from member where email = '".$_SESSION['email']."'";
           $pwd =mysqli_query($connection,$requete);
           /*Recuperation du mot de passe en BDD*/
           foreach ($pwd as $key => $value) {
               $getPwd = $value['password'];

               $login = "select * from member where email = '".$_SESSION['email']."' and password = '".$value['password']."'";
               $isLogged= mysqli_query($connection,$login);
               /*var_dump($isLogged,$login);die;
               if (mysqli_num_rows($isLogged) === 0) */
               foreach ($isLogged as $key => $value) {
                   if ($value['email'] === $_SESSION['email'] && (password_verify($_SESSION['password'], $value['password'])))   {
                     $_SESSION['firstname'] = $value['firstname'];
                     $_SESSION['lastname'] = $value['lastname'];
                     header("Location:liste.php");
                   }else {
                   echo "<div class='alert alert-danger' role='alert'>
                             Vous n'avez pas de compte. Voulez vous vous <a href='inscription.php'> inscrire ?</a>
                         </div>";
               }
               }
             }
         }
         ?>
         <form action="" method="post">
             <div class="form-group">
                 <label for="email">Email*:</label>
                 <input type="text" name="email" id="email" required>
             </div>

             <div class="form-group">
                 <label for="password">password</label>
                 <input type="password" name="password" id="password" required>
             </div>
             <div class="form-group">
                 <input type="submit" value="se connecter">
             </div>
         </form>
