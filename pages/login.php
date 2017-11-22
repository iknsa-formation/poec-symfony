<div class="row">
 <div class="col-sm-6 col-sm-offset-3">
    <div class="wrapper">
      <form class="form-signin" action="verifconnexion.php" method="post">    
        <div class="form-group">
          <h2 class="form-signin-heading">Connexion</h2>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="mail" placeholder="Email Address" required="" autofocus="" <?php if(isset($_GET['mail'])){echo 'value ="'.$_GET['mail'].'"';} ?> />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="mdp" placeholder="Password" required=""/>      
        </div>
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>   
        </div>
        <small>Vous n'êtes pas encore inscrit ? <a href="pages/inscription.php">inscription</small>
      </form>
      <?php if(isset($_GET['erreur'])){echo msgErreurInscription($_GET['erreur']);} ?>
    </div>
  </div>
</div>