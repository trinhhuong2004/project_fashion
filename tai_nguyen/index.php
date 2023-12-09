<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/order.php";
include "model/cart.php";
include "model/binhluan.php";
// include "order-complete.php";
///ảnh lên home
include "global.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$sanpham = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
$dstop02= loadall_sanpham_top02();
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        // Giỏ hàng
        case 'addcart':
            if (isset($_POST['addtocart'])) {
                $idpro = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img = $_POST['img'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $tong = $price * $soluong;

                $check = false;
                $i = 0;
                foreach ($_SESSION['mycart'] as $item) {
                    if ($item[0] == $idpro) {
                        $_SESSION['mycart'][$i][4] += $soluong;
                        $check = true;
                        break;
                    }
                    $i++;
                }
                if (!$check) {
                    $add_sp = [$idpro, $name, $price, $img, $soluong, $mota, $tong];
                    $_SESSION['mycart'][] = $add_sp;
                }
                // load lại trang không bị cộng dồn số lượng
                echo '<script>window.location.href = window.location.href;</script>';
            }
            include "view/cart/viewcart.php";
            break;
        // Xóa giỏ hàng
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case "viewcart":
            include "view/cart/viewcart.php";
            break;
        case 'thanhtoan':
            include "view/thanhtoan/thanhtoan.php";
            break;
        case 'payment':
            if (isset($_POST['dathang'])) {
                $id_user = $_POST['id_user'];
                $ngay_dat = date('Y-m-d H:i:s');
                $tong_don = $_POST['tong_don'];

                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $dia_chi = $_POST['dia_chi'];

            //     // Lấy post dựa theo phương thức thanh toán
                if (isset($_POST['cod'])) {
                    $pttt = $_POST['cod'];
                } else if (isset($_POST['redirect'])) {
                    $pttt = $_POST['redirect'];
                }

            //     // Thêm dữ liệu vào session
                $_SESSION['order'] = [$id_user, $ngay_dat, $tong_don, $name, $email, $phone, $dia_chi, $pttt];

            //     // Chuyển hướng dựa theo phương thức thanh toán
                if (isset($_POST['cod'])) {
                    echo "<script> window.location.href='index.php?act=bill';</script>";
                } else if (isset($_POST['redirect'])) {
                    include "view/thanhtoan/thanhtoanvnpay.php";
                }
            }
            break; 
            
            case 'bill':
                if (isset($_SESSION['order']) && !empty($_SESSION['order'])) {
                    $order = $_SESSION['order'];
                    // Tạo id đơn hàng và thêm đơn hàng vào donhang trong database
                    $new_id_order = tao_id_order($order[0], $order[1], $order[2], $order[3], $order[4], $order[5], $order[6], $order[7]);
                    $_SESSION['id_order'] = $new_id_order;
                    foreach ($_SESSION['mycart'] as $cart) {
                        // Thêm vào đơn hàng chi tiết vào database // $add_sp = [$idpro, $name, $price, $img, $soluong, $mota, $tong];
                        $don_gia = $cart[2] * $cart[4];
                        them_order_detail($new_id_order, $cart[0], $cart[1], $cart[3], $cart[4], $don_gia);
                        // Xóa giỏ hàng sau khi đặt hàng thành công
                        unset($_SESSION['mycart']);
                    }
                }
                include "view/thanhtoan/bill.php";
                break;

                // Lịch sử đơn hàng
            case 'list_history_order':
                if (isset($_GET['id_account']) && $_GET['id_account'] > 0) {
                    $list_his_order = list_history_order($_GET['id_account']);
                }
                include "view/history_order/list_history_order.php";
                break;
    
            case 'detail_history':
                if (isset($_GET['id_order']) && $_GET['id_order'] > 0) {
                    $list_his_detail = list_his_detail($_GET['id_order']);
                    $list_his_order = list_one_history_order($_GET['id_account'], $_GET['id_order']);
                }
                include "view/history_order/detail_history.php";
                break;
    
            case 'update_status_order':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $id_order = $_POST['id_order'];
                    update_status($id_order);
                    echo '<script>window.location.href="index.php?act=list_history_order&id_account=' . $_SESSION['user']['id'] . '"</script>';
                }
                include "view/history_order/detail_history.php";
                break;
                // End lịch sử đơn hàng

            case "sanpham":
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm =0;
                }
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
    
        case "sanphamct":
            if(isset($_POST['submit'])){
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_POST['iduser'];
                $ngaybinhluan = $_POST['ngaybinhluan'];
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
               if(!isset($_SESSION['user'])){
                $mess = "Bạn phải đăng nhập để bình luận";
               }else{
                $mess = "";
               }
            }else{
                $error = "Bạn cần điền thông tin bình luận";
            }
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                $loadone_binhluan = loadone_binhluan($_GET['idsp']);

            }  
       
            include "view/sanphamct.php";
            break;
       
            
            
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công.Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng ";
            }
            include "view/taikhoan/dangky.php";
            break;
        case "dangnhap":
            // unset($_SESSION['user']);
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $_SESSION['pass'] = $checkuser;
                    header('Location: index.php?act=home');
                    // $thongbao="bạn đã đăng nhập thành công ";
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng đăng ký";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case "edit_taikhoan":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] =checkuser($user, $pass);

                header('Location: index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case "quenmk":
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail=checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        //Thêm bình luận
        
       
        case "thoat":
            session_unset();
            header('Location: index.php?act=dangnhap');
            // include "view/gioithieu.php";
            break;
        
        case "gioithieu":
            include "view/gioithieu.php";
            break;
     
        case "lienhe":
            include "view/lienhe.php";
           
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
