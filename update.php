<?php
	require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
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
<title>new</title>
</head>
<body>
  <?php
    if(count($_POST)>0) 
    {
      $sql = "UPDATE personne1 set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "', 
      address='" . $_POST["address"] . "', profession='" . $_POST["profession"] . "' WHERE `index`='" . $_POST["index"] . "'";
      // var_dump($sql);die;
      $update = mysqli_query($connection,$sql);
      if($update)
      {
  ?>
      <div class="alert alert-success" role="alert">
        Modification ok
      </div>
  <?php 
      header("Location:display2.php");
      } 
      else
      {
  ?>
      <div class="alert alert-danger" role="alert">
        Modification KO
      </div>
  <?php
      }
    } 
  ?>
</body>
</html>