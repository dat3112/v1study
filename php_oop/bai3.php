<?php
	class NhanVien{
		var $ten;
		var $tuoi;
		var $diachi;
		var $tienluong;
		var $tonggiolam;
	function inputInfo(){
			$this->ten=$_POST['ten'];
			$this->tuoi=$_POST['tuoi'];
			$this->diachi=$_POST['diachi'];
			$this->tienluong=$_POST['tienluong'];
			$this->tonggiolam=$_POST['tonggiolam'];
	}
	function showInfo(){
		echo"Tên: ".$this->ten;
		echo"<br>Tuổi: ".$this->tuoi;
		echo"<br>Địa chỉ: ".$this->diachi;
		echo"<br>Tiền lương: ".$this->tienluong;
		echo"<br>Tổng giờ làm: ".$this->tonggiolam;
		echo"<br>Tiền thưởng: ".$this->tienThuong();
	}	
	function tienThuong(){
		if ($this->tonggiolam >=200){
			return $this->tienluong/100*20;
		}elseif ($this->tonggiolam <200 && $this->tonggiolam >=100){
			return $this->tienluong/100*10;
		}else{
			return 0;
		}
	}
}	
?>

<?php
	if(isset($_POST['in'])){
		$NhanVien = new NhanVien();
		$NhanVien->inputInfo();
		$NhanVien->showInfo();
		$NhanVien->tienThuong();
	}
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="ten" class="form-control" placeholder="Tên">
		<input  type="text" name="tuoi" class="form-control" placeholder="Tuổi">
		<input  type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
		<input  type="text" name="tienluong" class="form-control" placeholder="Tiền lương">
		<input  type="text" name="tonggiolam" class="form-control" placeholder="Tổng giờ làm">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>