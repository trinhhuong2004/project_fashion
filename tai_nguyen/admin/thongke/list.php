<div class="row">
    <div class="row font_title ">
        <h1>Thống kê sản phẩm theo loại</h1>
    </div>
    <div class="row form_content ">
        <div class="row mb10 formds_loai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php foreach($listthongke as $tk){
                     extract($tk);
                     echo '<tr>
                     <td>'.$madm.'</td>
                     <td>'.$tendm.'</td>
                     <td>'.$countsp.'</td>
                     <td>'.$maxprice.'</td>
                     <td>'.$minprice.'</td>
                     <td>'.$avgprice.'</td>
                 </tr>'
                     ?>
                
                <?php }?>
            </table>
        </div>
    </div>

</div>