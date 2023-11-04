<?php 
try{
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=yasamtadindalezz_site;charset=UTF8","root","");
}catch(PDOException $Hata){
    echo "Bağlantı Hatası<br />".$Hata->getMessage();
    die();
}

$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarKayitlar   = $AyarlarSorgusu->rowCount();
$Ayarlar        = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarKayitlar>0){
    $SiteAdi             = $Ayarlar["SiteAdi"];
    $SiteTitle           = $Ayarlar["SiteTitle"];
    $SiteDescription     = $Ayarlar["SiteDescription"];
    $SiteKeywords        = $Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni  = $Ayarlar["SiteCopyrightMetni"];
    $SiteKacGundeZiyaret = $Ayarlar["SiteKacGundeZiyaret"];
    $Logo                = $Ayarlar["Logo"];
    $FavIcon             = $Ayarlar["FavIcon"];
    $SiteEmailAdresi     = $Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifre      = $Ayarlar["SiteEmailSifre"];



}else{
    echo "Site Ayar Sorgusu Hatalı";
    die();
}

?>