<?php
	class Student{
		var $masv;
		var $dtb;
		var $tuoi;
		var $lop;
	function inputInfo(){
			$this->masv=$_POST['masv'];
			$this->dtb=$_POST['dtb'];
			$this->tuoi=$_POST['tuoi'];
			$this->lop=$_POST['lop'];
	}
	function showInfo(){
		echo"Mã sinh viên: ".$this->masv;
		echo"<br>Điểm trung bình: ".$this->dtb;
		echo"<br>Tuổi: ".$this->tuoi;
		echo"<br>Lớp: ".$this->lop;	
		echo"<br>Kiểm tra học bổng: ".$this->kthocbong();
	}	
	function kthocbong(){
		if ($this->dtb >=8.0){
			echo "Đc học bổng";
		}else{
			echo "Ko đc học bổng";
		}
	}
}
?>
<?php
	if(isset($_POST['in'])){
		$Student = new Student();
		$Student->inputInfo();
		$Student->showInfo();
		$Student->kthocbong();
	}
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="masv" class="form-control" placeholder="Mã sinh viên" pattern="\w{8,8}">
		<input  type="number" name="dtb" min="0.0" max="10.0" class="form-control" placeholder="Điểm trung bình" step="0.1">
		<input  type="number" name="tuoi" min="18" class="form-control" placeholder="Tuổi">
		<input  type="text" name="lop" class="form-control" placeholder="Lớp" pattern="[AC]\w.{6,6}">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>