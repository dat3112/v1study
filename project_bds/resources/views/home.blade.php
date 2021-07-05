@extends('index')

@section('content')
<div class="slide-header">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="public/image/banner1.jpg"></div>
			<div class="swiper-slide"><img src="public/image/banner2.jpg"></div>
			<div class="swiper-slide"><img src="public/image/banner3.jpg"></div>	    
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</div>	
<div class="note">
	<div>
		<div>Vì nhiều lý do khác nhau mà nhiều khách hàng không có điều kiện để ở hữu một bản vẽ thiết kế nhà như vị trí địa lý, giá thiết kế…..</div>
		<div>Với mong muốn đem đến cho khách hàng được lựa chọn mẫu nhà đa dạng, không phải bỏ ra chi phí lớn, tiết kiệm thời gian thiết kế và vẫn có những chế độ giải đáp thắc mắc hồ sơ như thiết kế mới.</div>
		<div>Đó chính là lý do sieuthinhamau.com ra đời.</div>
	</div>
</div>	
<div class="container">
	<div class="home-content">
		<div style="clear:both">
			<div class="home-menusp">
				<div class="home-menusp-content">
					<h3>Sản phẩm</h3>
					<ul class="product-categories">
						<li class="cat-item cat-item-15"><a href="#">Biệt thự</a>
							<ul class="children">
								<li class="cat-item cat-item-16"><a href="">Biệt thự 1 tầng</a></li>
								<li class="cat-item cat-item-17"><a href="">Biệt thự 2 tầng</a></li>
								<li class="cat-item cat-item-18"><a href="">Biệt thự 3 tầng</a></li>
							</ul>
						</li>
						<li class="cat-item cat-item-19"><a href="#">Nhà phố</a></li>
						<li id="children" class="cat-item cat-item-20"><a href="#">Nội thất</a>
							<ul class="children last-children">
								<li id="children" class="cat-item cat-item-21" ><a href="#">Thiết kế nội thất</a></li>
							</ul>
						</li>
					</ul>
				</div>	
			</div>
			<div id="home-sale" class=" d-flex justify-content-between">
				<div class="widget widget_sp_image">
					<a href="#" id="#" class="widget_sp_image-image-link">
						<img width="274" height="299" class="attachment-full" style="max-width: 100%;" src="https://sieuthinhamau.com/wp-content/uploads/2018/06/BAO-GIA.jpg">
					</a>
				</div>
				<div class="widget widget_sp_image">
					<a href="#" class="widget_sp_image-image-link">
						<img width="274" height="299" class="attachment-full" style="max-width: 100%;" src="https://sieuthinhamau.com/wp-content/uploads/2018/06/quy-trinh-mua-ho-so-ban-ve-mau.jpg">
					</a>
				</div>
				<div class="widget widget_sp_image">
					<a href="#" class="widget_sp_image-image-link">
						<img width="274" height="299" class="attachment-full" style="max-width: 100%;" src="https://sieuthinhamau.com/wp-content/uploads/2018/06/ho-tro-giai-dap-bao-hanh-ban-ve-mau.jpg">
					</a>
				</div>	
			</div>
		</div>
	</div>	
</div>




	
	@endsection