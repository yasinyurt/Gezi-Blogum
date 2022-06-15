<?php
    session_start();
    if( isset( $_SESSION["logged_in"] ) and  $_SESSION["logged_in"] == 1) {
    } else {
        header("Location: index.php");
        die();
    }
?>