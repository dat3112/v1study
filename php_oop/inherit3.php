<?php session_start();?>

<?php
	// include"inherit2.php";

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
		}
		function getDate(){
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
			echo "<br>";		
			echo"<br>Tên: ".$this->name;
			echo"<br>Giới tính: ".$this->sex;
			echo"<br>Ngày sinh: ".$this->date;
			echo"<br>Địa chỉ: ".$this->address;
		}
	}

	class Student extends Person{
		var $id;
		var $dtb;
		var $email;
		function inputInfo(){
			Person::inputInfo();	
			$this->id=$_POST['id'];
			$this->dtb=$_POST['dtb'];
			$this->email=$_POST['email'];
		}
		function inputInfo1(){
			$this->dtb;
		}
		function showInfo(){
			Person::showInfo();	
			echo"<br>Mã sinh viên: ".$this->id;
			echo"<br>Điểm trung bình: ".$this->dtb;
			echo"<br>Email: ".$this->email;
			echo"<br>Học bổng: ".$this->kthb();
		}	
		function showInfo1(){
			echo"<br>Điểm trung bình: ".$this->dtb;
		}
		function kthb(){
			if ($this->dtb >=8.0){
				return "Đc học bổng";
			}else{
				return "Ko đc học bổng";
			}
		}
	}

	if(isset($_POST['save'])){
		$sv = new Student();
		$sv->inputInfo();
		$_SESSION['student'][]=$sv;
	}
	if(isset($_POST['ssv'])){
		unset($_SESSION['student']);
		$_SESSION['studentNumber']=$_POST['number'];
		$_SESSION['count']=1;
		echo $_SESSION['count'];
		personInfo();
	}
	if(isset($_SESSION['studentNumber']) && $_SESSION['count']<$_SESSION['studentNumber'] && !isset($_POST['ssv'])){
		$_SESSION['count']++;
		echo $_SESSION['count']."/".$_SESSION['studentNumber'];
		personInfo();
	}
?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
		<section class="form-group">
			<input type="number" name="number" placeholder="Nhập số sinh viên">
			<input type="submit" value="Lưu tổng số sv" name="ssv"><br><br>
			<input type="submit" value="Thông tin sv" name="ttsv">
			<input type="submit" value="ĐTB Max min" name="dtbmm">
			<input type="submit" value="Tìm sv theo mã sv" name="tsv">
			<input type="submit" value="Sắp xếp tên" name="sxt">
			<input type="submit" value="SV đc học bổng" name="hb">
			<input type="submit" value="Thoát" name="out">
		</section>
	</form>
</section>

<?php
	if(isset($_POST['ttsv'])){
		foreach($_SESSION['student'] as $student){
			$student->showInfo();
		}
	}	
?>

<?php
	if(isset($_POST['tsv'])){
		search();
	}
?>

<?php
	if(isset($_POST['sxt'])){
		echo"<br>Sắp xếp tăng dần theo tên:<br>";
		for($i=0; $i<count($_SESSION['student'])-1; $i++){
			for($j=$i+1; $j<count($_SESSION['student']); $j++){
				if($_SESSION['student'][$i]->name>$_SESSION['student'][$j]->name){
					$tmp=$_SESSION['student'][$i];
					$_SESSION['student'][$i]=$_SESSION['student'][$j];
					$_SESSION['student'][$j]=$tmp;
				}
			}
		}
		for ($i=0;$i<count($_SESSION['student']);$i++){
    		$_SESSION['student'][$i]->showInfo();
    	}
		
	}		
?>

<?php
	if(isset($_POST['hb'])){
		echo "Sinh viên được học bổng";
		for ($i=0; $i <count($_SESSION['student'])-1;$i++) { 
			for ($j=$i+1; $j<count($_SESSION['student']);$j++) { 
				if($_SESSION['student'][$i]->dtb<$_SESSION['student'][$j]->dtb){
					$tmp=$_SESSION['student'][$i];
					$_SESSION['student'][$i]=$_SESSION['student'][$j];
					$_SESSION['student'][$j]=$tmp;
				}
			}
		}
	
		for ($i=0;$i<count($_SESSION['student']);$i++){
			if($_SESSION['student'][$i]->dtb >=8){
    			$_SESSION['student'][$i]->showInfo();
    		}	
    	}
	}
	
?>

<?php
	if(isset($_POST['dtbmm'])){
		$Max=$_SESSION['student'][0]->dtb;
		$j=0;
		for($i=1; $i<count($_SESSION['student']); $i++){
			if($Max<$_SESSION['student'][$i]->dtb){
				$Max=$_SESSION['student'][$i]->dtb;
				$j=$i;
			}
		}
?>		
		<h1 style="height: 10px">Sinh viên có điểm trung bình cao nhất:</h1>
<?php		
		$_SESSION['student'][$j]->showInfo();	

		$Min=$_SESSION['student'][0]->dtb;
		$j=0;
		for($i=1; $i<count($_SESSION['student']); $i++){
			if($Min>$_SESSION['student'][$i]->dtb){
				$Min=$_SESSION['student'][$i]->dtb;
				$j=$i;
			}
		}
?>		
		<h1 style="height: 10px">Sinh viên có điểm trung bình thấp nhất:</h1>
<?php					
		$_SESSION['student'][$j]->showInfo();
	}
?>

<?php
	if(isset($_POST['search'])){
		//echo $_POST['ID'];
		$k=0;
		for($i=0;$i<count($_SESSION['student']);$i++){
			if($_POST['ID']==$_SESSION['student'][$i]->id){
				$_SESSION['student'][$i]->showInfo();
				$k++;
				break;
			}
		}
		if ($k==0){
		echo "Không có sinh viên nào có mã là: ".$_POST['ID'];
		}
	}
?>

<?php
	if(isset($_POST['out'])){
		unset($_SESSION['student']);
	}	
?>

<?php
	function personInfo(){
?>
	<form method="post">
		<section class="container col-md-6" style="text-align: center;">
			<section class="form-group">
				<input  type="text" name="name" placeholder="Tên" required="">
				<input  type="radio" name="sex" value="Nam">Nam<input  type="radio" name="sex" value="Nữ">Nữ
				<input  type="date" name="date" placeholder="Ngày sinh">
				<input  type="text" name="address" placeholder="Địa chỉ">
				<input  type="text" name="id" title="chữ in hoa + số" pattern="[A-Z]{1,2}\d[0-9]{1,5}" placeholder="Mã sinh viên">
				<input  type="number" name="dtb" placeholder="Điểm trung bình">
				<input  type="email" name="email" placeholder="Email">
				<input  type="submit" name="save" value="Lưu thông tin">
			</section>
		</section>	
	</form>
<?php
	}
?>


<?php
	function search(){
?>
	<form method="post">
		<section class="container col-md-6" style="text-align: center;">
			<section class="form-group">
				<input type="text" name="ID">
				<input  type="submit" name="search" value="Tìm">
			</section>
		</section>	
	</form>
<?php
	}
?>

