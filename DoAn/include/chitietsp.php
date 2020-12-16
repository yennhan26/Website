<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_chitiet = mysqli_query($con,"SELECT * FROM sanpham WHERE masp='$id'"); 
?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
	<!-- Single Page -->
    <div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li style="list-style-type:none;">
									<div class="thumb-image">
										<img src="admin/resources/img/<?php echo $chitiet['hinh'] ?>"  class="img-fluid" alt=""> </div>
								</li>
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $chitiet['tensp'] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($chitiet['gia']).'vnđ' ?></span>
					</p>
					<div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="masp" value="<?php echo $chitiet['masp'] ?>" />
									<input type="hidden" name="tensp" value="<?php echo $chitiet['tensp'] ?>" />
									<input type="hidden" name="hinh" value="<?php echo $chitiet['hinh'] ?>" />
									<input type="hidden" name="gia" value="<?php echo $chitiet['gia'] ?>" />
									<input type="hidden" name="soluong" value="1" />
									<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button btn" />
						    	</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	} 
	?>