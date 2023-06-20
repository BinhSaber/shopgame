<?php
namespace App\Models;

class muahang extends database
{
    public function show_bill()
    {
        $showbill = 'SELECT * FROM `donhang` where makh = "' . $_SESSION['user'][0] . '" ';
        return $this->pdo_query($showbill);
    }

}
