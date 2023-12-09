
  
  <?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    
}

?>
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><a href="cart.html">Cart</a>/</li>
            <li><span>Checkout</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-content" >
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Thông tin đặt hàng</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                <form action="index.php?act=payment" id="paymentForm" method="post" class="main-form full">
                  <div class="mb-20">
                    <div class="row">
                      
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            // unset($_SESSION['mycart']);
                            // $add_sp = [$idpro, $name, $price, $img, $soluong, $mota, $tong];
                            foreach ($_SESSION['mycart'] as $cart) :
                                $img = $img_path. $cart[3];
                                $thanhtien = $cart[2] * $cart[4];
                                $total += $thanhtien;
                            ?>

                                <tr>
                                    <td><img width="50px" src="<?= $img ?>" alt=""></td>
                                    <td><?= $cart[4]?></td>
                                    <td><?= $thanhtien?></td>
                                </tr>
                            <?php endforeach; ?>

                            <tr class="order-total">
                                <th>Tổng Đơn Hàng</th>
                                <td colspan="2"><span class="order-total-ammount">$ <?= $total ?></span></td>
                                <input type="hidden" name="tong_don" value="<?=$total?>">
                            </tr>

                        </tbody>
                        <tfoot>


                        </tfoot>
                    </table>
                    <input type="hidden" name="id_user" value="<?=$user['id']?>">
                      <div class="col-sm-12" style="margin-top: 30px">
                        <div class="input-box">
                          <label for="name">Người nhận</label>
                          <input type="text" required placeholder="Tên người nhận" name="name" value="<?= isset($user['user']) ? $user['user'] : '' ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                        <label for="name">Email</label>
                          <input type="email" required placeholder="Email" name="email" value="<?= isset($user['email']) ? $user['email'] : '' ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                        <label for="name">Địa chỉ</label>
                          <input type="text" required placeholder="Địa chỉ" name="dia_chi" value="<?= isset($user['address']) ? $user['address'] : '' ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                        <label for="name">Số điện thoại</label>
                          <input type="text" required placeholder="Số điện thoại" name="phone" value="<?= isset($user['tel']) ? $user['tel'] : '' ?>">
                        </div>
                      </div>
                      <h5>Chọn phương thức thanh toán</h5> <br>

                        <div style="display:flex; align-items: center">
                            <input style="width: 15px; margin-bottom: 10px" id="option1" type="radio" value="1" name="cod" />
                            <label style="margin-left:10px" for="option1">Thanh Toán Khi Nhận Hàng</label>
                        </div>
                        <div style="display:flex; align-items: center">
                            <input style="width: 15px; margin-bottom: 10px" id="option2" type="radio" value="2" name="redirect" />
                            <label style="margin-left:10px" for="option2">Thanh toán VNPAY</label>
                        </div>
                        <?php 
                        // Validate đăng nhập mới mua được hàng
                            if (isset($_SESSION['user'])){
                                echo "<script>var isLogIn = true;</script>";
                            }else {
                                echo "<script>var isLogIn = false;</script>";
                            }
                        ?>
                        <p class="alert alert-danger" style="display: none" id="messageLogin"></p>
                      <div class="col-sm-12"> <button type="submit" name="dathang" class="btn btn-color right-side">Đặt hàng</button> </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
  <script>
    // Validate đăng nhập mới thanh toán được
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
        if (!isLogIn) {
            // Ngăn chặn việc gửi form nếu người dùng chưa đăng nhập
            event.preventDefault();
            document.getElementById('messageLogin').style.display = 'block';
            document.getElementById('messageLogin').textContent = 'Bạn cần đăng nhập để thực hiện đặt hàng!';
        }
    });

    // input:radio Không cùng name vẫn chọn được
    const checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(function(otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });

    // Thiết lập input radio đầu tiên là đã chọn
    document.addEventListener('DOMContentLoaded', function() {
        var firstRadio = document.getElementById('option1'); // Lấy id input radio đầu tiên
        if (firstRadio) {
            firstRadio.checked = true;
        }
    });
</script>
  
 
