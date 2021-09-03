<?php

require_once 'conn.php';

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "
            <script>
            alert('Registrasi berhasil');
            document.location = 'login.php';
            </script>
        ";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-login.css">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" height="100%" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <a class="brand" href="#" style="display: flex;">Wedding <p
                                style="color: black; font-size: 30px;">++</p></a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="registerCard text-left">
                                <h3>Silahkan Register</h3>
                                <form action="" method="post">
                                    <div class="form-group text-left">
                                        <label for="username">Username</label>
                                        <input name="username" class="form-control" id="username"
                                            aria-describedby="emailHelp" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="email">Email address</label>
                                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPass">Confirm Your Password</label>
                                        <input name="confirmPass" type="password" class="form-control" id="confirmPass"
                                            placeholder="confirmPass">
                                    </div>
                                    <button type="submit" class="btn btn-dark" name="register">Register</button>
                                    <p class="register">Sudah punya akun?<a href="login.php">Login</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

</body>

</html>