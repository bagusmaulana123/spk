<?php
session_start();

// Fungsi logout
function logout() {
    // Hapus semua data sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Redirect ke halaman login atau halaman lain sesuai kebutuhan
    header("Location: ../login.php"); // Ganti "login.php" dengan halaman login Anda
    exit();
}

// Cek jika pengguna ingin logout
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    logout();
}
?>

