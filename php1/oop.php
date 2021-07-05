<?php
// class Animal{
// 	var $name;
// 	var $id;
// 	var $age;
// 	function showInfo(){
// 		echo"Name: ".$this->name;
// 		echo"<br>Id: ".$this->id;
// 		echo"<br>Age: ".$this->age;
// 	}
// }

// $animal=new Animal();

// $animal->name="Cat";
// $animal->id='123456';
// $animal->age=16;
// $animal->showInfo();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
	class Animal{
		var $name;
		var $id;
		var $age;
		function showInfo(){			
			echo"Name: ".$this->name;
			echo"<br>Id: ".$this->id;
			echo"<br>Age: ".$this->age;
		}

		function inputInfo(){
			if(isset($_POST['ten']))
				$this->name=$_POST['ten'];
			if(isset($_POST['id']))
				$this->id=$_POST['id'];
			if(isset($_POST['age']))
				$this->age=$_POST['age'];
		}
	}
?>

<?php
	echo "<br>";
	if(isset($_POST['in'])){
		$animal = new Animal();	
		$animal->inputInfo();
		$animal->showInfo();
	}
?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="ten" class="form-control">
		<input  type="text" name="id" class="form-control">
		<input  type="text" name="age" class="form-control">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>
</body>
</html>
