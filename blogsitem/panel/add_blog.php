<?php
include_once "session_check.php";
?>
<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="UTF-8">
    <title>Panel</title>
    <link rel="stylesheet" href="assets/css/manage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/968d57c76c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="main">
    <div class="wrap">
        <div class="left-wrap" id="left-wrap">
            <h2 class="left-wrap-header" id="left-wrap-header">blog sitem</h2>
            <h3 class="left-wrap-user" id="left-wrap-user"><?php echo $_SESSION["user"];?></h3>
            <div class="nav">
                <a href="manage.php"><div class="menu-element"><img src="assets/images/home.png" class="menu-icons"><p class="menu-name">Ana Sayfa</p></div></a>
                <a href="blog.php"><div class="menu-element"><img src="assets/images/book-alt.png" class="menu-icons"><p class="menu-name">Blog</p></div></a>
                <a href="sign_out.php"><div class="menu-element"><img src="assets/images/sign-out.png" class="menu-icons"><p class="menu-name">Çıkış Yap</p></div></a>
            </div>
        </div>
        <div class="right-nav">
            <div class="rn-leftside">
                <input type="checkbox" class="toggler" id="toggler" onclick="hideNav()">
                <img src="assets/images/menu.png" class="nav-btn">
            </div>
        </div>
        <?php
            include_once "config.php"; // Veri tabanı ayar dosyasını çeker.
            if ($_POST) {
                $blogHeader = "<p>" . addslashes($_POST["blog-header"]) . "</p>"; // Düzenlemeyle gelen değeri değişkene aktarır.
                $blogContent = "<p>" . addslashes($_POST["blog-content"]) . "</p>"; // Düzenlemeyle gelen değeri değişkene aktarır.
                $fileName = $_FILES["blog-image"]["name"];
                $tempName = $_FILES["blog-image"]["tmp_name"];
                $fileSize = $_FILES["blog-image"]["size"];
                $folder = "../assets/images/blog/" . $fileName; // Yüklenecek resim yolunu oluşturur. Sitenin kendi resim klasörü olmalı!
                if ($fileSize > 3000000) {
                    header("Location: add_blog.php"); // Resmin boyutunu kontrol eder.
                    die();
                }
                date_default_timezone_set('Europe/Istanbul'); // Tarih ayarlanır
                $blogDate = date('Y-m-d H:i:s'); // Eklenecek tarih değerini oluşturur.
                $add = mysqli_query($connect, "INSERT INTO blog(header, content, date, file_name) VALUES ('$blogHeader', '$blogContent', '$blogDate', '$fileName')");
                // İstenilen değerleri veri tabanına kaydetmeyi sağlar.
                if ($add) {
                    if (move_uploaded_file($tempName, $folder)) {

                    } else {
                        $msg = "Resim yüklenirken hata oluştu!"; // Resim yüklenmezse uyarı verir.
                    }
                } else {
                    echo "Kayıt Eklenemedi";
                }
            }
        ?>
        <div class="right-wrap" id="right-wrap">
            <div class="blog-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" class="header" name="blog-header" placeholder="Başlık" required>
                    <textarea name="blog-content" class="content" placeholder="İçerik" id="content" required></textarea>
                    <input type="file" class="file" name="blog-image" accept="image/png, .jpeg, .jpg, image/gif"
                           required>En Fazla 2MB
                    <input type="submit" value="Ekle" class="add-btn">
                </form>
            </div>
        </div>
    </div>
</div>
<!--<script>
    function hideNav() {
        var button = document.getElementById("toggler");
        var leftSide = document.getElementById("left-wrap");
        var leftWrapHeader = document.getElementById("left-wrap-header");
        var leftWrapUser = document.getElementById("left-wrap-user");
        var menuName = document.getElementsByClassName("menu-name");
        if(button.checked == true) {
            leftSide.style.width = "55px";
            leftSide.style.overflow = "visible";
            leftWrapHeader.innerHTML = "yd";
            leftWrapUser.style.visibility = "hidden";
            menuName.style.display = "none";
        } else {
            leftSide.style.width = "270px";
            leftSide.style.overflow = "scroll";
            leftWrapHeader.innerHTML = "yurtdesign";
            leftWrapUser.style.visibility = "visible";
            menuName.style.display = "none";
        }
    }
</script>-->
</body>
</html>