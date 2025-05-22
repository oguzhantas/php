<?php

$yas=50;

if ($yas>=0 && $yas<=13)
 echo "Çocuk";
else if($yas>13 && $yas<=30)
 echo "Genç";
else if($yas>30 && $yas<50)
 echo "Orta yaşlı";
else if($yas>=50 && $yas<60)
 echo "Olgun";
else if($yas>=60)
 echo "Yaşlı";