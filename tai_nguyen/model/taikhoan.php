<?php
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`) VALUES ( '$email', '$user','$pass'); ";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'" ;
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id){
    $sql="UPDATE taikhoan SET trang_thai = 1 WHERE id = $id";
  pdo_execute($sql);
}
function update_taikhoan_mo($id){
    $sql="UPDATE taikhoan SET trang_thai = 0 WHERE id = $id";
  pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql="delete from taikhoan where id=".$id ;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return  $listtaikhoan;
}
// ?>