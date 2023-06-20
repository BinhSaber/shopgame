<?php

namespace App\Models;

class sanpham extends database
{
   public function loadall_sanpham() {
      $sql="SELECT * FROM sanpham"; 
      $listsp = $this->pdo_query($sql);
      return $listsp;
   }
   public function addsp($tensp,$giasp,$hinhsp,$mota,$trangthaisp,$tkgame,$mkgame,$madm){
      $sql = "INSERT INTO sanpham(tensp,giasp,hinhsp,mota,trangthaisp,tkgame,mkgame,maloai)
      VALUES('$tensp','$giasp','$hinhsp','$mota','$trangthaisp','$tkgame','$mkgame','$madm')";
      $this->pdo_execute($sql);
   }
   function capnhatsp($id,$tensp,$giasp,$hinhsp,$mota,$trangthaisp,$tkgame,$mkgame,$madm){
      if($hinhsp!="")
      $sql= "UPDATE sanpham SET tensp='".$tensp."', giasp='".$giasp."' , hinhsp='".$hinhsp."', mota='".$mota."', trangthaisp='".$trangthaisp."', tkgame='".$tkgame."', mkgame='".$mkgame."', maloai='".$madm."' WHERE id=".$id;
      else 
      $sql= "UPDATE sanpham SET tensp='".$tensp."', giasp='".$giasp."' , mota='".$mota."', trangthaisp='".$trangthaisp."', tkgame='".$tkgame."', mkgame='".$mkgame."', maloai='".$madm."' WHERE id=".$id;
      $this->pdo_execute($sql);
   }
   function load_sanpham_cungloai($id,$maloai) {
      $sql ="select * from sanpham where maloai=".$maloai." AND id <> ".$id;
      $listsanpham = pdo_query($sql);
      return $listsanpham;
   }
   function load1sp($id){
      $sql="SELECT * FROM sanpham WHERE id=".$id;
      $load1sp=$this->pdo_query_one($sql);
      return $load1sp;
   }
   public function xoasp($id)
    {
        $sql = "DELETE FROM sanpham  WHERE id = ?";
        $this->pdo_execute($sql,$id);
    }
}