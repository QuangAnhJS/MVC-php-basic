<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create product</title>
</head>
<body>
<?php
if(isset($message)){
	?>
	<h1><?=$message;?></h1>
	<?php
}
?>
	<form action="../index.php?action=home" method="POST">
		<label>tên sản phẩm</label>
	<input type="text" name="name">
	<label>Nhập giá tiền</label>
	<input type="text" name="Price">
<select name="hang">
	<?php
	foreach ($data as $row):
	?>
	<option value="<?=$row['id']?>"><?=$row['hang'];?></option>
	<?php
endforeach;
?>
</select>
<button type="submit" name="tao"> tạo</button>
	</form>
	
</body>
</html>