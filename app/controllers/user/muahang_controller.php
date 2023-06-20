<?php

namespace App\Controllers\user;

use App\Controllers\Controller;
use Core\View;
use  App\Models\user;
use  App\Models\muahang;
use App\Models\admin\category;
use App\Models\sanpham;


class muahang_controller extends Controller
{

    public function lichsubill() {
        $category = new category();
        $product = new sanpham();
        $user = new user();
        $bill = new muahang();

        $listbill = $bill->show_bill();
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return View::render('lichsumua', [
            'listdm'=>$listdm,
            'listsp'=>$listsp,
            'listbill'=>$listbill
        ]);
    }
    

}