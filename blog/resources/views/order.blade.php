@extends('index')

@section('content')
	<section class="container col-md-8">
		<form method="post">
			@csrf
			<section class="form-group">
				<h2>THÔNG TIN NGƯỜI NHẬN HÀNG</h2>
				<label>Họ tên:</label>
				<input name="hoTen" type="text" class="form-control" value="{{$member->hoTen}}">
				<label>Địa chỉ:</label>
				<input type="text" name="diaChi" value="{{$member->diaChi}}" class="form-control">
				<label>Email:</label>
				<input type="text" name="email" value="{{$member->email}}" class="form-control">
				<label>Số Điện thoại:</label>
				<input type="text" name="dienThoai" value="{{$member->dienThoai}}" class="form-control">
			</section>
	
			<h2>PHƯƠNG THỨC THANH TOÁN</h2>
			<section>Chọn 1 phương thức</section>
			<section>
				<select name="phuongThucThanhToan">
					@foreach($phuongThucs as $phuongthuc)
					<option value="{{$phuongthuc->id}}">{{$phuongthuc->tenPT}}</option>
					@endforeach
				</select>
			</section>
		

		<input class="btn btn-outline-primary" onclick="alert('Đặt hàng thành công')" type="submit" name="order" value="ĐẶT HÀNG">
		</form>
	</section>
@endsection