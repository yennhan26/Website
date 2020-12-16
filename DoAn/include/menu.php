<?php 
	$sql_lsp = mysqli_query($con,'SELECT * FROM loaisp');
?>
<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<!-- <form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
						</select> -->
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php 
							$sql_lsp_dm = mysqli_query($con,'SELECT * FROM loaisp');
							while($value = mysqli_fetch_array($sql_lsp_dm)){
						?>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="?quanly=sanpham&id=<?php echo $value['maloai'] ?>"><?php echo $value['tenloai']  ?></a>
						</li>
						<?php
							}
						?>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>