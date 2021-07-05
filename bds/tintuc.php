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
						<i class="fa fa-shopping-cart">&emsp;</i><a href="#">0 items-0₫</a>
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
								<a id="red" href="{{url('bosuutap')}}">Bộ sưu tập</a>
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
	<section>
		<article class="article-dichvu">
			<div id="content_box">
				<h1 class="postsby">
					<span>Category: <span>Tin tức</span></span>
				</h1>
				<div class="latestPost excerpt ">
					<div>
						<h2 class="title front-view-title">
							<a href="#">Có 1.5 tỷ trong tay bạn sẽ xây nhà 1 2 hay 3 tầng như thế nào?</a>
						</h2>
						<div class="post-info">
							<span class="thetime date updated"><i class="fa fa-calendar"></i> <span>29 Tháng Mười, 2020</span></span>
							<span class="thecomment"><i class="fa fa-comments"></i> <a href="#" itemprop="interactionCount">Không có phản hồi</a></span>
						</div>
					</div>
					<a href=https://sieuthinhamau.com/tin-tuc/co-1-5-ty-trong-tay-ban-se-xay-nha-1-2-hay-3-tang-nhu-the-nao" title="Hướng dẫn mua bản vẽ thiết kế nhà ở chưa bao giờ dễ dàng đến thế!" id="featured-thumbnail" class="post-image post-image-left schema-featured">
						<div class="featured-thumbnail">
							<img width="680" height="350" src="https://sieuthinhamau.com/wp-content/uploads/2020/10/Xay-nha-1.5-ty-1-2-3-tang-680x350.jpg" class="attachment-schema-featured size-schema-featured wp-post-image" alt="" loading="lazy" title="">
						</div>                            
					</a>	
				</div>
				<div class="latestPost excerpt ">
					<div>
						<h2 class="title front-view-title">
							<a href="#">Tuyển tập các mẫu thiết kế biệt thự vườn 150m2 1 2 3 tầng với không gian xanh mát</a>
						</h2>
						<div class="post-info">
							<span class="thetime date updated"><i class="fa fa-calendar"></i> <span>3 Tháng Mười, 2020</span></span>
							<span class="thecomment"><i class="fa fa-comments"></i> <a href="#" itemprop="interactionCount">Không có phản hồi</a></span>
						</div>
					</div>
					<a href="#" title="Hướng dẫn mua bản vẽ thiết kế nhà ở chưa bao giờ dễ dàng đến thế!" id="featured-thumbnail" class="post-image post-image-left schema-featured">
						<div class="featured-thumbnail">
							<img width="680" height="350" src="https://sieuthinhamau.com/wp-content/uploads/2020/10/nha-vuon-1-tang-150m2-dep-680x350.png" class="attachment-schema-featured size-schema-featured wp-post-image" alt="" loading="lazy" title="">
						</div>                            
					</a>	
				</div>
				<nav class="navigation pagination" role="navigation" aria-label="Bài viết">
					<h2 class="screen-reader-text">Điều hướng bài viết</h2>
					<div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
						<a class="page-numbers" href="https://sieuthinhamau.com/tin-tuc/page/2/">2</a>
						<a class="page-numbers" href="https://sieuthinhamau.com/tin-tuc/page/3/">3</a>
						<a class="page-numbers" href="https://sieuthinhamau.com/tin-tuc/page/4/">4</a>
						<span class="page-numbers dots">…</span>
						<a class="page-numbers" href="https://sieuthinhamau.com/tin-tuc/page/15/">15</a>
						<a class="next page-numbers" href="https://sieuthinhamau.com/tin-tuc/page/2/">Next <i class="fa fa-angle-right"></i></a></div>
					</nav>


			</div>
		</article>
		<aside id="sidebar" class="sidebar c-4-12 mts-sidebar-sidebar">
			<div id="woocommerce_product_categories-5" class="widget woocommerce widget_product_categories">
				<h3 class="widget-title">Sản phẩm</h3>
				<ul class="product-categories">
					<li class="cat-item cat-item-15 cat-parent"><a class="product-categories-tit" href="#">Biệt thự</a>
						<ul class="children">
							<li class="cat-item cat-item-16"><a href="https://sieuthinhamau.com/san-pham/biet-thu/biet-thu-1-tang/">Biệt thự 1 tầng</a></li>
							<li class="cat-item cat-item-17"><a href="https://sieuthinhamau.com/san-pham/biet-thu/biet-thu-2-tang/">Biệt thự 2 tầng</a></li>
							<li class="cat-item cat-item-18"><a href="https://sieuthinhamau.com/san-pham/biet-thu/biet-thu-3-tang/">Biệt thự 3 tầng</a></li>
						</ul>
					</li>
					<li class="cat-item cat-item-19"><a class="product-categories-tit" href="https://sieuthinhamau.com/san-pham/nha-pho/">Nhà phố</a></li>
					<li class="cat-item cat-item-20 cat-parent"><a class="product-categories-tit" href="https://sieuthinhamau.com/san-pham/noi-that/">Nội thất</a>
						<ul class="children">
							<li class="cat-item cat-item-21"><a href="https://sieuthinhamau.com/san-pham/noi-that/thiet-ke-noi-that/">Thiết kế nội thất</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="woocommerce_product_tag_cloud-4" class="widget woocommerce widget_product_tag_cloud">
				<h3 class="widget-title">Thẻ từ khóa sản phẩm</h3>
				<div class="tagcloud"></div>
			</div>

			<div id="woocommerce_products-3" class="widget woocommerce widget_products">
				<h3 class="widget-title">Sản phẩm xem nhiều</h3>
				<ul class="product_list_widget">
					<li>
						<a href="https://sieuthinhamau.com/san-pham-mau/ban-ve-thiet-ke-nha-biet-thu-4-tang-bt505013/">
							<img width="340" height="255" src="https://sieuthinhamau.com/wp-content/uploads/2017/08/Ban-ve-thiet-ke-nha-biet-thu-4-tang-thurm.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">		
							<span class="product-title">Bản vẽ thiết kế nhà biệt thự 4 tầng BT505013</span>
						</a>		
						<span class="woocommerce-Price-amount amount"><bdi>12,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>50,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
					</li>
					<li>
						<a href="https://sieuthinhamau.com/san-pham-mau/ban-ve-biet-thu-co-dien-1-tang-bt509077/">
							<img width="340" height="255" src="https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="bản vẽ biệt thự cổ điển" loading="lazy" srcset="https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm.jpg 340w, https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm-300x225.jpg 300w, https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm-200x150.jpg 200w, https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm-400x300.jpg 400w, https://sieuthinhamau.com/wp-content/uploads/2017/07/Ban-ve-biet-thu-co-dien-Thurm-800x600.jpg 800w" sizes="(max-width: 340px) 100vw, 340px">		<span class="product-title">Bản vẽ biệt thự cổ điển 1 tầng BT509077</span>
						</a>


						<span class="woocommerce-Price-amount amount"><bdi>5,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>20,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
					</li>
					<li>

						<a href="https://sieuthinhamau.com/san-pham-mau/thiet-ke-nha-110m2-bt241077/">
							<img width="340" height="255" src="https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Thiết kế nhà 110m2" loading="lazy" srcset="https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm.jpg 340w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm-300x225.jpg 300w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm-200x150.jpg 200w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm-400x300.jpg 400w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-110m2-thurm-800x600.jpg 800w" sizes="(max-width: 340px) 100vw, 340px">		<span class="product-title">Thiết kế nhà 110m2 BT241077</span>
						</a>


						<span class="woocommerce-Price-amount amount"><bdi>5,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>20,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
					</li>
					<li>

						<a href="https://sieuthinhamau.com/san-pham-mau/thiet-ke-nha-2-tang-mai-ngoi-bt531077/">
							<img width="340" height="255" src="https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="thiết kế nhà 2 tầng mái ngói" loading="lazy" srcset="https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm.jpg 340w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm-300x225.jpg 300w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm-200x150.jpg 200w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm-400x300.jpg 400w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Thiet-ke-nha-2-tang-mai-ngoi-Thurm-800x600.jpg 800w" sizes="(max-width: 340px) 100vw, 340px">		<span class="product-title">Thiết kế nhà 2 tầng mái ngói BT531077</span>
						</a>


						<span class="woocommerce-Price-amount amount"><bdi>5,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>20,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
					</li>
					<li>

						<a href="https://sieuthinhamau.com/san-pham-mau/nha-cap-4-8x14m-dep-bt122087/">
							<img width="400" height="300" src="https://sieuthinhamau.com/wp-content/uploads/2017/08/Nha-cap-4-8x14m-1-1-400x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://sieuthinhamau.com/wp-content/uploads/2017/08/Nha-cap-4-8x14m-1-1-400x300.jpg 400w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Nha-cap-4-8x14m-1-1-300x225.jpg 300w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Nha-cap-4-8x14m-1-1-768x576.jpg 768w, https://sieuthinhamau.com/wp-content/uploads/2017/08/Nha-cap-4-8x14m-1-1.jpg 800w" sizes="(max-width: 400px) 100vw, 400px">		<span class="product-title">Nhà cấp 4 8x14m đẹp BT122087</span>
						</a>


						<span class="woocommerce-Price-amount amount"><bdi>5,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>24,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
					</li>
			</ul></div>	
		</aside>
	</section>
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
	

</body>
</html>

