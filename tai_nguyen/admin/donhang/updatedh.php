<html>
    <head>
    <style>
    .row2 {
        margin: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f8f8f8;
    }

    .font_title {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }

    select, input[type='select'] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .mb10 {
        margin-bottom: 10px;
    }

    .mr20 {
        margin-right: 20px;
    }

    .row {
        display: flex;
        justify-content: center;
    }
</style>

    </head>
</html>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬP Trạng THÁI ĐƠN HÀNG</h1>
         </div>
         <div class="row2 form_content ">

          <form action="index.php?act=updatedh&iddh=<?=$_GET['iddh']?>" method="POST">
            <div class="row2 mb10">
                    <label>Trạng thái: </label> <br>
                    <select name="trangthai" id="">
                    <option id="1" value="1">Chờ phê duyệt</option>
                    <option id="2" value="2">Đã xác nhận</option>
                    <option id="3" value="3">Đang giao hàng</option>
                    <option id="4" value="4">Đã hoàn thành</option>
                    </select>
            </div>
           <div class="row mb10 ">
                <input class="mr20" name="capnhat" type="submit" value="Cập Nhật">
                <input  class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=donhang">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
           
            ?>
          </form>
         </div>
        </div>
        </div>