@extends('admin/controlpanel')

@section('content')
<section class="container-fluid">
	<h1>{{$title}}</h1>
	@if(session('alert'))
		<script>alert('Them thanh cong!'); location='sanpham';</script>
	@endif	
	<section>
		<form class="" method="post" enctype="multipart/form-data">
			@csrf
			<table class="table">
				<tbody>
					<tr>
						<th>Hãng:</th>
						<td>
							<select name="hangId">
								<option value="0" hidden="">-Chọn hãng-</option>
								@foreach($hangs as $hang)
									<option value="{{$hang->id}}">{{$hang->tenHang}}</option>
								@endforeach	
							</select></td>
					</tr>
					<tr>
						<th>Tên:</th>
						<td><input type="text" name="productName" class="form-control"></td>
					</tr>
					<tr>
						<th>Ảnh:</th>
						<td><input type="file"  name="image" class="form-control"></td>
					</tr>
					<tr>
						<th>Giá:</th>
						<td><input type="number" min="100000" name="price" class="form-control"></td>
					</tr>
					<tr>
						<th>Mô tả:</th>
						<td><textarea id="mota" name="mota"></textarea><script>CKEDITOR.replace('mota')</script></td>
					</tr>
					<tr>
						<th>Trạng thái sản phẩm: </th>
						<td><input value="1" type="radio" name="status"> Active <input value="0" type="radio" name="status" > Not Active</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="themSanPham" value="Thêm sản phẩm"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</section>
</section>
@endsection