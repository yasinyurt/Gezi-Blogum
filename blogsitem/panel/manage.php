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
        <div class="right-wrap" id="right-wrap">

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
<?php
?>
