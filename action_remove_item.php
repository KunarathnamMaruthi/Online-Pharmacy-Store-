<?php

	include_once 'dbh.php';
	include_once 'sqh.php';
	
	$item_category = $_POST['item_category'];
	
	
	fetchStoreData("$item_category");
	
	//header("Location: add_item.php?add=success");
?>