<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Member;
use App\phuongThucThanhToan;
use App\PhuongThuc;
use App\DonHang;
use App\Product;
use App\OrderDetail;


class Ccontroller extends Controller
{
    function demo(){
    	$alert="Test";
    	return view('bai1',compact('alert'));
    }



//search
    function hang($id){
        $product = DB::table('product')->where('hangid',$id)->get();
        return view('search',compact('product'));
    }
    function ten($flag,Request $request){
        $tenSanPham = $request->input('name');
        $product = DB::table('product')->where('productName',"like", '%'.$tenSanPham.'%')->get();
        return view('search',compact('product'));
    }
    function mucgia($gia){
        if ($gia=="<5000000"){
            $price=explode('<', $gia); //tach chuoi
            // tách thành 2 mảng 1 và 2
            // $product = DB::table('product')->where('price',$price[1])->and('status',1)->get();
            $product = DB::table('product')->where([['price', '<=', $price[1]],['status', 1],])->get();
        }
        else
        {
        $price=explode('-', $gia);
        $product = DB::table('product')->where([['price', '>=', $price[0]],['price', '<=', $price[1]],['status', 1]])->get();
        }
        return view('search',compact('product'));
    }
//order
    function postorderCart(Request $request){
        $maPT=$request->input('phuongThucThanhToan');
        $maKhach=Member::where('tenDangNhap',session('user'))->first()->id;
        DonHang::insert([
            'maKhach'=>$maKhach,
            'maPT'=>$maPT,
            'ngayDatHang'=>now()
        ]);
        $hoTen=$request->input('hoTen');
        $diaChi=$request->input('diaChi');
        $email=$request->input('email');
        $dienThoai=$request->input('dienThoai');
        Member::where('tenDangNhap',session('user'))->update([
            'hoTen'=>$hoTen,
            'diaChi'=>$diaChi,
            'email'=>$email,
            'dienThoai'=>$dienThoai
        ]);

        $maDonHang=DonHang::orderBy('id','desc')->first()->id;
        foreach (array_keys(session('cart')) as $index) {
            $quantity=session("cart.$index");
            // dd($quantity);
            $price=Product::where('id',$index)->first()->price;
            OrderDetail::insert([
                'maDonHang'=>$maDonHang,
                'maSP'=>$index,
                'soLuongMua'=>$quantity,
                'giaLucMua'=>$price
            ]);
        }
        $request->session()->forget('cart');
        return redirect('/'); 
    }
//cart
    function orderCart(){
        if(!session('user')){
            return redirect('signin/1');
        }else{
            $member=Member::where('tenDangNhap',session('user'))->first();
            $phuongThucs=PhuongThuc::all();
            return view('order', compact('member','phuongThucs'));

        }
    }
    function updateCart(Request $request){
        foreach (array_keys(session('cart')) as $key){
            session(["cart.$key"=>$request->input($key)]);
        }
        return redirect()->back();
    }
    function delAllCart(){
        session()->forget('cart');
        return redirect()->back();
    }
    function viewCrat(){
        return view('cart');
    }
    function delFromCart($id){
        session()->forget("cart.$id");
        return redirect()->back(); //back request
    }
    function addToCart($id){
        if(!session("cart.$id")){
            session(["cart.$id"=>1]);
        }else{
            session(["cart.$id"=>session("cart.$id")+1]);
        }
        return redirect('cart'); //tạo request mới
    }
//signin
    function signin($flag=null,Request $request){
    	$tenDangNhap=$request->input('tenDangNhap');
    	$matKhau=md5($request->input('matKhau'));
    	if(Member::where('tenDangNhap',$tenDangNhap)->where('matKhau',$matKhau)->count()==0){
    		$alert="Tên đăng nhập hoặc mật khẩu không đúng!";
    		return redirect()->back()->with('alert',$alert);
    	}
    	session(["user"=>$tenDangNhap]);
        if($flag!=null){
            return redirect('cart/order');
        }else{
            return redirect('/');
        }
    }

    function detail($id){
        $productdetail = DB::table('product')->where('id',$id)->first();
        return view('productdetail',compact('productdetail'));
    }


    function register(Request $request){
        $tenDangNhap = $request->input('tenDangNhap');
        $matKhau = md5($request->input('matKhau'));
        $hoTen = $request->input('hoTen');
        $ngaySinh = $request->input('ngaySinh');
        $diaChi = $request->input('diaChi');
        $dienThoai = $request->input('dienThoai');
        $email = $request->input('email');
        $facebook = $request->input('facebook');
        $gioiTinh = $request->input('gioiTinh');
        Member::insert(["tenDangNhap"=>$tenDangNhap, "matKhau"=>$matKhau, "hoTen"=>$hoTen, "ngaySinh"=>$ngaySinh, "diaChi"=>$diaChi, "dienThoai"=>$dienThoai, "email"=>$email, "facebook"=>$facebook, "gioiTinh"=>$gioiTinh]);
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
        
    }
}
