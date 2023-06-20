<?php


namespace App\Controllers\admin;

use App\Controllers\Controller;
use App\Models\admin\category;
use App\Models\Page_home;
use App\Models\user;
use App\Models\sanpham;
use Core\View;

class qlCategoryController extends Controller
{
    public function index()
    {
        $category = new category();
        $product = new sanpham();
        // themdm
        if(isset($_POST['themdm']) && ($_POST['themdm'])){
            $tendm = $_POST['tendm'];
            $hinhdm = $_FILES['hinhdm']['name'];
            $target_dir = "/ASM/assets/upload/";
            $target_file = $target_dir . basename($_FILES["hinhdm"]["name"]);
            $category->adddm($tendm,$hinhdm);
            header("location:/wp-admin/ql-category");
        }
        // xoadm
        if(isset($_POST['xoadm'])){
            $id = $_POST['id'];
            $category->xoadm($id);
            header('location: /wp-admin/ql-category');
        }
        // updatedm
        if(isset($_POST['capnhatdm'])) {
            $id = $_POST['id'];
            $tendm = $_POST['tendm'];
            $hinhdm = $_FILES['hinhdm']['name'];
            $category->capnhatdm($id,$tendm,$hinhdm);
            header('location: /wp-admin/ql-category');
        }
        
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return view::render('admin/qlCategory', [
            'listdm'=>$listdm,
            'listsp'=>$listsp,
        ]);
    }
}