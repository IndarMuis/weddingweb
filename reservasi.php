<?php
session_start();
require_once 'conn.php';

if (!$_SESSION['login']) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['submit'])) {
    if (reservasi($_POST) > 0) {
        echo "
        <script>
            alert('RESERVASI TEMPAT TELAH BERHASIL');
            document.location.href = 'home.php';
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
    <link rel="stylesheet" href="css/style-reservasi.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="display: flex;">Wedding <p style="color: black; font-size: 30px;">++
                </p></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Desain Web dan Undangan</a></li>
                            <li><a class="dropdown-item" href="#">Kue dan Katering</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Jasa Pawang Hujan</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Layanan Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Vanue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#tentangkami">About</a>
                    </li>
                </ul>
                <div class="userLogo">
                    <img src="img/avatar.png.jpg" alt="">
                    <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
                </div>

            </div>
        </div>
    </nav>
    <!-- navbar -->

    <div class="container">
        <div class="row row1">
            <div class="col-sm-12 text-center">
                <h1>RESERVASI</h1>
            </div>
            <div class="row row2">
                <div class="col-sm-6 offset-md-3 text-left">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input name="namaLengkap" type="text" class="form-control" id="namaLengkap" aria-describedby="username"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="contoh@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelp"
                                placeholder="+62xxxxx">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat Reservasi</label>
                            <input name="tempat" type="text" class="form-control" id="tempat"
                                placeholder="nama_tempat">
                        </div>
                        <button id="kirim" name="submit" type="submit" class="btn btn-warning">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
      <!-- About us -->
      <section class="tentangkami" id="tentangkami">
        <div class="container">
            <br><br><br>
            <div class="row text-justify">
            <div class="col-sm-6 text-center">
                <h1 class="text-center">About</h1>
            </div>
                <div class="col-sm-6 text-center">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut iure est in, natus veritatis omnis
                        sapiente? Quam ullam, rerum ducimus eaque blanditiis fugiat obcaecati voluptates repudiandae
                        optio nobis maxime dolorum hic voluptatem omnis nihil in reprehenderit rem officiis eligendi!
                        Quisquam harum id, obcaecati mollitia est iste veritatis voluptatem ullam ipsum.</p>
                </div>
        </div>
    </section>
    <!-- About us -->

        <script src="js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

</body>

</html>