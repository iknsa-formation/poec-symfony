<?php
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="menu.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-collapse collapse">

	<div class="collapse navbar-collapse col-12 col-m-12" id="navbarNavAltMarkup" style="background-color: dodgerblue;border-radius: 50px;">
		<div class="navbar-nav col-1 col-m-12">
			<a class="nav-item nav-link active col-1 col-m-12" href="index.php">Home <span class="sr-only">|</span></a>
			<a class="nav-item nav-link col-1 col-m-1" href="Inscription.php">Registration</a><span class="sr-only">|</span>
			<?php if(isset($_SESSION['pseudo'])){ echo '<a href="Disconnect.php class="nav-item nav-link col-1 col-m-1"">Deconnecter</a>';}else
	{ echo "<a href='connection.php' class='nav-item nav-link col-1 col-m-1'>Se connecter</a>";} 

			?>
		</div>
	</div>
</nav>
