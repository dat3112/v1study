@extends('index')
@section('content')
<h3 style="text-align: center; margin: 15px">GIỎ HÀNG</h3>	
@if(session("cart"))	
	<?php $products=DB::table('product')->whereIn('id',array_keys(session("cart")))->get()?>
		<section class="container-fluid">
			<?php $tongTien=0?>
			<form method="post" id="frm">
				@csrf
				@foreach($products as $product)
				<section class="cart-product row" style="margin:10px">
					<section class="col-md-2"><img src="{{asset('public/images/'.$product->image)}}"
					width="100%"></section>
					<section class="col-md-2">{{$product->productName}}</section>
					<section class="col-md-2" style="text-align: right;">{{number_format($product->price,0,',','.')}}</section>
					<section class="col-md-1" style="text-align: right;"><input type="number" name="{{$product->id}}" min="1" value='{{session("cart.$product->id")}}' style="width: 50px"></section>
					<section class="col-md-2" style="text-align: right;"><?php $thanhTien=$product->price*session("cart.$product->id")?>{{number_format($thanhTien,0,',','.')}}</section>
					<section class="col-md-2"><a href="{{url('cart/del/'.$product->id)}}" class="btn btn-outline-danger">Delete</a></section>
					<hr style="width: 80%" >
				</section>
				<?php $tongTien+=$thanhTien?>
				@endforeach
			</form>
			<section>
				<a href="{{url('cart/delall')}}" class="btn btn-outline-danger" style="margin-left: 5%" onclick="return confirm('Are you sure?')">Delete Cart</a><input form="frm" type="submit" value="Update cart" class="btn btn-outline-success">
				<a href="{{url('cart/order')}}" class="btn btn-outline-info">Thanh toán</a></section>
			<section style="text-align: left; margin-left: 5%">Tổng tiền: {{number_format($tongTien,0,',','.')}} VND</section>
		</section>	
@else
<section class="alert alert-danger">GIỎ HÀNG TRỐNG</section>					
@endif
@endsection