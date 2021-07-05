<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;
use App\HangSanxuat;
use App\Product;
use App\DonHang;
use App\Member;
use App\orderDetail;

class AController extends Controller
{
	function controlpanel(){
		$title='THÊM SẢN PHẨM';
		return view('admin.controlpanel',compact('title'));
	}

	function postAdmin(Request $request){
		$username=$request->input('tenDangNhap');
		$password=md5($request->input('matKhau'));
		$admin=Admin::where('tenDangNhap',$username)->where('matKhau',$password)->first();
		if($admin==null){
			$alert='username or password wrong!';
			return view('admin.login',compact('alert'));
		}
		$request->session()->put('admin',$username);
		return redirect('admin/controlpanel');
	}

	function admin(){
		return view('admin.login');
	}

	//hang
	function hang(){
		$hang=HangSanxuat::all();
		return view('admin.hang.hang',compact('hang'));
	}
	function hangthem(){
		$title='THÊM HÃNG';
		$hangs=HangSanxuat::all();
		return view('admin.hang.hangthem',compact('title','hangs'));
	}
	function hangthempost(Request $request){
		$tenHang = $request->input('tenHang');
        $status = $request->input('status');
        HangSanxuat::insert(["tenHang"=>$tenHang, "status"=>$status]);
        return redirect()->back()->with('alert','Thêm hãng thành công');
	}

	//san pham
	function sanpham(){
		$product=DB::table('product as a')->join('hangsanxuat as b','a.hangId','b.id')->select('a.*','tenHang')->get();
		$hangs=hangsanxuat::all();
		return view('admin.sanpham.sanpham',compact('product','hangs'));
	}

	function sanphamthem(){
		$title='THÊM SẢN PHẨM';
		$hangs=HangSanxuat::all();
		return view('admin.sanpham.sanphamthem',compact('title','hangs'));
	}
	function sanphampost(Request $request){
		$hangId = $request->input('hangId');
		$productName = $request->input('productName');
        $image = $request->file('image');
        $price = $request->input('price');
        $description = $request->input('mota');
        $status = $request->input('status');
        $img=time().'_'.$image->getClientOriginalName();
        $image->move('public/images',$img);
        Product::insert(["hangId"=>$hangId, "productName"=>$productName,"image"=>$img ,"price"=>$price,"shortDescription"=>0 ,"description"=>0,"available"=>0 , "status"=>$status]);
        return redirect()->back()->with('alert','Thêm sản phẩm thành công');
	}
	function sanphamdel($id){
		session()->forget('$id');
        return redirect()->back();
	}
	function sanphamupdate(){

	}

	//order
	function orderPending(){
		$title='ĐƠN HÀNG CHƯA XỬ LÝ';
		$orders=DB::table('members as a')->join('donhang as b','a.id','b.maKhach')->join('phuongthuc as c','b.maPT','c.id')->select('b.*','hoTen','tenPT')->get();
		return view('admin.order.pendingorder',compact('title','orders'));
	}
	function orderDetail($id){
		$title='Thông tin đơn hàng';
		$order=DB::table('members as a')->join('donhang as b','a.id','b.maKhach')->select('a.*')->where('b.id',$id)->first();
		$phuongthuc=DB::table('product as a')->join('chitietdonhang as b','a.id','b.maSP')->join('donhang as c','b.maDonHang','c.id')->join('phuongthuc as d','c.maPT','d.id')->select('a.*','b.*','c.*','d.*')->where('c.id',$id)->get();
		return view('admin.order.detailorder',compact('title','order','phuongthuc'));
	}
	function orderDetailPost($id, Request $request){
		DonHang::where('id',$id)->update(['status'=>$request->input('status')]);
		$alert='Đã chuyển trạng thái thành công';
		return redirect()->back()->with(['alert'=>$alert]);
	}
}
