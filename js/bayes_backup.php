<?php
/*
KELOMPOK    : 1
ANGGOTA     : RIZKY BAYU OKTAVIAN < 3411161124 >
              RAYZHA RAKA PUTRA < 3411161XXX >
              IKA RAHMAH PUTRI  < 3411161XXX >
*/

class Bayes
{
  private $pegawai = 'data.json';
  // private $jumTrue = 0;
  // private $jumFalse = 0;
  // private $jumData = 0;

  function __construct()
  {

  }

  /*================================================================
  FUNCTION SUM TRUE DAN FALSE
  =================================================================*/
  function sumTrue()
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach($hasil as $hasil)
    {
      if($hasil['status'] == 1){
        $t += 1;
      }
    }

    return $t;
  }

  function sumFalse()
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach($hasil as $hasil)
    {
      if($hasil['status'] == 0){
        $t += 1;
      }
    }
    return $t;
  }

  function sumData()
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);
    return count($hasil);
  }

  // function getSumTrue()
  // {
  //   $data = file_get_contents($this->pegawai);
  //   $hasil = json_decode($data,true);
  //
  //   $t = 0;
  //   foreach($hasil as $hasil)
  //   {
  //     if($hasil['status'] == 1){
  //       $t += 1;
  //     }
  //   }
  //
  //   $this->jumTrue = $t;
  //   return $this->jumTrue;
  // }
  //
  // function getSumFalse()
  // {
  //   $data = file_get_contents($this->pegawai);
  //   $hasil = json_decode($data,true);
  //
  //   $t = 0;
  //   foreach($hasil as $hasil)
  //   {
  //     if($hasil['status'] == 0){
  //       $t += 1;
  //     }
  //   }
  //
  //   $this->jumFalse = $t;
  //   return $this->jumFalse;
  // }
  //
  // function getSumData()
  // {
  //   $data = file_get_contents($this->pegawai);
  //   $hasil = json_decode($data,true);
  //   return count($hasil);
  //
  //   $this->jumData = count($hasil);
  //   return $this->jumData;
  // }
  //=================================================================

  /*================================================================
  FUNCTION PROBABILITAS
  =================================================================*/
  function probUmur($umur,$status)
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach ($hasil as $hasil) {
      if($hasil['umur'] == $umur && $hasil['status'] == $status){
        $t += 1;
      }else if($hasil['umur'] == $umur && $hasil['status'] == $status){
        $t +=1;
      }
    }
    return $t;
  }

  function probTinggi($tinggi,$status)
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach ($hasil as $hasil) {
      if($hasil['tinggi'] == $tinggi && $hasil['status'] == $status){
        $t += 1;
      }else if($hasil['tinggi'] == $tinggi && $hasil['status'] == $status){
        $t +=1;
      }
    }
    return $t;
  }

  function probBeratB($bb,$status)
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach ($hasil as $hasil) {
      if($hasil['berat_badan'] == $bb && $hasil['status'] == $status){
        $t += 1;
      }else if($hasil['berat_badan'] == $bb && $hasil['status'] == $status){
        $t +=1;
      }
    }
    return $t;
  }

  function probPendidikan($pendidikan,$status)
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach ($hasil as $hasil) {
      if($hasil['pendidikan'] == $pendidikan && $hasil['status'] == $status){
        $t += 1;
      }else if($hasil['pendidikan'] == $pendidikan && $hasil['status'] == $status){
        $t +=1;
      }
    }
    return $t;
  }

  function probKesehatan($kesehatan,$status)
  {
    $data = file_get_contents($this->pegawai);
    $hasil = json_decode($data,true);

    $t = 0;
    foreach ($hasil as $hasil) {
      if($hasil['kesehatan'] == $kesehatan && $hasil['status'] == $status){
        $t += 1;
      }else if($hasil['kesehatan'] == $kesehatan && $hasil['status'] == $status){
        $t +=1;
      }
    }
    return $t;
  }
  //=================================================================

  /*=================================================================
  MARI BERHITUNG
  keterangan parameter :
  $sT   : jumlah data yang bernilai true ( sumTrue )
  $sF   : jumlah data yang bernilai false ( sumFalse )
  $sD   : jumlah data pada data latih ( sumData )
  $pU   : jumlah probabilitas umur ( probUmur )
  $pT   : jumlah probabilitas tinggi ( probTinggi )
  $pBB  : jumlah probabilitas berat badan ( probBB )
  $pK   : jumlah probabilitas kesehatan ( probKesehatan )
  $pP   : jumlah probabilitas pendidikan (probPendidikan )
  ==================================================================*/

  function hasilTrue($sT = 0 , $sD = 0 , $pU = 0 ,$pT = 0, $pBB = 0,$pK = 0, $pP = 0)
  {
    $paTrue = $sT / $sD;
    $p1 = $pU / $sT;
    $p2 = $pT / $sT;
    $p3 = $pBB / $sT;
    $p4 = $pK / $sT;
    $p5 = $pP / $sT;
    $hsl = $paTrue * $p1 * $p2 * $p3 * $p4 * $p5;
    return $hsl;
  }

  function hasilFalse($sF = 0 , $sD = 0 , $pU = 0 ,$pT = 0, $pBB = 0,$pK = 0, $pP = 0)
  {
    $paFalse = $sF / $sD;
    $p1 = $pU / $sF;
    $p2 = $pT / $sF;
    $p3 = $pBB / $sF;
    $p4 = $pK / $sF;
    $p5 = $pP / $sF;
    $hsl = $paFalse * $p1 * $p2 * $p3 * $p4 * $p5;
    return $hsl;
  }

  //=================================================================
}

?>
