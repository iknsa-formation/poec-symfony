<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/>
<!doctype html>
<html lang="en">
    <head>
        <title>Hello, work!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>





    <body class="text-center">


        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4  text-center">
                    <img class="text-center" src="https://cdn2.iconfinder.com/data/icons/4web-3/139/enter-image-256.png"  alt="Log In">
                    <br/>
                    <h1 class="text-center login-title">Sign in to continue to CP-TP</h1>
                    <div class="account-wall">
                        <br/>

                        <form class="form-signin text-center" method="post" action="list.php">

                            <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                            <br/>
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <br/>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Sign in</button>
                            <br/>

                        </form>
                    </div>
                    <a href="signup.php" class="text-center new-account">Create an account </a>
                </div>
            </div>
        </div>

    </body>
</html>