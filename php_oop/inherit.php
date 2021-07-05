<?php
class Animal{
	protected $id;
	var $name;

	function move(){
		echo"Run,...";
	}
}

class Cat extends Animal{
	function setID($id){
		$this->id=$id;
	}
	function getID(){
		return $this->id;
	}
}

$cat=new Cat();
$cat->setID(123);
echo $cat->getID();
?>