<?php session_start(); include"Controllers/Ccontroller.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<header class="container-fluid row">
			<section class="col-md-3 logo">Logo</section>
			<section class="col-md-9 banner">Banner</section>
	</header>
	<nav>
		<section class="col-md-2"><a href="?request=home">Home</a></section>
		<section class="col-md-2"><a href="?request=news">News</a></section>
		<section class="col-md-2"><a href="?request=feedback">Feedback</a></section>
		<section class="col-md-2"><a href="?request=cart">Cart</a></section>
		<?php if(isset($_SESSION['user'])):?>
			<section class="col-md-4">Hello: <?=$_SESSION['user']?>[<a href="?request=logout">Logout</a>]</section>
		<?php else:?>
			<section class="col-md-2"><a href="?request=signin">Sign in</a></section>
			<section class="col-md-2"><a href="?request=register">Register</a></section>
		<?php endif;?>
	</nav>



	<aside>
		<h3 style="text-align: center;">Hãng sản xuất</h3>
		<?php foreach($hangs as $hang){?>
			<section class="container-fluid">
				<a href="?request=search&hangid=<?=$hang['id']?>"><?=$hang['tenHang']?></a>
			</section>
		<?php }?>
	</aside>
	<article>
		<?php new Ccontroller();?>
	</article>
	<aside>
		<p style="text-align: center;">Tìm kiếm theo tên</p>
		<span style="text-align: center;">
	 	<form method="post" action="?request=search">
	 		<input type="text" style="width: 75%; float: left;" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
	 		<input type="submit" value ="Tìm" style="width: 25%; float: left;" class="btn btn-outline-primary" >
	 	</form>
	 	</span>
	 	<br>
	 	<br>
	 <hr style="border: green 1px solid">
	<p style="text-align: center;">Tìm kiếm theo giá</p>
	<?php
		foreach($price as $rs){
	?>
		<section class="container-fluid"><a href="?request=search&mucGia=<?=$rs['mucGia']?>"><?=$rs['mucGia']?></a></section>
	<?php
		}
	?>
	</aside>
	<footer>Footer</footer>
</body>
</html>