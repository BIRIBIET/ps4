<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<form action="paste.php" method="POST">
		<input name="name" placeholder="NAME ">
		<input name="icon" placeholder="ICON ">
		<input name="price" placeholder="PRICE ">
		<button type="submit">ADD GAME</button>
	</form>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, 'SELECT * FROM gamestore ORDER BY id DESC');
	for ($i=0; $i < $query->num_rows; $i++) { 
	$res = $query ->fetch_assoc(); ?>
	<div class="one">
		<div class="image"> <?php echo '<img src="' . $res['icon'] .  '">'?></div>
		<div class="name"> <?php echo  $res['name'] ?></div>
		<div class="price"> <?php echo  $res['price'] . ' руб' ?></div>
	</div>
	<form action="Del.php" method="POST">
	<?php echo '<input type="" name="id" value="' . $res['id'] .'" style="display:none">'?>
		<button type="submit" class="btn btn-primary">Удалить</button>
	</form>
	<form action="red.php" method="POST">
	<?php echo '<input style="display:none" name="name" value="'. $res['name'] .   '">'?>
	<?php echo '<input style="display:none" name="price" value="'. $res['price'] .   '">'?>
		<?php echo '<input style="display:none" name="icon" value="'. $res['icon'] .   '">'?>
	<?php echo '<input style="display:none" name="id" value="'. $res['id'] .   '" >'?>
	<button type="submit" class="btn btn-primary">Редактировать</button>
	</form>
	<form action="cor.php" method="POST">
	<?php echo '<input type="" name="id" value="' . $res['id'] .'" style="display:none">'?>
		<button type="submit" class="btn btn-primary">Удалить</button>
	</form>

	<?php } ?>
</body>
</html>
