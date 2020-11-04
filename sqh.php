<?php
	include_once 'dbh.php';

	Function fetchData() {
		global $conn;
		$sql = "select * from items;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0) {
			while ($row = mysqli_fetch_array($result)) {
				echo $row['item_name'] ." " .$row['item_price'] ."<br>";
			}
		}
	}
	
	Function fetchStoreNutritionData() {
		global $conn;
		$sql = "select * from nutrition_supplement;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0) {
			while ($row = mysqli_fetch_array($result)) {
				
				echo '<div class="s-12 m-6 l-3" style="border: 5px solid rgba(0, 0, 0, 0.1);">
					<div class="image-with-hover-overlay image-hover-zoom margin-bottom">
					  <div class="image-hover-overlay background-primary"> 
						<div class="image-hover-overlay-content text-center padding-2x">
						  <h2>' .$row['item_name'] .'</h2>
						  <p>' .$row['item_description'] .'</p>
						  <h2>' .$row['item_price'] .'</h2>
						</div> 
					  </div> 
					  <img src="' .$row['item_image_src'] .'" alt="" title="' .$row['item_image_title'] .'" />
					</div>	
					<a class="buttonCart border-radius background-primary text-size-12 text-white text-strong" href="/">Add To Cart</a>
				</div>';
				
			}
		}
	}
	
	Function fetchStoreData($table) {
		global $conn;
		$sql = "select * from " .$table .";";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0) {
			while ($row = mysqli_fetch_array($result)) {
				
				echo '<div class="s-12 m-6 l-3" style="border: 5px solid rgba(0, 0, 0, 0.1);">
					<div class="image-with-hover-overlay image-hover-zoom margin-bottom">
					  <div class="image-hover-overlay background-primary"> 
						<div class="image-hover-overlay-content text-center padding-2x">
						  <h2>' .$row['item_name'] .'</h2>
						  <p>' .$row['item_description'] .'</p>
						  <h2>' .$row['item_price'] .'</h2>
						</div> 
					  </div> 
					  <img src="' .$row['item_image_src'] .'" alt="" title="' .$row['item_image_title'] .'" />
					</div>	
					<a class="buttonCart border-radius background-primary text-size-12 text-white text-strong" href="/">Add To Cart</a>
				</div>';
				
			}
		}
	}
	
	Function fetchIndexData($table) {
		global $conn;
		$sql = "select * from " .$table .";";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0) {
			while ($row = mysqli_fetch_array($result)) {
				
				if ($row['item_id'] < 4) {
					
					echo '<div class="s-12 m-12 l-4 margin-m-bottom">
					  <img class="margin-bottom" src="' .$row['item_image_src'] .'" alt="">
					  <h2 class="text-thin">' .$row['item_name'] .'</h2>
					  <p>' .$row['item_description'] .'</p>
					  <h2 style = "color: #49bf4c; font-size: 1.4rem; margin-top: 0.5rem">' .$row['item_price'] .'</h2>
					  <a class="text-more-info text-primary-hover" href="/">Add To Cart</a>                
					</div>';
					
				}
				
				// try rand(1,resultCheck);
				
			}
		}
	}

?>