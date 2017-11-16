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
               <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="numero">Entrer un numéro de téléphone:</label>
                        <input type="text" class="form-control" name="numero" id="numero" maxlength="10">
                        <button type="submit" class="btn btn-info">Valider</button>
                    </div>
                </form>

                <?php 
                    $num = $_POST['numero'];
                    $n = substr($num, 0, 2);

                    if(strlen($num)>2){
                        if($n == 06 || $n == 07)
                            echo "<i>C'est un numéro de portable</i>";
                        elseif(($n == 01) || ($n == 02) || ($n == 03) || ($n == 04) || ($n == 05) || ($n == 09))
                            echo "<i>C'est un numéro fixe</i>";
                        elseif($n == 08)
                            echo "<i>C'est un numéro spécial</i>";
                    }
                    else{
                        if($num == 17)
                            echo "<i>C'est la police</i>";
                        elseif($num == 18)
                            echo "<i>Ce sont les pompiers</i>";
                        elseif($num == 15)
                            echo "<i>C'est le SAMU</i>";
                    }
                    
                    echo "<br/>";
                    echo "<br/>";

                    //---------------------------------------------------------
                
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
                
                    echo "<br/>";
                    echo "<br/>";
                
                    //----------------------------------------------------------
                
                    echo "<b>Fonctions: </b><br/>";
                    
                    function addition($nb1,$nb2){
                        $resultat = $nb1 + $nb2;
                        echo "Addidtion: ".$nb1." + ".$nb2." = ";
                        return $resultat;
                    }

                    function soustraction($nb1,$nb2){
                        $resultat = $nb1 - $nb2;
                        echo "Soustraction: ".$nb1." - ".$nb2." = ";
                        return $resultat;
                    }

                    function multiplication($nb1,$nb2){
                        $resultat = $nb1 * $nb2;
                        echo "Multiplication: ".$nb1." * ".$nb2." = ";
                        return $resultat;
                    }

                    function modulo($nb1,$nb2){
                        $resultat = $nb1 % $nb2;
                        echo "Modulo: ".$nb1." % ".$nb2." = ";
                        return $resultat;
                    }

                    function division($nb1,$nb2){
                        $resultat = $nb1 / $nb2;
                        echo "Division: ".$nb1." / ".$nb2." = ";
                        return $resultat;
                    }

                    function carre($nb1,$nb2){
                        $resultat = $nb1 ** $nb2;
                        echo "Carré: ".$nb1." ^ ".$nb2." = ";
                        return $resultat;
                    }

                    echo addition(3,14)."<br/>";
                    echo soustraction(100,52)."<br/>";
                    echo multiplication(6,7)."<br/>";
                    echo modulo(100,3)."<br/>";
                    echo division(120,4)."<br/>";
                    echo carre(10,2)."<br/>";
                        
                    echo "<br/>";
                    echo "<br/>";
                
                    //---------------------------------------------------------------
                
                    $etudiants = array(
                        "1"=>array("Nom"=>"Camara", "Prenom"=>"Moussa", "Moyenne"=>"15"), 
                        "2"=>array("Nom"=>"Sookia", "Prenom"=>"Khaled", "Moyenne"=>"19"),
                        "3"=>array("Nom"=>"Kifia", "Prenom"=>"Noémie", "Moyenne"=>"9"),
                        "4"=>array("Nom"=>"Dupont", "Prenom"=>"Jean", "Moyenne"=>"7"),
                        "5"=>array("Nom"=>"Good", "Prenom"=>"Alex", "Moyenne"=>"10")
                    );
                
                    foreach($etudiants as $id => $info){
                        //echo $id."<br/>";
                        
                        foreach($info as $nom => $moyenne){
                            echo $nom.": ".$moyenne."<br/>";
                            
                            if($nom === "Moyenne"){
                                //echo $moyenne."<br/>";
                                
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
