<?php  

Class Orang {
	public $nama = 'Andi' ;
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama. ' sedang makan <br> ';
	}
}

$saya = new Orang;
$saya->nama = 'Noni';
echo $saya->makan();

$saya->nama = 'Ame';
echo $saya->makan();	