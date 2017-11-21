<?php
require_once 'db.php';                      
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Details</title>
</head>
<body>
  <div class="container">
    <div class="rows">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" id="title">
              PHP Method
          </div>
        </div>
      </div>
    </div>
    <div class="rows">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead style="text-align: center;"> 
              <tr class="warning">
              <th style="text-align:center">INDEX</th>  
              <th style="text-align:center">FIRSTNAME</th>
              <th style="text-align:center">LASTNAME</th>
              <th style="text-align:center">ADDRESS</th>
              <th style="text-align:center">PROFESSION</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $index = 1;
                if (isset($_POST['firstname']) &&  isset($_POST['lastname']) &&  isset($_POST['address']) &&  
                    isset($_POST['profession']))
                {
                  $fname = $_POST['firstname'];
                  $lname = $_POST['lastname'];
                  $addr = $_POST['address'];
                  $prof = $_POST['profession'];
                  $isExist = "SELECT lastname FROM personne1 WHERE lastname = '".$lname."' ";
                  $exist = mysqli_query($connection,$isExist);
                  $var = mysqli_num_rows($exist);
                  if ($var > 0) 
                  {
                    echo "<div class='alert alert-danger' role = 'alert'>Lastname already exists</div>";
                  }
                  else
                  {
                    $sql = "INSERT INTO personne1 (firstname, lastname, address, profession) VALUES ('".$fname."', '".$lname."', '".$addr."', '".$prof."')";
                    // var_dump($sql);die;;
                    $insert = mysqli_query($connection, $sql);//mysqli_query will return the boolean value true or false.
                    if($insert)
                    {
                      echo "Records added successfully.".'<br>';
                      echo '<tr>';
                      echo '<td>'.$index.'</td>';
                      echo '<td>'.$fname.'</td>';
                      echo '<td>'.$lname.'</td>';
                      echo '<td>'.$addr.'</td>';
                      echo '<td>'.$prof.'</td>';
                      echo '</tr>';
                    } 
                    else
                    {
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                    }
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="rows">
      <div class="col-md-12">
        <form action='display2.php' method='POST'>
          <input type='submit' name='submit-btn' value='Voir Table' />
        </form>
      </div>
    </div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>
