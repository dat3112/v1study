<?php
include"Models/Cmodel.php";
$model=new Cmodel();
$hangs=$model->getHangs();
$price=$model->getPrice();
class Ccontroller{
	function __construct(){
		global $model;
		if(isset($_GET['request']))
			switch($_GET['request']){
				case'home':
					$products=$model->home();
					include"Views/home.php";
					break;
				case'thanhtoan':
					$model->updateTTKH();
					$user=$model->getUser();
					$phuongthuc=$model->phuongThucThanhToan();
					$model->datHang();
					include"Views/thanhtoan.php";
					if(isset($_POST['order'])){
						header("location:?request=home");
						unset($_SESSION['cart']);
					}
					break;		
				case'cart':
					if(isset($_GET['action'])){
						switch($_GET['action']){
							case'add':
								$model->addToCart();
								header("location:?request=cart");
								break;
							case 'del':
								$model->delCart();
								break;	
							case 'xoa':
								$model->xoaCart();
								break;
							case'thanhtoan':
								if(isset($_SESSION['user']))
									header("location:?request=thanhtoan");
								else
									header('location:?request=signin&nav=1');

								break;
							case'update':
								foreach (array_keys($_SESSION['cart']) as $key){
				 					$_SESSION['cart'][$key]=$_POST[$key];
								}
								break;
							default:
								# code...
								break;	
						}
					}
					$products=$model->getProductFromCart();
					include"Views/cart.php";
					break;
				case'search':
					if(isset($_GET['hangid'])){
						$products=$model->timhang();
						include"Views/home.php";
					}
					if(isset($_POST['name'])){
						$products=$model->getName();
						include"Views/home.php";
					}
					if(isset($_GET['mucGia'])){
						$products=$model->mucGia();
						include"Views/home.php";
					}
					break;
				
				case'detail':
					$productdetail=$model->productdetail();
					include"Views/productdetail.php";	
					break;		
				case'news':
					include"views/news.php";
					break;
				case'feedback':
					include"views/feedback.php";
					break;
				case'signin':
					if(isset($_POST['dangnhap'])){
						if($model->signin()==0){
							$alert="Tên đăng nhập hoặc mật khẩu không đúng!";
							include"Views/signin.php";
						}else{
							// $alert="OK";
							//include"Views/signin.php";
							$_SESSION['user']=$_POST['tenDangNhap'];
							if(isset($_GET['nav'])==1){
								header("location:?request=thanhtoan");
							}else{
								header("location:?request=home");
							}


							//include"Views/home.php";
							//header("Location: .");


						}
					}else{
						include"Views/signin.php";
					}
					break;
				case'register':
					include"Views/register.php";
					break;
				case 'logout':
					unset($_SESSION['user']);
					header("location:?request=home");
					break;
			


			}
		else{
			include"views/home.php";
		}


	}
}
?>

