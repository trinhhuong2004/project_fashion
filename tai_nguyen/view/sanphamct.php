     <!-- END HEADER -->

     <div class="banner inner-banner align-center">
       <div class="container">
         <section class="banner-detail">
           <h1 class="banner-title">Women</h1>
           <div class="bread-crumb mt-30">
             <ul>
               <li><a href="index.php">Home</a>/</li>
               <li><span>Women</span></li>
             </ul>
           </div>
         </section>
       </div>
     </div>
     <!-- CONTAIN START -->
     <section class="pt-95">


       <div class="container">
         <?php

          extract($onesp);
          $hinh = $img_path . $img;

          ?>


         <div class="row">

           <div class="col-md-5 col-sm-5 mb-xs-30">
             <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native"> <a href="#"><img src="<?= $hinh ?>" alt="Honour"></a> </div>
           </div>
           <div class="col-md-7 col-sm-7">
             <div class="row">
               <div class="col-xs-12">
                 <div class="product-detail-main">
                   <div class="product-item-details">
                     <h1 class="product-item-name"><?= $name ?></h1>
                     <div class="rating-summary-block">
                       <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                     </div>
                     <div class="price-box"> <span class="price"><?= $price ?></span> <del class="price old-price">$100.00</del> </div>
                     <div class="product-info-stock-sku">
                       <div>
                         <label>Availability: </label>
                         <span class="info-deta">In stock</span>
                       </div>
                       <div>
                         <label>SKU: </label>
                         <span class="info-deta">20MVC-18</span>
                       </div>
                     </div>
                     <p><?= $mota ?></p>
                     <!-- <div class="product-size select-arrow mb-20 mt-30">
                    <label>Size</label>
                    <select class="selectpicker form-control" id="select-by-size">
                      <option selected="selected" value="#">S</option>
                      <option value="#">M</option>
                      <option value="#">L</option>
                    </select>
                  </div> -->
                     <!-- <div class="product-color select-arrow mb-20">
                    <label>Color</label>
                    <select class="selectpicker form-control" id="select-by-color">
                      <option selected="selected" value="#">Blue</option>
                      <option value="#">Green</option>
                      <option value="#">Orange</option>
                      <option value="#">White</option>
                    </select>
                  </div> -->
                     <div class="mb-40">
                       <div class="product-qty">
                         <label for="qty">Qty:</label>
                         <div class="custom-qty">
                           <form action="index.php?act=addcart" method="post">
                             <input type="number" name="soluong" min="1" style="padding: 5px 0px; width: 70px; text-align: center" title="Qty" value="1" maxlength="8" id="qty">
                         </div>
                       </div>
                       <div class="bottom-detail cart-button">
                         <ul>
                           <ul>
                             <li class="pro-cart-icon">
                             <form action="index.php?act=addcart" method="post">
                              <input type="hidden" name="id" value="<?=$id?>">
                              <input type="hidden" name="name" value="<?=$name?>">
                              <input type="hidden" name="img" value="<?=$img?>">
                              <input type="hidden" name="price" value="<?=$price?>">
                              <input type="hidden" name="mota" value="<?=$mota?>">
                              <input type="hidden" name="soluong" value="1">
                              <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                             </li>
                             <li class="pro-wishlist-icon"><a href="#"></a></li>
                             <li class="pro-compare-icon"><a href="#"></a></li>
                           </ul>
                         </ul>
                       </div>
                     </div>
                     <div class="bottom-detail">
                       <ul>
                         <li class="pro-wishlist-icon"><a href="#"><span></span>Wishlist</a></li>
                         <li class="pro-compare-icon"><a href="#"><span></span>Compare</a></li>
                         <li class="pro-email-icon"><a href="#"><span></span>Email to Friends</a></li>
                       </ul>
                     </div>
                     <div class="share-link">
                       <label>Share This : </label>
                       <div class="social-link">
                         <ul class="social-icon">
                           <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                           <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                           <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                           <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                           <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="ptb-95">
       <div class="container">
         <div class="product-detail-tab">
           <div class="row">
             <div class="col-md-12">
               <div id="tabs">
                 <ul class="nav nav-tabs">
                   <li><a class="tab-Description selected" title="Description">Mô tả</a></li>
                
                   <li><a class="tab-Reviews" title="Reviews">Bình luận</a></li>
                 </ul>
               </div>
               <div id="items">
                 <div class="tab_content">
                   <ul>
                     <li>
                       <div class="items-Description selected gray-bg">
                         <div class="Description"> <strong>Mô tả sản phẩm</strong><br />
                        <p><?=$mota?></p>
                         </div>
                       </div>
                     </li>
                     <li>
                       <div class="items-Reviews gray-bg">
                         <div class="comments-area">
                           <h4>Bình luận</h4>
                           <?php 
                        foreach ($loadone_binhluan as $value) {
                        extract( $value );
                        ?>
                           <ul class="comment-list mt-30">
                             <li>
                               <div class="comment-user"> <img src="images/comment-user.jpg" alt="Honour"> </div>
                               <div class="comment-detail">
                                 <div class="user-name"><?=$user?></div>
                                 <div class="post-info">
                                   <ul>
                                     <li><?=$ngaybinhluan?></li>
                                    
                                   </ul>
                                 </div>
                                 <p><?=$noidung?></p>
                               </div>
                             </li>
                           </ul>
                          <?php }?>
                         </div>
                         <div class="main-form mt-30">
                           <h4>Để lại một bình luận</h4>
                           <div class="row mt-30">
                           <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="post" style="height: 300px;">
                             
                                <div class="col-xs-12 mb-30">
                                    <textarea cols="30" rows="3" name="noidung" placeholder="Message" required></textarea>
          
                                    <input type="hidden" name="idpro" value="<?=$id?>">
                                    <input type="hidden" name="iduser" value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">
                                    <input type="hidden" name="ngaybinhluan" value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-xs-12 mb-30">
                                    <button class="btn-black" name="submit" type="submit">Submit</button>
                                </div>
                                <p><?php if(isset($mess)) echo $mess ?></p>
                            </form>

                           </div>
                         </div>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="pb-95">
       <div class="container">
         <div class="product-slider">
           <div class="row">
             <div class="col-xs-12">
               <div class="heading-part align-center mb-40">
                 <h2 class="main_title">Related Products</h2>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="product-slider-main position-r"><!-- dresses -->
               <div class="owl-carousel pro_cat_slider"><!-- id="product-slider" -->
                 <?php
                  $i = 0;
                  foreach ($sp_cung_loai as $spcl) :
                    extract($spcl);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                      $mr = "";
                    } else {
                      $mr = "mr";
                    }
                  ?>
                   <div class="item '.$mr.'">
                     <div class="product-item">
                       <div class="product-image"> <a href="<?= $linksp ?>"> <img src="<?= $hinh ?>" alt=""> </a>
                         <div class="product-detail-inner">
                           <div class="detail-inner-left left-side">
                             <ul>
                               <li class="pro-cart-icon">
                                 <form action="index.php?act=addcart" method="post">
                                   <input type="hidden" name="id" value="<?= $id ?>">
                                   <input type="hidden" name="name" value="<?= $name ?>">
                                   <input type="hidden" name="img" value="<?= $img ?>">
                                   <input type="hidden" name="price" value="<?= $price ?>">
                                   <input type="hidden" name="mota" value="<?= $mota ?>">
                                   <input type="hidden" name="soluong" value="1">
                                   <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                 </form>
                               </li>
                               <li class="pro-wishlist-icon"><a href="#"></a></li>
                               <li class="pro-compare-icon"><a href="#"></a></li>
                             </ul>
                           </div>
                           <div class="rating-summary-block right-side">
                             <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                           </div>
                         </div>
                       </div>
                       <div class="product-item-details">
                         <div class="product-item-name"> <a href="<?= $linksp ?>"><?= $name ?></a> </div>
                         <div class="price-box"> <span class="price"><?= $price ?></span> </div>

                       </div>
                     </div>

                     </li>
                   </div>

                 <?php
                    $i += 1;
                  endforeach;
                  ?>

               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <!-- CONTAINER END -->