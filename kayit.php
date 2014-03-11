<?php include ("kaynak/mysql.php"); ob_start(); ?>
<link rel="stylesheet" type="text/css" href="still.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
<title>Metin2 PVP Panel - Kayıt Ol!</title>
<div id="alan">
<div id="baslik">Metin2 PVP Panel</div>
<div id="icerik">
<script type="text/javasicript">
function kayit () {
var kullaniciadi=document.kayitformu.kullaniciadi.value;
var sifre=document.kayitformu.sifre.value;
var eposta=document.kayitformu.eposta.value;
var isim=document.kayitformu.isim.value;
var kkodu=document.kayitformu.kkodu.value;
var gkodu=document.kayitformu.gkodu.value;
// boş kontrol
if ( (kullaniciadi.length == 0) || (sifre.length == 0) || (eposta.length == 0) || (isim.length == 0) || (kkodu.length == 0) || (gkodu.length == 0)){alert("Boş kutucuk bırakılamaz!");return false;}
else{
//guvenlik sorusu
if ( (gkodu== "ankara")||(gkodu=="Ankara")||(gkodu=="ANKARA") ){}else{alert("Güvenlik sorusu yanlış!");return false;}else{

}
}
</script>
<form action="kayit.php?islem=Kayit" method="post" name="kayitformu" onsubmit="return kayit();">
<table align="center">
<tr><td>Kullanıcı Adın: </td><td><input type="text" name="kullaniciadi" size="29" MaxLength="16" /></td><td><font size="-1"> En fazla 16 karakter</font></td></tr>
<tr><td>Şifren: </td><td><input type="password" name="sifre" size="29" MaxLength="16"/></td><td><font size="-1"> En fazla 16 karakter</font></td></tr>
<tr><td>E-Posta: </td><td><input type="text" name="eposta" size="29"/></td><td><font size="-1"> Geçerli E-posta giriniz</font></td></tr>
<tr><td>İsim: </td><td><input type="text" name="isim" size="29"/></td></tr>
<tr><td>Karakter Silme Kodu?: </td><td><input type="text" name="kkodu" size="29" MaxLength="7"/></td><td><font size="-1"> En fazla 7 karakter</font></td></tr>
<tr><td>Türkiyenin Başkenti?: </td><td><input type="text" name="gkodu" size="29"/></td></tr>
<tr><td></td><td><input type="submit" value="Kayıt ol"/>&nbsp;<input type="reset" value="Temize"/></td></tr>

</table>
</form>
<?php
$islem=$_GET['islem'];
switch($islem){
case "Kayit";
account();
$kullaniciadi=mysql_real_escape_string($_POST['kullaniciadi']);
$sifre=mysql_real_escape_string($_POST['sifre']);
$eposta=mysql_real_escape_string($_POST['eposta']);
$isim=mysql_real_escape_string($_POST['isim']);
$kkodu=mysql_real_escape_string($_POST['kkodu']);
if ( ($kullaniciadi == "") or ($sifre=="") or ($eposta=="") or ($isim=="") or ($kkodu=="")){echo "<center><font color='red'>Hata: Boş kutucuk bırakılamaz!</font></center>";header("refresh:2;url=kayit.php");}else{
$kaydet=mysql_query("INSERT INTO account SET login='$kullaniciadi',password=PASSWORD('".$sifre."'),real_name='$isim',social_id='$kkodu',email='$eposta'");
if ($kaydet){echo "<center><font color='green'>Başarılı: Kaydınız gerçekleşmiştir</font></center>";header("refresh:2;kayit.php");}else{echo "<center><font color='red'>Hata: Kaydınız gerçekleşemedi</font></center>";header("refresh:2;kayit.php");}
break;
}}
?>
</div>
</div>
<div id="alt">Copyright &copy; Berkcash | 2014 - 205 | Tum Haklari Saklidir</div><?php ob_end_flush(); ?>


