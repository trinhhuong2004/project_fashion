<?php

function addOrder($id_user, $hoten, $sdt, $email, $diachi, $tongtien, $pttt){
    $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$diachi', $tongtien, $pttt);";
    $id=pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
    $sql="INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
    pdo_execute($sql);
}

// Lịch sử đơn hàng user
function list_his_detail($id_order) {
    $sql = "SELECT tbl_order.*, order_detail.* FROM tbl_order
    JOIN order_detail ON tbl_order.id_order = order_detail.id_order
    WHERE order_detail.id_order = $id_order";
    $order = pdo_query($sql);
    return $order;
}

function find_status($n) {
    switch ($n) {
        case '0':
            $mess = "Đã hủy đơn";
            break;
        case '1':
            $mess = "Đang chờ duyệt";
            break;
        case '2':
            $mess = "Đã xác nhận";
            break;
        case '3':
            $mess = "Đang vận chuyển";
            break;
        case '4':
            $mess = "Hoàn thành";
            break;
        
        default:
            $mess = "Đang chờ duyệt";
            break;
    }
    return $mess;
  }

function method_payment($n) {
    switch ($n) {
        case '1':
            $pay = "Thanh toán khi nhận";
            break;
        case '2':
            $pay = "Thanh toán VNPay";
            break;
        
        default:
            $pay = "Thanh toán khi nhận";
            break;
    }
    return $pay;
}

function list_history_order($id_account) {
    $sql = "SELECT * FROM tbl_order
    WHERE id_user = $id_account
    ORDER BY id_order DESC";
    $order = pdo_query($sql);
    return $order;
}
function list_one_history_order($id_account, $id_order) {
    $sql = "SELECT * FROM tbl_order
    WHERE id_user = $id_account AND id_order = $id_order
    ORDER BY id_order DESC";
    $order = pdo_query($sql);
    return $order;
}

function update_status($id_order) {
    $sql = "UPDATE tbl_order SET trangthai = 0 WHERE id_order = $id_order";
    pdo_execute($sql);
}
?>