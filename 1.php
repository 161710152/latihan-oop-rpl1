<?php
 class robot{

   	public $suara = 'ngik ngik ngik';
   	public $suara2 = 'ngok ngok ngok';
   	public $maju = 'depanbelakang';
   	public $gerak_robot = 'mutermuter';
   	public $gerak_kepala = 'kirikanan';
   	public $kaki = 4;
    public $berat = 30;

   public function suaranya()
	{ 
		echo $this->suara;
	 }
	 public function majunya()
	{
		echo $this->maju;

}

$robot = new robot;
echo"<br>".$robot->suaranya();
echo"<br>".$robot->gerakankepalanya();
echo"<br>".$robot->majunya();
//echo "bunyi robot : " .$robot->suara2;
//echo "maju: " .$robot->maju;
//echo "gerak_robot : " .$robot->gerak_robot;
//echo "gerak_kepala : " .$robot->gerak_kepala;
//echo "kaki : " .$robot->kaki;
//echo "berat : " .$robot->berat;

}

?>