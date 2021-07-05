<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>project1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php 
	class number{
		var $x;
		function inputInfo(){
			echo $_SESSION['abc']=$_POST['so'];
		}
		function chanLe(){
			echo $x=isset($_SESSION['abc'])?$_SESSION['abc']:0;
			if($x%2==0)
				echo"chan"."</br>$x";
			else
				echo"le"."<br>$x";
		}

	

		function chanDuong(){
			$x=$this->x;
			if($x >0 && $x %2==0)
				echo "la so chan duong"."<br>";
			else
				echo "khong la so chan duong"."<br>";
		}
	}
?>

<?php
	$number = new number();	
	if(isset($_POST['nhap_lieu'])){
	$number->inputInfo();
	}
	if(isset($_POST['chan_le'])){
	$number->chanLe();
	}
	if(isset($_POST['chan_duong'])){
	$number->chanDuong();
	}

?>




<section class="container col-md-6" style="text-align: center;">
	<form method="post">
		<section class="form-group">
			<label style="color: blue; font-weight: bold">Nhập 1 số:</label>
			<input type="number" name="so" class="form-control">
			<input type="submit" class="btn btn-outline-success" value="Input" name="nhap_lieu">
			<input type="submit" class="btn btn-outline-success" value="chẵn/lẻ" name="chan_le">
			<input type="submit" class="btn btn-outline-success" value="chẵn dương" name="chan_duong">
		</section>
	</form>
</section>

</body>
</html>