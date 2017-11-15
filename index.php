<!doctype html>
<html>
<<<<<<< HEAD
	<head>
		<title>php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="test"><h1>Liste des personnes</h1><?php
			$untableau = array(
				1 => array ("prenom" =>"moussa","nom"=>"camara","moyenne"=>"15"),
				2 => array ("prenom" =>"khalid","nom"=>"sookia","moyenne"=>"19"),
				3 => array ("prenom" =>"noemie","nom"=>"kifia","moyenne"=>"9"),
				4 => array ("prenom" =>"jean","nom"=>"dupont","moyenne"=>"7"),
				5 => array ("prenom" =>"alex","nom"=>"cool","moyenne"=>"10"));


			foreach ($untableau as $key1 => $value1){
				echo "personne°:".$key1."<br/>";

				foreach($value1 as $key2 => $value2 ){
					echo $key2."=>".$value2."<br/><br/>";
				}
			};	
			
			
			?></div>
			
			<div class="test2"><h1>Personnes admis</h1><?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']>9){
					echo "personne no".$key1."<br/>";
					
					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}
			?></div>
			<div class="test3"><h1>Personne nons admis</h1><?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']<9){
					echo "personne no".$key1."<br/>";
					
					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}
			
			
			?></div>
	</body>
</html>
=======

<head>
    <title>php</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="test3">
        <br>
        <details close class="test5">
            <summary>Tableau 1</summary>
            <div class="test">
                <?php
                    $personnes = array(
                        1=>array('prenom' => 'moussa','nom' => 'camara','telephone' => '012345679'),
                        2=>array('prenom' => 'khalid','nom' => 'sooda','telephone' => '01234678'),
                        3=>array('prenom' => 'khalid','nom' => 'sooda','telephone' => '012346785')
                    );

                    foreach($personnes as $key1 => $value)
                    {
                        echo "personne n°:" . $key1 . "<br />";
                        foreach ($value as $key2=>$value2)
                        {
                            echo $key2 ."===>" . $value2 . "</strong><br />\n";
                        }
                    }
                    echo "<br><br>";
                    ?>
            </div>
        </details>
        <br>
        <details close class="test4">
            <summary>Tableau 2</summary>
            <div class="test2">
                <?php
                    require 'test.php';
                    ?>
            </div>
        </details>
    </div>
</body>

</html>
>>>>>>> 54744fb42d684f0e71ee7ca8ac88c1b56a7b5eac
