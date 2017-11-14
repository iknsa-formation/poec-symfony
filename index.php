<!doctype html>
<html>

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
