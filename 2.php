<?php

$Angka1=[3,5,6,7,8];
$Angka2=[4,5,6,7,8];
$Angka3=[3,4,6,7,8];
$Angka4=[3,4,5,7,8];
$Angka5=[3,4,5,6,8];
$Angka6=[3,4,5,6,7];
$hasil =[];
function hitung($arr){
  $hasil=0;
  foreach($arr as $v){
    $hasil +=$v;
  }
  return $hasil;
}

echo "Angka 1 : 3+5+6+7+8 = &nbsp;".hitung($Angka1);
echo "<br>";
echo "Angka 2 : 4+5+6+7+8 = &nbsp;".hitung($Angka2);
echo "<br>";
echo "Angka 3 : 3+4+6+7+8 = &nbsp;".hitung($Angka3);
echo "<br>";
echo "Angka 4 : 3+4+5+7+8 = &nbsp;".hitung($Angka4);
echo "<br>";
echo "Angka 5 : 3+4+5+6+8 = &nbsp;".hitung($Angka5);
echo "<br>";
echo "Angka 6 : 3+4+5+6+8 = &nbsp;".hitung($Angka6);
echo "<br>";
echo "Maka Angka Terkecil dan Terbesar adalah &nbsp;" .min(29,30,28,27,26,25). " dan &nbsp;" .max(29,30,28,27,26,25);

?>