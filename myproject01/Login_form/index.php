<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="login_stype.css">
</head>
<body>
	
	<div>
		<h2>Wellcome to my website</h2>
		<form class="box" action="login.php" method="post">
			<h1>Đăng Nhập</h1>

			<input type="text" name="username" placeholder="Username" required> 
			<!-- // placeholder là hiển thị chữ vào trong ô -->

			<input type="password" name="password" placeholder="Password" required >

			<input type="submit" name="" value="Login"> <!-- // value "login" là hiển thị chử login trên nút -->

			<a href="register.php" target="_blank">Bạn quên mật khẩu?</a>
			<!-- target="_blank" là tạo tab mới -->
			<br/>
			
			<p>Tạo tài khoản mới:</p><a  href="register.php">Register</a> 

		</form>
	</div>
</body>
</html>