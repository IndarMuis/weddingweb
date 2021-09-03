<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbweeding";

$conn = mysqli_connect($hostname, $username, $password, $dbname);


function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confirmPass = mysqli_real_escape_string($conn, $data['confirmPass']);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_object($result)) {
        echo "
        <script>
            alert('username sudah terdaftar di dalam database');
            document.location = 'register.php';
        </script>";
        return false;
    }

    if ($password !== $confirmPass) {
        echo "
            <script>
            alert('Konfirmasi password tidak sesuai');
            document.location = 'register.php';
            </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT); 

    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$email', '$password')");
    return mysqli_affected_rows($conn);
}

function reservasi($data) {
    global $conn;
    $nama = $data['namaLengkap'];
    $email = $data['email'];
    $telepon = $data['phone'];
    $tempat = $data['tempat'];

    mysqli_query($conn, "INSERT INTO reservasi
    VALUES ('', '$nama', '$email', '$telepon', '$tempat')");

    return mysqli_affected_rows($conn);
}

?>