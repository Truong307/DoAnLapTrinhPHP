<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanhBaoLuaDaoController;
use App\Http\Controllers\HoSoController;
use App\Http\Controllers\MeoTimDocontroller;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\ChiTietBaiDangController;
use App\Http\Controllers\BaiDangController;
use App\Http\Controllers\AdminController;

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

//chua dang nhap
Route::get('/', [TrangChuController::class, 'index'])->name('trang-chu');
Route::get('/canhbaoluadao', [CanhBaoLuaDaoController::class, 'index'])->name('canh-bao-lua-dao');
Route::get('/meotimdo', [MeoTimDoController::class, 'index'])->name('meo-tim-do');
Route::get('/chitietbaidang', [ChiTietBaiDangController::class, 'index'])->name('chi-tiet-bai-dang');

//nguoi dung da dang nhap
Route::get('/dangbai', [BaiDangController::class, 'index'])->name('dang-bai');
Route::post('dangbai', [BaiDangController::class, 'store'])->name('xl-bai-dang');
Route::get('/trangchu', [TrangChuController::class, 'index'])->name('trang-chu');
Route::get('/hoso', [HoSoController::class, 'index'])->name('ho-so');


// admin
Route::get('/trangquanly', [AdminController::class, 'index'])->name('trang-quan-ly');