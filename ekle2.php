<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Başvuru Formu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php

//print_r($_POST);

 $urunadi= $_POST['urunadi'];
 $uretimtarihi= $_POST['uretimtarihi'];
 $barkod= $_POST['barkod'];
 $kategori= $_POST['kategori'];
 $boyut= $_POST['boyut'];
 $renk= $_POST['renk'];

 $fiyat= $_POST['fiyat'];
 $taksitlifiyat= $_POST['taksitlifiyat'];

 $resim = $_FILES["urunresim"];

// Image not defined, let's exit
if (!isset($resim)) {
    die('Dosya yüklenmedi.');
}

$yol= __DIR__ . "/images/" . $resim["name"];
echo $yol;
move_uploaded_file($resim["tmp_name"], $yol );


 $baglan=mysqli_connect("localhost","root","","muhasebedb");

 //EKLEME
 $sql="INSERT INTO urun(URUNADI,URETIMTARIHI,KATEGORI,BARKOD,RENK,BOYUT,FIYAT,
  TAKSITLIFIYAT, RESIM) VALUES ('$urunadi', '$uretimtarihi','$kategori', '$barkod','$renk', 
  '$boyut',   '$fiyat', '$taksitlifiyat','$resim[name]')";

 $sonuc=mysqli_query($baglan,$sql); 


 //Listeleme
 $sonuc=mysqli_query($baglan,"select * from urun"); 
 mysqli_set_charset($baglan, "utf8");
 echo '<table class="table" border="1">';
 echo "<tr>";
 echo "<td>ID</td> 
        <td>ÜRÜN ADI</td>
        <td>ÜRETİM TARİHİ</td> 
        <td>KATEGORİ</td> 
        <td>BARKOD</td> 
        <td>RENK</td> 
        <td>BOYUT</td> 
        <td>FIYAT</td>
        <td>TAKSİTLİ FİYAT</td> 
        <td>Sil</td>
        <td>Değiştir</td>  
  ";


 echo "</tr>";
 while($satir=mysqli_fetch_array($sonuc))
{
    echo "<tr>";
    echo "<td>".$satir['urunID']."</td>";
    echo "<td>".$satir['URUNADI']."</td>";
    echo "<td>".$satir['URETIMTARIHI']."</td>";
    echo "<td>".$satir['KATEGORI']."</td>";
    echo "<td>".$satir['BARKOD']."</td>";    
    echo "<td>".$satir['RENK']."</td>";    
    echo "<td>".$satir['BOYUT']."</td>";    
    echo "<td>".$satir['FIYAT']."</td>";    
    echo "<td>".$satir['TAKSITLIFIYAT']."</td>";    
    echo '<td><a class="btn btn-danger"  href="sil.php?id='.$satir['urunID'].'">Sil</a></td>';
    echo "<td><button class=btn btn-warning>Değiştir</button></td>";
    echo "</tr>";
}
 
echo "</table>";
?>
</body>
</html>