@extends('index')

@section('content')
	<section class="container-fluid">
	<h1 style="text-align: center; font-size: 30px;">ĐĂNG KÝ</h1>
	<section class="container">
		<form action="" style="width: 600px; margin: 0px auto;" method="post">
            @csrf
			<section class="form-group">
                @if(session('thanhcong'))
                    <div class="alert alert-success">{{session('thanhcong')}}</div>
                @endif    
				<label>Tên đăng nhập *:</label>
				<input type="text" name="tenDangNhap" class="form-control col-md-12" required="">
			</section>
			<section ><label>Mật khẩu * :</label> 
				<input type="password" name="matKhau" class="form-control col-md-12" required=""> 
			</section>
    		<section >		
    			<label>Xác nhận mat khẩu * :</label> 
    			<input type="password" name="xacNhanMatKhau" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Họ tên * :</label> 
    			<input type="text" name="hoTen" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Ngày sinh * :</label> 
    			<input type="date" name="ngaySinh" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Địa chỉ * :</label> 
    			<textarea rows="2" cols="22" name="diaChi" class="form-control col-md-12" required=""></textarea>
    		</section>
    		<section >
    			<label>Điện thoại * :</label>
    			<input type="text" name="dienThoai" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Email * :</label> 
    			<input type="email" name="email" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Facebook * :</label> 
    			<input type="url" name="facebook" class="form-control col-md-12" required="">
    		</section>
    		<section >
    			<label>Giới tính * :</label> 
    			<input type="radio" value="male" name="gioiTinh" checked> Nam
    			<input type="radio" value="female" name="gioiTinh"> Nữ
    		</section>
    		<section >
    			<label>&nbsp;</label> 
    			<input type="submit" value="Đăng ký" class="btn btn-outline-primary" />  
    			<input type="reset" value="Làm lại" class="btn btn-outline-danger"/>
    		</section>
		</form>
	</section>
</section> 
@endsection