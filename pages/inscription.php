<?php 
  require_once "../fonction.php";
  include_once "../head.html";
  include_once "../header.php";
  verifSession();
?>
?>
<div class="row">
 <div class="col-sm-6 col-sm-offset-3">
    <div class="wrapper">
      <form class="form-signin" action="verifinscription.php" method="post">    
        <div class="form-group">
          <h2 class="form-signin-heading">Inscription</h2>
          </div>
          <div class="form-group">
          <input type="text" class="form-control" name="firstname" placeholder="firstname" <?php if(isset($_POST['firstname'])){echo 'value ="'.$_POST['firstname'].'"';} ?> required="" autofocus="" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="lastname" placeholder="lastname" <?php if(isset($_POST['lastname'])){echo 'value ="'.$_POST['lastname'].'"';} ?> />
        </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="mail" placeholder="Email Address" required="" <?php if(isset($_POST['mail'])){echo 'value ="'.$_POST['mail'].'"';} ?> />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="mdp" placeholder="Password" required="" <?php if(isset($_POST['mdp'])){echo 'value ="'.$_POST['mdp'].'"';} ?> />
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
      
<?php session_destroy(); ?>