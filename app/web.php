<?php

//admin
use App\Controllers\admin\homeadminControlleradmin;
use App\Controllers\admin\qlbillControlleradmin;
use App\Controllers\admin\qlCategoryController;
use App\Controllers\admin\qluserController;


//user

use App\Controllers\user\home;
use App\Controllers\user\login;
use App\Controllers\user\muahang_controller;
use App\Controllers\user\profile_controller;
use App\Controllers\user\quenmk_controller;
use App\Controllers\user\sanpham_controller;
use Core\Route;


// admin
Route::GET('/', [home::class, 'index']);
Route::GET('/home', [home::class, 'index']);
// /account
Route::GET('/dangnhap', [login::class, 'index']);
Route::POST('/dangnhap', [login::class, 'index']);

Route::GET('/dangky', [login::class, 'dangky']);
Route::POST('/dangky', [login::class, 'dangky']);
Route::GET('/logout', function () {
    session_start();
    session_unset();
    header("location: /");
});

// /show sp
Route::GET('/sanpham', [sanpham_controller::class, 'index']);
Route::POST('/sanpham', [sanpham_controller::class, 'index']);

// /spchitiet
Route::GET('/chitietsanpham', [sanpham_controller::class, 'chitietsanpham']);
Route::POST('/chitietsanpham', [sanpham_controller::class, 'chitietsanpham']);

// /profile
Route::GET('/profile', [profile_controller::class, 'index']);
Route::POST('/profile', [profile_controller::class, 'index']);

// /lichsumuahang
Route::GET('/lichsubill', [muahang_controller::class, 'lichsubill']);

// /doimk
Route::GET('/doimk', [profile_controller::class, 'doimk']);
Route::POST('/doimk', [profile_controller::class, 'doimk']);

// /giohang
Route::GET('/giohang', [giohang_controller::class, 'index']);
Route::POST('/giohang', [giohang_controller::class, 'index']);





//admin
Route::GET('/wp-admin', [homeadminControlleradmin::class, 'index']);
Route::POST('/wp-admin', [homeadminControlleradmin::class, 'index']);

// ql user 
Route::GET('/wp-admin/ql-user', [qlUserController::class, 'index']);
Route::POST('/wp-admin/ql-user', [qlUserController::class, 'index']);

// category 
Route::GET('/wp-admin/ql-category', [qlCategoryController::class, 'index']);
Route::POST('/wp-admin/ql-category', [qlCategoryController::class, 'index']);

// // change product 
// Route::GET('/wp-admin/change-product', [changeproductadmin::class, 'index']);
// Route::POST('/wp-admin/change-product', [changeproductadmin::class, 'index']);

// // ql bill
// Route::GET('/wp-admin/ql-bill', [qlbillControlleradmin::class, 'index']);

