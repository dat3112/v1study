<section class="container col-md-8">
		<form method="post">
			<section class="form-group">
				<label>Ho ten:</label>
				<input type="text" name="hoTen" value="<?=$user['hoTen']?>" class="form-control">
				<label>Ngày sinh:</label>
				<input type="date" name="ngaySinh" value="<?=$user['ngaySinh']?>" class="form-control">
				<label>Địa chỉ:</label>
				<input type="text" name="diaChi" value="<?=$user['diaChi']?>" class="form-control">
				<label>Email:</label>
				<input type="text" name="email" value="<?=$user['email']?>" class="form-control">
				<input type="submit" name="capNhatThongTin" value="Cập nhật thông tin" >
			</section>
		</form>

		<form method="post">
	<?php
		
				foreach($phuongthuc as $rs){
	?>
		<section class="container-fluid"><input checked="checked" type="radio" name="maPT" value="<?=$rs['id']?>"><?=$rs['tenPT']?></a></section>
	<?php
			}
		
	?>
		<input class="btn btn-outline-primary" onclick="alert('Đặt hàng thành công')" type="submit" name="order" value="ĐẶT HÀNG">
		</form>
	</section>