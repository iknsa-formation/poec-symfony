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
                    <h2>Exercice PHP</h2>
                </div>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                
            <?php
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
            ?>
                
            </div>
        </div>
    </div>

</body>
</html>
