<?php
function statistical_sale($date_start = 0,$end_date = 0,$choose_time='date'){
    $sql="WITH RECURSIVE dates AS (
      SELECT DATE('$date_start') AS date
      UNION ALL
      SELECT DATE_ADD(date, INTERVAL 1 DAY)
      FROM dates
      WHERE DATE_ADD(date, INTERVAL 1 DAY) <= '$end_date'
    )
    ";
    $sql.=" SELECT ".($choose_time == 'MONTH' ? "DATE_FORMAT(dates.date, '%Y-%m')" : "$choose_time(dates.date)")." AS date, COUNT(DISTINCT tbl_order.id_order)
     AS so_luong_don_hang, SUM(order_detail.soluong) AS so_luong_ban_ra, SUM((tbl_order.tongtien)) AS doanh_thu
    FROM dates
    LEFT JOIN tbl_order ON DATE(tbl_order.ngaydathang) = DATE(dates.date) and tbl_order.trangthai = 4
    LEFT JOIN order_detail ON order_detail.id_order = tbl_order.id_order
    GROUP BY $choose_time(dates.date)";
    $statistical_sale = pdo_query($sql);
    return $statistical_sale;
}
function statisticalDate_ago(){
  $sql = "SELECT *,DATE(dh.ngaydathang) AS ngay_dat_hang, COUNT(DISTINCT dh.id_order) 
  AS so_luong_don_hang, SUM(gh.soluong) AS so_luong_ban, SUM(dh.tongtien) 
  AS tong_don_hang, MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)) AS thang 
  FROM order_detail gh JOIN tbl_order dh ON gh.id_order = dh.id_order 
  WHERE dh.ngaydathang > (CURRENT_DATE - 30) GROUP BY ngay_dat_hang;";
$statistical_sale = pdo_query($sql);
return $statistical_sale;
}
function statistical_product(){
  $sql = "SELECT p.id, p.name, COUNT(dh.id_order) AS so_luong_ban, Sum(dh.tongtien) AS doanh_thu FROM sanpham p JOIN order_detail ct ON p.id = ct.id_pro JOIN tbl_order dh ON ct.id_order = dh.id_order GROUP BY p.id, p.name ORDER BY so_luong_ban DESC LIMIT 5;";
  $statistical_product = pdo_query($sql);
  return $statistical_product;
}
?>