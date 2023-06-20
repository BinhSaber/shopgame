<?php

namespace App\Controllers\user;

use App\Controllers\Controller;
use Core\View;
use App\Models\admin\category;
use App\Models\sanpham;
use App\Models\Page_home;
use App\Models\user;



class home extends Controller
{
    public function index()
    {
        $category = new category();
        $product = new sanpham();

        
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return view::render('/home', [
            'listdm'=>$listdm,
            'listsp'=>$listsp
        ]);
    }
}
