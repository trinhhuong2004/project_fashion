
<html>
<head>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }
        td {
            color: #666;
        }
        /* Các phần tử nút */
        input[type="button"] {
            padding: 15px 30px;
            border: none;
            background-color: black ;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="button"]:hover {
            background-color: #b9a06f;
        }
    </style>
</head>

    <div class="boxcenter">

            <div class="row2 font_title">
                <h1>ĐƠN HÀNG CHI TIẾT</h1>
            </div>
            <div class="row2 form_content ">
                <table>
                    <tr>
                 
                        <th>MÃ ĐH</th>
                        <th>Mã KH</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>Hình ẢNH</th>
                        <th>HỌ TÊN</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                      
                
                    </tr>
                    <?php
                    extract($donhang);
                    if ($pttt == 1) {
                        $pt = "Thanh toán khi nhận hàng";
                    } else {
                        $pt = "Thanh toán VNPAY";
                    }
                    if ($trangthai == 1) {
                        $tt = "Chờ phê duyệt";
                    } elseif ($trangthai == 2) {
                        $tt = "Đã xác nhận";
                    } elseif ($trangthai == 3) {
                        $tt = "Đang vận chuyển";
                    } else {
                        $tt = "Đã hoàn thành";
                    }

                    ?>
                    <tr>
                        <td><?= $id_order ?></td>
                        <td><?= $user ?></td>
                        <td><?= $tensp ?></td>
                        <td><img src="../upload/<?= $hinhanh ?>" width="50px"></td>
                        <td><?= $hoten ?></td>
                        <td><?= $sdt ?></td>
                      
             

                
                    </tr>
            

            
            </div>
    </div>
    <div class="row" >
    <div >
                <table style="margin-top: 80px;">
                    <tr>
                        
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>TỔNG TIỀN</th>
                        <th>PTTT</th>
                        <th>NGÀY ĐẶT</th>
                        <th>TRẠNG THÁI</th>
                 
                    </tr>
                    <?php
                    extract($donhang);
                    if ($pttt == 1) {
                        $pt = "Thanh toán khi nhận hàng";
                    } else {
                        $pt = "Thanh toán VNPAY";
                    }
                    if ($trangthai == 1) {
                        $tt = "Chờ phê duyệt";
                    } elseif ($trangthai == 2) {
                        $tt = "Đã xác nhận";
                    } elseif ($trangthai == 3) {
                        $tt = "Đang vận chuyển";
                    } else {
                        $tt = "Đã hoàn thành";
                    }
         
                    ?>
                    <tr>
                      
                        <td><?= $email ?></td>
                        <td><?= $diachi ?></td>
                        <td><?= $tongtien ?></td>
                        <td><?= $pt ?></td>
                        <td><?= $ngaydathang ?></td>
                        <td><?= $tt ?></td>
            
                
                    </tr>
            

            
            </div>

    </div>
   