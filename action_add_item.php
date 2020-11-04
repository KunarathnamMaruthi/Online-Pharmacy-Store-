<?php

	include_once 'dbh.php';
	
	$item_name = $_POST['item_name'];
	$item_description = $_POST['item_description'];
	$item_price = $_POST['item_price'];
	$item_category = $_POST['item_category'];
	
	$sql = "insert into $item_category (item_image_src, item_image_title, item_name, item_description, item_price)
	values ('../img/portfolio/Nutrition_Supplements/vitagen-vanilla-flavor-400g.jpg', 'Portfolio Image 1', '$item_name', '$item_description' ,'$item_price');";
	
	mysqli_query($conn, $sql);
	
	header("Location: add_item.php?add=success");
?>