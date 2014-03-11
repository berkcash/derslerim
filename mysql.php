<?php
$host  = "localhost"; //İP
$kadi  = "root";      //Kullanıcı adı
$sifre = "";   		  //Şifre

$baglan = @mysql_connect($host, $kadi, $sifre) or die("<center><font color='red'>MySQL Bağlantısı Başarısız!</font></center>");


//Account Veritabanı
function account(){
global $baglan;
$db = "account";
$dbsec = @mysql_select_db($db, $baglan) or die ("<center><font color='red'>Account Veritabanı Seçilemedi!</font></center>");
}

//Common Veritabanı
function common(){
global $baglan;
$db = "common";
$dbsec = @mysql_select_db($db, $baglan) or die ("<center><font color='red'>Common Veritabanı Seçilemedi!</font></center>");
}

//Player Veritabanı
function player(){
global $baglan;
$db = "player";
$dbsec = @mysql_select_db($db, $baglan) or die ("<center><font color='red'>Player Veritabanı Seçilemedi!</font></center>");
}

?>
