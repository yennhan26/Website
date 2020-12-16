<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Simpla Admin | Sign In</title>
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
</head>
  
	<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<h1>Trang Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="resources/img/logo-shop-w-full.png" width="160px" height="160px" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<fieldset>
				<form action="login2.php" method=post style="text-align: center;">
				<p>	
					<b>Email     </b>	
					<input required class="text-input " id="small-input"  type="text" name='admin'>
				</p>
				<div class="clear"></div>
				<p>
					<b>Mật khẩu</b>	
					<input required class="text-input" id="small-input"  type="password" name='matkhau'>
				</p>
				<div class="clear"></div>
				<p>
					<input class="button"  type="submit" value="Đăng nhập">
				</p>
				</form>
			</fieldset>
		</div> <!-- End #login-wrapper -->		
</body>
</html>
