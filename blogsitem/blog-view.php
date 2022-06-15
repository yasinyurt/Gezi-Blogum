<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Blogsitem</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet">
</head>
<script src="https://kit.fontawesome.com/968d57c76c.js" crossorigin="anonymous"></script>
<body>
<div class="wrapper">
    <div class="header-wrap">
        <div class="left-header-wrap">
            <a href="index.php"><h1 class="txt-logo">geziblogum</h1></a>
        </div>
        <div class="right-header-wrap">
            <nav class="nav">
                <a href="index.php">Ana Sayfa</a>
                <a href="blog.php">Blog</a>
                <a href="#footer">İletişim</a>
            </nav>
        </div>
    </div>
    <?php
        include_once "panel/config.php"; // Veri tabanı ayar sayfasının çağırılması
        $id = $_GET["id"]; // Detay sayfasında gösterilecek detaylı içeriğin ID değerini URL çubuğundan alıyoruz
        $sql = mysqli_query($connect, "SELECT * FROM blog WHERE id='$id'"); // Aldığımız ID değeri ile eşleşen veriyi sorguyla çekiyoruz 
        if($sql) {
            $blogNum = mysqli_num_rows($sql);
            if($blogNum>0) { // Yeterli veri olursa verileri değişkene aktarır.
                $blogData = mysqli_fetch_assoc($sql);
            }else {
                echo "Kayıt Yok!"; // Yeterli veri yani kayıt yoksa uyarı mesajı verir.
            }
        }else {
            echo "Sorgu Hatası!"; // Hatalı sorgu varsa hata mesajı döndürür.
        }
    ?>
    <div class="main-wrap">
        <div class="intro-blog">
            <h2><?php echo $blogData["header"]; ?></h2> <!--İlgili veriye ait başlığı veri tabanından çeker-->
        </div>
        <div class="content">
            <div class="blog-content-main">
                <img src="assets/images/blog/<?php echo $blogData['file_name']?>" class="blog-img"><!--İlgili veriye ait resimi veri tabanından çeker-->
                <h2><?php echo $blogData["header"]; ?></h2> <!--İlgili veriye ait başlığı veri tabanından çeker-->
                <p class="bcm-blog-content"><?php echo strip_tags($blogData["content"]); ?></p> <!--İlgili veriye ait uzun içeriği verii tabanından çeker-->
            </div>
        </div>
        <footer class="footer" id="footer">
            <div class="top-footer">
                <div class="left-side">
                    <h3>geziblogum</h3>
                    <p>Türkiye ve dünyanın eşsiz güzelliklerine şahit olmakla birlikte sizlere kendi perspektifimizden manzaralar sunuyoruz. Genişleyen ekibimzle sizlere, oturduğunuz yerden dünyanın farklı manzaralarına şahit olabilmenizi sağlıyoruz.</p>
                </div>
                <div class="right-side">
                    <h3>İletişim</h3>
                    <p>Canlar İş Çarşısı, No:38 Maslak/İstanbul</p>
                </div>
            </div>
            <div class="bottom-footer">
                <p class="bottom-text">blogsitem@info.com</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
