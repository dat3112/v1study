@extends('index')

@section('content')
<section>
		<article class="article-gioithieu">
			<div id="content_box">
				<div id="post-40" class="g post post-40 page type-page status-publish">
					<div class="single_page">
						<div class="breadcrumb">
							<div><i class="fa fa-home"></i></div> 
							<div class="root"><a href="https://sieuthinhamau.com">&ensp;Home&nbsp;</a></div>
							<div><i class="fa fa-caret-right"></i></div>
							<div><span>&ensp;My account</span></div></div>
						<div class="header-gioithieu">
							<h1 class="title entry-title">My account</h1>
						</div>
						<div class="post-content box mark-links entry-content">		
							<div class="woocommerce">
								<h4>Đăng nhập</h4>
								<form class="woocommerce-form woocommerce-form-login login" method="post">
									<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
										<label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label>
										<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">			
									</p>
									<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
										<label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
										<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
									</p>
									<p class="form-row">			
										<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
										<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme"value="forever"> 
										<span>Ghi nhớ mật khẩu</span>	
									</p>
									<p class="woocommerce-LostPassword lost_password">
										<a href="https://sieuthinhamau.com/tai-khoan/lost-password/">Quên mật khẩu?</a>
									</p>
								</form>


							</div>								
						</div>
					</div>
				</div>
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
@endsection