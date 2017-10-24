<?php
require_once 'penjumlahan.php';
 $penjumlahan = new penjumlahan;
 $pengurangan = new pengurangan;
 $perkalian = new perkalian;
 $pembagian = new pembagian;
 $penjumlahan->set_penjumlahan(21,3);
 $pengurangan->set_pengurangan(21,3);
 $perkalian->set_perkalian(21,3);
 $pembagian->set_pembagian(21,3);
 echo"<h3>Hasil Penjumlahan</h3>";
 echo"penjumlahan dari bilangan 21 dan 3 adalah".$penjumlahan->get_penjumlahan().'<br>';
 echo"<h3>Hasil Pengurangan</h3>";
 echo"pengurangan dari bilangan 21 dan 3 adalah".$pengurangan->get_pengurangan().'<br>';
 echo"<h3>Hasil Perkalian</h3>";
 echo"perkalian dari bilangan 21 dan 3 adalah".$perkalian->get_perkalian().'<br>';
 echo"<h3>Hasil Pembagian</h3>";
 echo"pembagian dari bilangan 21 dan 3 adalah".$pembagian->get_pembagian().'<br>';

 ?>