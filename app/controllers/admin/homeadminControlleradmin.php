<?php

namespace App\Controllers\admin;

use App\Controllers\Controller;
use App\Models\admin\HomeModels;
use App\Models\history_bill;
use App\Models\admin\category;
use App\Models\sanpham;
use Core\View;

class homeadminControlleradmin extends Controller
{
    public function index()
    {
        $category = new category();
        $product = new sanpham();
        // themsp
        if(isset($_POST['themsp'])&&($_POST['themsp'])){
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $hinhsp=$_FILES['hinhsp']['name'];
            $target_dir = "/ASM/assets/upload/";
            $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
            $mota=$_POST['mota'];
            $trangthaisp=$_POST['trangthaisp'];
            $tkgame=$_POST['tkgame'];
            $mkgame=$_POST['mkgame'];
            $madm=$_POST['maloai'];
            $product->addsp($tensp,$giasp,$hinhsp,$mota,$trangthaisp,$tkgame,$mkgame,$madm);
        }
        //  updatesp
        if(isset($_POST['capnhatsp'])) {
            $id = $_POST['id'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $hinhsp=$_FILES['hinhsp']['name'];
            $target_dir = "/ASM/assets/upload/";
            $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
            $mota=$_POST['mota'];
            $trangthaisp=$_POST['trangthaisp'];
            $tkgame=$_POST['tkgame'];
            $mkgame=$_POST['mkgame'];
            $madm=$_POST['maloai'];
            $product->capnhatsp($id,$tensp,$giasp,$hinhsp,$mota,$trangthaisp,$tkgame,$mkgame,$madm);
            header('location: /wp-admin');
        }
        // xoasp
        if(isset($_POST['xoasp'])){
            $id = $_POST['id'];
            $product->xoasp($id);
            header('location: /wp-admin');
        }

        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return view::render('admin/home', [
            'listdm'=>$listdm,
            'listsp'=>$listsp
        ]);
    }
}
