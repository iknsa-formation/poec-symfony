<?php
	 require_once "db.php";

	if(!isset($_SESSION)){
    }

	if (!isset($_SESSION['connecte']) && $_SESSION['connecte']==1): ?>
   		<button type="submit" class="btn btn-danger" >Deconnexion</button>
  
 		<?php else: ?>
 		<a href="login" class="btn btn-primary">Sign in </a>  or
        <a href="inscription" class="btn btn-primary">Sign up</a>
        <?php endif; ?>
  
<?php
/* quand je vais me deloguer et retourner à mon fichier index.php */
	session_start();
	session_destroy();
	header("location:index.php");	
?>