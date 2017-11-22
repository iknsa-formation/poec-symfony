<?php 
  require_once "../fonction.php";
  include_once "../head.html";
  include_once "../header.php";
  verifSession();
?>
<div class="row">
 <div class="col-sm-6 col-sm-offset-3">
    <div class="wrapper">
      <form class="form-signin" action="verifinscription.php" method="post">    
        <div class="form-group">
          <h2 class="form-signin-heading">Inscription</h2>
          </div>
          <div class="form-group">
          <input type="text" class="form-control" name="firstname" placeholder="firstname" <?php if(isset($_GET['firstname'])){echo 'value ="'.$_GET['firstname'].'"';} ?> required="" autofocus="" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="lastname" placeholder="lastname" <?php if(isset($_GET['lastname'])){echo 'value ="'.$_GET['lastname'].'"';} ?> />
        </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="mail" placeholder="Email Address" required="" <?php if(isset($_GET['mail'])){echo 'value ="'.$_GET['mail'].'"';} ?> />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="mdp" placeholder="Password" required="" <?php if(isset($_GET['mdp'])){echo 'value ="'.$_GET['mdp'].'"';} ?> />
        </div>
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>   
        </div>
        <small>Vous êtes déja inscrit ? <a href="../">connexion</small>
      </form>
    <?php if(isset($_GET['erreur'])){echo msgErreurInscription($_GET['erreur']);} ?>
    </div>
  </div>
</div>