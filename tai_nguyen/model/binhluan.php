<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan') ";
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql="select * from binhluan order by id desc;";
    $listbl=pdo_query($sql);
    return  $listbl;
}
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id ;
    pdo_execute($sql);
}

?>