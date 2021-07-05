@extends('index')

@section('content')
<?php
	$product=DB::table('product')->where('status',1)->get();
?>
	@foreach($product as $pd)
		<section class="product">
			<section id="a">
				<a href="detail/productid/{{$pd->id}}"><img width="40%";  src="public/images/{{$pd->image}}"></a>
			</section>	
			<section id="a" style="color: black" class="container-fluid">
				<a href="?request=detail&productid={{$pd->id}}">{{$pd->productName}}</a>
			</section>
			<section id="a" class="container-fluid"><span style="text-align:right; color:green;font-weight:bold;"> Giá:&nbsp</span><?=number_format($pd->price, 0, ',' ,'.')?><span style="color:white; text-align: left;"> VNĐ</span></section>
			<section><a href="{{url('cart/'.$pd->id)}}" class="btn btn-outline-primary">Add to Cart</a></section>
		</section>
	@endforeach
@endsection