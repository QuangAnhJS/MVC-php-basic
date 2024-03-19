<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login </title>
</head>
<body>
<form action="../index.php" method="POST">
 <?php if(isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
	<label>Nhập tên tài khoản</label>
	<input type="" name="name">
	<label>Nhập mật khẩu</label>
	<input type="" name="pass">
<button type="submit" name="Login">Đăng nhập</button>
</form>
</body>
</html>