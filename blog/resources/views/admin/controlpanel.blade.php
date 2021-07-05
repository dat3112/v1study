<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/acss.css">
	<link rel="stylesheet" type="text/css" href="../public/qldhcss.css">
	<script src="{{asset('public/ckeditor/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
	<table class="table table-bordered">
	<tr>
		<td>Hello: {{session('admin')}} [<a href="{{url('admin/logout')}}">Logout</a>]</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="15%">
			<h3><a href="{{url('admin/hang')}}">Hãng sản xuất</a></h3>
			<h3><a href="{{url('admin/sanpham')}}">Sản phẩm</a></h3>
			<ul>
				<li><h3 style="color: #007fff"><a href="{{url('admin/order')}}">QL đơn hàng</a></h3>
				<ul>
	   				<li><a href="{{url('admin/order/pending')}}">Chưa xử lý</a></li>
	   				<li><a href="{{url('admin/order/2')}}">Đang xử lý</a></li>
	   				<li><a href="{{url('admin/order/3')}}">Đã xử lý</a></li>
	   				<li><a href="{{url('admin/order/4')}}">Hủy</a></li>
				</ul>
			</li>
			</ul>	

		</td>
		<td width="70%">
			@yield('content')
		</td>
		<td>3</td>
	</tr>
</table>
</body>
</html>


