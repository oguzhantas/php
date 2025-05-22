<?php

//print_r($_POST);

 $adi= $_POST['adi'];
 $soyadi= $_POST['soyadi'];

 $cinsiyet= $_POST['cinsiyet'];
 if($cinsiyet=="erkek")  $cins=1;
 else if($cinsiyet=="kadin") $cins=2;

 $dogumyeri= $_POST['dogumyeri'];
 $dogumtarihi= $_POST['dogumtarihi'];

 $ingilizce=0; $almanca=0; $fransizca=0;
 if (isset($_POST['ingilizce']))
    $ingilizce= 1;

if (isset($_POST['fransizca']))
    $fransizca= 1;
 
if (isset($_POST['almanca']))
     $almanca= 1;

 $tc= $_POST['tc'];

 $baglan=mysqli_connect("localhost","root","","insankaynaklari");

 //EKLEME
 $sql="INSERT INTO basvurular (ADI,SOYADI,TCKIMLIKNO,DOGUMYERI,DOGUMTARIHI,CINSIYET,
  INGILIZCE,ALMANCA,FRANSIZCA) VALUES ('$adi', '$soyadi', '$tc','$dogumyeri', 
  '$dogumtarihi', 
  '$cins', '$ingilizce', '$almanca', '$fransizca')";

 $sonuc=mysqli_query($baglan,$sql); 


 //Listeleme
 $sonuc=mysqli_query($baglan,"select * from basvurular"); 
 mysqli_set_charset($baglan, "utf8");
 echo "<table border=1>";
 echo "<tr>";
 echo "<td>ID</td> <td>ADI</td> <td>SOYADI</td> <td>CINSIYET</td> <td>TC</td> 
  <td>DOĞUM YERİ</td> <td>DOĞUM TARİHİ</td>
  <td>İNGİLİZCE</td> <td>ALMANCA</td> <td>FRANSIZCA</td>
  ";
 echo "</tr>";
 while($satir=mysqli_fetch_array($sonuc))
{
    echo "<tr>";
    echo "<td>".$satir['basvuruID']."</td>";
    echo "<td>".$satir['ADI']."</td>";
    echo "<td>".$satir['SOYADI']."</td>";
    if ($satir['CINSIYET']==1)
        echo "<td>Erkek</td>";
    else if($satir['CINSIYET']==2)
        echo "<td>Kadın</td>";
    echo "<td>".$satir['TCKIMLIKNO']."</td>";    
    echo "<td>".$satir['DOGUMYERI']."</td>";    
    echo "<td>".$satir['DOGUMTARIHI']."</td>";    

    if ($satir['INGILIZCE']==1)
        echo "<td>Evet</td>";    
    
    if ($satir['ALMANCA']==1)
        echo "<td>Evet</td>";    
    
    if ($satir['FRANSIZCA']==1)
        echo "<td>Evet</td>";    
    

    echo "</tr>";
}
 
echo "</table>";
?>