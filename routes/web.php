<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User
Route::get('/', function () {
    return view('client.home');
});

Route::get('/dangky', function () {
    return view('client.dangky');
});

Route::get('/dangnhap', function () {
    return view('client.dangnhap');
});

Route::get('/doimatkhau', function () {
    return view('client.doimk');
});

Route::get('/thong-tin-nguoi-dung', function () {
    return view('client.profile');
});

Route::get('/sanpham', function () {
    return view('client.sanpham');
});

Route::get('/chitietsanpham', function () {
    return view('client.chitietsanpham');
});


// Admin
Route::get('/wp-admin', function () {
    return view('admin.home');
});

Route::get('/wp-admin/ql-user', function () {
    return view('admin.qlUser');
});

Route::get('/wp-admin/ql-category', function () {
    return view('admin.qlCategory');
});
