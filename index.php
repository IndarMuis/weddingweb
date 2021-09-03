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
    <link rel="stylesheet" href="css/style.css">

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
                        <a class="nav-link" href="#">Dresses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>

                    </li>
                </ul>
                
                <a href="register.php"><button type="button" class="btn btn-light">Daftar</button></a>
                <a href="login.php"><button type="button" class="btn btn-warning ">Masuk</button></a>

            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- jumbotron -->
    <div class="jumbotron">
        <section class="title">
            <p class="display-4 text-normal">Ketika Pernikahan</p>
            <p class="display-4 text-bold">Impian Anda Menjadi Kenyataan</p>
        </section>
        <p>"Sesekali, tepat di tengah-tengah <br> kehidupan biasa, cinta memberi kita dongeng"</p>

        <!-- search bar -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <form class="cari" action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="button" class="fa fa-search btn btn-warning "></button>
        </form>

        <section class="menu-icon">
            <table cellspacei="1" cellpadding="1">
                <tr>
                    <td>
                        <span class="material-icons">
                            construction
                        </span>
                    </td>
                    <td>
                        <p>Design Website <br> dan Undangan</p>
                    </td>
                    <td>
                        <span class="material-icons">
                            format_color_reset
                        </span>
                    </td>
                    <td>
                        <p>Jasa Pawang Hujan</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="material-icons">
                            fastfood
                        </span>
                    </td>
                    <td>
                        <p>Kue dan Katering</p>
                    </td>
                    <td>
                        <span class="material-icons">
                            more_horiz
                        </span>
                    </td>
                    <td>
                        <p>Layanan lainnya</p>
                    </td>
                </tr>
            </table>
        </section>

        <button class="basket"><span class="material-icons">
                shopping_basket
            </span>
            Your Basket</button>

    </div>
    <!-- jumbotron -->


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>