<?php

namespace App\Controllers\user;

use App\Controllers\Controller;
use Core\View;
use App\Models\admin\category;
use App\Models\sanpham;
use App\Models\pay;
use App\Models\pay_sp;

class sanpham_controller extends Controller
{
    public function index()
    {
        $category = new category();
        $product = new sanpham();

        if(isset($_GET['danhmuc'])){
            $id=$_GET['danhmuc'];
        } else {
            $id='';
        }
        
        $load1dm = $category->load1dm($id);
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return View::render('sanpham', [
            'listdm'=>$listdm,
            'load1dm'=>$load1dm,
            'listsp'=>$listsp
        ]);
    }
}