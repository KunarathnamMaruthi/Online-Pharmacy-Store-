<?php
	include_once 'dbh.php';
	include_once 'sqh.php';
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Pharmacy Store</title>
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">

    <!-- HEADER -->
    <header role="banner">
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="logo"><img src="../img/logo-free.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a>Stores</a>
                <ul>
                  <li><a href="store_nutrition.php">Nutrition & Supplements</a></li>
                  <li><a href="store_pain.php">Pain Management</a></li>
                  <li><a href="store_beauty.php">Beauty Care Products</a></li>
                  <li><a href="store_baby.php">Baby Health & Food</a></li>
                  <li><a href="store_pet.php">Pet Care</a></li>
                  <li><a href="store_fat.php">Fat Burners</a></li>
                </ul>
              </li>
              <li><a>Gallery</a></li>
              <li><a>Contact</a></li>
              <li><a>About</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            <div class="item">
              <div class="s-12 center">
                <img src="../img/01-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8"> 
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="../img/02-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8"> 
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="../img/03-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="../img/04-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
		
		  <!-- Sub Section 1 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_nutrition.php">Nutrition & Supplements</a>
          <div class="margin">
			<?php
				fetchIndexData("nutrition_supplement");
			?>
          </div>
		  
		  <!-- Sub Section 2 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_pain.php">Pain Management</a>
          <div class="margin">
			<?php
				fetchIndexData("pain_management");
			?>
          </div>
		  
		  <!-- Sub Section 3 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_beauty.php">Beauty Care Products</a>
          <div class="margin">
			<?php
				fetchIndexData("beauty_care");
			?>
          </div>
		  
		  <!-- Sub Section 4 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_baby.php">Baby Health & Food</a>
          <div class="margin">
			<?php
				fetchIndexData("baby_health");
			?>
          </div>
		  
		  <!-- Sub Section 5 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_pet.php">Pet Care</a>
          <div class="margin">
			<?php
				fetchIndexData("pet_care");
			?>
          </div>
		  
		  <!-- Sub Section 6 -->
		  <a style = "color: #047107; font-size: 2rem;" href="store_fat.php">Fat Burners</a>
          <div class="margin">
			<?php
				fetchIndexData("fat_burner");
			?>
          </div>
		  
        </div>
      </section>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
    </footer>
	
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>   
   </body>
</html>