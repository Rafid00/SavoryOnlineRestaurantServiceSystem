<?php

include('server.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/logo.svg" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles/register.css">

    <title>Savor'y - Login Alternative</title>
</head>

<body>
    <?php //require('nav-component.php'); ?>
    <div class="container">
        <div class="main-container shadow-lg p-3 mb-5 bg-body rounded">
            <div class="left">
                <h1>Welcome To Khanas</h1>
                <img src="images/login-regi.jpg"
                    alt="">
            </div>

            <div class="right">
                <a href="index.php"><img id="khanas-logo" src="https://i.ibb.co/1qZfbwX/khanas.png" alt=""></a>
                <h1>Login</h1>

                <p style="margin: 20px 0; font-weight: bold;"><?php
                if (isset($_GET["reg"]) && isset($_GET["login"])) {
                    echo "Register Done! Login to continue.";
                 }
                ?></p>
                

                <form class="text-white" method="POST" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div>
                        <a class="anchor" href="register.php">Don't Have an Account? Register Here...</a>
                    </div>
                    <br>
                    <button type="submit" class="button" name="login_user">Login</button>
                </form>
            </div>

        </div>
    </div>


    <?php //require('footer.php'); ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>