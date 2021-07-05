<?php
	include"inherit1.php";
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
		function showInfo(){
			Person::showInfo();	
			echo"<br>Mã sinh viên: ".$this->id;
			echo"<br>Điểm trung bình: ".$this->dtb;
			echo"<br>Email: ".$this->email;
			echo"<br>Học bổng: ".$this->kthb();
		}	
		function kthb(){
			if ($this->dtb >=8.0){
				return "Đc học bổng";
			}else{
				return "Ko đc học bổng";
			}
		}
}

?>

<?php
	// if(isset($_POST['in'])){
	// 	$ktra = new Student();
	// 	$ktra->inputInfo();
	// 	$ktra->showInfo();
	// }
?>


<!-- <section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="name" placeholder="Tên">
		<input  type="radio" name="sex" value="Nam">Nam<input  type="radio" name="sex" value="Nữ">Nữ
		<input  type="date" name="date" placeholder="Ngày sinh">
		<input  type="text" name="address" placeholder="Địa chỉ">
		<input  type="text" name="id" placeholder="Mã sinh viên">
		<input  type="number" name="dtb" placeholder="Điểm trung bình">
		<input  type="email" name="email" placeholder="Email">

		<input  type="submit" value="gui" name="in">
	</section>
	</form>
</section> -->