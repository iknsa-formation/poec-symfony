
<body>
	<?php  
		include('php2/number_check.php');
	?>
<h1 style>Exos php</h1>
<?php
	$numero = "18";
	if (substr($numero, 0, 2) == 17) 
	{
		echo("c'est la police!");
	}
	elseif (substr($numero, 0,2) == 18) 
	{
		echo("c'est les pompiers");
	}
	elseif (substr($numero, 0,2) ==  06 || substr($numero, 0,2) == 07) 
	{
		echo("c'est un mobile");	
	}
	elseif (substr($numero, 0,2) == 01 || substr($numero, 0,2) == 02 || substr($numero, 0,2)== 08) 
	{
		echo("c'est un fixe'");
	}
		/*	$numero = 18;
	switch ($numero)
	{
	    case 17:
	        echo "c'est les keuf on ce barre !";
	        break;
	    case 18:
	        echo "c'est les pompiers";
	        break;
	    case 06:
	        echo "c'est un mobile";
	        break;
	    case 07:
	        echo "c'est un mobile'";
	        break;
	    case 01:
	        echo "c'est un fixe'";
	        break;
	    case 02:
	        echo "c'est un fixe'";
	        break;
	    case 08:
	        echo "c'est un fixe'";
	        break;
	}*/
?> 
</body>
</html>
<php