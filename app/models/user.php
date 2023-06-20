<?php

namespace App\Models;

use App\Models\account;

class user extends database
{
    public function dangky($username, $password, $email)
    {
        $sql_sign = "INSERT INTO `khachhang`(`username`, `password`, `email`, `trangthaikh`, `vaitro`) VALUES (?,?,?,?,?)";
        $this->pdo_execute($sql_sign, $username, $password, $email, '0', 'thành viên');
    }
    public function dangnhap($username, $password)
    {
        $sql_login = "SELECT * FROM `khachhang` WHERE (email = ? or username = ?) and password = ?";
        return $this->pdo_query($sql_login, $username, $username, $password);
    }

    public function get_all_user()
    {
        $sql = 'SELECT * FROM `khachhang` ';
        $user = $this->pdo_query($sql);
        return $user;
    }

    public function get_one_user($id)
    {
        $sql = 'SELECT * FROM `khachhang` where id = ? ';
        $user =  $this->pdo_query_one($sql, $id);
        return $user;
    }

    // Update user for admin
    public function update_user($tenhienthi, $email ,$phone, $vaitro, $id)
    {

        $sql = "UPDATE `khachhang` SET `tenhienthi`=?,`email`=?,`phone`=?,`vaitro`=?  WHERE id = ?";
        $this->pdo_query($sql, $tenhienthi, $email ,$phone, $vaitro, $id);
        return true;
    }

    // Update profile for user
    public function update_profile($tenhienthi, $email ,$phone, $id)
    {

        $sql = "UPDATE `khachhang` SET `tenhienthi`=?,`email`=?,`phone`=?  WHERE id = ?";
        $this->pdo_query($sql, $tenhienthi, $email ,$phone, $id);
        return true;
    }


}
