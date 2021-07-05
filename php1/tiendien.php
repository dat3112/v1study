<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiền điện</title>
</head>
<body>
	<?php 
        $result = '';
        if (isset($_POST['Tinh']))
        {
        	$a = isset($_POST['a']) ? $_POST['a'] : '';
        	$b = isset($_POST['b']) ? $_POST['b'] : '';

        	$c = $b-$a;
        	if ($c <= 100) {
        		$result = (1250*$c);
        	}else if ($c > 100 && $c <=150) {
        		$result = (1550*$c);
        	}else if ($c > 150 && $c <=200) {
        		$result = (1850*$c);
        	}else{
        		$result = (2250*$c);
        	}
        }
    ?>
    <h1>Tính tiền điện</h1> 
    <form method="post" action="">
    	<label for="">Tên chủ hộ</label>
    	<input type="text" name=""><br>
    	<label for="">Chỉ số đầu</label>
    	<input type="text" name="a"><br>
    	<label for="">Chỉ số cuối</label>
    	<input type="text" name="b"><br>
    	<input type="submit" name="Tinh" value="Tính tiền điện">
    </form>
    <?php echo 'Tiền điện là: '.$result ?>
</body>
</html>