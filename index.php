<!doctype html>
<html>
	<head></head>

	<body>

		<div style="border:2px solid black;"><?php
				
				
				
				
				$numero = 07;
					
					switch ($numero){
						case 18:
								echo "vous appeller les pompier";
								break;
						case 17:
							echo "vous apeller la police";
								break;
						case 06:
							echo "vous apeller un mobile";
							break;
						case  01||07:
							echo "vous appeller un fixe";
							break;
						default:
							echo "vous vous ete trompper ";
							
							
					}
		echo "<br/>";
		
		$nombre = 18;
		if($nombre === 17){
			echo "vous appeller la police";
		}
		elseif($nombre===18){
			echo"vous appeller les pompier";
		}
		elseif($nombre===06){
			echo "vous appeller un mobile";
		}
		elseif($nombre===01||$nombre===02||$nombre===08){
			echo "vous appeller un fix";
		}
		else{
			echo"vous vous ete trompper";
		}
		
			?></div>
		

	</body>





</html>