<?php session_start(); 
if( isset( $_SESSION['counter'] ) ) { $_SESSION['counter'] += 1; }else { $_SESSION['counter'] = 1; } 
$msg = "Bạn đã vào trang ". $_SESSION['counter']; $msg .= " lần trong phiên này."; ?> 
<html> 
<head> 
	<title>Thiết lập phiên PHP</title> 
</head> 
<body> <?php echo ( $msg ); ?> </body> 
</html>