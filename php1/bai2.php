<!DOCTYPE html>
<html>
<head>
	<title>bai 2</title>
</head>
<body>
<?php
 $a=159;
 echo "<span style='color:blue'>"."hang don vi=".($a %10)."</span>"."<br>";
 echo "<span style='color:red'>"."hang chuc=".($a /10%10)."</span>"."<br>";
 echo "<span style='color:green'>"."hang tram=".($a /100%10)."</span>"."<br>";
?>

<?php
$b=-5;
if($b <0 && $b %2==0){
?>
<p style="color: blue"><?=$b?> la so chan am</p>
<?php
}
else{
?>
<p style="color: red"><?=$b?> khong la so chan am</p>
<?php
}
?>
</body>
</html>