<?php
	$username_db = "kungfuphp";
	$password_db = "123456";
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Nếu thông tin đăng nhập chính xác, trả về giá trị là 1
	if ($username == $username_db && $password == $password_db) {
		echo 1;
		exit();
	}

	// Nếu thông tin đăng nhập sai, trả về giá trị là 0
	echo 0;
	exit();
?>