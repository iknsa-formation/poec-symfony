<?php
require 'article.php';
$obj = new Article();
if (isset($_POST['submit']))
{
  $titre = $_POST['titre'];
  $auteur = $_POST['auteur'];
  $image = $_FILES['image'];
  $message = $_POST['message'];
  $from = $_FILES['image']['tmp_name'];
  $destination = dirname(__FILE__).'\\uploads\\'.$_FILES['image']['name'];
if (move_uploaded_file($from,$destination)) 
    {
        echo "Image déplacée!";
        $obj->create(["titre"=>$titre,"auteur"=>$auteur,"image"=>"./uploads/".$_FILES['image']['name'],"message"=>$message]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="addarticle.php">CREATE</a></li>
              <li class="nav-item"><a class="nav-link" href="showarticle.php">SHOW</a></li>
              <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
              </ul>
            </div>
          </nav>
  			</div>
  		</div>
      <div class="row">
        <div class="col-md-8">
           <img src="image/article-writing.jpg">
        </div>
        <div class="col-md-4"> 
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" 
          data-whatever="@getbootstrap">ADD ARTICLE</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                    <div class="modal-body">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titre:</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                        </div>
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Auteur:</label>
                        <input type="text" class="form-control" id="auteur" name="auteur">
                        </div>
                        <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="image" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" value="Choose File">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Create Article</button> 
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
</body>
</html>