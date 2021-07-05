<?php
class SoNguyenTo{
	private $a;
	function __construct($x){
		if($this->ktra($x)==0){
			$this->a=$x;
			echo $this->a." là SNT";
			echo"Số nguyên tố liền sau là: ".$this->sosau();
		}
		else 
			echo $this->a." ko SNT";
	}

	function ktra($x){
		$check=0;
		for($i=2; $i<=sqrt($x); $i++){
			if($x%$i==0){
				$check=1;
				break;
			}
		}	
		return $check;
	}
	
	function sosau(){
		$x=$this->a+1;
		while($this->ktra($x)==1){
			$x++;
		}
		return $x;
	}

	function getA(){
		return $this->a;
	}
	function setA($a){
		return $this->a=$a;
	}
}
?>


<?php
	if(isset($_POST['in'])){
		$SoNguyenTo=new SoNguyenTo($_POST['a']);
		$SoNguyenTo->ktra($_POST['a']);
	}
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="number" name="a" class="form-control" placeholder="Nhập số">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>