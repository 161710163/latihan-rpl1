<?php
require_once 'latihan6.php';
$penjumlahan1 = new penjumlahan;
$penjumlahan1 -> set_nilai(21,3);
echo "==============".'<br>';
echo "perhitungan bilangan 21 dan 3".'<br>';
echo "==============".'<br>';
echo "hasil penjumlahan :".$penjumlahan1->get_nilai().'<br>';
echo "hasil pengurangan :".$penjumlahan1->get_nilai1().'<br>';
echo "hasil perkalian   :".$penjumlahan1->get_nilai2().'<br>';
echo "hasil pembagian   :".$penjumlahan1->get_nilai3().'<br>';
?>
