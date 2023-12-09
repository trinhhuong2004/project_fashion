<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from webcotheme.com/honour/demo2/hon001/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 08:26:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Honour Index</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/fotorama.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/nhom.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="fashionshop"
  agent-id="cc8d03b0-72b4-447b-96b5-014cfb489f81"
  language-code="vi"
></df-messenger>
</head>
<body>
<div class="se-pre-con"></div>
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 col-xs-12">
          <div class="newsletter-inner"> <img src="images/newsletter-icon.png" alt="Honour">
            <h2 class="main_title">Subscribe Emails</h2>
            <span>Get Latest News & Update</span>
            <p>also the leap into electronic typesetting, remaining essentially</p>
            <form>
              <input type="email" placeholder="Email Here...">
              <button class="btn-black" title="Subscribe">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main"> 
  <!-- HEADER START -->
  <header class="navbar navbar-custom " id="header">
    <div class="container">
      <div class="header-inner">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
          <a class="navbar-brand page-scroll" href="index.php"> <img alt="Honour" src="images/logo.png"> </a> </div>
        <div class="right-side float-none-sm">
          <div id="menu" class="navbar-collapse collapse left-side" >
            <ul class="nav navbar-nav navbar-left">
              <li class="level"> <span class="opener plus"></span> <a class="page-scroll">WOMEN</a>
                <div class="megamenu mobile-sub-menu">
                  <div class="megamenu-inner-top">
                    
                      <?php
                         foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '
                          <ul class="sub-menu-level1">
                          <li class="level2"> 
                            <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="'.$linkdm.'"><span>■</span>'.$name.'</a></li>

                            </ul>    
                            </li>
                          </ul>
                        ';
                         }?>
                  
                  </div>
                </div>
              </li>
              <li class="level"> <span class="opener plus"></span> <a class="page-scroll">Men</a>
                <div class="megamenu mobile-sub-menu">
                  <div class="megamenu-inner-top">
                    
                      <?php
                         foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '
                          <ul class="sub-menu-level1">
                          <li class="level2"> 
                            <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="'.$linkdm.'"><span>■</span>'.$name.'</a></li>

                            </ul>    
                            </li>
                          </ul>
                        ';
                         }?>
                  
                  </div>
                </div>
              </li>
              <li class="level"> <span class="opener plus"></span> <a href="" class="page-scroll">JUNIORS</a>
                
              </li>
              <li class="level"> <span class="opener plus"></span> <a class="page-scroll">KIDS</a>
    
              </li>
              <li class="level"> <span class="opener plus"></span> <a href="index.php?act=gioithieu" class="page-scroll">ABOUT</a></li>
              <li class="level"> <span class="opener plus"></span> <a href="index.php?act=lienhe" class="page-scroll">CONTACT</a></li>

            </ul>
          </div>
          <div class="right-side float-left-xs header-right-link">
            <ul>
               <li class="main-search">
                <div class="header_search_toggle desktop-view">
                <form action="index.php?act=sanpham" method="post">
                    <div class="search-box">
                      <input class="input-text" name="kyw" type="text" placeholder="Search entire store here...">
                      <button class="search-btn"></button>
                    </div>
                  </form>
                </div>
              </li> 
              <li class="account-icon"> <a href="#"><span></span></a>
                <div class="header-link-dropdown account-link-dropdown">
                  <ul class="link-dropdown-list">
                    <?php
                      // Kiểm tra xem session 'id' có tồn tại và không rỗng hay không
                      if (!isset($_SESSION['user'])) {
                        // Nếu không có session 'id', người dùng là khách hàng
                    ?>
                    <li> <span class="dropdown-title">Hello </span>
                      <ul>
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký</a></li>
                      </ul>
                      <?php
                       } else {
                          if ($_SESSION['user']['role'] == 1) { 
                      ?>
                      <ul>
                          <li><a href="index.php?act=edit_taikhoan">Thông tin tài khoản</a></li>
                          <li><a href="admin/index.php?act=home">Admin</a></li>
                          <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                      </ul>
                      <?php } else { ?>
                        <ul>
                          <li><a href="index.php?act=edit_taikhoan">Thông tin tài khoản</a></li>
                          <li><a href="index.php?act=list_history_order&id_account=<?=$_SESSION['user']['id']?>">Lịch sử đơn hàng</a></li>
                          <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                        </ul>
                      <?php
                        }
                      }
                      ?>
                    </li>
                    
                  </ul>
                </div>
              </li>
              <li class="cart-icon"> <a href="index.php?act=viewcart"> <span> <small class="cart-notification"><?php (isset($_SESSION['mycart'])) ? $mess = count($_SESSION['mycart']) : $mess = 0; echo $mess;?></small> </span> </a>
                <!-- <div class="cart-dropdown header-link-dropdown">
                  <ul class="cart-list link-dropdown-list">
                    <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                      <div class="media"> <a class="pull-left"> <img alt="Minimo" src="images/1.jpg"></a>
                        <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                          <p class="cart-price">$14.99</p>
                          <div class="product-qty">
                            <label>Qty:</label>
                            <div class="custom-qty">
                              <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                      <div class="media"> <a class="pull-left"> <img alt="Minimo" src="images/2.jpg"></a>
                        <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                          <p class="cart-price">$14.99</p>
                          <div class="product-qty">
                            <label>Qty:</label>
                            <div class="custom-qty">
                              <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                  <div class="clearfix"></div>
                  <div class="mt-20"> <a href="index.php?act=addtocart" class="btn-color btn">Cart</a> <a href="index.php?act=bill" class="btn-color btn right-side">Checkout</a> </div>
                </div> -->
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </header>
  <!-- HEADER END --> 