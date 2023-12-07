<!-- CONTAIN START 


              
              $tong=0;
       foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];-->
<section class="ptb-95">
<div class="container">
      <div class="row">
        <div class="col-xs-12 mb-xs-30">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $tong=0;
                  $i=0;
                foreach ($_SESSION['mycart'] as $cart) {
                    
                      $hinh=$img_path.$cart[2];
                     $ttien=$cart[3]*$cart[4];
                     $tong+=$ttien;
                     $xoasp="index.php?act=delcart&idcart=".$i;
                     echo '<tr>
                     <td><a href="product-page.html">
                       <div class="product-image"><img alt="Honour" src="'.$hinh.'"></div>
                       </a></td>
                     <td><div class="product-title"> <a href="product-page.html">'.$cart[1].'</a> </div></td>
                     <td><ul>
                         <li>
                           <div class="base-price price-box"> <span class="price">'.$cart[3].'</span> </div>
                         </li>
                       </ul></td>
                     <td><div class="input-box">
                         <select data-id="100" class="quantity_cart" name="quantity_cart">
                          
                           <option value="2">'.$cart[4].'</option>
                           
                          
                         </select>
                       </div></td>
                     <td><div class="total-price price-box"> <span class="price">'. $ttien.'</span> </div></td>
                     <td><a href="'.$xoasp.'"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a></td>
                   </tr>';
                   $i+=1;
                }

                
        ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-30">
        <div class="row">
          <div class="col-sm-6">
            <div class="mt-30"> <a href="shop.html" class="btn btn-black"><span><i class="fa fa-angle-left"></i></span>Continue Shopping</a> </div>
          </div>
          <div class="col-sm-6">
            <div class="mt-30 right-side float-none-xs"> <a class="btn btn-black">Update Cart</a> </div>
          </div>
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
                      <td><b>Amount Payable</b></td>
                      <td><div class="price-box"> <span class="price"><b><?=$tong?></b></span> </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-xs-12">
            <div class="right-side float-none-xs"> <a href="checkout.html" class="btn btn-black">Proceed to checkout<span><i class="fa fa-angle-right"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
      
    
    
   
  </section>
  <!-- CONTAINER END --> 