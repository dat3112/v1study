<!DOCTYPE html>
<html>
<head>
	<title>Trang đăng nhập bằng ajax</title>
	<script src="https://kungfuphp.com/wp-content/litespeed/localres/ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<h2>Trang đăng nhập bằng ajax</h2>
<table>
	<!-- <tr><td><div id="error" style="color: red;"></div><div id="ok" style="color: green"></div></td></tr> -->
	<tr><td>Tên đăng nhập</td><td><input type="text" id = "username" name="username"></td></tr>
	<tr><td>Mật khẩu</td><td><input type="password" id = "password" name="password"></td></tr>
	<tr><td colspan="2" align="center"><input type="button" id="btn_submit" name="btn_submit" value="Đăng nhập"></td></tr>
</table>
<script type="text/javascript">
	$("#btn_submit").on("click", function(){
		var username = $("#username").val();
		var password = $("#password").val();
		// var error = $("#error");
		// var ok = $("#ok");

		// resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
		// error.html("");
		// ok.html("");

		// Kiểm tra nếu username rỗng thì báo lỗi
		if (username == "") {
			error.html("Tên đăng nhập không được để trống");
			return false;
		}
		// Kiểm tra nếu password rỗng thì báo lỗi
		if (password == "") {
			error.html("Mật khẩu không được để trống");
			return false;
		}
		
		// Chạy ajax gửi thông tin username và password về server check_dang_nhap.php
		// để kiểm tra thông tin đăng nhập hợp lệ hay chưa
		$.ajax({
		  url: "check_dang_nhap.php",
		  method: "POST",
		  data: { username : username, password : password },
		  success : function(response){
		  	if (response == "1") {
		  		ok.html("Đăng nhập thành công");
		  	}else{
		  		error.html("Tên đăng nhập hoặc mật khẩu không chính xác !");
		  	}
		  }
		});

	});
</script>
</body>
</html>