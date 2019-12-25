<?php
require_once 'autoload.php';

$obj = new Bayes();

// echo $obj->sumData()."<br>";
// echo $obj->sumTrue()."<br>";
// echo $obj->sumFalse()."<br>";
// echo $obj->probUmur(21,0)."<br>";

$jumTrue = $obj->sumTrue();
$jumFalse = $obj->sumFalse();
$jumData = $obj->sumData();

$a1 = 20;
$a2 = "st";
$a3 = "kurus";
$a4 = "sehat";
$a5 = "smk";

//TRUE
$umur = $obj->probUmur($a1,1);
$tinggi = $obj->probTinggi($a2,1);
$bb = $obj->probBeratB($a3,1);
$kesehatan = $obj->probKesehatan($a4,1);
$pendidikan = $obj->probPendidikan($a5,1);

//FALSE
$umur2 = $obj->probUmur($a1,0);
$tinggi2 = $obj->probTinggi($a2,0);
$bb2 = $obj->probBeratB($a3,0);
$kesehatan2 = $obj->probKesehatan($a4,0);
$pendidikan2 = $obj->probPendidikan($a5,0);

//result
$paT = $obj->hasilTrue($jumTrue,$jumData,$umur,$tinggi,$bb,$kesehatan,$pendidikan);
$paF = $obj->hasilFalse($jumTrue,$jumData,$umur2,$tinggi2,$bb2,$kesehatan2,$pendidikan2);

echo "
======================================<br>
umur : $a1<br>
tinggi : $a2<br>
berat badan : $a3<br>
kesehatan : $a4<br>
pendidikan : $a5<br>
=======================================<br><br>
";

echo "
======================================<br>
kemungkinan true : <br>
jumlah true : $jumTrue <br>
jumlah data : $jumData <br>
=======================================<br><br>
";

echo "
======================================<br>
kemungkinan false : <br>
jumlah false : $jumFalse <br>
jumlah data : $jumData <br>
=======================================<br><br>
";

echo "
======================================<br>
pATrue : $jumTrue / $jumData<br>
umur true : $umur / $jumTrue <br>
tinggi true : $tinggi / $jumTrue <br>
berat badan true : $bb / $jumTrue <br>
kesehatan true : $kesehatan / $jumTrue <br>
pendidikan true : $pendidikan / $jumTrue <br><br>
=======================================<br><br>
";

echo "
======================================<br>
pAFalse : $jumFalse / $jumData<br>
umur false : $umur2 / $jumFalse <br>
tinggi false : $tinggi2 / $jumFalse <br>
berat badan false : $bb2 / $jumFalse <br>
kesehatan false : $kesehatan2 / $jumFalse <br>
pendidikan false : $pendidikan2 / $jumFalse <br>
=======================================<br><br>
";

echo "
======================================<br>
presentasi yes : $paT<br>
presentasi no : $paF<br>
=======================================<br><br>
";

if($paT > $paF){
  echo "
  ======================================<br>
  PRESENTASI YES LEBIH BESAR DARI PADA PRESENTASI NO<br>
  =======================================
  <br><br>";
}else if($paF > $paT){
  echo "
  ======================================<br>
  PRESENTASI NO LEBIH BESAR DARI PADA PRESENTASI YES<br>
  =======================================
  <br><br>";
}

// echo $obj->hasilTrue($jumTrue,$jumData,$umur,$tinggi,$bb,$kesehatan,$pendidikan)."<br>";
// echo $obj->hasilFalse($jumTrue,$jumData,$umur2,$tinggi2,$bb2,$kesehatan2,$pendidikan2)."<br><br>";

$result = $obj->perbandingan($paT,$paF);
echo " Status : $result[0] <br>Presentasi diterima sebanyak : ".round($result[1],2)." % <br>Presentasi diolak sebanyak : ".round($result[2],2)." % ";
 ?>
