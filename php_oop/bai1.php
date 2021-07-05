<?php
	class Animal{
		//Dùng biến để mô tả đặc điểm của đối tượng
		var $id;
		var $name;
		var $age;
		//Dùng hàm (phương thức) để mô phỏng hành vi (hành động) của đối tượng
		function move(){
			echo"Run, swim,...";
		}
		function speak(){
			echo"Gogo, meomeo, ...";
		}
	
	}
?>


