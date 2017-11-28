<?php
require_once "db.php";
         if (count($_POST) > 0) {
       $prenom = $_POST['firstname'];
       $nom = $_POST['lastname'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $tel = $_POST['tel'];
       $adresse = $_POST['adresse'];
       $hash = password_hash($_POST['password'],PASSWORD_BCRYPT);
       $isExist = "SELECT email FROM members where email ='".$email."'";
       $exist = mysqli_query($connection,$isExist);
             $var = mysqli_num_rows($exist);
            // echo ($isExist);
               if ($var > 0) {
         echo "<div class='alert alert-danger' role='alert'>
             Cet Utilisateur existe deja
           </div>";
       } else {
                   $sql = "INSERT INTO members(firstname,lastname,password,email,tel,adresse) VALUES ('".$prenom."','".$nom."','".$hash."','".$email."','".$tel."','".$adresse."')";
                   $insert =  mysqli_query($connection,$sql);
         if ($insert) {
           echo "<div class='alert alert-success' role='alert'>
             This is a success alert—check it out!
           </div>";
           header("Location:liste.php");
         }
       }
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
  <div class="jumbotron">
    <h1>INSCRIPTION</h1>
  </div>
    <form method ="post" action="" id="f1">

      <div class="form-group" >
        <label for="firstname">Prénom*</label>
        <input type="text"name="firstname" id="firstname" required />
      </div>
        <div class="form-group">
          <label for="name">Nom*</label>
          <input type="text" name="lastname" id="lastname" required />
      </div>
      <div class="form-group">
        <label for="email">Email*</label>
        <input type="text" name="email" id="email" required />
    </div>
    <div class="form-group">
      <label for="tel">Mot de Passe*</label>
      <input type="password" name="password" id="password" required />
  </div>
      <div class="form-group">
        <label for="adresse">Adresse*</label>
        <input type="text" name="adresse" id="adresse" required />
    </div>
    <div class="form-group">
      <label for="tel">Tel*</label>
      <input type="text" name="tel" id="tel" required />
  </div>
  <button type="submit" class="btn btn-default" id="n5">Valider</button>
    </form>
  </div>
  </body>
</html>
