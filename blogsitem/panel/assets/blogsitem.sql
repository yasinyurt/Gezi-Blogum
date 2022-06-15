-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Haz 2022, 19:36:23
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogsitem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `header`, `content`, `date`, `file_name`) VALUES
(1, '<p>Nevşehir\'in Güzellikleri - Kapadokya</p>', '<p>Aşk Vadisi Kapadokya vadileri arasında hem en popülerlerden hem de en güzel manzarayı sunanlardan biri.<br />\n<br />\nDetaylara girmeden önce kafalar karışmasın diye belirtmekte fayda var: Aşk Vadisini Aşıklar Vadisi Bağlıdere Vadisi ya da Aşıklar Tepesi gibi isimlerle de duyabilirsiniz.<br />\n<br />\nBağlıdere ve Aşk Vadisi isimleri doğru olsa da Aşıklar Tepesi aslında vadinin içerisinde panoramik manzarasıyla büyüleyen ve manzara izleme noktası olan tepenin adı.<br />\n<br />\nKişisel tavsiyem bir gün batımı zamanında Aşıklar Tepesi’ne kurulup muhteşem manzaranın keyfini çıkarmanız.<br />\n<br />\nVadinin “aşk” ile bağdaştırılmasının nedeni ise dünden bugüne birçok evlilik teklifine sahne olmasından kaynaklanıyor.<br />\n<br />\nAşk Vadisi 4.9 km uzunluğa sahip üzüm bağları ve meyve ağaçları arasında keyifli bir parkur sunuyor. Araçla belli bir yere kadar ilerleyip sonrasında yürüyebiliyorsunuz. Doğa yürüyüşlerine meraklıysanız tercih edebilirsiniz. Yaklaşık 2.5 saat sürüyor.<br />\n<br />\nYürüyüşle pek aranız yoksa ve Kapadokya’da balon denemek istiyorsanız da Aşk Vadisi’ni yukarıdan keşfetme fırsatı bulacaksınız.</p>', '2022-06-12 15:22:02', 'kapadokya.jpg'),
(2, '<p>Trakya\'nın Meşhur Şehri Edirne</p>', '<p>Yıllar boyu Osmanlı Devleti\'ne başkentlik yapmış Edirne, bugün de Bulgaristan ve Yunanistan ile sınırımızı oluşturan tarihi ve turistik öğelerle örülü bir şehir. Tarihteki rollerinden bugüne kadar getirdiği pek çok cami, tarihi eser ve köprüleri bulunmakta.\r\n\r\nÜnlü sanatkâr Mimar Sinan\'ın \"ustalık eserim\" dediği meşhur Selimiye Camii, Edirne\'de görülmeye değer sayısız eserden sadece biri.\r\nMeriç Nehri, Ainos Antik Kenti görülmeye değer diğer yerler arasında yer alıyor. Yılın her döneminde turistik, kültürel, tarihi ve iş gibi pek çok farklı amaçlı turisti ağırlayan Edirne\'de gerek şehir merkezinde gerekse merkezin gerisinde konumlanmış, büyüklü küçüklü pek çok otel bulabilirsiniz. Her ne amaçla konaklarsanız konaklayın, Edirne de keyifli bir gezi deneyimlemiş olacak ve Edirne Mutfağı\'nın lezzetlerinden tatma imkânı bulacaksınız.\r\nOsmanlı\'ya başkentlik yapmış Edirne\'de Ne Yapılır?\r\n\r\nTarih kokan bu şehre geldiğinizde Edirne sokaklarında, tarihi çarşısında yürüyüş yapmalısınız. Edirne\'de pek çok yer görebileceğiniz köprüleri, çeşmeleri ve küçük çarşıları gezebilirsiniz. Bolca fotoğraf çekebilirsiniz.\r\nTarihi ve ahşap Edirne Evleri\'ni gezebilirsiniz. Edirne\'nin ünlü ve tarihi Ali Paşa Kapalı Çarşısı\'nda alışveriş yapabilirsiniz.\r\nMimar Sinan\'ın ünlü eseri Selimiye Camisi\'ni ve şehirde bulunan Osmanlı döneminden kalma pek çok camiyi ziyaret edebilirsiniz. Kilise ve havraları gezebilirsiniz. Edirne merkezde yer alan müzeleri ziyaret edebilirsiniz. Enez Antik Kenti\'ni, Dolmenler\'i görebilirsiniz. koruma altına alınan Gala Gölü Tabiat Parkı\'na gidebilirsiniz.\r\nMeriç Nehri kenarında yürüyüş yapabilir, bisiklete binebilir ve fotoğraf çekebilirsiniz. 2010 yılında UNESCO tarafından Somut Olmayan Kültürel Miras Kabul edilen ve her yıl haziran ayının son haftasında yapılan, dünyaca ünlü Kırkpınar Yağlı Güreşleri\'ni izleyebilirsiniz.\r\nMayıs ayında düzenlenen Kakava Şenlikleri\'ne katılabilirsiniz. Hıdırellez, Trakya\'da bu şenliklerle kutlanır.  Meriç Deltası\'nda kuş gözlemciliği yapabilirsiniz. Edirne ormanlarında kamp kurabilirsiniz.</p>', '2022-06-11 22:47:49', 'edirne.jpg'),
(3, '<p>Dünya\'nın Göz Bebeği İstanbul</p>', '<p>İstanbul gezisi yapmak isteyenler için hazırladığımız detaylı İstanbul rehberi içindeki İstanbul\'da tarihi yerler de çok önemli. Tarihi yapılarıyla birçok resme, tabloya, filme konu olan şehirde İstanbul turları ile görmeniz gereken İstanbul tarihi mekanlarının başında Ayasofya geliyor.\r\n\r\nİstanbul gezisi programı içine almanız gereken en önemli yerlerini yukarıda yazdık. Günübirlik İstanbul gezisi yapmayı düşünenler bunlardan birbirlerine yakın olan yerleri tercih edebilir. \r\n\r\nAyasofya\'dan sonra İstanbul\'un tarihi mimarileri için bir diğer önem arz eden noktası Topkapı Sarayı, Dolmabahçe Sarayı, Beylerbeyi Sarayı mimari örnek ve içindeki tarihi zenginlikleriyle İstanbul turlarının cezbeden durakları arasında.\r\n\r\nİstanbul rehberinde bir diğer önemli duraklar arasında ise Mısır Çarşısı, Kapalı Çarşı bulunuyor. İstanbul\'daki tarihi yapılar içinde çarşı kısımlarını bu noktalar oluştururken, Yerebatan Sarnıcı, Galata Kulesi, Yıldız Sarayı, Rumeli Hisarı ve Kız Kulesi de İstanbul\'un önemli yerleri listesinde bulunuyor. İstanbul turları 2020 yılı için yapılabilecek en güzel şehir gezisini yaşatıyor. </p>', '2022-06-11 22:50:54', 'Istanbul.jpg'),
(4, '<p>Osmanlı\'nın Kurulduğu Şehir Bursa</p>', '<p>Bursa ve civarında izleyeceğiniz rota Bursa’dan nasıl bir beklentiniz olduğuna göre büyük ölçüde değişir. Eğer “kardeş ben bir iskenderlik uğradım, sonra yoluma devam edeceğim” diyorsanız Bursa’daki işiniz bayağı kolay. Ama “ben memleketimde turist olacağım” diyorsanız, Bursa’nın tarihi yerlerini keşfetmek ve son dönemlerde İstanbul’dan haftasonu gidilebilecek yerler listelerinde aşırı blogger övgüleri alan Gölyazı, Trilye, Mudanya, Cumalıkızık gibi yerleri görmek niyetindeyseniz  Bursa ve civarına birkaç gün ayırmak isteyebilirsiniz. Biz tüm bu yerleri Bursa gezi rehberi çıkarmak için Bursa’da 2 gece kalarak tamamlamış bulunduk ama bir yerde rahat rahat takılmak niyetindeyseniz geziyi 3-4 güne bile yayabilirsiniz.  Yoksa bizim gibi her şeyi denemek için günde 4 cantık, 3 iskender, 6 tahinli pide yemeniz gerekebilir, büyük dert. Biz İstanbul’dan feribot ile direkt Mudanya’ya ulaştığımız için Bursa’da gezilecek yerler rotamıza Mudanya ile başladık ve sırasıyla Trilye, Bursa, Cumalıkızık ve Gölyazı şeklinde devam ettik.\r\nBursa’ya nasıl gidilir sorusunun cevabı pek kısa değil, şimdiden uyaralım. Madem Bursa gezi rehberi yazıyoruz yazmışken tam yazalım. Üstelik sadece İstanbul’dan Bursa’ya nasıl gidildiği konusuna değineceğiz, ona rağmen gerek arabayla gerekse arabasız Bursa’ya ulaşmanın birçok farklı yolu var. (İl il  Bursa’ya ulaşım yazmayacağız herhalde canım abartmayın, biz de insanız)\r\n\r\nEğer İstanbul’dan Bursa’ya arabayla nasıl gidilir sorusunun cevabını istiyorsanız önünüzde şöyle bir takım seçenekler var, seçin beğenin alın.\r\n*İdo Hızlı Feribot ile Bursa’ya Ulaşım: Eğer Avrupa yakasındaki bir noktadan yolculuğunuza başlayacak olursanız, Bursa’ya en hızlı ulaşmanın yollarından biri Yenikapı-Mudanya feribotunu kullanmak. Eğer Anadolu yakasından başlayacak olursanız Pendik-Yalova feribotunu da kullanabilirsiniz ancak bu araba kullanımını minimuma indirmek isteyenler için çok da pratik bir seçenek değil. Eğer özellikle yukarıda bahsettiğimiz gibi bir rota izlemek niyetindeyseniz direkt Mudanya’ya ulaşan bir feribota binmek bizce çok daha mantıklı olur.\r\n\r\n*Eskihisar- Topçular Vapuru ile Bursa’ya Ulaşım: Zaman kısıtlamasına girmeden, bir yere saatinde ulaşma paniği yaşamadan seyahat etmeyi sevenlerin Bursa’ya daha hızlı ulaşmak için kullanılabilecek seçeneklerden biri Eskihisar-Topçular vapuru. Sanırsak son dönemlerde Osmangazi Köprüsü kullanımının da artmasıyla vapurla köprü arasında bir kapışma başlamış ve vapur fiyatlarında indirime koşulmuş, belki değerlendirmek isterseniz. 2017 Eskihisar-Topçular vapur ücreti gidiş dönüş 80 lira. Topçular İskelesi’nden Bursa’nın merkezine mesafe yaklaşık 80km, yani aşağı yukarı 1 saat gibi bir sürede ulaşılabilir.</p>', '2022-06-12 17:14:15', 'bursa.jpg'),
(5, '<p>Milli Mücadelenin Önde Gelen Şehirlerinden Edremit</p>', '<p>Edremit Kaz Dağı’nın büyük bölümünün sınırları içerisinde bulunması dolayısıyla gezilecek görülecek birçok doğal güzelliği bünyesinde barındırmaktadır. Ayrıca bölgenin tarihteki önemi ve muhteşem bir denize ve popüler tatil yerlerine sahip olması da Edremit’i bu anlamda Balıkesir’in en önemli ilçelerinden biri yapmaktadır.\n\nEdremit gezilecek yerler bakımından oldukça zengin olmasıyla birlikte gidip görmeniz gereken başlıca bölgeler ise; Altınoluk, Kaz Dağları, Şahindere Kanyonu, Edremit Körfezi, Zeus Sunağı ve Sütüven Şelalesi şeklindedir.\n\nBirçok doğal güzelliklerin bulunduğu Edremit\'te keyifli bir tatil yapmak için farklı fiyattaki fiyat seçeneklerindeki otelleri Edremit otelleri sayfamızdan inceleyebilirsiniz.\nAltınoluk\n\nEdremit’e bağlı bir mahalle niteliğinde olan Altınoluk, Edremit merkeze yaklaşık 25 km mesafede, Çanakkale yolu üzerinde ve Çanakkale il sınırına yakın bir konumda bulunmaktadır. Akçay ile birlikte Edremit’in en bilindik ve turizm açısından en önemli beldelerinden biridir.\n\nAltınoluk, Kaz Dağı eteğinde bulunmasından dolayı bu efsanevi ve bereketli dağın nimetlerinden de faydalanmaktadır. Şahinderesi Kanyonu, Darıdere Tabiat Parkı ve Kaz Dağı’nda bulunan birçok doğal güzelliğe yakın olmasının yanında Antandros Antik Kenti de Altınoluk’ta bulunmaktadır. Yaklaşık 40 km civarında sahil şeridine sahip olan Altınoluk, doğal güzelliklerinin yanı sıra sayısı 10’a yakın mavi bayraklı plajlarıyla da deniz turizminin gözde yerleşim alanlarından biridir. Özellikle yaz döneminde yerli ve yabancı turistlerin ilgi odağı olan Altınoluk, Edremit gezilecek yerler planlamasına da bu bağlamda mutlaka eklenmesi gereken yerler arasındadır. \n\nBölge Edremit için oldukça önemli bir yer olmasının yanı sıra misafirler için de güzel bir gün geçirebilecek yerler arasında yer almaktadır. Edremit’e gelen herkesin kesinlikle ziyaret ettiği Altınoluk, mavi ile yeşilin buluştuğu, oksijeni bir hayli bol olan harika bir yerleşim yeridir.\n\nBalıkesir\'de plajlara ve gezilecek yerlere yakın olan Balıkesir otelleri listemizden size uygun oteli seçerek tatilinizi daha da güzelleştirebilirsiniz.\nAkçay\n\nEdremit’e 8-10 km uzaklıkta yer alan Akçay, Edremit’e bağlı bir mahalle konumundadır. Akçay, Edremit’in turistik açıdan en popüler yerlerinden biri olarak bilinmektedir. Akçay tam olarak körfez noktasında bulunmaktadır. Yerleşik halkı genellikle emeklilerden oluşan Akçay, yaz aylarında tatilcilerin gelişiyle birlikte nüfus olarak yaklaşık 20-25 katına kadar çıkmaktadır.\n\nEdremit’in en güzel yerleşim alanlarından biri olan Akçay, Kaz Dağı eteğinde yer almakta olup Kaz Dağı’nda bulunan Sütüven Şelalesi, Hasanboğuldu Göleti, Kızılkeçili, Zeytinli, Güre ve Çamlıbel gibi yörenin en güzel ve en çok gezilen birçok doğal güzelliğe yakınlığıyla avantajlı bir konumdadır. Edremit gezilecek yerler listesine mutlaka eklenmesi gereken Akçay, diğer tatil beldelerine göre yaz döneminde biraz daha kalabalık olması dışında son derece iyi bir bölge olup çevresinde de konaklamak için birbirinden güzel otel ve pansiyonlar barındırmaktadır. Ailenizle birlikte güzel bir gün geçirmeniz için de ideal olan bu bölge, plaj ve koylarıyla da Edremit\'te var olan en güzel yerler arasındadır. \n\nAkçay’da kordon boyunca gezmek ve burada bulunan kafelerde ve restoranlarda oturup bir şeyler yiyip içerken harika körfez manzarasının tadını çıkarmak Akçay’ı ziyaret edenlerin yapılacaklar listesinin başında yer almaktadır. Ayrıca yaz aylarında Akçay’ın en popüler plajı olan Altınkum Plajı’nda yüzmek ya da incecik kumlarında dolaşmak kesinlikle yapılması gerekenlerdendir.\n\nEdremit’ten ayrı düşünülmeyecek kadar bütünleşen Akçay, Edremit’e gidildiğinde kesinlikle gezilmesi gereken bir Ege kasabasıdır. Bölgede açılan yeni yerleri ve mekanları da ilk fırsatta ziyaret etmeniz önerilmektedir.\nZeus Altarı\n\nZeus Altarı, Çanakkale’nin Ayvacık ilçesine bağlı Adatepe Köyü’nde bulunsa da Edremit’e gelmişken kesinlikle ziyaret edilmesi gereken turistik bir noktadır. Körfez bölgesinde özellikle Burhaniye çevresinde birçok sunak bulunmakla birlikte Ayvalık’ta bulunan Şeytan Sofrası ve Ayvacık’ta bulunan Zeus Altarı en bilindik sunaklardandır.\n\nBilindiği üzere sunaklar tanrıya kurban adanan ya da dilekte bulunan yerlerdir. Zeus Altarı ise tanrılar tanrısı Zeus’a adanmış bir sunaktır. Burada bulunan sunakta Yunanlılar, Zeus’tan ve diğer tanrılardan savaşları kazanmak için, hastalıklardan ve kuraklık gibi felaketlerden korunmak için birçok dilekte ve istekte bulunup onlara kurban sunmaktaydılar.\n\nİlyada Destanı’nda Zeus’un Truva Savaşı’nı buradan izlediği ve Hera ile aşkını burada yaşadığı gibi çeşitli hikâyeler anlatılmaktadır. Buradaki sunağın önemiyle birlikte nefes kesen manzarası kesinlikle görülmeye değerdir. Bölgeye hâkim bir noktada bulunan sunaktan Edremit Körfezi’nin harika manzarasının yanında havanın puslu olmadığı zamanlarda Ayvalık adalar manzarası da muhteşem bir güzelliktedir. Hem tarihi bölgeleri hem muhteşem doğası hem de tertemiz deniziyle Zeus Altarı, Edremit gezilecek yerler listesine mutlaka eklenmesi gereken bölgeler arasında gösterilmektedir.\n\nEdremit merkezden yaklaşık 40 km Altınoluk’tan ise sadece 14 km mesafede bulunan Zeus Altarı’na gitmek için Edremit Çanakkale yolundan ilerleyip Çanakkale il sınırına girilir ve 4 km ilerledikten sonra Küçükkuyu\'dan sağ tarafa, Adatepe Köy yoluna dönülür. Kısa bir yolculuğun ardından Adatepe Köyü’ne varılır.\n\nEdremit\'te manzaraları ve doğal güzellikleri ile sizi büyüleyecek ihtişamlı yerler için ekibimizin hazırladığı Edremit gezi rehberi sayfamızı detaylı olarak inceleyebilirsiniz.</p>', '2022-06-12 17:17:14', 'edremit.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Muhammed Yasin YURT', 'yaso', 'a092b1a31b83125a42d52566b888f66b'),
(2, 'Salih KARABACAK', 'salih', 'f89c4fb3d78f05814a31c78d808edd4b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
