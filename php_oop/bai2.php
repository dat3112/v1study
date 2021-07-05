<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	class Dog{
		var $id;
		var $name;
		var $color;
	
	function move(){
		echo "<br>run";
	}
	function age(){
		echo "<br>5";
	}
	function swim(){
		echo "<br>can swim";
	}
	function inputInfo(){
			if(isset($_POST['id']))
				$this->id=$_POST['id'];
			if(isset($_POST['name']))
				$this->name=$_POST['name'];
			if(isset($_POST['color']))
				$this->color=$_POST['color'];
	}
	function showInfo(){			
			echo"Name: ".$this->name;
			echo"<br>Id: ".$this->id;
			echo"<br>Color: ".$this->color;
	}
}	
?>
<?php
	if(isset($_POST['in'])){
		$dog = new Dog();	
		$dog->inputInfo();
		$dog->showInfo();
		$dog->move();
		$dog->age();
		$dog->swim();
		}
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="id" class="form-control" placeholder="Id">
		<input  type="text" name="name" class="form-control"
		placeholder="Name">
		<input  type="text" name="color" class="form-control" placeholder="Color">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>
</body>
</html>
