<?php
	include 'subpage/connect.php';
?>
<pre>
<?php
	if(isset($_POST['them_sp'])){
		$masp = $_POST["masp"];
		$hinh = $_FILES["hinh"]["name"];
		$tensp = $_POST["tensp"];
		$gia = $_POST["gia"];
		$loaisanpham = $_POST['loaisanpham'];
		$nhasanxuat = $_POST['nhasanxuat'];
		$path = "./resources/img/";
		$hinh_tmp = $_FILES["hinh"]["tmp_name"];
		$sql = "INSERT INTO sanpham (hinh, tensp, gia, mansx, maloai) VALUES ('$hinh', '$tensp', '$gia','$nhasanxuat','$loaisanpham');";
		move_uploaded_file($hinh_tmp, $path.$hinh);
		echo($sql);
		$T = $obj->query($sql);
		//print_r($_POST);
	}
	header("location: sanpham.php")
	
?>