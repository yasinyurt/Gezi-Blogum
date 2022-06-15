<?php
    include_once "config.php";
    $id = $_GET["id"];
    $check = mysqli_query($connect, "SELECT file_name FROM blog WHERE id='$id'"); // Resim dosyasını kontrol eder.
    $delete = mysqli_query($connect, "DELETE FROM blog WHERE id='$id'"); // ID değerine göre istenilen kayıtı silme sorgusunu tanımlar.
    if($delete) {
        if($check) {
            $dataSize = mysqli_num_rows($check);
            if($dataSize>0) { // Dosyanın boyutuna göre işlem yapar.
                $data = mysqli_fetch_assoc($check);
                $targetFilePath = "../images/main/blog/" . $data["file_name"];
                unlink($targetFilePath); // İlgili kayıtın resim dosyasını siler.
            }
        }
        header("Location: blog.php"); // En sonda blog.php sayfasına yönlendirme yapar.
        die();
    }
?>