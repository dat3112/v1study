<p style="text-align: center;">Tìm kiếm theo tên</p>
		<span style="text-align: center;">
	 	<form method="post" action="{{url('search/ten/1')}}">
	 		@csrf
	 		<input type="text" style="width: 75%; float: left;" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
	 		<input type="submit" value ="Tìm" style="width: 25%; float: left;" class="btn btn-outline-primary" >
	 	</form>
	 	</span>
	 	<br>
	 	<br>	 	
	<hr style="border: green 1px solid">
<?php
	$price=DB::table('timmucgia')->where('status',1)->get();
?>
	<p style="text-align: center;">Tìm kiếm theo giá</p>
		@foreach($price as $rs)
		<section class="container-fluid"><a href="{{url('search/mucgia/'.$rs->mucGia)}}
">{{$rs->mucGia}}</a></section>
		@endforeach
	