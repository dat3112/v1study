<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/css.css">
	<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

	<!-- Link Swiper's CSS -->
	  <link rel="stylesheet" href="../package/swiper-bundle.min.css">
	  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>
	<header>		
		<div class="header-top">
			<div class="container">
				<div class="header-top-body">
					<div class="header-top-body-left">	
						<a href="#">
							<i class="fa fa-phone-square">&nbsp;</i>Hotline 0944 485 226
						</a>	
						<a href="#">Email: sieuthinhamau@gmail.com</a>	
					</div>
					<div class="header-top-body-right">
						<i class="fa fa-user">&emsp;</i><a href="#">Login</a>&emsp;		
						<i class="fa fa-shopping-cart">&emsp;</i><a href="#">0 items-0đ</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="header-bottom">
			<div class="container">	
				<div class="header-bottom-body d-flex justify-content-between">					
					<div class="header-bottom-img">			
						<a href="{{url('/')}}">
							<img src="public/image/logo.png">
						</a>
					</div>
					<div class="header-bottom-body-menu">		
						<ul>						
							<li>
								<a href="{{url('/')}}">Trang chủ</a>
							</li>
							<li>
								<a href="{{url('gioithieu')}}">Giới thiệu</a>
							</li>
							<li>
								<a href="{{url('sanpham')}}">Sản phẩm</a>
							</li>
							<li>
								<a href="{{url('dichvu')}}">Dịch vụ</a>
							</li>
							<li>
								<a href="{{url('tintuc')}}">Tin tức</a>
							</li>
							<li>
								<a href="{{url('bosuutap')}}">Bộ sưu tập</a>
							</li>
							<li>
								<a href="{{url('lienhe')}}">Liên hệ</a>
							</li>
						</ul>
					</div>
					<div class="header-bottom-body-search">
						<input type="text" name="s" placeholder="Nhập từ khóa...">
						<button type="submit" value="Tìm"><i class="fa fa-search"></i></button>
					</div>	
				</div>
			</div>
		</div>
	</header>


<article>
<div>
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
</div>		
</article>

<footer>
	<div class="footer-top">
		<div class="gioithieu">
			<div class="container">
				<div class="up">
					<div class="info">
						<div class="info-detail info-detail-start">
							<p><span>500</span> Nhà mẫu</p>
							<p>Đa dạng phong cách, đầy đủ hồ sơ chi tiết</p>
						</div>
						<div class="info-detail">
							<p><span>Tư vấn</span> Chọn mẫu</p>
							<p>Chọn mẫu nhà phù hợp với kích thước đất</p>
						</div>
						<div class="info-detail">
							<p><span>Giám sát</span> online</p>
							<p>Trong toàn bộ quá trình thi công công trình</p>
						</div>
						<div class="info-detail">
							<p><span>Bàn giao</span> Hồ sơ</p>
							<p>Miễn phí qua đường bưu điện, mua trọn bộ hồ sơ</p>
						</div>
					</div>	
				</div>
				<div class="down">
					<div class="down-body">
						<span class="form-title">
							<h3>Đăng ký nhận tư vấn miễn phí</h3>
							<p>Các trường được đánh dấu là bắt buộc</p>
						</span>
					<div>
							<form>
								<div class="form-session">
									<input type="tel" placeholder="Số điện thoại">
								</div>
								<div class="form-session ">
									<input type="Email" placeholder="Email">
								</div>
								<div class="form-session">
									<textarea placeholder="Nội dung..."></textarea>
								</div>
								<div class="form-session-end">
									<input id="submit-session" type="button"  value="Gửi">
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-up">
				<div class="info-width info-width-1 ">
					<div class="info-height info-height-1">
						<h3 class="info-text-title">Thông tin</h3>
						<div class="info-text-body">
							<ul>
								<li>
									<a href="#">Giới thiệu</a>
								</li>
								<li>
									<a href="#">Hướng dẫn mua hàng</a>
								</li>
								<li>
									<a href="#">Chính sách vận chuyển</a>
								</li>
								<li>
									<a href="#">Hỗ trợ bảo hành</a>
								</li>
								<li>
									<a href="#">Thanh toán</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="info-width info-width-2">
					<div class="info-height info-height-2">
						<h3 class="info-text-title">Tag sản phẩm</h3>		
						<div class="info-text-body">
							<ul>
								<li>
									<a href="#">Tag sản phẩm</a>
								</li>
								<li>
									<a href="#">Tag sản phẩm 1</a>
								</li>
								<li>
									<a href="#">Tag sản phẩm 2</a>
								</li>
								<li>
									<a href="#">Tag sản phẩm 3</a>
								</li>
								<li>
									<a href="#">Tag sản phẩm</a>
								</li>
							</ul>
						</div>
					</div>     
				</div>
				<div class="info-width info-width-3">
					<div class="info-height info-height-3">
						<h3 class="info-text-title">Dịch vụ</h3>	
						<div class="info-text-body">
							<ul>
								<li>
									<a href="#">Thiết kế nội thất</a>
								</li>
								<li>
									<a href="#">Thi công nội thất</a>
								</li>
								<li>
									<a href="#">Dịch vụ 1</a>
								</li>
								<li>
									<a href="#">Dịch vụ 2</a>
								</li>
							</ul>
						</div>
					</div>  
				</div>
				<div class="info-width info-width-4">
					<div extclass="info-height info-height-4">
						<h3 class="info-text-title" >Liên hệ</h3>			
						<div class="info-text-body">
							<a href="tel:+84914581221"><i class="fa fa-phone-square"></i>0914 581 221</a>
							<p>Kết nối với chúng tôi</p>
							<a href="#"><img src="https://sieuthinhamau.com/wp-content/uploads/2017/05/facebook-icon.png"></a></div>
						</div>           
					</div>
				</div>	
			</div>
		<div class="footer-bottom-down">
			<div class="container">
				<div class="footer-bottom-down-row">
				<p><span><a href="#">Siêu thị nhà mẫu</a> Copyright © 2020.</span>
				Designed by <a href="#"> NOS</a></p>
				</div>
			</div>	
		</div>	
	</div>
</footer>

<!-- Swiper JS -->
	<script src="../package/swiper-bundle.min.js"></script>	  
	<script>
		var swiper = new Swiper('.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

