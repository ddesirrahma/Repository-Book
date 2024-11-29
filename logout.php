<?php
// mengaktifkan session
session_start();

// Menghapus semua session
session_destroy();

// mengalihkan halaman login
header("location:login.html?pesan+anda berhasil logout.");
?>