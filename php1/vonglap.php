<!DOCTYPE html>
<html>
<head>
	<title>vonglap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
echo "<br>"."In 1 đến 100: ";
	for ($i=0; $i <=100 ; $i++) { 
		echo "$i  ";
	}

?>

<?php
echo "<br>"."In 100 đến 1: ";
	for ($i=100; $i >=1 ; $i--) { 
		echo "$i  ";
	}

?>

<?php
echo "<br>"."Tổng 50 số ";
		for ($i=1; $i <=50 ; $i++) { 
			$s+=$i;
		}
				echo "$s";
?>

<?php
echo "<br>"."Tổng 50 số chẵn từ 2:";
		for ($i=2; $i <=100 ; $i++) { 
			if($i%2==0)
					$s+=$i;
		}
				echo "$s";
?>

<?php
echo "<br>"."Tổng 20 số đầu tiên chia hết cho 5:";
		for ($i=5; $i <=100 ; $i++) { 
			if($i%5==0)
					$s+=$i;
		}
				echo "$s";
?>

<?php


echo "<br>"."Tính giai thừa:";
function tgt(){
	$s=1;
	$i;
	$so=$_POST['so'];
		for ($i=1; $i <=$so ; $i++) { 
				$s=$s*$i;
		}	
				echo "$s";	
}	

if(isset($_POST['giai_thua'])){
	tgt();
} 
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
		<section class="form-group">
			<label style="color: blue; font-weight: bold">Nhập 1 số:</label>
			<input type="number" name="so" class="form-control" value="<?=isset($_POST['so'])?$_POST['so']:''?>" step="0.00001">
			<input type="submit" class="btn btn-outline-success" value="Tinh giai thừa" name="giai_thua">
			
	</form>
</section>

<?php
echo "<br>"."Kiểm tra nguyên tố:  ";
    function ham_kiem_tra_so_nguyen_to($n)  
	{  
		for($s = 2; $s < $n; $s++){  
			if($n % $s ==0)  
				{  
					return 0;  
				}  
		}  
		  return 1;  
	}  
		$a = ham_kiem_tra_so_nguyen_to(6);  
		if ($a==0)  
		  echo "Đây không phải là số nguyên tố";  
		else  
		  echo "Đây là số nguyên tố"."<br>";
?>
</body>
</html>