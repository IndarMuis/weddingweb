<?php

session_start();


require_once 'conn.php';

if (isset($_SESSION['login'])) {
    header("Location: home.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // print(mysqli_num_rows($result));
    // die;
    if (mysqli_num_rows($result) === 1) {
       $row = mysqli_fetch_assoc($result);
    
       if (password_verify($password,$row['password'])) {
           $_SESSION['login'] = true;
           header("Location: home.php");
           exit;
       }
    } else {
   

    }
    $error = true;
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
                            <div class="loginCard text-left">
                                <?php 
                                if (isset($error)) : ?>
                                    <p style="color: red; font-style: italic;">Username / password salah</p>
                                <?php endif?>
                                <form action="" method="post">
                                    <div class="form-group text-left">
                                        <label for="username">Username</label>
                                        <input name="username" type="text" class="form-control" id="username"
                                            aria-describedby="usernameHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-warning" name="login">Login</button>
                                    <p class="register">Belum punya akun?<a href="register.php">Daftar</a></p>

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