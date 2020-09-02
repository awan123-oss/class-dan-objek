<?php
 class komputer
 {
 	public $prosesor;
 	public $memory;

 	public function __construct($prosesor,$memory = "12 gb")
 	{
 		$this->prosesor = $prosesor;
 		$this->memory = $memory;
 	}
 	public function cetak (){
 		return "$this->prosesor | $this->memory";
 	}
 }
 $komputersaya = new komputer("core i7","8 gb",);

 echo $komputersaya->cetak();
?>