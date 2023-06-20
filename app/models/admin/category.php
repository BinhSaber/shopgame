<?php

namespace App\Models\admin;

use App\Models\database;

class category extends database
{
    
    public function adddm($tendm,$hinhdm){
        $sql = "INSERT INTO danhmuc(tendm,hinhdm)
        VALUES('$tendm','$hinhdm')";
        $this->pdo_execute($sql);
    }

    public function xoadm($id)
    {
        $sql = "DELETE FROM danhmuc  WHERE id = ?";
        $this->pdo_execute($sql,$id);
    }
    
    public function listdm(){
        $sql="SELECT * FROM danhmuc ORDER BY id";
        return $this->pdo_query($sql);
    }
    
    public function load1dm($id){
        $sql="SELECT * FROM danhmuc WHERE id = ?";
        return $this->pdo_query_one($sql,$id);
    }
    
    public function capnhatdm($id,$tendm,$hinhdm){
        if($hinhdm!="")
        $sql = "UPDATE danhmuc SET tendm='".$tendm."' , hinhdm='".$hinhdm."' WHERE id=".$id;
        else
        $sql = "UPDATE danhmuc SET tendm='".$tendm."' WHERE id=".$id;
        $this->pdo_execute($sql);
    }
    
   
}
