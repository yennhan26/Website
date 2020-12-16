<?php
if(isset($_GET['huy'])){
		$ma = $_GET['huy'];
	}else{
		$ma = '';
	}
		$sql_delete = mysqli_query($con,"UPDATE donhang set trangthai='4'where ma='$ma'");
?>
<div class="privacy py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Xem đơn hàng</h3>
		<?php
		if(isset($_SESSION['khachhang'])){
		echo 'Đơn hàng : '.$_SESSION['khachhang'];
		}
		?>
		<!-- //tittle heading -->
		<div class="checkout-right">
			<?php
				if(isset($_GET['makh'])){
					$id_khachhang = $_GET['makh'];
				}else{
					$id_khachhang = '';
				}
				$sql_select = mysqli_query($con,"SELECT * FROM donhang WHERE makh='$id_khachhang' GROUP BY ma");
			?>
			<div class="table-responsive">
				<form action="" method="post">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Mã giao dịch</th>
								<th>Ngày đặt</th>
								<th>Quản lý</th>
								<th>Trạng thái</th>
								<th>Yêu cầu</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							while($value  = mysqli_fetch_array($sql_select)){
								$i++;
							?>
							<tr class="rem1">
								<td class="invert"><?php echo $i ?></td>
								<td class="invert-image">
									<?php echo $value['ma']; ?>
								</td>
								<td class="invert">
									<?php echo $value['ngaydat'] ?>
								</td>
								<td><a href="index.php?quanly=xemdonhang&makh=<?php echo $_SESSION['makh'] ?>&ma=<?php echo $value['ma'] ?>">Xem chi tiết</a></td>
								<td>
									<?php
										if($value['trangthai']==0){
											echo 'Đang chờ xử lý';
										}elseif($value['trangthai']==1){
											echo 'Đã duyệt';
										}elseif($value['trangthai']==2){
											echo 'Đang giao hàng';
										}elseif($value['trangthai']==3){
											echo 'Hoàn thành';
										}else{
											echo 'Đã hủy';
										}
									?>
								</td>
								<td>
									<?php
											if($value['trangthai']==4 ){
												echo'';
											}else{
									?>
									<a href="index.php?quanly=xemdonhang&makh=<?php echo $_SESSION['makh'] ?>&huy=<?php echo $value['ma'] ?>">Yêu cầu hủy</a>
									<?php
									}
									?>
								</td>
							</tr>
							
							<?php
							}
							?>
						</table>
					</div>
					
					
					<div class="privacy py-sm-5 py-4">
						<div class="container py-xl-4 py-lg-2">
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Chi tiết đơn hàng</h3>
							<!-- //tittle heading -->
							<div class="checkout-right">
								<?php
									if(isset($_GET['ma'])){
									$madonhang = $_GET['ma'];
									}else{
										$madonhang = '';
									}
										$sql_select = mysqli_query($con,"SELECT * FROM donhang, khachhang, sanpham WHERE donhang.masp=sanpham.masp AND khachhang.makh=donhang.makh AND donhang.ma='$madonhang' ORDER BY donhang.madonhang DESC");
								?>
								<div class="table-responsive">
									<form action="" method="post">
										<table class="timetable_sub">
											<thead>
												<tr>
													<th>Thứ tự</th>
													<th>Mã giao dịch</th>
													<th>Tên sản phẩm</th>
													<th>Số lượng</th>
													<th>Giá</th>
													<th>Ngày đặt</th>
												</tr>
											</thead>
											<tbody>
												
												<?php
												$i = 0;
												$tongtien=0;
												while($row_donhang = mysqli_fetch_array($sql_select)){
													$thanhtien=$row_donhang['soluong']*$row_donhang['gia'];
													$tongtien+=$thanhtien;
													$i++;
												?>
												<tr class="rem1">
													<td class="invert"><?php echo $i ?></td>
													<td class="invert-image">
														<?php echo $row_donhang['ma']; ?>
													</td>
													<td class="invert">
														<?php echo $row_donhang['tensp']; ?>
													</td>
													<td><?php echo $row_donhang['soluong']; ?></td>
													<td><?php echo number_format ($row_donhang['gia']); ?></td>
													<td><?php echo $row_donhang['ngaydat'] ?></td>
													
												</tr>
												<tr>
													<td colspan="6">Tổng:  <?php echo number_format($tongtien)?></td>
												</tr>
												<?php
												}
												?>
											</table>
										</div>
									</div>
									<!-- //first section -->
								</div>
							</div>
							<!-- //product left -->
							<!-- product right -->
						</div>
					</div>
				</div>