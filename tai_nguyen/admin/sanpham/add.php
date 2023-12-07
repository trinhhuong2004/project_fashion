<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website bán hàng</title>
    <link rel="stylesheet" href="./css1/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
}

.boxcenter {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="file"],
select,
textarea {
    width: calc(100% - 10px);
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    resize: vertical;
}

input[type="submit"],
input[type="reset"],
input[type="button"] {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    background-color: #black;
}

input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover {
    background-color: #b9a06f;
}
select {
    width: 50%; 
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
    </style>
</head>
<body>
    <div class="boxcenter">
    <div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM<Menu:c></Menu:c></h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> <br>
           <select name="iddm" id="">
            <?php
               foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
               echo '<option value="'.$id.'">'.$name.'</option>' ;
              }
            ?>
           </select>
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm: </label> <br>
            <input type="text" name="tensp" >
           </div>
           <div class="row2 mb10">
            <label>Giá: </label> <br>
            <input type="text" name="giasp" >
           </div>
           <div class="row2 mb10">
            <label>Hình ảnh: </label> <br>
            <input type="file" name="hinh" >
            <!-- trả về mảng -->
           </div>
           <div class="row2 mb10">
            <label>Mô tả: </label> <br>
           <textarea name="mota" id="" cols="30" rows="10"></textarea>
           </div>
           <div class="row2 mb10">
            <label>Số lượng: </label> <br>
            <select name="soluong" id="">
              <option id="1" value="1">1</option>
              <option id="2" value="2">2</option>
              <option id="3" value="3">3</option>
              <option id="4" value="4">4</option>
            </select>
           </div>
           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
           
            ?>
          </form>
         </div>
        </div>
        </div>
       
</body>
</html>