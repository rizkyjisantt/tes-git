<?php
// membuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Vladimir Putin", "Halo, urraaaa");

  echo "<hr>";
    $saya = "Volodymyr Zelensky";
    $ucapanSalam = "Selamat pagi, om putin";
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);

  echo "<hr>";
    $friend = "Lord Rangga Sasana dari Sunda Empire";
    $ucapanSalam = "Selamat pagi juga, sudahkan anda berdamai?";
    // memanggil fungsinya lagi
    perkenalan($friend, $ucapanSalam);
?>