<?php
session_start();
$_SESSION['mycart']=array();
$sp1=[1,"sanpham1",100,2];
$sp2=[2,"sanpham2",300,4];
$cart=[];
$cart[]=$sp1;
$cart[]=$sp2;
$_SESSION['mycart']=$cart;
 echo '<h1>session ok</h1>';
 echo'  <a href="2.php">Show</a>';

?>