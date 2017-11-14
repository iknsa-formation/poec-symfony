<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$mm = "Hello c'est moi"; 
	echo $mm ."<br>";
	?>
	<?php


$vd = "True"; 
$a = 1234;
$b = 1.23;
$myarray = [
	"qui" => "moi",
    "nom" => "bina",
];
echo "$vd <br> $a <br> $b" ;
echo "mon tableau $myarray[nom] ";
$nombre = 2 + 4;
echo "<br> $nombre <br>" ;

function division($nb1,$nb2)
{
	$rslt=$nb1/$nb2;
	return $rslt;
 }
 echo division(20,10) ;

 //<script type="text/javascript">
 //var ntm =prompt("entré un numero:");
 //</script>
	$ntm=55;
	if($ntm===17){
		echo "vous étes avec la police!!";
	}elseif ($ntm===18) {
		echo "vous étes avec la les pompier!!";
	}
    elseif ($ntm===1) {
	   echo "<br> vous appeler avec le fix";
    }
	 else {
		echo " <br> je n'est pas compris votre demande";
	}
	
	
?>

</body>
</html>