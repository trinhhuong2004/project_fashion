<!-- CONTAIN START -->
<!-- <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">  
             <form action="index.php?act=dangnhap" method="post" class="main-form full">
             <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Create your account</h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">User name</label>
                      <input id="login-email" name="user" type="text" required placeholder="User name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" name="email" type="email" required placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" name="pass" type="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="check-box left-side mb-20"> 
                        <span>
                      <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                      </span>
                      <label for="remember_me">Remember Me</label>
                      <label for="remember_me"></label>
                    </div>
                    <input class="submit" type="submit" name="dangky" value="Đăng Nhập">

                  </div>
                  <div class="col-xs-12">
                    <hr>
                    <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Honour" href="index.php?act=dangky">Create New Account</a> </div>
                  </div>
                </div>
                <h4 class="thongbao">
                <?php
                             if(isset($thongbao)&&($thongbao!="")){
                              echo "$thongbao";
                             }
           ?>
                </h4>

             </form>            
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section> -->
  <!-- CONTAINER END --> 


  <!-- CONTAIN START -->
  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
              <?php
                        if(isset($_SESSION['user'])){
                          extract($_SESSION['user']);
                          ?>
                             <div class="col-xs-12">
                    <div class="input-box">
                      <h3>Hello. Wellcome to my website</h3><br>
                           <?=$user?>
                      
                    </div>
                  </div>
                   
                  <div class="col-xs-12">
                    <div class="input-box">
                        <!-- <div class="col-xs-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="index.php?act=quenmk">Forgot your password?</a>
                         <hr>
                        </div> -->
                      <div class="new-account align-center mt-20">  <a class="link" title="Register with Honour" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a> </div>

                      <?php if($role==1){ ?>
                      <div class="new-account align-center mt-20">  <a class="link" title="Register with Honour" href="admin/index.php">Đăng nhập Admin</a> </div>
                      <?php }?>
                      <div class="new-account align-center mt-20">  <a class="link" title="Register with Honour" href="index.php?act=thoat">Thoát</a> </div>
                    
                    </div>
                  </div>

              <?php

                        }else{
              ?>
            
              <form action="index.php?act=dangnhap" method="post" class="main-form full">
              <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Customer Login</h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">User name</label>
                      <input  name="user" type="text" required placeholder="User name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" name="pass" type="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="check-box left-side"> <span>
                      <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                      </span>
                      <label for="remember_me">Remember Me</label>
                    </div>
                    <!-- <button name="submit" type="submit" class="btn-color right-side">Log In</button> -->
                    <input class="submit" type="submit" name="dangnhap" value="Sign in">
                  </div>
                  <div class="col-xs-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="index.php?act=quenmk">Forgot your password?</a>
                    <hr>
                  </div>
                  <div class="col-xs-12">
                    <div class="new-account align-center mt-20"> <span>New to Honour?</span> <a class="link" title="Register with Honour" href="index.php?act=dangky">Create New Account</a> </div>
                  </div>
                </div>
              </form>

              <h4 class="thongbao">
                <?php
                             if(isset($thongbao)&&($thongbao!="")){
                              echo "$thongbao";
                             }
           ?>
                </h4>

              <?php
                           }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 