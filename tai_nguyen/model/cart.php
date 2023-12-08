
<?php

function viewcart($del){
  
    global $img_path;
    $tong=0;
                $i=0;
                if($del==1){
                  $xoasp_th='<th>Action</th>';
                
                  $xoasp_td2='<td></td>' ;
              }else{
                  $xoasp_th='';
              
                  $xoasp_td2='';
              }
                echo ' <thead>
                <tr>
                  <th>Product</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Sub Total</th>
                  '.$xoasp_th.'
                </tr>
              </thead>';
                foreach($_SESSION['mycart'] as $cart){
                     
                    $hinh=$img_path.$cart[2];
                    $ttien=$cart[3] * $cart[4];
                    $tong+=$ttien;
                    if($del==1){
                       
                        $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><i title="Remove Item From Cart"  class="fa fa-trash cart-remove-item" ></i></a></td>';   
                       
                    }else{
                        
                        $xoasp_td='';
                        
                    }
                  
                    echo '
                   
                     <tbody>
                    <tr>
                      <td><a href="">
                        <div class="product-image"><img alt="Honour" src="'.$hinh.'"></div>
                        </a></td>
                      <td><div class="product-title"> <a href="">'.$cart[1].'</a> </div></td>
                      <td><ul>
                          <li>
                            <div class="base-price price-box"> <span class="price">'.$cart[3].'</span> </div>
                          </li>
                        </ul></td>
                      <td><div class="input-box">
                          <select data-id="100" class="quantity_cart" name="quantity_cart">
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                           
                          </select>
                        </div></td>
                      <td><div class="total-price price-box"> <span class="price">'.$ttien.'</span> </div></td>
                      '.$xoasp_td.'
                    </tr>
                  </tbody> ';
                  $i+=1;
                }
                   echo '<div class="mb-30">
                   <div class="row">
                    
                   </div>
                 </div>
                 <hr>
                 <div class="mtb-30">
                   <div class="row">
                     <div class="col-sm-6">
                       <div class="cart-total-table commun-table">
                         <div class="table-responsive">
                           <table class="table">
                             <thead>
                               <tr>
                                 <th colspan="2">Cart Total</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td>Item(s) Subtotal</td>
                                 <td><div class="price-box"> <span class="price">'.$tong.'</span> </div></td>
                               </tr>
                               <tr>
                                 <td>Shipping</td>
                                 <td><div class="price-box"> <span class="price">0.00</span> </div></td>
                               </tr>
                               <tr>
                                 <td><b>Amount Payable</b></td>
                                 <td><div class="price-box"> <span class="price"><b>'.$tong.'</b></span> </div></td>
                                 '.$xoasp_td2.'
                               </tr>

                             </tbody>
                           </table>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>';
}


function tongdonhang(){
 
  
  $tong=0;
              
             
              foreach($_SESSION['mycart'] as $cart){
                  
                  $ttien=$cart[3] * $cart[4];
                  $tong+=$ttien;
                  
                  
              }
                return $tong;
}

function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
  $sql="insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
  return pdo_execute_return_lastInsertId($sql);
}


function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
  $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
  return pdo_execute_return_lastInsertId($sql);
}

function loadone_bill($id){
  $sql="select * from bill where id=".$id;
  $bill=pdo_query_one($sql);
  return $bill;
}

function method_pay($n) {
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
function show_status($n) {
  switch ($n) {
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

// Thanh toán
// $_SESSION['order'] = [$id_user, $ngay_dat, $tong_don, $name, $email, $phone, $dia_chi, $pttt];
function tao_id_order($id_user, $ngay_dat, $tong_don, $name, $email, $phone, $dia_chi, $pttt) {
  $sql = "INSERT INTO tbl_order (id_user, ngaydathang, tongtien, hoten, email, sdt, diachi, pttt)
  VALUES('".$id_user."', '".$ngay_dat."', '".$tong_don."', '".$name."', '".$email."', '".$phone."', '".$dia_chi."', '".$pttt."')";
  return pdo_execute_return_lastInsertId($sql);
}

function them_order_detail($new_id_order, $id_san_pham, $ten_san_pham, $hinh_anh, $so_luong, $don_gia) {
  $sql = "INSERT INTO order_detail (id_order, id_pro, tensp, hinhanh, soluong, dongia)
  VALUES(?, ?, ?, ?, ?, ?)";
  pdo_execute($sql, $new_id_order, $id_san_pham, $ten_san_pham, $hinh_anh, $so_luong, $don_gia);
}

function get_show_bill_info($order_id){
  $sql="SELECT * FROM tbl_order WHERE id_order = $order_id";
  $show = pdo_query_one($sql);
  return $show;
}
function get_show_bill_detail($order_id){
  $sql="SELECT * FROM order_detail WHERE id_order = $order_id";
  $show = pdo_query($sql);
  return $show;
}
?>