<?php
class SinhVien{
	private $id;
	private $hoTen;
	function __construct(){
		$this->id=123;
		$this->hoTen="V1Study";
	}
	function getID(){
		return $this->id;
	}
	function setID($id){
		return $this->id=$id;
	}
	function getHoTen(){
		return $this->hoTen;
	}
}
$sv1=new SinhVien();
echo "ID: ".$sv1->getID()."<br>";
echo "Họ tên: ".$sv1->getHoTen()."<br>";
?>