<?php
class kucing {
	public $kaki = 4;
	public $warna = 'Hitamhitam';

}
$kucing1 = new kucing;
echo "<h3>KUCING</h3>";
echo "Kucing Mempunyai kaki = ".$kucing1-> kaki.'<br>';
echo "Dan Kucinnya Berwarna = ".$kucing1-> warna.'<br>';

class burung {
	public $kaki = 4;
	public $warna = 'Hitamputih';
	public $terbang = 'jauh';


}
$burung = new burung;
echo "<h3>BURUNG</h3>";
echo "burung Mempunyai kaki = ".$burung-> kaki.'<br>';
echo "Dan burung Berwarna = ".$burung-> warna.'<br>';
echo "tinggi burung terbang = ".$burung-> terbang.'<br>';

?>
