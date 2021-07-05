<?php
	class Person{
		var $name;
		var $sex;
		var $date;
		var $address;
		function getName(){
			return $this->name;
		}
		function setName($name){
			$this->name=$name;
		}
		function getSex(){
			return $this->sex;
		}
		function setSex($sex){
			$this->sex=$sex;
		}function getDate(){
			return $this->date;
		}
		function setDate($date){
			$this->date=$date;
		}
		function getAddress(){
			return $this->name;
		}
		function setAddress($address){
			$this->address=$address;
		}
		function __construct(){
		}
		function inputInfo(){
			$this->name=$_POST['name'];
			$this->sex=$_POST['sex'];
			$this->date=$_POST['date'];
			$this->address=$_POST['address'];	
		}
		function showInfo(){			
			echo"Tên: ".$this->name;
			echo"<br>Giới tính: ".$this->sex;
			echo"<br>Ngày sinh: ".$this->date;
			echo"<br>Địa chỉ: ".$this->address;
		}
	}
?>