<html>
    <head>
    <style>

    h3 {
        font-size: 34px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }


    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    th {
        background-color: #f2f2f2;
    }

    img.primary-image {
        max-width: 100px;
        max-height: 100px;
    }
    .btn-danger {
        margin: 20px ;
        background-color: #d9534f;
        border-color: #d43f3a;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }
</style>
    </head>
</html>
<div class="card">
    <div>
        <h3>Thống kê doanh thu đơn hàng</h3>
        <form action="index.php?act=home" method="POST">
            <h5>Chọn thời gian:</h5>
            <input type="date" name="start_date">
            <input type="date" name="end_date">
            <select name="choose_time" id="">
                <option value="year">Năm</option>
                <option value="month">Tháng</option>
                <option value="week">Tuần</option>
                <option value="date">Ngày</option>
            </select>
            <div class="flex-betwent ">
                <input type="submit" value="Lọc" name="search">
            </div>

        </form>

    </div>

    <div style="height: 300px;" id="chart"></div>
    <script>
    CKEDITOR.replace('thongtinlienhe');
    CKEDITOR.replace('tomtat');
    CKEDITOR.replace('noidung');

    $(document).ready(function() {
        <?php
                               //$statistical_sale = statistical_sale();
                                $chartData = [];
                              
                                    foreach ($statistical_sale as $value) {
                                        extract($value);
                                        $chartData[] = [
                                            'year' => $date, // Thay 'year' bằng trường trong $value chứa thông tin năm
                                            'order' => $so_luong_don_hang, // Thay 'order' bằng trường trong $value chứa thông tin đơn hàng
                                            'sales' => $doanh_thu, // Thay 'sales' bằng trường trong $value chứa thông tin doanh thu
                                            'quantity' => $so_luong_ban_ra, // Thay 'quantity' bằng trường trong $value chứa thông tin số lượng bán ra
                                        ];
                                    }
                                
                              
                            ?>

        new Morris.Area({
            element: 'chart',
            data: <?php echo json_encode($chartData); ?>,
            xkey: 'year',
            ykeys: ['order', 'sales', 'quantity'],
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra'],
            lineColors: ['#3498db', '#2ecc71', '#e74c3c'],
            lineWidth: 2,
            pointSize: 4,
            hideHover: 'auto',
            parseTime: false,
            behaveLikeLine: true,
            fillOpacity: 0.2,
            stacked: true,
            smooth: false
        });
    });
    </script>
</div>
<a href="#"><button class="btn btn-danger" style="margin-bottom: 20px;">Thông tin chi tiết thống kê</button></a>

<div class="row">
    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Số lượng đơn hàng</th>
                <th scope="col">Số lượng bán</th>
                <th scope="col">Tổng đơn hàng</th>

            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($statisticalDate_ago as $value) {
                // var_dump($statisticalDate_ago);die;
                // Load tổng doanh thu đơn hàng theo tháng
            extract($value);
            echo'     <tr>
            <td scope="col">'.$id_order.'</td>
            <td scope="col">'.$tensp.'</td>
            <td scope="col"><img src="../upload/'.$hinhanh.'" alt="Product" class="primary-image" width= 50px></td>
            <td scope="col">'.$ngaydathang.'</td>
            <td scope="col">'.$so_luong_don_hang.'</td>
            <td scope="col">'.$so_luong_ban.'</td>
            <td scope="col">'.$tong_don_hang.'</td>
           
            
            </tr>';
            
            }?>

            </td>


        </tbody>
    </table>
    <img src="" alt="">
</div>