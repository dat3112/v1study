<?php
	if(mysqli_num_rows($products)==0){
		echo"Không có sản phẩm nào";
	}else{
		foreach($products as $rs){
?>
		<section class="product">
			<section id="a">
				<a href="?request=detail&productid=<?=$rs['id']?>"><img width="40%";  src="images/<?=$rs['image']?>"></a>
			</section>	
			<section id="a" style="color: black" class="container-fluid">
				<a href="?request=detail&productid=<?=$rs['id']?>"><?=$rs['productName']?></a>
			</section>
			<section id="a" class="container-fluid"><span style="text-align:right; color:green;font-weight:bold;"> Giá:&nbsp</span><?=number_format($rs['price'], 0, ',' ,'.')?><span style="color:red; text-align: left;"> VNĐ</span></section>
			<section><a href="?request=cart&action=add&productid=<?=$rs['id']?>" class="btn btn-outline-primary">Add to Cart</a></section>
		</section>
<?php
		}
	}
?>