@extends('admin/controlpanel')

@section('content')
<table class="table table-bordered">
	<form>
	<thead style="text-align: center;">
		<tr>
			<th colspan="2"><a href="{{url('admin/themSanPham')}}" class="btn btn-outline-primary">Thêm Sản Phẩm</a></th>
			<th colspan="2">
				<select name="hang" class="btn btn-outline-primary" onchange="location=options[selectedIndex].value">
        			<option hidden>--Chọn hãng sản xuất--</option>
        			@foreach($hangs as $hang)
        				<option value="{{url('admin/sanpham/maHang/'.$hang->id)}}">{{$hang->tenHang}}</option>
        			@endforeach
        		</select>
			</th>
			<th colspan="3">
	 			<form method="post" action="">
	 				<input type="text" placeholder="Tìm kiếm sản phẩm" style="width: 55%; float: left;" name="ten" class="form-control">
	 				<input type="submit" value ="Tìm" style="width: 15%; float: left;"class="btn btn-outline-primary">
	 			</form>
	 		</th>
		</tr>
		<tr>
			<th width="7%">ID</th>
			<th width="8%">Hãng ID</th>
			<th width="30%">Ảnh</th>
			<th width="20%">Tên SP</th>
			<th width="20%">Giá</th>
			<th width="7%">Status</th>
			<th width="8%"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($product as $rs)
	<tr>
		<td>{{$rs->id}}</td>
		<td>{{$rs->tenHang}}</td>
		<td><img style="width:40%" src="{{asset('public/images/'.$rs->image)}}"></td>
		<td>{{$rs->productName}}</td>
		<td>{{number_format($rs->price, 0, ',' ,'.')}}</td>
		<td>{{($rs->status=='1')?'Active':'Not active'}}</td>
		<td width="7%">
			<a class="btn btn-outline-primary" href="{{url('admin/sanpham/suaSanPham/'.$rs->id)}}">Sửa</a>
			<a class="btn btn-outline-danger" href="{{url('admin/sanpham/del/'.$rs->id)}}">Xóa</a>
		</td>
	</tr>
		@endforeach
	
	</tbody>
</form>

</table>
@endsection