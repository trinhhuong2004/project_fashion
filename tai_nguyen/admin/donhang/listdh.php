
<html>
<head>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
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
    
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH ĐƠN HÀNG</h1>
         </div>
         <div class="row2 form_content ">
           <table style="text-align: center;">
            <tr>
                <th></th>
                <th>MÃ ĐH</th>
                <th>HỌ TÊN</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>TỔNG TIỀN</th>
                <th>PTTT</th>
                <th>NGÀY ĐẶT</th>
                <th>TRẠNG THÁI</th>
                <th colspan="2">THAO TÁC</th>
                <th></th>
            </tr>
               <?php
               
               foreach($loadAll_donhang as $dh){

                   extract($dh);
                    if($pttt == 1){
                        $pt = "Thanh toán khi nhận hàng";
                    }else{
                        $pt = "Thanh toán VNPAY";
                    }
                    if($trangthai == 1){
                        $tt = "Chờ phê duyệt";
                    }elseif($trangthai == 2){
                        $tt = "Đã xác nhận";
                    
                    }elseif($trangthai == 3){
                        $tt = "Đang vận chuyển";
                    }else{
                        $tt = "Đã hoàn thành";
                    }
                  $chitietdh="index.php?act=chitietdh&iddh=".$id_order;
                  $sua_dh="index.php?act=updatedh&iddh=".$id_order;
                  
                   echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id_order.'</td>
                        <td>'.$hoten.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$email.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$tongtien.'</td>
                        <td>'.$pt.'</td>
                        <td>'.$ngaydathang.'</td>
                        <td>'.$tt.'</td>
               
                    <td> 
                    <a href="'.$sua_dh.'"><input type="button" value="Cập nhật"></a>
                    </td>
                    <td> <a href="'.$chitietdh.'"><input type="button" value="Chi tiết"></a> </td>
                    </tr>';
               }
               ?>
               
           </table>
           </div>
          
         </div>
        </div>
      

       
    </div>
