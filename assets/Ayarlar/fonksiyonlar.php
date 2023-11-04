<?php 

$IPAdresi       =  $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi   =  time();
$TarihSaat      =  date("d.m.Y H:i:s", $ZamanDamgasi);

function RakamFiltre($Deger){
    $Islem = preg_replace("/[^0-9]/","",$Deger);
    $Sonuc = $Islem;
    return $Sonuc;
}

function Guvenlik($Deger){
    $BoslukSil      = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap     = htmlspecialchars($TaglariTemizle);
    $Sonuc          = $EtkisizYap;
    return $Sonuc;
}

function SayiliIcerikleriFiltrele($Deger){
    $BoslukSil      = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap     = htmlspecialchars($TaglariTemizle);
    $Temizle        = RakamFiltre($EtkisizYap);
    $Sonuc          = $Temizle;
    return $Sonuc;
}

function DonusumleriGeriDondur($Deger){
    $GeriDondur = html_entity_decode($Deger,ENT_QUOTES);
    $Sonuc = $GeriDondur;
    return $Sonuc;
}



















?>