<!DOCTYPE html>
<html>
<head>
	<title>From Đăng Kí</title>
</head>
<body>
	<form action="ketqua.php" method="post">
	<table width="400" border="2" align="center" cellpadding="5" >
		<tr>
			<th colspan="2">Đăng Kí</th>
		</tr> 
        <tr>
        	<td>Full Name</td>
			<td><input type="text" name="fullname" size="30" placeholder=" Nhập full name "></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" size="30" placeholder="Nhập tên"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="Password" size="30" placeholder="Nhập mật khẩu"></td>
		</tr>
		<tr>
			<td>Nhập lại Password</td>
			<td><input type="text" name="nlpw" size="30" placeholder="Nhập lại password"></td>
		</tr>
		<tr>
			<td>Giới tính </td>
			<td>
				<input type="radio" name="sex" value="nam"> Nam 
				<input type="radio" name="sex" value="nu"> Nữ
			</td>
		</tr>
		<tr>
			<td>Ngày sinh </td>
			<td>
				<select name="ngay">
					<option value="ngay1">Ngày 1</option>
					<option value="ngay2">Ngày 2</option>
					<option value="ngay3">Ngày 3</option>
					<option value="ngay4">Ngày 4</option>
					<option value="ngay5">Ngày 5</option>
					<option value="ngay6">Ngày 6</option>
					<option value="ngay7">Ngày 7</option>
					<option value="ngay8">Ngày 8</option>
					<option value="ngay9">Ngày 9</option>
					<option value="ngay10">Ngày 10</option>
					<option value="ngay11">Ngày 11</option>
					<option value="ngay12">Ngày 12</option>
					<option value="ngay13">Ngày 13</option>
					<option value="ngay14">Ngày 14</option>
					<option value="ngay15">Ngày 15</option>
				</select>
				<select name="Tháng" >
					<option value="thang"> Tháng 1 </option>
					<option value="thang"> Tháng 2</option>
					<option value="thang"> Tháng 3 </option>
					<option value="thang"> Tháng 4 </option>
					<option value="thang"> Tháng 5 </option>
					<option value="thang"> Tháng 6 </option>
					<option value="thang"> Tháng 7</option>
					<option value="thang"> Tháng 8 </option>
					<option value="thang"> Tháng 9 </option>
					<option value="thang"> Tháng 10</option>
				</select>
				<select name="Năm" >
					<option value="Năm">1991</option>
					<option value="Năm">1992</option>
					<option value="Năm">1993</option>
					<option value="Năm">1994</option>
					<option value="Năm">1995</option>
					<option value="Năm">1996</option>
					<option value="Năm">1997</option>
					<option value="Năm">1998</option>
					<option value="Năm">1999</option>
					<option value="Năm">2000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Địa Chỉ</td>
			<td><textarea cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Avarta</td>
			<td><input type="file" name="Avarta"></td>
		</tr>
		<tr>
			<td>Sở Thích</td>
			<td> 
				<label>
					<input type="checkbox" name=" xemphim"> Xem Phim
				</label>
				<label><input type="checkbox" name=" thethao"> Thể thao</label>
				<label ><input type="checkbox" name=" Web"> Web</label>
			</td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<input type="reset" value="làm lại"> &nbsp; &nbsp;
				<input type="submit" value=" OK">
			</td>
		
		</tr>
	
	</table>
	</from>
</body>
</html>