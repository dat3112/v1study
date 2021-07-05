@extends('admin/controlpanel')

@section('content')
<table class="table table-bordered">
	<a href="{{url('admin/themHang')}}" class="btn btn-outline-primary">Thêm Hãng</a>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
			<th>DELETE</th>
		</tr>
	</thead>
	<tbody>
		@foreach($hang as $rs)
			<tr class="dataHang">
				<td>{{$rs->id}}</td>
				<td><a href="{{url('admin/hang/suaHang/'.$rs->id)}}">{{$rs->tenHang}}</a></td>
				<td>{{$rs->status=='1'?'Active':'Not active'}}</td>
				<td width="7%">		
				<?php	
					$check=$rs->id;
					$results=DB::table('product')->where('hangId',$check)->get();		
				?>
					@if(count($results)!=0)
						{{"Có sản phẩm"}}
					@else	
						<a class="btn btn-outline-danger" href="{{url('admin/hang/del/hangid'.$rs->id)}}">Xóa</a>
						
					@endif

				</td>
			</tr>
	@endforeach
	</tbody>
</table>
@endsection