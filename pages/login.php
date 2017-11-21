<div class="row">
 <div class="col-sm-6 col-sm-offset-3">
    <div class="wrapper">
      <form class="form-signin" action="verifconnexion.php" method="post">    
        <div class="form-group">
          <h2 class="form-signin-heading">Connexion</h2>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="mail" placeholder="Email Address" required="" autofocus="" />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="mdp" placeholder="Password" required=""/>      
        </div>
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
        </div>
      </form>
    </div>
  </div>
</div>
<?php var_dump(password_verify("$2y$10$YicOaOs.Wd.rKUZFybbRluvn4qWvESjmpAJlnrhAMcLmHBygE31Mq",PASSWORD_BCRYPT)); ?>
<?php var_dump(password_hash("abdi",PASSWORD_BCRYPT)); ?>