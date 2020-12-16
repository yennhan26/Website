<?php
include ('connect.php');
$ma = $_GET["ma"];
$phd = "SELECT * FROM donhang,admin, khachhang, sanpham WHERE donhang.masp=sanpham.masp AND donhang.manvgh=admin.manv AND khachhang.makh=donhang.makh AND donhang.ma='$ma' ";
$tam = $obj->query($phd);
$data = $tam->fetch();
?>



<h4>Đơn Hàng</h4>
<table>
    <tr>
        <td>Tên mã đơn hàng: <?php echo $data  ['ma']; ?></td>
    </tr>
    <tr>
        <td>Tên khách hàng: <?php echo($data['tenkh']); ?></td>
    </tr>
    <tr>
        <td>Số điện thoại: <?php echo($data['sodienthoai']); ?></td>
    </tr>
    <tr>
        <td>Địa chỉ: <?php echo($data['diachi']); ?></td>
    </tr>
    <tr>
        <td>Ngày đặt hàng: <?php echo($data['ngaydat']); ?></td>
    </tr>
    <tr>
        <td>Nhân viên xác nhận đơn: <?php echo($data['tennv']); ?></td>
    </tr>
    
    
    
</table>
<br>
<br>
<hr>
<table>
    <tr>
        <th>Thứ tự</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
    </tr>
    <?php
    $i = 0;
    $tongtien=0;
    $dsdh = $obj->query("SELECT * from donhang, sanpham where donhang.masp=sanpham.masp and donhang.ma='$ma'");
    $data = $dsdh->fetchAll();
    foreach ($data as $key => $value) {
        $thanhtien=$value['soluong']*$value['gia'];
        $tongtien+=$thanhtien;
        $i++;
    ?>
    <tr>
        <th><?php echo $i; ?></th>
       
        <th><?php echo $value['tensp']; ?></th>
        <th><?php echo $value['soluong']; ?></th>
        <th><?php echo number_format($value['gia']); ?></th>
    </th>
</tr>
<?php
}
?>
</table>
<p class="right">Tổng tiền: <?php echo number_format($tongtien)?></p>








