<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<style>
    .card h3 {
        color: #333;
        padding: 15px 0px 0px 20px;
    }

    .card form {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 0px 10px 20px; 
    }

    .card h5 {
        color: #333;
        margin-bottom: 5px;
    }
    .flex-betwent a{
        margin-left: 300px;
        padding: 10px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .flex-betwent a:hover{
        background-color: #2980b9;
        color: #fff;

    }

    .card input[type="date"],
    .card input[type="week"],
    .card input[type="month"],
    .card select {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 5px 5px;
        
    }

    .card input[type="submit"] {

        padding: 10px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .card input[type="submit"]:hover {
        background-color: #2980b9;
    }

    .card .chart {
        height: 360px;
    }
    </style>
<body>
  <header class="site-header">
    <div class="container">
      <div class="logo">
      <a class="navbar-brand page-scroll" href="index.php"> <img alt="Honour" src="img  /logo.png"> </a>
      </div>
      <nav class="main-nav">
        <ul>          
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="index.php?act=adddm">Danh mục</a></li>
              <li><a href="index.php?act=addsp">Hàng hóa</a></li>
              <li><a href="index.php?act=dskh">Khách hàng</a></li>
              <li><a href="index.php?act=dsbl">Bình luận</a></li>
              <li><a href="index.php?act=donhang">Đơn hàng</a></li>
              <li><a href="index.php?act=thongke">Thống kê</a></li>
            </ul>
      </nav>
    </div>
  </header>

</body>
</html>
  
            
       