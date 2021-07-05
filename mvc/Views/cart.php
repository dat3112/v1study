<form method="post" action="?request=cart&action=update">
	<div id="order">
		<table>
			<thead>
				<tr>
					<th>Ảnh</th>
					<th>Tên</th>
					<th>Số lượng</th>
					<th>Giá</th>
					<th>Thành tiền</th>
					<th>Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(isset($products) && mysqli_num_rows($products)!=0):
					$tong=0;
					foreach($products as $product) {
				?>
					<tr style="text-align: center;">
						<td><span style="height: 10px"><br></span><img src="images/<?=$product['image']?>"></td>
						<td><?=$product['productName']?></td>
						<td><input type="number" name="<?=$product['id']?>" min="1" max="99" value="<?=$_SESSION['cart'][$product['id']]?>"></td>
						<td><?=number_format($product['price'], 0, ',' ,'.')?></td>
						<td><?php $thanhTien=$_SESSION['cart'][$product['id']]*$product['price']; $tong+=$thanhTien; echo $thanhTien;?></td>
						<td><a class="btn btn-outline-primary" href="?request=cart&action=del&productid=<?=$product['id']?>">Xóa</a></td>
					</tr>
				<?php
					}
				?>
					<tr><td colspan="6" style="text-align: center;"><a onclick="return confirm('Are you sure?');" class="btn btn-outline-primary" href="?request=cart&action=xoa&productid=<?=$product['id']?>">Xóa All</a>&emsp;&emsp;<input type="submit" class="btn btn-outline-primary" value="Update">&emsp;&emsp;<a class="btn btn-outline-primary" href="?request=cart&action=thanhtoan">Thanh Toán</a>&emsp;Tổng tiền: <?=$tong?></td></tr>
				<?php
				else:
				?>
					<tr><td colspan="6">Giỏ hàng trống!</td></tr>
				<?php endif;?>
			</tbody>
		</table>
	</div>
</form>