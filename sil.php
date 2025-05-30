<?php

$silinecekID=$_GET['id'];
//echo $silinecekID;

$baglan=mysqli_connect("localhost","root","","muhasebedb");

//EKLEME
$sql="DELETE FROM urun WHERE urunID=".$silinecekID;

$sonuc=mysqli_query($baglan,$sql); 
if($sonuc>0){
    echo "Başarıyla silindi";
    die(header("refresh:1; url=index.php"));
}
else{
    echo "Kayıt silinemedi";
}
?>