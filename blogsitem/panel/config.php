<?php
    $connect = mysqli_connect("localhost", "root", "", "blogsitem"); // Bağlantı işlemini gerçekleştirir.
    mysqli_set_charset($connect, "utf8"); // Veri tabanı karakter setini UTF8 yapar

//    if(mysqli_connect_errno()) {
//        echo "Bağlantı Hatalı</br>";
//        echo "Hata : " . mysqli_connect_error();
//    }else {
//        echo "Bağlantı Başarılı";
//    }
?>