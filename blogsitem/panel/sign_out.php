<?php
    session_start();
    $_SESSION["logged_in"] = 0; // Oturum değerini sıfırlar.
    header("Location: index.php"); // Giriş sayfasına yönlendirir.
    die();
?>