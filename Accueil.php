<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>test PHP</title>
</head>

<body>

    <?php
$number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

        function plus (){
        $number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

          $result=$number1 + $number2 + $number3 + $number4;
          return $result;
        }

    echo "Addition</br>";
    echo $number1." + ".$number2." + ".$number3." + ".$number4." = ";
        echo plus();

      function soust (){
        $number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

          $result=$number1 - $number2 - $number3 - $number4;
          return $result;
        }

    echo "</br></br>Soustraction</br>";
    echo $number1." - ".$number2." - ".$number3." - ".$number4." = ";
        echo soust();

    function multi (){
        $number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

          $result=$number1 * $number2 * $number3 * $number4;
          return $result;
        }

    echo "</br></br>Multiplication</br>";
    echo $number1." x ".$number2." x ".$number3." x ".$number4." = ";
        echo multi();

    function divis (){
        $number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

          $result=$number1 / $number2 / $number3 / $number4;
          return $result;
        }

    echo "</br></br>Division</br>";
    echo $number1." / ".$number2." / ".$number3." / ".$number4." = ";
        echo divis();

    function multi (){
        $number1 =2;
        $number2 =3;
        $number3 =4;
        $number4 =5;

          $result=$number1 * $number2 * $number3 * $number4;
          return $result;
        }

    echo "</br></br>Multiplication</br>";
    echo $number1." x ".$number2." x ".$number3." x ".$number4." = ";
        echo multi();

    ?>

        <?php
    $verif = 00;
    if ($verif === 18) {
        echo "c'est les pompiers";

    }elseif( $verif === 17 )
        {
        echo "c'est la police";

      }elseif( $verif < 8 && $verif > 5 )
        {
        echo "c'est un mobile";
    }elseif( $verif === 2 || $verif === 1 || $verif === 8 || $verif === 9 )
        {
        echo "c'est un portable";
         }elseif( $verif === 0 )
        {
        echo "c'est etranger";

    }else{
        echo "ce numéro n'est pas disponible :=)";
    }
    ?>
</body>

</html>
