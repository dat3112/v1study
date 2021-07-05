@extends('admin/controlpanel')

@section('content')
<section class="container-fluid">
	<h1>{{$title}}</h1>
	@if(session('alert'))
		<script>alert('Them thanh cong!'); location='hang';</script>
	@endif	
	<section>
		<form class="" method="post" enctype="multipart/form-data">
			@csrf
			<table class="table">
				<tbody>					
					<tr>
						<th>Tên hãng:</th>
						<td><input type="text" name="tenHang" class="form-control"></td>
					</tr>
					<tr>
						<th>Trạng thái hãng: </th>
						<td><input value="1" type="radio" name="status"> Active <input value="0" type="radio" name="status" > Not Active</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="themHang" value="Thêm hãng"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</section>
</section>
@endsection