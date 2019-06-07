<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($connect, "UPDATE gamestore SET  name='". $_POST['name'] ."' , price='" . $_POST['price'] ."' , icon='" . $_POST['icon'] ."' WHERE id = '" . $_POST['id'] ."'");	
 header('Location:http://mafwaka/index.php') 
 ?>
 