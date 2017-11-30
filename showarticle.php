<?php
require 'article.php';
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
        <div class="col-md-12">
          <h2>Liste des articles</h2>
            <table class="table table-responsive table-bordered table-striped">
              <thead>
                <tr class="warning">
                  <th style="text-align:center" scope="col">INDEX</th>
                  <th style="text-align:center" scope="col">LOGO</th>
                  <th style="text-align:center" scope="col">TITRE</th>
                  <th style="text-align:center" scope="col">AUTEUR</th>
                  <th style="text-align:center" scope="col">MESSAGE</th>
                  <th style="text-align:center" scope="col">MODIFY</th>
                  <th style="text-align:center" scope="col">REMOVE</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $db = (new DAO)->connect();
                $listArticle = $db->prepare("SELECT *  FROM test");
                  if (!$listArticle->execute())
                  {
                    die('Unable to show list article');
                  }
                  while($row = $listArticle->fetch(PDO::FETCH_ASSOC))
                  {
              ?>
                <tr>
                  <td> <?php echo $row['id']; ?></td>
                  <td  style="width: 30%"> <?php echo '<img align = "center" class ="img-valign" src="'.$row['image'].'" style="line-height:65px; ;"/>'; ?>
                  <td> <?php echo $row['titre']; ?></td>
                  <td> <?php echo $row['auteur']; ?></td>
                  <td> <?php echo $row['message']; ?></td>
                  <td> <a href="updatearticle.php? id=<?php echo $row['id'] ?>">Update</a></td>
                  <td><a href="deletearticle.php?id=<?php echo $row['id'] ?>" OnClick="return confirm('Voulez-vous vraiment 
                  supprimer ?');">DELETE</a></td>
                </tr>
              <?php 
                  }
              ?>
              </tbody>
            </table>
          </div>
        </div>
  	  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
</body>
</html>