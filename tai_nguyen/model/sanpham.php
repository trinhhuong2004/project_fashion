<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$soluong,$iddm){
    $sql="insert into sanpham(name,price,img,mota,soluong,iddm) values('$tensp', '$giasp','$hinh', '$mota','$soluong', '$iddm')";
    // $sql="INSERT INTO sanpham ( name,price,img,mota,iddm) VALUES ( '$tensp', '$giasp','$hinh', '$mota', '$iddm',)";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id ;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function loadone_sanphamCart ($idList) {
    $sql = 'SELECT * FROM sanpham WHERE id IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function load_ten_dm($iddm){
    if($iddm>0){
    $sql="select * from sanpham where id=".$iddm;
    $dm=pdo_query($sql);
    extract($dm);
    return $dm;
    }else{
        return "";
    }
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top02(){
    $sql="select * from sanpham where 1 order by luotxem asc limit 0,1";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!=""){
       // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}',`img` = '{$hinh}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }else{
     //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
      $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }
 
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
?>