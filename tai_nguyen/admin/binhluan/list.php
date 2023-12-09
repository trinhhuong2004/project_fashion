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
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         <div class="row2 form_content ">
           <table>
            <tr>
                <th></th>
                <th>MÃ BÌNH LUẬN</th>
                <th>NỘI DUNG</th>
                <th>TÊN TÀI KHOẢN</th>
                <th>TÊN SẢN PHẨM</th>
                <th>NGÀY BÌNH LUẬN</th>
                <th></th>
                <th>THAO TÁC</th>
            </tr>
               <?php
               foreach($listbinhluan as $bl){
                   extract($bl);
                   $xoasp="index.php?act=xoabl&idbl=".$id;
                  
                   echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$user.'</td>
                        <td>'.$name.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td></td>
                    <td> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a> </td>
                    </tr>';
               }
               ?>
               
           </table>
           </div>
          
         </div>
        </div>
      

       
    </div>
    
</body>
</html>