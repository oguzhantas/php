<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listeleme</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-10">
<a href="ekle.php" class="btn btn-primary">Ekle</a>

<?php

$baglan=mysqli_connect("localhost","root","","muhasebedb");

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
        <td>Resim</td>
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
  
    echo '<td>  <img width="100" src="images/'.$satir['RESIM'].'"   ></td>';   
     
    echo '<td><a class="btn btn-danger"  href="sil.php?id='.$satir['urunID'].'">Sil</a></td>';
    echo "<td><button class=btn btn-warning>Değiştir</button></td>";
    echo "</tr>";
}
 
echo "</table>";
?>
</div>
</div>
</div><!-- container--> 
</body>
</html>