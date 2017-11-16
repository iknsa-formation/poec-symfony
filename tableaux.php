<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h2>Exercices PHP</h2>
                </div>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                
            <?php
                
                $tab = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

                echo "<b>Liste de mon tableau:</b> <br/>";

                for($i=0;$i<sizeof($tab);$i++)
                {
                    echo $tab[$i]."<br/>";
                }

                $tab_associatif = array("01"=>"Janvier","02"=>"Février","03"=>"Mars","04"=>"Avril","05"=>"Mai","06"=>"Juin","07"=>"Juillet","08"=>"Août","09"=>"Septembre","10"=>"Octobre","11"=>"Novembre","12"=>"Décembre");

                echo "<br/>";
                echo "<br/>";
                echo "<b>Liste de mon tableau associatif: </b><br/>";

                foreach($tab_associatif as $key => $value)
                    echo $key.": ".$value."<br/>";

                $etudiants = array(
                "1"=>array("Nom"=>"Camara", "Prenom"=>"Moussa", "Moyenne"=>"15"), 
                "2"=>array("Nom"=>"Sookia", "Prenom"=>"Khaled", "Moyenne"=>"19"),
                "3"=>array("Nom"=>"Kifia", "Prenom"=>"Noémie", "Moyenne"=>"9"),
                "4"=>array("Nom"=>"Dupont", "Prenom"=>"Jean", "Moyenne"=>"7"),
                "5"=>array("Nom"=>"Good", "Prenom"=>"Alex", "Moyenne"=>"10")
                );

                foreach($etudiants as $id => $info){

                    foreach($info as $nom => $moyenne){
                        echo $nom.": ".$moyenne."<br/>";

                        if($nom === "Moyenne"){

                            if($moyenne >= 10)
                                echo "<b>admis</b><br/><br/>";
                            else
                                echo "<b>non admis</b><br/><br/>";
                        }
                     }
                }
            ?>
                
            </div>
        </div>
    </div>

</body>
</html>
