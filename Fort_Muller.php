
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il est fort Muller !!!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      margin:0;
padding:0;
background: url(img/decolle.svg) no-repeat center fixed;

    }

    </style>
  </head>
  <body>
  <h2>Formulaire</h2>
    <form class="" action="fichier.php" method="post">
    <div class="col-lg-6">
      <label for="lastname" class="col-sm-2 control-label"> Nom* :</label>
        <div class="col-sm-8">
          <input required="required" type="text" class="form-control" name="lastname"
          id="lastname">
        </div>
    </div>
    <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label"> Prenom* :</label>
        <div class="col-sm-8">
          <input required="required" type="text" class="form-control" name="firstname"
          id="firstname">
        </div>
    </div>
      <div class="form-group">
        <label for="adresse" class="col-sm-2 control-label"> Adresse* :</label>
          <div class="col-sm-8">
            <input required="required" type="text" class="form-control" name="adresse"
            id="adresse">
          </div>
      </div>
      <div class="form-group">
        <label for="fonction" class="col-sm-2 control-label">fonction* :</label>
      </div>

      <div class="col-sm-8">
        <input required="required" type="text" class="form-control" name="fonction"
        id="fonction">
        <input type="submit" name="valider" value="envoyer"/ >
      </div>
    <p>*require field</p>
    </form>
<!--
    <table width="100%" cellpadding="5"  cellspacing="1" bgcolor="#666666">
            <tr bgcolor="#FFFFFF">>Date de Commande </span></th>
              <th scope="col"><span class="Style1 Style1">Facture format PDF</span></th>
            </tr>
              <th scope="col"><span class="Style1 Style1">Num&eacute;ro de commande </span></th>
              <th scope="col"><span class="Style1 Style1">Num&eacute;ro de facture </span></th>
              <th scope="col"><span class="Style1 Style1">Client </span></th>
              <th scope="col"><span class="Style1 Style1">Poids </span></th>
              <th scope="col"><span class="Style1 Style1">Total TTC </span></th> -->

  </body>
</html>
