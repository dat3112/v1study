<!DOCTYPE html>
<html>
<head>
	<title>bai3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
function chanLe(){
	$so=$_POST['so'];
	if($so%2==0)
		echo"chan"."<br>";
	else
		echo"le"."<br>";
}

if(isset($_POST['chan_le'])){
	chanLe();
}

	
function chanDuong(){
	$so=$_POST['so'];
	if($so >0 && $so %2==0)
		echo "la so chan duong"."<br>";
	else
		echo "khong la so chan duong"."<br>";
}

if(isset($_POST['chan_duong'])){
	chanDuong();
}
	 

function leAm(){
	$so=$_POST['so'];
	if($so <0 && $so %2!=0)
		echo "la so le am"."<br>";
	else
		echo "khong la so le am"."<br>";
}
	
if(isset($_POST['le_am'])){
	leAm();
}

function ktsn(){
	$so=$_POST['so'];
	if($so ==(int)$so )
		echo "la so nguyen"."<br>";
	else
	 	echo "khong la so nguyen"."<br>";
}

if(isset($_POST['ktra_so_nguyen'])){
	ktsn();
}

function ktcp(){
	$so=$_POST['so'];
	if(sqrt($so)==(int) sqrt($so))
	 	echo "la so chinh phuong"."<br>";
	else
	 	echo "khong la so chinh phuong"."<br>";
}

if(isset($_POST['ktra_chinh_phuong'])) {
	ktsn();
}
	 
function ktdb(){
	$so=$_POST['so'];
	if(0<$so && $so<1000){
	 	$c=$so%10;
	 	$b=$so/10%10;
	 	$a=$so/100%10;
	 	if($so==$a*$a*$a+$b*$b*$b+$c*$c*$c)
	 		echo "la so dac biet"."<br>";
	 	else
	 		echo "khong la so dac biet"."<br>";
	}
}	

if(isset($_POST['ktra_dac_biet'])){
	ktdb();
} 
	

?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
		<section class="form-group">
			<label style="color: blue; font-weight: bold">Nhập 1 số:</label>
			<input type="number" name="so" class="form-control" value="<?=isset($_POST['so'])?$_POST['so']:''?>" step="0.00001">
			<input type="submit" class="btn btn-outline-success" value="chẵn/lẻ" name="chan_le">
			<input type="submit" class="btn btn-outline-success" value="chẵn dương" name="chan_duong">
			<input type="submit" class="btn btn-outline-success" value="lẻ âm" name="le_am">
			<input type="submit" class="btn btn-outline-success" value="ktra số nguyên" name="ktra_so_nguyen">
			<input type="submit" class="btn btn-outline-success" value="ktra chính phương" name="ktra_chinh_phuong">
			<input type="submit" class="btn btn-outline-success" value="ktra đặc biệt" name="ktra_dac_biet">
		</section>
	</form>
</section>
</body>
</html>

