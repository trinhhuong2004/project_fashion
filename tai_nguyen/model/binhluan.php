<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan') ";
    pdo_execute($sql);
}
function loadone_binhluan($idpro){
    $sql="SELECT * FROM `binhluan` JOIN taikhoan ON binhluan.iduser = taikhoan.id JOIN sanpham ON binhluan.idpro = sanpham.id 
    WHERE sanpham.id = $idpro ORDER BY binhluan.id DESC;";
    $listbl=pdo_query($sql);
    return  $listbl;
}
function loadall_binhluan(){
    $sql="SELECT *,binhluan.id FROM `binhluan` JOIN taikhoan ON binhluan.iduser = taikhoan.id JOIN sanpham ON binhluan.idpro = sanpham.id 
    GROUP BY binhluan.id
    ORDER BY binhluan.id DESC;;";
    $listbl=pdo_query($sql);
    return  $listbl;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE id = $id";
    pdo_execute($sql);
}

?>