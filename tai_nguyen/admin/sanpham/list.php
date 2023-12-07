<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website bán hàng</title>
    <link rel="stylesheet" href="css1/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }
        td {
            color: #666;
        }
        /* Các phần tử nút */
        input[type="button"] {
            padding: 15px 30px;
            border: none;
            background-color: black ;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="button"]:hover {
            background-color: #b9a06f;
        }
    </style>
</head>
<body>
    <div class="boxcenter">
      
     
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=listsp" method="POST">
                <input type="text" name="keyw" placeholder="Search entire store here...">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>' ;
                    }
                    ?>
           </select>
           <input type="submit" name="clickOK" value="GO">
            </form>
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Giá</th>
                <th>Hình</th>
                <th>Lượt xem</th>
                <th></th>
            </tr>
               <?php
               foreach($listsanpham as $sanpham){
                   extract($sanpham);
                   $suasp="index.php?act=suasp&id=".$id;
                   $xoasp="index.php?act=xoasp&id=".$id;
                   $hinhpath="../upload/".$img;
                   if(is_file($hinhpath)){
                       $hinh="<img src='".$hinhpath."' width='100px' height='100px'>";
                   }else{
                       $hinh="No file img!";
                   }
                   echo ' <tr>
             <td><input type="checkbox" name="" id=""></td>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
             <td>'.$price.'</td>
             <td>'.$hinh.'</td>
             
             <td>'.$luotxem.'</td>
             <td><a href="'.$suasp.'"><input type="button" value="Sửa"> </a>  <a href="'.$xoasp.'"><input type="button" value="Xóa"></a> </td>
               </tr>';
               }
               ?>
               
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
          <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>
      

       
    </div>
    
</body>
</html>