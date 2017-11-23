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
<link href="css/style1.css" rel="stylesheet">
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
          <?php 
          } 
          ?>
          </div>
        </div><!--/.nav-collapse -->
      </nav>
    </div>
  </div>
  <div class="rows">
    <div class="col-md-6">
       <a href="login.php"><img src="image/login.gif"></a>
    </div>
  </div>
  <div class="rows">
    <div class="col-md-6">
      <form class="log" method="POST" action="inscription.php">
                <tbody>
                <tr>
                <td>
                <label class="details" for="prenom" style="padding-left: 130px" >Prenom</label>
                <center><input type="text" id="prenom" name="prenom" placeholder="prenom"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label class="details" for="nom" style="padding-left: 130px" >Nom</label>
                <center><input type="text" id="nom" name="nom" placeholder="nom"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label class="details" for="email" style="padding-left: 130px" >E-Mail</label>
                <center><input type="text" id="email" name="email" placeholder="Mail-Id"/></center>
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
                <label class="details" for="telephone" style="padding-left: 130px" >Telephone</label>
                <center><input type="text" id="tel" name="tel" placeholder="telephone"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label class="details" for="adresse" style="padding-left: 130px" >Adresse</label>
                <center><input type="text" id="adresse" name="adresse" placeholder="adresse"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <center><input type="submit" value="Inscrire"></center>
                </td>
                </tr>
                </tbody>
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