<?php
session_start();

// Pastikan session dihapus dengan benar
$_SESSION = []; // Kosongkan array $_SESSION

// Hapus cookie session jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, 
        $params["path"], $params["domain"], 
        $params["secure"], $params["httponly"]
    );
}

// Hapus semua session dan destroy
session_destroy();

// Arahkan pengguna kembali ke halaman login
header('Location: login.php');
exit();
?>
