<?php
    function loadAll_donhang(){
        $sql = "SELECT * FROM tbl_order ORDER BY id_order DESC";
        $result = pdo_query($sql);
        return $result;
    }
    function update_donhang($trangthai,$id){
        $sql = "UPDATE tbl_order SET trangthai = $trangthai WHERE id_order = $id";
        $result = pdo_query($sql);
        return $result;
    }
    function loadOne_donhang($id){
        $sql = "SELECT * FROM `tbl_order` 
        JOIN order_detail ON tbl_order.id_order = order_detail.id_order 
        JOIN taikhoan ON tbl_order.id_user = taikhoan.id WHERE tbl_order.id_order = $id
        ORDER BY tbl_order.id_order DESC";
        $result = pdo_query_one($sql);
        return $result;
    }


?>