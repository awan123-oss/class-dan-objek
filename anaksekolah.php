<?php
class anak{
	
	public $nama;
	public $rombel;
	public $rayon;


	public function __construct($nama,$rayon,$rombel){
		$this->nama = $nama;
		$this->rombel = $rombel;
		$this->rayon = $rayon;
	}

	public function getcetak(){
		
		return "$this->rayon, $this->rombel";
	}

}

class sinfo{

	public function cetak(anak $anak){
		$str = "<h2> Data siswa {$anak->nama} </3> <h3>
		{$anak->getcetak()} </h3>";
		return $str;
	}
}

$anak1 = new anak ("awan ara budiman","cibedug 3","RPL XI-1");
$anak2 = new anak ("afa fathin al-aziz","cicurug 3","RPL XI-1");
$anak3 = new anak ("muhammad angga hade prayoga","cicurug 3","RPL XI-1");
$info = new sinfo();

echo $info->cetak($anak1);
echo"<br>";
echo $info->cetak($anak2);
echo"<br>";
echo $info->cetak($anak3);
echo"<br>";

?>