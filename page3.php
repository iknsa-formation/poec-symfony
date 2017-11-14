<?php
echo "<h2>les tableau</h2>";
$fruit=array("banane","pomme","orange","poire");
for($i=0;$i<count($fruit);$i++)
{
	echo $fruit[$i]."  " ."->correspond à l'indice $i" . "<br>";

}


?>