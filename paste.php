<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  gamestore(name,icon,price) VALUES('" . $_POST['name'] . "', '" . $_POST['icon'] . "', '" . $_POST['price'] . "')");		
	  header('Location:http://mafwaka/index.php') 
	  ?>
	

