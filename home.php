<?php
session_start();

if (!$_SESSION['login']) {
    header("Location: login.php");
    exit;
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
    <link rel="stylesheet" href="css/style-home.css">

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

    <!-- vanue -->
    <div class="container">
        <div class="row row1">
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">RESERVASI</button></a>
            
        </div>

        <!-- row 2 -->
        <div class="row row2">
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>

            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">RESERVASI</button></a>

        </div>

        <!-- row 3 -->
        <div class="row row3">
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>

            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/121c61fc3328ec1c2848c9b91bcce2a5.jpg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">RESERVASI</button></a>
        </div>

    </div>
    <!-- vanue -->

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