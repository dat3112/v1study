<?php
	$check=0;
	class Tamgiac{
		var $a;
		var $b;
		var $c;
	function inputInfo(){
			$this->a=$_POST['a'];
			$this->b=$_POST['b'];
			$this->c=$_POST['c'];
	}
	function showInfo(){
		echo"Cạnh a: ".$this->a;
		echo"<br>Cạnh b: ".$this->b;
		echo"<br>Cạnh c: ".$this->c;
	}
	function kttamgiac(){
		$a=$this->a;
		$b=$this->b;
		$c=$this->c;
		if( $a<$b+$c && $b<$a+$c && $c<$a+$b ){
        	if ($a == $b && $b == $c && $c == $a) {
        		echo'<br>Tam giác đều';
			}
    
			else if ($a == $b || $a == $c || $c == $b)  {
        		if ($a==$b+$c || $b==$a+$c || $c==$a+$b) {
            		echo'<br>Tam giác vuông cân';
        		}
				else{
            		echo'<br>Tâm giác cân';
        		}
			}
    
			else if ($a*$a==$b*$b+$c*$c || $b*$b==$a*$a+$c*$c || $c*$c==$a*$a+$b*$b) {
        			echo '<br>Tam giác vuông';
				}
    
			else {
        			echo '<br>Tam giác thường';
			}
			return 1;

    	}
    	else
	        echo "<br>Ba cạnh a, b, c khong phai la ba canh cua mot tam giac";
	    	return 0;
		}	
	function chuvi(){
		$chuvi = $this->a +$this->b +$this->c;
		echo "<br>Chu vi là: ".$chuvi;
	}
	function dientich(){
		$p=($this->a +$this->b +$this->c)/2;
		$dientich = sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));     
		echo "<br>Diện tích là: ".$dientich;     
	}
	
}
?>
<?php
	if(isset($_POST['in'])){
		$Tamgiac = new Tamgiac();
		$Tamgiac->inputInfo();
		$Tamgiac->showInfo();
		$check=$Tamgiac->kttamgiac();
		if($check==1){
			$Tamgiac->chuvi();
			$Tamgiac->dientich();
		}

		}
?>
<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="number" name="a" class="form-control" placeholder="Cạnh a">
		<input  type="number" name="b" class="form-control" placeholder="Cạnh b">
		<input  type="number" name="c" class="form-control" placeholder="Cạnh c">
		<input  type="submit" class="btn btn-outline-success" value="gui" name="in">
	</section>
	</form>
</section>