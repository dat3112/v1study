@extends('admin/controlpanel')

@section('content')
<h2>{{$title}}</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Mã đơn hàng</th>
			<th>Tên khách hàng</th>
			<th>Phương thức</th>
			<th>Ngày đặt hàng</th>
			<th>Trạng thái đơn hàng</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($orders as $order)
			<tr>
				<td>{{$order->id}}</td>
				<td>{{$order->hoTen}}</td>
				<td>{{$order->tenPT}}</td>
				<td>{{$order->ngayDatHang}}</td>
				<td>{{$order->status}}</td>
				<td><a href="{{url('admin/order/detail/'.$order->id)}}" class="btn btn-outline-info btn-sm">Chi tiết</a> <a href="{{url('admin/order/del'.$order->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td>
			</tr>
	@endforeach
	</tbody>
</table>
@endsection