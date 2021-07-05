<?php
	class Cmodel{
		var $connect;
		function __construct(){
			$this->connect=new MySQLi("localhost","root","","project_phone");
			mysqli_set_charset($this->connect,"utf8");
		}
		function signin(){
			$tenDangNhap=$_POST['tenDangNhap'];
			$matKhau=md5($_POST['matKhau']);
			$query="select*from members where tenDangNhap='$tenDangNhap' and matKhau='$matKhau'";
			$result=$this->connect->query($query);
			return mysqli_num_rows($result); //trả về SỐ lượng bản ghi
		}

		function getHangs(){
			$query="select*from hangsanxuat where status";
			$result=$this->connect->query($query);
			return $result; // trả về các bản ghi
		}

		function getName(){
			$name=$_POST['name'];
			$query="select*from product where productName like'%$name%'";
			$result=$this->connect->query($query);
			return $result; // trả về các bản ghi
		}
		function getPrice(){
			$query="select*from timmucgia where status";
			$result=$this->connect->query($query);
			return $result; // trả về các bản ghi
		}

		function home(){
			$query="select*from product where status=1";
			$result=$this->connect->query($query);
			return $result; // trả về các bản ghi
		}

		function productdetail(){
			$productid=$_GET['productid'];
			$query="select*from product where id='$productid'";
			$result=$this->connect->query($query);  // 1 bản ghi
			return mysqli_fetch_array($result);
		}

		function timhang(){
			$hangid=$_GET['hangid'];
			$query="select*from product where hangid='$hangid' and status";
			$result=$this->connect->query($query);
			return $result;
		}
		function mucGia(){
			$mucGia=$_GET['mucGia'];
			if ($price=($mucGia)<5000000){
				$price=explode('<', $mucGia);
				$query="select*from product where price<=$price[1] and status=1";
			}
			else{
				$price=explode('-', $mucGia);
				$query="select*from product where price>=$price[0] and price<=$price[1] and status=1";
			}
			$result=$this->connect->query($query);
			return $result;
			}
		function addToCart(){
			$productId=$_GET['productid'];
			if(isset($_SESSION['cart'][$productId])){
				if(isset($_POST['number'])){
					$_SESSION['cart'][$productId]+=$_POST['number'];
				}else{
					$_SESSION['cart'][$productId]++;
				}
				
			}else{
				if(isset($_POST['number'])){
					$_SESSION['cart'][$productId]=$_POST['number'];
				}else{
					$_SESSION['cart'][$productId]=1;
				}
			}
		}

		function delCart(){
			$productId=$_GET['productid'];
				unset($_SESSION['cart'][$productId]);
		}

		function xoaCart(){
			unset($_SESSION['cart']);
		}


		function getProductFromCart(){
			if(isset($_SESSION['cart'])){
				$listId='0';
				foreach(array_keys($_SESSION['cart']) as $key)
					$listId=$listId.','.$key;
				$query="select*from product where id in($listId)";
				$result=$this->connect->query($query);
				return $result;
			}
			//return null;
		}

		function updateTTKH(){
			$username=$_SESSION['user'];
			if (isset($_POST['capNhatThongTin'])){
				$hoTen=$_POST['hoTen'];
				$ngaySinh=$_POST['ngaySinh'];
				$diaChi=$_POST['diaChi'];
				$email=$_POST['email'];
				$query="update members set hoTen='$hoTen',ngaySinh='$ngaySinh',diaChi='$diaChi',email='$email' where tenDangNhap='$username'";
				$result=$this->connect->query($query);
				return $result;
			}
		}	

		function getUser(){
			$username=$_SESSION['user'];
			$query="select*from members where tenDangNhap='$username'";
			$result=$this->connect->query($query);
			$user=mysqli_fetch_array($result);
			return $user;
		}
			

		function phuongThucThanhToan(){
			$query="select*from phuongthuc where status=1";
			$result=$this->connect->query($query);
			//if(mysqli_num_rows($result)!=0){
			return $result;
		}

		function datHang(){
			if(isset($_POST['maPT'])){
				$maPT=$_POST['maPT'];
				$User=$this->getUser();
				$maKhach=$User['id'];
				$query="insert donhang(maKhach,maPT,ngayDatHang) values('$maKhach','$maPT',now())";
				$this->connect->query($query);

				$query="select*from donhang order by id desc limit 1";
				$result=$this->connect->query($query);
				$maDonHang=mysqli_fetch_array($result);
				$maDonHang=$maDonHang['id'];
				foreach(array_keys($_SESSION['cart']) as $maSP):
					$soLuongMua=$_SESSION['cart'][$maSP];
					$sanPham=mysqli_fetch_array($this->connect->query("select*from product where id=".$maSP));
					$giaLucMua=$sanPham['price'];
					$query="insert chitietdonhang(maDonHang,maSP,soLuongMua,giaLucMua) values('$maDonHang','$maSP','$soLuongMua','$giaLucMua')";
					$this->connect->query($query);
				endforeach;
			}
		}


	}
?>