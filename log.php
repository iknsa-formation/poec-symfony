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
<title>new</title>
<style>
.log input[type=text], select
{
    width: 55%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.log input[type=submit] 
{
    width: 50%;
    background-color: #40acdc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.log input[type=submit]:hover 
{
    background-color: #18223a;
}
.log1 input[type=text], select
{
    width: 55%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.log1 input[type=submit] 
{
    width: 50%;
    background-color: #40acdc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.log1 input[type=submit]:hover 
{
    background-color: #18223a;
}
</style>
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
        <div class="col-md-6">
        	<form class="log" method="POST" action="display1.php">
        	  <div class="table-responsive">
              <table class="table table-bordered table-striped" border = 1 style="width: 100%; height: 80px">
                <tbody>
                <tr>
                <td>
                <label class="details" for="index" style="padding-left: 130px" >Index</label>
                <center><input type="text" id="index" name="index" placeholder="Id" value=" <?php echo $index;?>"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label class="details" for="firstname" style="padding-left: 130px" >FirstName*</label>
                <center><input type="text" id="firstname" name="firstname" placeholder="Prenom" 
                value="<?php echo $row->firstname;?>"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label for="lastname" style="padding-left: 130px">LastName</label>
                <center><input type="text" id="lastname" name="lastname" placeholder="Nom" 
                value="<?php echo $row->lastname;?>"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label for="address" style="padding-left: 130px">Address</label>
                <center><input type="text" id="address" name="address" placeholder="Adresse" 
                value="<?php echo $row->address;?>"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <label for="profession" style="padding-left: 130px">Profession</label>
                <center><input type="text" id="profession" name="profession" placeholder="Poste"
                value="<?php echo $row->profession;?>"/></center>
                </td>
                </tr>
                <tr>
                <td>
                <center><input type="submit" value="Insert"></center>
                </td>
                </tr>
                </tbody>
              </table>
            </div>
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