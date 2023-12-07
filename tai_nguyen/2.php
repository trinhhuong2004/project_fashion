<?php
session_start();
if(isset($_SESSION['mycart'])){
    foreach($_SESSION['mycart'] as $cart){
        echo "Ma sp: ".$cart[0];
        echo "Ten sp: ".$cart[1];
        echo "Gia sp: ".$cart[2];
        echo "So luong sp: ".$cart[3]."<br>";

    }
    echo '<h1> Session show</h1>';
}else{
    echo '<h1> Session huy</h1>';
    }

 echo '<a href="1.php"> Khoi tao</a>';
 echo'  <a href="3.php">Huy</a>';
?>