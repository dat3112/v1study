<?php
	class hcn{
		var $a;
		var $b;
	function inputInfo(){
			$this->a=$_POST['a'];
			$this->b=$_POST['b'];
	}
	function showInfo(){
		echo"Chiều dài: ".$this->a;
		echo"<br>chiều rộng: ".$this->b;
	}
	function chuvi(){
		$chuvi = ($this->a +$this->b)*2;
		echo "<br>Chu vi là: ".$chuvi;
	}
	function dientich(){
		$dientich = ($this->a *$this->b);
		echo "<br>Diện tích là: ".$dientich;     
	}
}	
?>

<?php
	if(isset($_POST['in'])){
		$hcn = new hcn();
		$hcn->inputInfo();
		$hcn->showInfo();
		$hcn->chuvi();
		$hcn->dientich();
	}
?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="number" name="a" class="form-control" placeholder="Chiều dài">
		<input  type="number" name="b" class="form-control" placeholder="Chiều rộng">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>