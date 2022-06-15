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
        <div class="intro-blog">
            <h2>BLOG</h2>
        </div>
        <div class="content">
<!--            <div class="horizontal-card">-->
<!--                <div class="hc-row">-->
<!--                    <a href=""><div class="hc-row-img" style="background-image: url('assets/images/blog/Istanbul.jpg');"></div></a>-->
<!--                    <div class="hc-content">-->
<!--                        <a href=""><h2>Başlık Kısmı</h2></a>-->
<!--                        <p class="hc-date">0000/00/00</p>-->
<!--                        <p class="hc-excerpt">İçerik kısmının bulunduğu alan. hdfh dfgdhgdf hdfh dgdfı gjıofjıjguı fjıug jj fddf hdf hdfh dfgdhgdf hdfh dgdfı gjıofjıjguı fjıug jj fddf hdf hdfh dfgdhgdf hdfh dgdfger  tretrtyetyt yddgd lfktkgktrg kmtrkojmtrk mktjojhydsfkop jjjmn bhujı kbhyujınv gdfthujıcd fghkojh ggujılk jhgfdy huıopıu ytrewasdfg hjklşmn bvft yuıo</p>-->
<!--                        <a href=""><p class="hc-read-more">daha fazla</p></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class='horizontal-card'>
                <?php
                include_once "panel/config.php"; // Veri tabanı bağlantı ayar sayfasını çekiyoruz
                $blogList = mysqli_query($connect, "SELECT * FROM blog"); // Tüm verileri çekecek sorguyu çalıştırıyoruz.
                if ($blogList) {
                    $blogNum = mysqli_num_rows($blogList); // Sorguyla eşleşen kayıt sayısını buluyoruz.
                    if ($blogNum > 0) { // Eşleşen kayıt varsa döngü içerisine alıyoruz
                        while ($blogData = mysqli_fetch_assoc($blogList)) {
                            $imagePath = "assets/images/blog/" . $blogData["file_name"]; // İlgili içeriğin resim yolunu buluyoruz.
                            echo "<div class='hc-row'><a href='blog-view.php?id=" . $blogData["id"]. "'><div class='hc-row-img'";
                            echo 'style="background-image:url(\'' . $imagePath. '\');">'; // Linkli resim yapısını oluşturuyoruz
                            echo "</div></a><div class='hc-content'><a href='blog-view.php?id=" . $blogData["id"]. "'><h2>" . $blogData["header"] . "</h2></a><p class='hc-date'>"; // Linkli başlık yapısını oluşturuyoruz
                            echo substr(str_replace("-", "/", strip_tags($blogData["date"])), 0, 10); // Oluşturma tarihini karta aktarıyoruz
                            echo "</p><p class='hc-excerpt'>" . substr(strip_tags($blogData["content"]), 0, 200) . "</p><a href='blog-view.php?id=" . $blogData["id"]; // Uzun içerik metnini kart üzerine ekliyoruz
                            echo "'><p class='hc-read-more'>daha fazla</p></a></div></div>"; // Detay sayfası için linkli "daha fazla" butonu yapıyoruz
                        }
                    }
                } else {
                    echo "Sorgu Hatası"; // Eğer sorguda hata varsa hata mesajı döndürüyoruz.
                }
                ?>
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