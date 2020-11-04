<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Pharmacy Store</title>
	<link rel="stylesheet" href="../css/add_items.css">
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
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Pharmacy Store Products</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin text-center">
			  
				<div class="s-12 m-12 l-4 margin-bottom" style= "width: 100.3333%;">
					<div class="padding-2x block-bordered border-radius">
						<i class="icon-paperplane_ico icon2x text-primary margin-bottom-30" style="font-size: 8rem;";></i>

						<form action="action_add_item.php" method="POST">
							<div class="container" style = "text-align:start";>
								<h1>Add Store Items</h1>
								<p>Please fill in this form to add a store item</p>
								<hr>

								<label for="item_name"><b>Item Name</b></label>
								<input type="text" placeholder="Enter Item Name" name="item_name" id="item_name" required><br/><br/>

								<label for="item_description"><b>Item Description</b></label>
								<input type="text" placeholder="Enter Item Description" name="item_description" id="item_description" required><br/><br/>

								<label for="item_price"><b>Item Price</b></label>
								<input type="text" placeholder="Enter Item Price" name="item_price" id="item_price" required><br/><br/>
								
								<label for="item_category"><b>Item Category</b></label><br/><br/>
								<label for="item_category">Choose Item Category</label>
								<select name="item_category" id="item_category" required>
									<option value="nutrition_supplement">Nutrition Supplement</option>
									<option value="pain_management">Pain Management</option>
									<option value="beauty_care">Beauty Care</option>
									<option value="baby_health">Baby Health</option>
									<option value="pet_care">Pet Care</option>
									<option value="fat_burner">Fat Burner</option>
								</select>
								
								<br/><br/><br/><br/><br/>

								<button type="submit" name="submit" class="registerbtn">Add Item</button>
							</div>
						</form>
				
					</div>
              </div>
			  
            </div>
          </div>
          
        </div> 
      </article>
    </main>
    
    <!--FOOTER -->
    <footer>
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Our Philosophy</h4>
              <p class="text-size-20"><em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt."</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">About Our Company</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="../img/blog-04.jpg" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Us</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adress:</b> Responsive Street 7, London, UK</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>E-mail:</b> contact@sampledomain.com</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone:</b> 0700 000 987</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="/" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Leave a Message</h4>
              <form class="customform text-white">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Submit Button</button></div> 
              </form>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>
     
   </body>
</html>