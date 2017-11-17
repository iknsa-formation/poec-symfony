<!DOCTYPE html>

<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <head>

        <link rel="stylesheet" type="text/css" href="index.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
        <style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,700italic);
            body,
            html {
                font-family: Lato;
                padding: 0;
                margin: 0;
                min-height: 100%;
                height: 100%;
                color: #fff;
                background-size: cover;
                background-position: center;
            }

            .header {
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                cursor: default;
                height: 100%;
            }
            .header__dev {
                font-family: Lato, Arial, sans-serif;
                text-shadow: 0 1px 1px rgba(42, 43, 61, 0.5);
                font-size: 60px;
                height: 90px;
                line-height: 90px;
                font-weight: 300;
                position: absolute;
                top: 10%;
                left: 120px;
                margin: -45px 0 0;
                -webkit-transition: all 0.6s ease-out;
                transition: all 0.6s ease-out;
                -webkit-transition-delay: 0.5s;
                transition-delay: 0.5s;
                z-index: 2;
            }
            @media screen and (max-width: 1000px) {
                .header__dev {
                    -webkit-transform: scale(0.9);
                    transform: scale(0.9);
                }
            }
            @media screen and (max-width: 850px) {
                .header__dev {
                    -webkit-transform: scale(0.65);
                    transform: scale(0.65);
                }
            }
            @media screen and (max-width: 700px) {
                .header__dev {
                    -webkit-transform: scale(0.5);
                    transform: scale(0.5);
                }
            }

            .dev__slash {
                color: #A82336;
                font-weight: 300;
                position: absolute;
                top: -5px;
                left: 70px;
                margin-left: 5px;
                -webkit-transform: scale(1.6);
                transform: scale(1.6);
                z-index: 5;
            }
            .dev__fe, .dev__ux {
                top: 50%;
                margin-top: -90px;
                position: absolute;
                width: 180px;
                height: 180px;
                overflow: hidden;
                -webkit-transform: rotateZ(22deg);
                transform: rotateZ(22deg);
            }
            .dev__fe i, .dev__ux i {
                font-style: normal;
                top: 0;
                left: 0;
                position: absolute;
                width: 180px;
                height: 180px;
                line-height: 180px;
                -webkit-transform: rotateZ(-22deg);
                transform: rotateZ(-22deg);
            }
            .dev__fe {
                text-align: right;
                direction: rtl;
                margin-left: -99px;
            }
            .dev__fe i {
                text-indent: -15px;
            }
            .dev__ux {
                margin-left: 100px;
            }
            .dev__ux i {
                text-indent: -15px;
            }
            .dev__developer {
                font-weight: 300;
                position: absolute;
                top: 0;
                left: 225px;
            }
            .dev__fe, .dev__ux, .dev__fe i, .dev__ux i, .dev__developer, .dev__slash {
                -webkit-transition: all 0.6s cubic-bezier(0.555, -0.375, 0, 1.615);
                transition: all 0.6s cubic-bezier(0.555, -0.375, 0, 1.615);
            }

            .header__dev--open .dev__fe i, .header__dev--open .dev__ux i {
                text-indent: 15px;
            }
            .header__dev--open .dev__developer {
                -webkit-transform: translateX(30px);
                transform: translateX(30px);
                opacity: 0.2;
            }
            .header__dev--open .dev__slash {
                -webkit-transform: scale(1.6) rotateZ(-22deg);
                transform: scale(1.6) rotateZ(-22deg);
            }

            .header__dev--slow .dev__fe, .header__dev--slow .dev__ux, .header__dev--slow .dev__fe i, .header__dev--slow .dev__ux i, .header__dev--slow .dev__developer, .header__dev--slow .dev__slash {
                -webkit-transition: all 1.2s cubic-bezier(0.555, -0.375, 0, 1.615);
                transition: all 1.2s cubic-bezier(0.555, -0.375, 0, 1.615);
            }

            body {
                background-image: url(http://wallpoper.com/images/00/26/06/21/gaussian-blur_00260621.jpg);
            }
        </style>

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
                <b class="dev__developer"><?php echo 'BipBopALuLa'?></b>
                <br>
                <b><?php 
    $heros=array ("batman","superman","wolverine");
                    for ($i=0; $i<count($heros); $i++){
                        echo $heros[$i]."<br/>";
                    }
                    ?>
                </b>
                <br>
                <b><?php $info = array (
                            'identité' => 'inconnue',
                            'pouvoir' => 'telepathie',
                            'ame soeur' => 'phoenix',
                    );
                    foreach ($info as $telepathie => $pouvoir)
                    {
                    echo $telepathie.'-'.$pouvoir.'<br/>';
                    }?>
                </b>
    </p>


    </header>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


    </body>
    </html>
