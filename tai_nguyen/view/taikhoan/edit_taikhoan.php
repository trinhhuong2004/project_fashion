<!-- CONTAIN START -->
<section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">  

              <?php
                   if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                   }
              ?>
             <form action="index.php?act=edit_taikhoan" method="post" class="main-form full">
             <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Update account</h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">User name</label>
                      <input id="login-email" name="user" type="text" required placeholder="User name" value="<?=$user?>">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" name="email" type="email" required placeholder="Email Address" value="<?=$email?>">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" name="pass" type="password" required placeholder="Enter your Password" value="<?=$pass?>">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Address</label>
                      <input id="login-pass" name="address" type="text" required placeholder="Enter your Address" value="<?=$address?>">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Tel</label>
                      <input id="login-pass" name="tel" type="text" required placeholder="Enter your tel" value="<?=$tel?>">
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <!-- <div class="check-box left-side mb-20">
                       <span>
                      <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                      </span>
                      <label for="remember_me">Remember Me</label>
                    </div> -->
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="submit" type="submit" name="capnhat" value="capnhat">

                  </div>
                  <!-- <div class="col-xs-12">
                    <hr>
                    <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Honour" href="index.php?act=dangnhap">Login Here</a> </div>
                  </div> -->
                </div>
                <!-- <h4 class="thongbao">
                <?php
                             if(isset($thongbao)&&($thongbao!="")){
                              echo "$thongbao";
                             }
           ?>
                </h4> -->

             </form>            
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 