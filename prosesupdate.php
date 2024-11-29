<?php
include('koneksi.php');

$namalengkap = $_POST['namalengkap'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$nomorhandphone = $_POST['nomorhandphone'];

$query = mysqli_query($connect, "UPDATE daftar_beasiswa SET namalengkap='$namalengkap', kelas='$kelas', email='$email', nomorhandphone='$nomorhandphone' WHERE namalengkap='$namalengkap'");

if($query){
 echo 'Data Berhasil diupdate. Klik <a href="index.php">di sini</a> untuk kehalaman depan.';
}else{
 echo 'Data gagal di update. Klik <a href="index.php">disini</a> untuk kehalaman depan.';
}
?>