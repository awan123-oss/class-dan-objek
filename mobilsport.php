<?php
class mobil
{
	public $nama,
		   $merk,
	       $warna,
	       $kecepatanmaksimal,
	       $jumlahpenumpang;
	public function tambahkecepatan()
	{
		return "kecepatan bertambah";
	}
}
class mobilsport extends mobil
{
	public $turbo = false;
	public function aktifkanturbo()
	{
		$this->turbo = true;
		return "turbo diaktifkan";
	}
}
$mobilku = new mobilsport();
echo $mobilku->tambahkecepatan();
echo"<br>";
echo $mobilku->aktifkanturbo();

?>