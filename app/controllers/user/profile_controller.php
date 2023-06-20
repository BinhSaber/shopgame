<?php

namespace App\Controllers\user;

use App\Controllers\Controller;
use Core\View;
use App\Models\user;
use App\Models\profile;
use App\Models\admin\category;
use App\Models\sanpham;

class profile_controller extends Controller
{
    
    public function index() {
        $category = new category();
        $product = new sanpham();
        $user = new user();

        // if(isset($_GET['user'])){
        //     $id=$_GET['user'];
        // } else {
        //     $id='';
        // }

        if(isset($_POST['capnhatprofile'])){
            $id = $_POST['id'];
            $tenhienthi = $_POST['tenhienthi'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $user->update_profile($tenhienthi, $email ,$phone, $id);
            header('location: /logout');
        }

        // $load1user=$user->get_one_user($id);
        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return View::render('profile', [
            'listdm'=>$listdm,
            'listsp'=>$listsp,
            // 'load1user'=>$load1user
        ]);
    }
    public function doimk() {
        $category = new category();
        $product = new sanpham();
        $user = new user();

        $listsp = $product->loadall_sanpham();
        $listdm = $category->listdm();
        return View::render('doimk', [
            'listdm'=>$listdm,
            'listsp'=>$listsp,
        ]);
    }

    public function lichsubill() {

        return View::render('lichsubill', [

        ]);
    }

}