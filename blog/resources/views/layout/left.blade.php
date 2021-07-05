<?php
	$hangs=DB::table('hangsanxuat')->where('status',1)->get();
?>
	<h3 style="text-align: center;">Hãng sản xuất</h3>
	@foreach($hangs as $hang)
		<section class="container-fluid">
			<a href="{{url('search/hangid/'.$hang->id)}}">{{$hang->tenHang}}</a>
			</section>
	@endforeach