<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('bai1','Ccontroller@demo');
Route::get('bai2', function () {
    return view('bai2');
});



//admin
Route::prefix('admin')->group(function(){
    Route::get('controlpanel','AController@controlpanel');
    Route::get('/','AController@admin');
    Route::post('/','AController@postAdmin');

    //hang
    Route::get('hang','AController@hang');
    Route::get('themHang','AController@hangthem');
    Route::post('themHang','AController@hangthempost');    

    //san pham    
    Route::get('sanpham','AController@sanpham');
    Route::get('themSanPham','AController@sanphamthem');
    Route::post('themSanPham','AController@sanphampost');    
    Route::get('suaSanPham','AController@sanphamsua');    
    Route::get('sanpham/del/{id}','AController@sanphamdel');

    //order  
    Route::prefix('order')->group(function(){
        Route::get('pending','AController@orderPending');
        Route::get('detail/{id}','AController@orderDetail');
        Route::post('detail/{id}','AController@orderDetailPost');
    });
});

    



//cart     
Route::prefix('cart')->group(function(){
    Route::post('order','Ccontroller@postorderCart');
    Route::get('order','Ccontroller@orderCart');
    Route::get('delall','Ccontroller@delAllCart');
    Route::post('/','Ccontroller@updateCart');
    Route::get('{id}','Ccontroller@addToCart');
    Route::get('del/{id}','Ccontroller@delFromCart');
    Route::get('/','Ccontroller@viewCart');

});


Route::get('search/hangid/{id}','Ccontroller@hang');

Route::get('search/mucgia/{mucgia}','Ccontroller@mucgia');

Route::get('search/ten/{flag?}', function () {
    return view('search');
});

Route::post('search/ten/{flag?}','Ccontroller@ten');



Route::get('index', function () {
    return view('index');
});

Route::get('home', function () {
    return view('home');
});

Route::get('signin/{flag?}', function () {   //có hoặc ko $flag
    return view('signin');
});

Route::post('signin/{flag?}','Ccontroller@signin');

Route::get('detail/productid/{id}', 'Ccontroller@detail');

Route::get('cart', function () {
    return view('cart');
});

Route::get('news', function () {
    return view('news');
});

Route::get('register', function () {
    return view('register');
});

Route::post('register','Ccontroller@register');

Route::get('search/hangid/{hangid}','Ccontroller@hang');

Route::get('logout', function () {
    session()->forget('user');        // dung de huy session
    return redirect('/');			  // dieu huong giong header
});
