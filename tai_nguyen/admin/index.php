 

<?php
include "../model/pdo.php";  
include "../model/danhmuc.php";  
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "header.php"; 


//controler
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){

        case 'adddm':
            // Kiểm tra xem người có click vào nut add hay không 
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenloai = $_POST['tenloai'];
                $sql="insert into danhmuc(name) values('$tenloai')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
           
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $sql="select * from danhmuc order by id desc";
            $listdanhmuc=pdo_query($sql);
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sql="delete from danhmuc where id=".$_GET['id'];
                pdo_execute($sql);
                
            }
            $sql="select * from danhmuc order by id desc";
            $listdanhmuc=pdo_query($sql);
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){ 
                $sql="select * from danhmuc where id=".$_GET['id'];
                $dm=pdo_query_one($sql);
                }    
                include "danhmuc/update.php";
                break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $sql="update danhmuc set name='".$tenloai."' where id=".$id;
                pdo_execute($sql);
                $thongbao= "Cập nhật thành công";
            }    
            $sql="select * from danhmuc order by id desc";
            $listdanhmuc=pdo_query($sql);
            include "danhmuc/list.php";
            break;

 // CONTROLLER CHO PHẦN SẢN PHẨM

                case 'addsp':
                   
                    // kiểm tra xem người dùng có click vào add hay k      
                   if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $soluong=$_POST['soluong'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                    // echo "Sorry, there was an error uploading your file.";
                      }

                       insert_sanpham($tensp,$giasp,$hinh,$mota ,$soluong,$iddm);
                    // phải có iddm vì nó là khóa ngoại
                        $thongbao="thêm thành công!";
                   }
                   $listdanhmuc=loadall_danhmuc();
                   //var_dump($listdanhmuc);
                   include "sanpham/add.php";
                break;
                case "listsp":
                    if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                        $keyw=$_POST['keyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $keyw='';
                        $iddm=0;
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($keyw,$iddm);
                    include "sanpham/list.php";
                break;
                case 'xoasp':
                    // muốn xóa thì phải kiểm tra id
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        delete_sanpham($_GET['id']);
                    }
    
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/list.php";
                break;
                case "suasp":
                    //vì là hàm có trả về nên 
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                   $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                break;
                case "updatesp":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $iddm=$_POST['iddm'];
                        $id=$_POST['id'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $soluong=$_POST['soluong'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                          } else {
                        echo "Sorry, there was an error uploading your file.";
                          }
                       update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                       $thongbao="cập nhật thành công!";
                       }
                       $listsanpham=loadall_sanpham("",0);
                       $listdanhmuc=loadall_danhmuc();
                    include "sanpham/list.php";
                break;
                case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                break;


                case 'xoatk':
                    // muốn xóa thì phải kiểm tra id
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        delete_taikhoan($_GET['id']);
                        
                    }
    
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                break;
                 

                case "suatk":
                    //vì là hàm có trả về nên 
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                   $listtaikhoan=loadall_taikhoan($_GET['id']);
                    }
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/update.php";
                break;

            default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}

include "footer.php";
?>