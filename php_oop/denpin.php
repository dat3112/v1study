<?php session_start();?>

<?php
class Battery{
	private $energy;
	function __construct(){
		$this->energy=10;	
	}

	function getEnergy(){
		return $this->energy;
	}
	function setEnergy($energy){
		return $this->energy=$energy;
	}
	function decreaseEnergy(){
		$this->energy=$this->energy-2;
		echo "&nbsp".$this->energy;
	}

}

class FlashLamp{
	private $status;
	private $battery;
	function FlashLamp(){
		$status=0;
		$battery=null;
	}
	function getBatteryinfo(){
		return $this->battery;
	}
	function setBattery($battery){
		echo "Đã nạp pin";
		$this->battery=$battery;

	}
	function turnOff(){
		$this->status=0;
		echo "Đèn tắt";
	}
	function turnOn(){
		$this->status=1;
		if($this->battery->getEnergy()>0){   //$battery kiểu private
			echo "Đèn sáng";
			$this->battery->decreaseEnergy();
		}else{
			echo"Đèn không sáng";
		}
	}

}

class TestFlashLamp{
	private $Battery;
	private $FlashLamp;
}

?>


<?php
	$a1=new FlashLamp();
	$a2=new Battery();

	if(!isset($_SESSION['FlashLamp']))
		$_SESSION['FlashLamp']=$a1;
	
	if(isset($_POST['a'])){
		$_SESSION['FlashLamp']->turnOn();
	}

		
	if(isset($_POST['b'])){
		$_SESSION['FlashLamp']->turnOff();
	}
	
	
	if(isset($_POST['nap'])){
		$_SESSION['FlashLamp']->setBattery($a2);
	}
?>

<?php if(isset($_SESSION['user'])) ?>

<section class="container col-md-6" style="text-align: center;">
	<form method="post">
	<section class="form-group">
		<input  type="submit" name="a" value="Bật">
		<input  type="submit"value="Tắt" name="b">
		<input  type="submit"value="Nạp pin" name="nap">
	</section>
	</form>
</section>



