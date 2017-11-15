<!DOCTYPE html>

<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css"/>
        
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script >
            // look, click me!!

            $("#header").on({
                "click.header": function() {
                    $(".header__dev").toggleClass("header__dev--open");
                }
            });



            setTimeout( function() {
                $(".header__dev").addClass("header__dev--slow").removeClass("header__dev--open");
            },1000);


            setTimeout( function() {
                $(".header__dev").removeClass("header__dev--slow");
            },2400);

            //# sourceURL=pen.js
        </script>
    </head>
    <body>
        <header class="header" id="header">
            <p class="header__dev header__dev--open">
                <b class="dev__fe"><i>PO</i></b>
                <span class="dev__slash">/</span>
                <b class="dev__ux"><i>EC</i></b>
                <br>
                <b class="dev__developer"><?php echo 'BipBopALuLa'?></b>
                <br>
                <b><?php $personne = array ('p1' => array('identite'=>'neant', 'pouvoir'=>'levitation', 'ame soeur'=>'Liya'),
                                            'p2' => array ('identite'=>'XXX', 'pouvoir'=>'teleportation', 'ame soeur'=>'Jane'),);
                    // Lecture de chaque ligne du tableau
                    foreach($personne as $p1=>$neant){
                        echo '<b>PERSONNE : </b>'.$p1.'<br/>';
                        // Lecture de chaque tableau de chaque ligne
                        foreach($neant as $identite=>$neant){
                            // Affichage
                            echo $identite.'->'.$neant.'<br>';
                        }} ?>
                </b>
                <br/>
                
                
                
                <b>
                    <?php 
                        $etudiant = array (
                                            'et1' => array ('nom' => 'Ulysse', 'moyenne' => 18),
                                            'et2' => array ('nom' => 'Kleio', 'moyenne' => 15),
                                            'et3' => array ('nom' => 'Dupere', 'moyenne' => 3),);
                        foreach ($etudiant as $et1 => $Ulysse)
                            {
                                echo $et1;
                            
                            foreach ($Ulysse as $nom => $value)
                            {
                                echo ' '.$nom.'--'.$value.'<br/>';    
                            }
                        }
                    ?>  
                </b>
                <br/>
                 <b>
                    <?php 
                        $etudiant = array (
                                            'et1' => array ('nom' => 'Ulysse', 'moyenne' => 18),
                                            'et2' => array ('nom' => 'Kleio', 'moyenne' => 15),
                                            'et3' => array ('nom' => 'Dupere', 'moyenne' => 3),);
                        foreach ($etudiant as $key1 => $value)
                            {
                                if($value['moyenne'] <= 9){  
                                echo $key1;
                                               
                            
                            foreach ($value as $key2 => $value2);
                            {
                                echo $key2.' '.$value2.'<br/>';    
                            }
                           }
                        }
                    ?>  
                </b>
   <br/>
                 <b>
                    <?php 
                        $etudiant = array (
                                            'et1' => array ('nom' => 'Ulysse', 'moyenne' => 18),
                                            'et2' => array ('nom' => 'Kleio', 'moyenne' => 15),
                                            'et3' => array ('nom' => 'Dupere', 'moyenne' => 3),);
                        foreach ($etudiant as $key1 => $value)
                            {
                                if($value['moyenne'] > 9){  
                                echo $key1;
                                               
                            
                            foreach ($value as $key2 => $value2);
                            {
                                echo $key2.' '.$value2.'<br/>';    
                            }
                           }
                        }
                    ?>  
                </b>             
                
                
            </p>
        </header>
        <div>
            <ul><?php include 'index.html'?></ul>
        </div>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
