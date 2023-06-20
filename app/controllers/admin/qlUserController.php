<?php


namespace App\Controllers\admin;

use App\Controllers\Controller;
use App\Models\admin\category;
use App\Models\user;
use App\Models\sanpham;
use Core\View;

class qlUserController extends Controller
{
    public function index()
    {
        $category = new category();
        $user = new user();
        $product = new sanpham();
        
        // capnhat profile
        if(isset($_POST['capnhatuser'])){
            $id = $_POST['id'];
            $tenhienthi = $_POST['tenhienthi'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $vaitro = $_POST['vaitro'];
            $user->update_user($tenhienthi, $email ,$phone, $vaitro, $id);
            header('location: /wp-admin/ql-user');
        }
        
        $listuser = $user->get_all_user();
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return view::render('admin/qlUser', [
            'listdm'=>$listdm,
            'listsp'=>$listsp,
            'listuser'=>$listuser
        ]);
    }
}