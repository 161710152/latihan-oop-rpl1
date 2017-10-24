<?php
require_once 'identitas.php';
$orang = new orang ('sandika','bandung_cibaduyut','XI RPL 1','pelajar');
echo"<h3>identitas</h3>";
echo "nama :".$orang->get_nama().'<br>';
echo "tampat lahir :".$orang->get_tempatlahir().'<br>';
echo "kelas :".$orang->get_kelas().'<br>';
echo "status :".$orang->get_status().'<br>';
?>