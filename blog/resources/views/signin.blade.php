@extends('index')

@section('content')
	<section class="container-fluid">
	<h1 style="text-align: center; font-size: 30px;">ĐĂNG NHẬP</h1>
	@if(session('alert'))
		<section class="alert alert-danger">{{session('alert')}}</section>
	@endif
	<section class="container">
		<form style="width: 600px; margin: 0px auto;" method="post">
			@csrf
			<section class="form-group">
				<label>Tên đăng nhập:</label>
				<input type="text" name="tenDangNhap" class="form-control col-md-12" required="">
			</section>
			<section ><label>Mật khẩu:</label> 
				<input type="password" name="matKhau" class="form-control col-md-12" required=""> 
			</section>
			<section >
    			<label>&nbsp;</label> 
    			<input type="submit" name="dangnhap" value="Đăng nhập"/>  
    			<input type="reset" value="Làm lại"/>
    		</section>
		</form>
	</section>
@endsection