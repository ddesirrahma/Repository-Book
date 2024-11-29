<?php
require 'Koneksi.php';
$email = $_POST["email"];
$nomorhandphone = $_POST["nomorhandphone"];
$namalengkap = $_POST["namalengkap"];
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (email, nomorhandphone, namalengkap, username, password)
            VALUES ('$email', '$nomorhandphone', '$namalengkap', '$username', '$password')";

if (mysqli_query($connect, $query_sql)) {
     header("Location: login.html");
}else{
     echo "Pendaftaran Gagal:" . mysqli_error($connect);
}
?>