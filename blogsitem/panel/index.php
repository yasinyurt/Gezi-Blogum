<?php
    session_start();
    ob_start();
    if( isset( $_SESSION["logged_in"] ) and  $_SESSION["logged_in"] == 1) { // Eğer oturum önceden açılmışsa yönetim sayfasına geri yönlendirir
        header("Location: manage.php");
    }
?>
<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="UTF-8">
    <title>Panel</title>
    <link rel="stylesheet" href="assets/css/panel-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if($_POST) {
            include_once "config.php"; // Veri tabanı ayar sayfası çekilir.
            $username = $_POST["username"];
            $password = md5($_POST["password"]);
            $user = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'"); // Kullanıcı adı ve şifre ile eşleşen kayıt sorgulanır.
            $users = mysqli_fetch_assoc($user);
            if($username == "" OR $password == "") {
                echo "<script>alert('Lütfen tüm alanları doldurunuz');</script>"; // Eğer iki alandan birisi boşsa uyarı verir.
            }else {
                if($users>0) {
                    if($users["username"] == $username AND $users["password"] == $password) { // Eğer eşleşen kayıt varsa sisteme giriş yapar.
                        $_SESSION["logged_in"] = 1;
                        $_SESSION["id"] = $users["id"];
                        $_SESSION["user"] = $users["full_name"];
                        header("Location: manage.php");
                    }else {
                        echo "<script>alert('Böyle bir kayıt bulunamadı');</script>"; // Kayıt bulunamazsa hata verir.
                    }
                }else {
                    echo "<script>alert('Böyle bir kayıt bulunamadı');</script>"; // Kayıt bulunamazsa hata verir.
                }
            }
        }
    ?>
    <div class="main">
        <div class="container">
            <h2 class="login-header">blog sitem</h2>
            <div class="form-wrapper">
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Kullanıcı Adı" required>
                    <input type="password" name="password" placeholder="Şifre" required>
                    <input type="submit" value="Giriş Yap">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    ob_end_flush();
?>