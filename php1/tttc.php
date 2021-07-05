<!DOCTYPE html>
<html>
<head>
	<title>Bài toán trăm trâu trăm cỏ</title>
</head>
<body>
	<?php 
		for ($x=1; $x<=20; $x++) { 
			for ($y=1; $y<=33 ; $y++) { 
				$z=100-$x-$y;
				if (5*$x+3*$y+$z/3==100 && $z%3==0) {
				  	echo "Số trâu đứng ".$x;
				  	echo "<br>";
				  	echo "Số trâu nằm ".$y;
				  	echo "<br>";
				  	echo "Số trâu già ".$z;
				  	echo "<br>";
				  	echo "<hr>";
				  }  
			}
		}
	?>
</body>
</html>