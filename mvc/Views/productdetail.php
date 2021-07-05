<section class="container-fluid productdetail">
	<section class="container-fluid row">
		<section class="col-md-5"><img src="images/<?=$productdetail['image']?>" witch="100%"></section>
		<section class="col-md-7">
			<section class="container-fluid"><?=$productdetail['productName']?></section>
			<section class="container-fluid row">
				<section class="col-md-5" style="text-align: left;color:<?=$productdetail['available']==1?'green':'grey'?>"> <?=$productdetail['available']==1?'Còn hàng':'Hết hàng'?></section>
				<section class="col-md-7" style="text-align: right;"><?=number_format($productdetail['price'],0,',','.')?> VNĐ</section>
			</section>
			<section style="margin: 20px 0;text-align: left;"><?=$productdetail['shortDescription']?></section>
		<section>
			<form method="post" action="?request=cart&action=add&productid=<?=$productdetail['id']?>">
				<section class="row">
					<label>Số lượng: </label>&nbsp;
					<input value="1" type="number" name="number" class="form-control col-md-2" min="1" max="99">&nbsp;
					<input type="submit" value="Đặt mua" class="btn btn-primary">
				</section>
			</form>
		</section>
		</section>
	</section>
	<section>DES</section>
</section>