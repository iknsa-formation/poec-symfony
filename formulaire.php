<?php
require_once"db.php"
?>
<DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Get in touch</h1>
    <form method ="post" action="fichier.php" id="f1">

      <div class="form-group" >
        <label for="firstname">Firstname*</label>
        <input type="text"name="firstname" id="firstname" />
      </div>
        <div class="form-group">
          <label for="name">Lastname</label>
          <input type="text" name="lastname" id="lastname" />
      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" />
    </div>
    <div class="required-fields">
    </div>
    <div class="form-group">
      <label for="fonction">Fonction</label>
      <input type="text" name="fonction" id="fonction" />
  </div>
  <button type="submit" class="btn btn-default" id="n5">Send</button>
    </form>
  </body>
</html>
