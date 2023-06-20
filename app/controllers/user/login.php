<?php

namespace App\Controllers\user;

use  App\Controllers\Controller;
use  App\Models\Page_home;
use App\Models\admin\category;
use  Core\View;
use  App\Models\user;

class login extends Controller
{

    public function index()
    {
        $category = new category();
        
        
        // $thongbao = "";
        if (isset($_POST['dangnhap'])) {
            $userName = $_POST['username'];
            $passWord = $_POST['password'];
            $login = new user();
            $dangnhap=$login->dangnhap($userName, $passWord);
            if(isset($dangnhap)&&(sizeof($dangnhap)>0)) {
                foreach($dangnhap as $result) {
                    extract($result);
                    if($userName == $username && $passWord == $password) {
                        $_SESSION['user'][0]=$id;
                        $_SESSION['user'][1]=$tenhienthi;
                        $_SESSION['user'][2]=$vaitro;
                        $_SESSION['user'][3]=$username;
                        $_SESSION['user'][4]=$email;
                        $_SESSION['user'][5]=$phone;
                        if($vaitro == 'admin') {
                            header('location: /wp-admin');
                        } else {
                            header('location: /');
                        }
                    } else {
                        echo '<script>alert(Tài khoản hoặc mật khẩu không chính xác)</script>';
                    }
                }  
            }
            
        }

        $listdm = $category->listdm();
        return View::render('dangnhap', [
            'listdm'=>$listdm
        ]);
    }
    public function dangky()
    {
        $sign = new user();
        $category = new category();

        if(isset($_POST['dangky'])) {
            $userName =  $_POST['username'];
            $passWord = $_POST['password'];
            $email = $_POST['email'];
            $sign->dangky($userName,$passWord,$email);
            $dangnhap=$sign->dangnhap($userName, $passWord);
            if(isset($dangnhap)&&(sizeof($dangnhap)>0)) {
                foreach($dangnhap as $result) {
                    extract($result);
                    if($userName == $username && $passWord == $password) {
                        $_SESSION['user'][0]=$id;
                        $_SESSION['user'][1]=$tenhienthi;
                        $_SESSION['user'][2]=$vaitro;
                        $_SESSION['user'][3]=$username;
                        $_SESSION['user'][4]=$email;
                        $_SESSION['user'][5]=$phone;
                        header('location: /');
                    } else {
                        header('location: /dangky');
                    }
                }  
            }
        }
        $listdm = $category->listdm();
        return View::render('dangky', [
            'listdm'=>$listdm
        ]);
    }
}
