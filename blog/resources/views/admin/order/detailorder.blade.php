@extends('admin/controlpanel')

@section('content')
<h2>Thông tin khách hàng</h2>
@if(session('alert'))
		<section class="alert alert-success">{{session('alert')}}</section>
@endif
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="25%">Tên khách hàng</th>
			<th width="25%">Địa chỉ</th>
			<th width="25%">Điện thoại</th>                       
			<th width="25%">Email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$order->hoTen}}</td>
			<td>{{$order->diaChi}}</td>
			<td>{{$order->dienThoai}}</td>
			<td>{{$order->email}}</td>
		</tr>
	</tbody>
</table>

<form method="post">
	@csrf
<section style="text-align: center;">
<select name="status" class="btn btn-outline-primary">
      				<option value="1">Chưa xử lý</option>
        			<option value="2" >Đang xử lý</option>
        			<option value="3" >Đã xử lý</option>
        			
</select>&nbsp
<input class="btn btn-outline-success" type="submit" name="xntt" value="Chọn">
</section>
</form>

<h2>{{$title}}</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="10%">Mã đơn hàng</th>
			<th width="10%">Mã sản phẩm</th>
			<th width="20%">Ảnh sản phẩm</th>                       
			<th width="20%">Tên sản phẩm</th>
			<th width="15%">Giá lúc mua</th>
			<th width="10%">Số lượng mua</th>
			<th width="15%">Thành tiền</th>
		</tr>
	</thead>
	<tbody>		
		@foreach($phuongthuc as $rs)			
			<tr>
				<td>{{$rs->maDonHang}}</td>
				<td>{{$rs->maSP}}</td>
				<td><img style="width:80%" src="{{asset('public/images/'.$rs->image)}}"></td>
				<td>{{$rs->productName}}</td>
				<td><?=number_format($rs->giaLucMua, 0, ',' ,'.')?> VNĐ</td>
				<td>{{$rs->soLuongMua}}</td>				
				<td><?=number_format($rs->giaLucMua*$rs->soLuongMua, 0, ',' ,'.')?> VNĐ</td>
			</tr>	
		@endforeach		
	</tbody>
</table>
@endsection