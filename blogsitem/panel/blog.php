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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/968d57c76c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="main">
    <div class="wrap">
        <div class="left-wrap" id="left-wrap">
            <h2 class="left-wrap-header" id="left-wrap-header">blog sitem</h2>
            <h3 class="left-wrap-user" id="left-wrap-user"><?php echo $_SESSION["user"];?></h3>
            <div class="nav">
                <a href="manage.php"><div class="menu-element"><img src="assets/images/home.png" class="menu-icons"><p class="menu-name">Ana Sayfa</p></div></a>
                <a href=""><div class="menu-element"  style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));"><img src="assets/images/book-alt.png" class="menu-icons"><p class="menu-name">Blog</p></div></a>
                <a href="sign_out.php"><div class="menu-element"><img src="assets/images/sign-out.png" class="menu-icons"><p class="menu-name">Çıkış Yap</p></div></a>
            </div>
        </div>
        <div class="right-nav">
            <div class="rn-leftside">
                <input type="checkbox" class="toggler" id="toggler" onclick="hideNav()">
                <img src="assets/images/menu.png" class="nav-btn">
            </div>
        </div>
        <div class="right-wrap" id="right-wrap">
            <div class="blog-list">
                <?php
                    include_once "config.php"; // Veri tabanı ayar sayfası
                    $listing = mysqli_query($connect, "SELECT * FROM blog"); // Tüm verileri çeker
                    if($listing) {
                        $blog_num = mysqli_num_rows($listing);
                        if($blog_num>0) { // Veri tabanından içerikleri listeler.
                            while($blog_elements=mysqli_fetch_assoc($listing)) {
                                echo "<div class='blog'><div class='blog-left'><a href='blog_view.php?id={$blog_elements['id']}'><p class='blog-title'>";
                                echo substr(strip_tags($blog_elements["header"]), 0, 50) . "..."; // Kısa şekilde başlığı yazar
                                echo "</p></a></div><div class='blog-right'><p class='blog-date-time'>";
                                echo substr(str_replace("-", "/", strip_tags($blog_elements["date"])), 0, 10); // Verinin eklendiği tarihi gösterir.
                                echo "</p><a href='delete_blog.php?id={$blog_elements['id']}'><div class='trash-btn'><img src='assets/images/trash.png'></div></a></div></div>";
                                // Link yapısı ile ikon kullanarak içerik silme butonu.
                            }
                        }else {
                            echo "<p class='messages'>Kayıt Yok</p>";
                        }
                    }else {
                        echo "Sorgu Hatası";
                    }
                ?>
                <div class="add-blog-btn">
                    <a href="add_blog.php"><button class="ab-btn">Blog Ekle</button></a>
                </div>
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