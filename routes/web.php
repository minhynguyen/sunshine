<?php

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
use App\ChuDe;
use App\Mau;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/admin', function () {
//     return view('backend/index');
// });
Route::get('/', 'frontendController@index');
Route::get('/checkout', 'frontendController@showviewcheckout');
Route::get('/testMail', 'frontendController@testMail');
Route::post('/sunshine/public/checkout', 'frontendController@checkoutJson')->name('checkout');




Route::get('index', function(){
    $dsChuDe = ChuDe::all();
    return json_encode($dsChuDe);
});
//
//Route::get('danhsachmau', function(){
//    $dsMau = Mau::all();   // truy van dua tren model
////    $dsMau = DB::table('mau')->get();  //truy van truc tiep tren database ko thong qua model (query builder)
//    
//    return json_encode($dsMau); //định dạng hiển thị dạng json
//});
//Route::get('laydanhsach/all', 'ChuDeController@layhetdanhsach');
//Route::get('laydanhsach/1', 'ChuDeController@laydongdau');
// Route::resource('chude', 'ChuDeController'); // route hỗ trợ lấy toàn bộ controller.
// Route::resource('mau', 'MauController');
// Route::resource('xuatxu', 'XuatXuController');
// Route::resource('loai', 'LoaiController');
// Route::resource('sanpham', 'SanPhamController');
// Route::resource('nhanvien', 'NhanVienController');
// Route::resource('quyen', 'QuyenController');
// hàm này dùng để thêm tiền tố giữa trang admin và trang khách	
Route::group(['prefix'=>'admin'], function(){	
	Route::get('chude/pdf', 'ChuDeController@pdf')->name('chude.pdf');
	Route::get('chude/excel', 'ChuDeController@excel')->name('chude.excel');
	Route::resource('chude', 'ChuDeController'); // route hỗ trợ lấy toàn bộ controller.
	
	Route::resource('mau', 'MauController');
	Route::resource('xuatxu', 'XuatXuController');
	Route::resource('loai', 'LoaiController');
	Route::resource('sanpham', 'SanPhamController');
	Route::resource('nhanvien', 'NhanVienController');
	Route::resource('quyen', 'QuyenController');
});

// Route::get('/', function () {
//     return view('frontend.index');
// });


Auth::routes();

Route::get('/user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::get('/home', 'HomeController@index')->name('home');
