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
      <div class="container">
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
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </div>
      </div>
      <div class="row">
           <div class="col-md-6">
             <img src="image/images.jpg">
           </div>
           <div class="col-md-6">
             <p>New User click here!</p><a href="inscrire.php"><img src="image/signup.jpg"></a>
             <p>Already a user click here!</p><a href="login.php"><img src="image/signin.jpg"></a>
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