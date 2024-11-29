<?php
include('koneksi.php');

$namalengkap = $_POST['namalengkap'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$nomorhandphone = $_POST['nomorhandphone'];

$query = mysqli_query($connect, "INSERT INTO daftar_beasiswa(namalengkap, kelas, email, nomorhandphone) VALUES('$namalengkap', '$kelas', '$email','$nomorhandphone')");

if($query){
 echo 'Data berhasil ditambahkan. Klik <a href="index.php">di sini</a> untuk ke halaman depan.';
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="input.html">di sini</a>';
}

?>