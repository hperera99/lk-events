	<?php

	include("includes/db.php");
	include("functions/functions.php");
	?>



	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Addvertisemnt  | lkevents.lk</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/price-range.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
	    <![endif]-->       
	    
	</head><!--/head-->

	<body>
		<header id="header"><!--header-->
			<div class="header_top"><!--header_top-->
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="contactinfo">
								<ul class="nav nav-pills">
									<li><a href="#"><i class="fa fa-phone"></i> +1212121212 </a></li>
									<li><a href="#"><i class="fa fa-envelope"></i> lkevents@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="social-icons pull-right">
								<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header_top-->
			
			<div class="header-middle"><!--header-middle-->
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo pull-left">
								<a href="index.php"><img src="images/home/logo1.png" alt="" /></a>
							</div>
							
						</div>
						<div class="col-sm-8">
							<div class="shop-menu pull-right">
								<ul class="nav navbar-nav">
									
									
									<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header-middle-->
			
			<div class="header-bottom"><!--header-bottom-->
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="index.php" class="active">Home</a></li>
									<li><a href="all_products.php">All Advertisemnts</a></li>
									<li><a href="Products.html">My Account</a></li>
									
								</ul>
							</div>
						</div>
						<!--Search Box starts-->
						<div>
							
							<form method="get" action="results.php" enctype="multipart/form-data">
								<input type="text" name="user_query" placeholder="Search a Product"/>
								<input type="submit" name="search" value="Search"/>
							</form>
							
						</div>
						<!--Search Box ends-->
					</div>
				</div>
			</div><!--/header-bottom-->
		</header><!--/header-->
		
		<section id="slider"><!--slider-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
							</ol>
							
									<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>lk</span>events.lk</h1>
									<h2>Event Planners
										<br></h2>
										<p>Get Your Event Right Way</p>
										
									</div>
									<div class="col-sm-6">
										<img src="images/home/event.jpg" class="girl img-responsive" alt="" />

									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>lk</span>events.lk</h1>
										<h2>Photographers</h2>
										<p> We have best event Coordinators in Sri Lanka </p>

									</div>
									<div class="col-sm-6">
										<img src="images/home/photo.jpg" class="girl img-responsive" alt="" />

									</div>
								</div>
								
								<div class="item">
									<div class="col-sm-6">
										<h1><span>lk</span>events.lk</h1>
										<h2>Wedding</h2>
										<p>are you looking for wedding plan ?are you busy with work ? Now you can connect with wedding plans </p>
										
									</div>
									<div class="col-sm-6">
										<img src="images/home/wedding.jpg" class="girl img-responsive" alt="" />
										
									</div>
								</div>
								
							</div>
							
							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</section><!--/slider-->
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="left-sidebar">
							<h2>Categories</h2>
							<div class="panel-group category-products" id="accordian"><!--category-products start-->
								<div class="category-tab ul li ">
									<ul class="nav nav-pills nav-stacked" id="categories">
										<?php getCategories(); ?>
									</ul>
								</div>
								
							</div><!--/category-products ends-->
							
							
							
							
							
							<div class="shipping text-center"><!--shipping stars-->
								
							</div><!--/shipping  Ends-->
							
						</div>
					</div>
					
					<div class="col-sm-9 padding-right">
						<div class="features_items"  id="products_box"><!--features_items start-->
							<h2 class="title text-center">Featured Items</h2>
							
							<?php 
							if(isset($_GET['pro_id']))
							{
								$product_id =$_GET['pro_id'];
											$get_products = "select * from products where product_id='$product_id'"; //this product id
											$run_products = mysqli_query($db, $get_products);
											
											while($row_products= mysqli_fetch_array($run_products))
											{
												$pro_id = $row_products['product_id'];
												$pro_title = $row_products['product_title'];
												$pro_cat = $row_products['cat_id'];
												$pro_brand = $row_products['brand_id'];
												$pro_desc = $row_products['product_desc'];
												$pro_price = $row_products['product_price'];
												$pro_image1 = $row_products['product_img1'];
												$pro_image2 = $row_products['product_img2'];
												$pro_image3 = $row_products['product_img3'];
												
												echo "
												<div id='single_product'>
												<h3>$pro_title</h3>
												
												<img src='admin_area/product_images/$pro_image1' width='180' height='180'/>
												<img src='admin_area/product_images/$pro_image2' width='220' height='220'/>
												<img src='admin_area/product_images/$pro_image3' width='260' height='260'/><br>
												<p><b>Price: #$pro_price</b></p>
												<p>$pro_desc</p>
												<a href='index.php?pro_id=$pro_id' style='float:left;'>Back</a>
												<a href='enquiry.php?'><button style='float:right;'>Enquiry</button></a>
												
												</div>	
												
												";
											}//while
										}//if	
										
										
										
										
										?>
										
										
									</div><!--features_items Ends-->
									

								</div><!--/category-tab-->
								
								
								
							</div>
						</div>
					</div>
				</section>
				
				
				

				
				<script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.scrollUp.min.js"></script>
				<script src="js/price-range.js"></script>
				<script src="js/jquery.prettyPhoto.js"></script>
				<script src="js/main.js"></script>
			</body>
			</html>