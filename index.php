<?php 
require_once("assets/Ayarlar/ayar.php");
require_once("assets/Ayarlar/fonksiyonlar.php");
require_once("assets/Ayarlar/sitesayfalari.php");

if(isset($_REQUEST["SN"])){
    $SayfaNumarasi = SayiliIcerikleriFiltrele($_REQUEST["SN"]);
}else {
    $SayfaNumarasi = 0;
}

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="<?php echo $SiteKacGundeZiyaret; ?>">
    <title><?php echo  $SiteTitle; ?></title>
    <meta name="description" content="<?php echo $SiteDescription; ?>">
    <meta name="Keywords" content="<?php echo  $SiteKeywords; ?>">
    <link type="image/png" rel="icon" href="assets/img/<?php echo $FavIcon;?>">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/card-3-column-animation-shadows-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark" style="text-align: center;">
        <div class="container"><a class="navbar-brand" href="index.html" style="color: #ef1a1a;font-weight: bold;margin-right: 0px;"><img style="max-width: 40px;" src="assets/img/<?php echo  $Logo; ?>">Yaşam Tadında Lezzetler</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2" style="color: rgba(255, 255, 255, 0.5);background: #1f1f1f;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav flex-grow-1 justify-content-between" style="padding-left: 2%;">
                    <li class="nav-item" style="color: rgb(255,255,255);"><a class="nav-link" href="index.php?SN=0" style="color: rgb(255,255,255);">Anasayfa</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Yemek Tarifleri</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="index.php?SN=1">Atıştırmalık</a><a class="dropdown-item" href="corba.html">Çorba</a><a class="dropdown-item" href="DunyaMutfaklari.html">Dünya Mutfakları</a><a class="dropdown-item" href="sebze.html">Sebze</a><a class="dropdown-item" href="hamurisi.html">Hamur İşi</a><a class="dropdown-item" href="tatli.html">Tatlı</a><a class="dropdown-item" href="yoresel.html">Yöresel Tarifler</a><a class="dropdown-item" href="meze.html">Meze</a><a class="dropdown-item" href="et.html">Et</a><a class="dropdown-item" href="icecek.html">İçecek</a><a class="dropdown-item" href="zeytinyagli.html">Zeytinyağlı</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="filmlerdekiYemekler.html">Film Ve Dizilerdeki Yemekler</a></li>
                    <li class="nav-item"><a class="nav-link" href="bilgilenelim.html">Bilgilenelim</a></li>
                    <li class="nav-item"><a class="nav-link" href="tarifGonder.html">Tarif Gönder</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="hakkimizda.html">Hakkımızda</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    
    if((!$SayfaNumarasi) or ($SayfaNumarasi=="") or ($SayfaNumarasi==0)){
        include($Sayfa[0]);
    }else {
        include($Sayfa[$SayfaNumarasi]);
    }
    
    ?>


    <footer id="myFooter">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1 class="logo" style="margin-top:30px;"><img style="max-width: 250px;max-height: 1200px;" src="assets/img/<?php echo  $Logo; ?>"></h1>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5 style="color: rgb(240,249,255);font-size: 16px;">Hizmetler</h5>
                    <ul>
                        <li><a href="index.html" style="color: rgb(183,190,194);font-size: 14px;">Anasayfa</a></li>
                        <li><a href="filmlerdekiYemekler.html" style="color: rgb(183,190,194);font-size: 14px;">Film &amp; Dizilerdeki Yemekler<br></a></li>
                        <li><a href="bilgilenelim.html" style="color: rgb(183,190,194);font-size: 14px;">Bilgilenelim</a></li>
                        <li><a href="tarifGonder.html" style="color: rgb(183,190,194);font-size: 14px;">Tarif Gönder</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5 style="color: rgb(240,249,255);font-size: 16px;">Site Hakkında</h5>
                    <ul>
                        <li><a href="hakkimizda.html" style="color: rgb(183,190,194);font-size: 14px;">Hakkımızda</a></li>
                        <li><a href="iletisim.html" style="color: rgb(183,190,194);font-size: 14px;">İletişim<br></a></li>
                        <li><a href="gizguvkul.html" style="color: rgb(183,190,194);font-size: 14px;">Gizlilik Politikası</a></li>
                        <li><a href="gizguvkul.html" style="color: rgb(183,190,194);font-size: 14px;">Kullanım Koşulları</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2">
                    <h5 style="color: rgb(240,249,255);font-size: 16px;">Sponsorlar</h5>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-3 social-networks">
                    <div><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="google" href="#"><i class="fa fa-instagram"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></div><button class="btn btn-primary" style="margin-top: 20px;background: var(--danger);" type="button"><a href="iletisim.html" style="font-size: 18px;letter-spacing: 0px;">İletişime Geç</a></button>
                </div>
            </div>
            <div class="row footer-copyright">
                <div class="col">
                    <p><?php echo $SiteCopyrightMetni; ?></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init-1.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/GradeJS-the-preview-image-do-not-reflect-the-effect-1.js"></script>
    <script src="assets/js/GradeJS-the-preview-image-do-not-reflect-the-effect.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</body>

</html>
<?php
 $VeritabaniBaglantisi      = null;
?>