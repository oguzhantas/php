<?php
/*
 Değişken Tanımlama Kuralları

 1) Değişkenler rakamla başlamaz. 2not yerine not2 şeklinde kullanınız
 
 2) Türkçe harfler (ç, ş, ğ, ö ,ü ,ı, İ) değiken tanımlarken kullanılmaz.
 
 3) Değişkenler ifadelerinde özel karakterler kullanılmaz, sadece alt tire(_) kullanılır.
 adi_soyadi şeklinde kullanabilirsiniz, adi-soyadi olmaz  
 
 4) Değişkenlerde küçük büyük harf ayrımı vardır. Adi ile adi farklı değişkenlerdir. 
*/

$adi="Oğuzhan";
$telefon="0545 555 22 11";
$maas=50000;
$ortalama=50.25;

echo "Adı      :".$adi."<br>";
echo "Telefonu :".$telefon."<br>";
echo "Maaşı    :".$maas."<br>";
echo "Ortalama :".$ortalama."<br>";

printf("Merhaba printf");