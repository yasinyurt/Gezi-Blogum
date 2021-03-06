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
            <h2 class="left-wrap-header" id="left-wrap-header">yurtdesign</h2>
            <h3 class="left-wrap-user" id="left-wrap-user"><?php echo $_SESSION["user"]; ?></h3>
            <div class="nav">
                <a href="manage.php">
                    <div class="menu-element"><img src="assets/images/home.png" class="menu-icons">
                        <p class="menu-name">Ana Sayfa</p></div>
                </a>
                <a href="">
                    <div class="menu-element"
                         style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));"><img
                            src="assets/images/book-alt.png" class="menu-icons">
                        <p class="menu-name">Blog</p></div>
                </a>
                <a href="">
                    <div class="menu-element"><img src="assets/images/settings.png" class="menu-icons">
                        <p class="menu-name">Ayarlar</p></div>
                </a>
                <a href="sign_out.php">
                    <div class="menu-element"><img src="assets/images/sign-out.png" class="menu-icons">
                        <p class="menu-name">????k???? Yap</p></div>
                </a>
            </div>
        </div>
        <div class="right-nav">
            <div class="rn-leftside">
                <input type="checkbox" class="toggler" id="toggler" onclick="hideNav()">
                <img src="assets/images/menu.png" class="nav-btn">
            </div>
        </div>
        <?php
            include_once "config.php";
            $id = $_GET["id"];
            $view = mysqli_query($connect, "SELECT * FROM blog WHERE id='$id'");
            if($view) {
                $viewNum = mysqli_num_rows($view);
                if($viewNum>0) {
                    $viewQuery = mysqli_fetch_assoc($view);
                }
            }
            if($_POST) { // G??ncelleme i??lemini yapar.
                $blogHeader = "<p>" . addslashes($_POST["blog-header"]) . "</p>";
                $blogContent = "<p>" . nl2br(addslashes($_POST["blog-content"])) . "</p>";

                $fileName = $_FILES["blog-image"]["name"];
                $tempName = $_FILES["blog-image"]["tmp_name"];
                $folder = "../assets/images/blog/".$fileName; // Resim yolunu belirtir. Sitenin kendi resim klas??r?? olmal??!
                date_default_timezone_set('Europe/Istanbul'); // Tarih de??erini de??i??tirir.
                $blogDate = date('Y-m-d H:i:s'); // ??imdiki tarih de??erini olu??turur.
                $checkImage = mysqli_query($connect, "SELECT file_name FROM blog WHERE id='$id'");
                $fetchSQL = mysqli_fetch_assoc($checkImage);
                $oldImagePath = "../assets/images/blog/" . $fetchSQL["file_name"];
                unlink($oldImagePath); // Eski resimi siler.
                $update = mysqli_query($connect, "UPDATE blog SET header='$blogHeader', content='$blogContent', date='$blogDate', file_name='$fileName' WHERE id='$id'");
                // ??stenilen s??tun de??erleri, belirtilen de??erlerle de??i??tirilir ve g??ncelleme i??lemi yap??l??r.
                if($update) {
                    if (move_uploaded_file($tempName, $folder))  {
                        header("Location: blog.php"); // E??er i??lem tamamlan??rsa blog.php sayfas??na y??nlendirir.
                        die();
                    }else{
                        $msg = "<p class='messages'>Resim Y??klenirken Hata Olu??tu!</p>"; // Resim y??klenmezse hata verir.
                    }
                }else {
                    echo "<p class='messages'>Kay??t G??ncellenemedi</p>"; // Ba??ka bir hatada uyar?? verir.
                }
            }
        ?>
        <div class="right-wrap" id="right-wrap">
            <div class="blog-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" class="header" name="blog-header" placeholder="Ba??l??k" value="<?php echo strip_tags($viewQuery['header']);?>">
                    <textarea name="blog-content" class="content" placeholder="????erik"><?php echo strip_tags($viewQuery['content']);?></textarea>
                    <input type="file" class="file" name="blog-image" accept="image/png, .jpeg, .jpg, image/gif" required>
                    <input type="submit" value="G??ncelle" class="add-btn">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
