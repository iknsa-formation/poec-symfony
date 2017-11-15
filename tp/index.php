<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JavaScript Course - IKNSA</title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- Page Content -->
    <header>
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <nav>
            <ul>
                <li><a href="index.html">Home Page</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <div class="breadcrumb">
            <span>You are here</span>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page.html">About Us</a></li>
            </ul>
        </div>
    </header>
	<div class="jumbotron">
    	<div class="alert alert-primary" role="alert">
    		<h2>Liste des admis</h2>
    	</div>
	        <?php
		        $personnes = array(
		            1 => array('prenom' => 'Moussa', 'nom' => 'Camara', 'moyenne' => 12),
		            2 => array('prenom' => 'Khalid', 'nom' => 'Sookia', 'moyenne' => 8),
		            3 => array('prenom' => 'Moustakime', 'nom' => 'Kifia', 'moyenne' => 10)
		        );

		        foreach($personnes as $key1 => $value)
		        {
		          if ($value['moyenne'] > 9) {
		          		echo "personne n°:" . $key1 . "<br />";
		         
		            foreach ($value as $key2=>$value2)
		            {
		            		echo $key2 .": <strong>" . $value2 . "</strong><br />\n";
		            }
		           }
		        }
	    	?>
	</div>















	<div class="jumbotron">
    	<div class="alert alert-primary" role="alert">
    		<h2>Liste des non-admis</h2>
    	</div>
	       <!--  <?php
		        $personnes = array(
		            1 => array('prenom' => 'Moussa', 'nom' => 'Camara', 'moyenne' => 12),
		            2 => array('prenom' => 'Khalid', 'nom' => 'Sookia', 'moyenne' => 8),
		            3 => array('prenom' => 'Moustakime', 'nom' => 'Kifia', 'moyenne' => 10)
		        );

		        foreach($personnes as $key1 => $value)
		        {
		          if ($value['moyenne'] <= 9) {
		          echo "personne n°:" . $key1 . "<br />";
		         
		            foreach ($value as $key2=>$value2)
		            {
		            		echo $key2 .": <strong>" . $value2 . "</strong><br />\n";
		            }
		           }
		        }
	    	?> -->
	</div>


 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>