<?php
	class ktra{
		var $hoten;	
		var $a;
		var $b;
		var $c;
		var $d;
		#Hàm tạo: dùng để khởi tạo giá trị ban đầu cho các thuộc tính của lớp
		function inputInfo(){
				$this->hoten=$_POST['hoten'];
				$this->a=$_POST['a'];
				$this->b=$_POST['b'];
				$this->c=$_POST['c'];
				$this->d=$_POST['d'];
		}
		function showInfo(){
			echo"Họ tên: ".$this->hoten;
			echo"<br>Điều 1: ".$this->a;
			echo"<br>Điều 2: ".$this->b."%";
			echo"<br>Điều 3: ".$this->c;
			echo"<br>Điều 4: ".$this->d; 
		}
		function kthb(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			$d=$this->d;
			if($a =="HDSE" || $a=="hdse" && $b >75 || $b=75 && $c==0 && $d<2)
				echo'<br>Học viên đạt học bổng';
			else
				echo "<br>Học viên chưa đạt học bổng";
		}
	}
?>
<?php
	if(isset($_POST['in'])){
		$ktra = new ktra();
		$ktra->inputInfo();
		$ktra->showInfo();
		$ktra->kthb();
	}
?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="text" name="hoten" class="form-control" placeholder="Họ tên">
		<input  type="text" name="a" class="form-control" placeholder="Là học viên của...">
		<input  type="number" name="b" class="form-control" placeholder="Điểm tổng kết (%)">
		<input  type="number" name="c" class="form-control" placeholder="Số lần vi phạm nội quy">
		<input  type="number" name="d" class="form-control" placeholder="Số lần thi">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>