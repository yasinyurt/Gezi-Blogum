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
    <div class="main-wrap">
        <div class="intro">
            <img class="intro-icon" src="assets/images/book.png">
            <h2>Gezi Bloğuna Hoş Geldiniz</h2>
        </div>
        <div class="content">
            <h1>Son Gezilerimiz</h1>
            <div class="blog-content">
                <div class="blog-row">
                    <!--                    <div class="blog-col">-->
                    <!--                        <a href="">-->
                    <!--                            <div class="blog-bg"></div>-->
                    <!--                        </a>-->
                    <!--                        <div class="blog-text-box">-->
                    <!--                            <h3>Blog Başlığıkdofjjdjkıhokdoıhkdsghdfhdfh</h3>-->
                    <!--                            <span><img src="images/main/calendar.png">0000/00/00</span>-->
                    <!--                            <p class="excerpt">İçerik kısmı burada yazacak fdhpkkdfıohjıgjıhohokohkgohkgkhk...</p>-->
                    <!--                            <a href=""><p class="read-more">daha fazla</p></a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <?php
                        include_once "panel/config.php"; // Veri tabanı ayar sayfasını çekiyoruz ve bağlantıyı sağlıyoruz
                        $blogList = mysqli_query($connect, "SELECT * FROM blog ORDER BY id DESC LIMIT 3"); // Ana sayfada görünecek sınırlı içeriğin sorgusunu çalıştırıyoruz
                        if ($blogList) {
                            $blogNum = mysqli_num_rows($blogList); // Sorguyla eşleşen sonuçları buluyoruz
                            if ($blogNum > 0) { // Sorgu sonucuyla eşleşen veriler varsa döngü içerisine alıyoruz
                                while ($blogData = mysqli_fetch_assoc($blogList)) { // While döngüsü ile verileri önceden hazırladığımız kart tasarımına uyarlıyoruz
                                    $imagePath = "assets/images/blog/" . $blogData["file_name"]; // Resim yolunu oluşturuyoruz
                                    echo "<div class='blog-col'><a href='blog-view.php?id=" . $blogData['id'] . "'><div class='blog-bg'";
                                    echo 'style="background-image:url(\'' . $imagePath . '\');">'; // Linkli resim yapısı oluşturuyoruz
                                    echo "</div></a><div class='blog-text-box'>";
                                    echo "<a href='blog-view.php?id=" . $blogData['id'] . "'><h3>" . substr(strip_tags($blogData["header"]), 0, 52) . "...</h3></a>"; // Linkli başlık yapısı oluşturuyoruz
                                    echo "<p class='excerpt'>" . substr(strip_tags($blogData["content"]), 0, 119); // Kısa içerik kısmını oluşturuyoruz
                                    echo "</p><a href='blog-view.php?id=" . $blogData['id'] . "'><p class='read-more'>daha fazla</p></a></div></div>"; // Detay için "daha fazla " link yapısı oluşturuyoruz
                                }
                            }
                        } else {
                            echo "Sorgu Hatası"; // Sorgu yanlış ise hata döndürüyoruz
                        }
                    ?>
                </div>
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