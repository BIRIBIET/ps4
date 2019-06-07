 	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="red2.php" method="POST">
	<?php echo '<input style="display:none" name="name" "type="text" style="height: 20px; width: 100px" value="' . $_POST['name'] . '" >' ?>
	<?php echo '<input style="display:none" name="price" "type="text" style="height: 20px; width: 100px" value="' . $_POST['price'] . '">' ?>
	<?php echo '<input style="display:none" name="icon" "type="text" style="height: 20px; width: 100px" value="' . $_POST['icon'] . '">' ?>
	<?php echo '<input style="display:none" name="id" "type="text" style="height: 20px; width: 100px" value="' . $_POST['id'] . '">' ?>
	<?php echo '<button style="height: 30px;">Сохранить</button>' ?>
	</form>
</body>
</html>


 