<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2019 .
**********************************************************************************************************  -->
<!-- 
Website Name: Wedding Team — Wedding Vendor Directory
Version: 1.0.0
Author: Havsky
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Bridal Makeup Category </title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Wedding Team" />
<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, Destination Wedding, Budget Shaadi, Find Vendors, Book Wedding Venue, wedding Team, wedding Service Provider">
<meta name="author" content="Havsky" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
</head>
<body> 
<!--  top bar -->
  <section class="top-nav-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="top-text">Welcome to Wedding Team</div>
        </div>
        <div class="col-sm-6">
          <div class="top-detail text-right">
            <ul>
              <li><a href="help.php">Help</a></li>
              <li><a href="pricing-plan.html">Pricing</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
              <li class="search-btn search-icon text-center">
                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- search -->
      <div class="search">
        <div class="container">
          <input type="search" class="search-box" placeholder="Search"/>
          <a href="#" class="fa fa-times search-close"></a>
        </div>
      </div>
      <!-- end search -->
      
      
    </div>
  </section>
<!--  end top bar -->
<!--  navigation -->
<header id="nav-bar" class="nav-bar navbar-two">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="wedding-logo">
            <a href="index.html"><img src="images/logo2.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
              <ul class="css-menu">
                <li class="active"><a href="index.html">Home</a>
                  
                </li>   
                <li><a href="#">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="blog.html">Blog</a>
                      
                    </li>
                    <li><a href="gallery-col3.html">Gallery</a>
                      
                    </li>
                    
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="register.php">Register</a></li>
                  </ul>
                </li>                         
                <li><a href="category-listing.html">Listing</a>
                </li>
                     
                <li><a href="#">Planning Tools<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a href="budget-planner.html">Budget Planner</a></li>
                    <li><a href="to-do-list.html">To Do List</a></li>
                    <li><a href="guest-list.html">Guest List</a></li>
                  </ul>
                </li>
                <li><a href="real-wedding-listing.html">Real Wedding</a>
                  
                </li>
                <li><a href="contact-us-2.php">Contact</a>
                  
                </li>
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </header>
<!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Category Listing</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="category-listing.html">Category Listing</a></li>
            <li class="active">Bridal Makeup</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<body>
  <div class="container">
	<h1 align="center" style="padding-top: 20px;">Bridal Makeup</h1>
	<div class="line"></div>
    <br>
    <div class="row">
		<?php
		  include('dbcon.php');
		  $qry="SELECT * FROM `bridal_makeup`";

		  $run = mysqli_query($con,$qry);
	     
		   while ($data = mysqli_fetch_assoc($run))
		    {
		   	  ?>
		   	   <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="padding-top: 20px;padding-bottom: 50px;">
	              <div class="card" style="width:250px">
					  <img  src="uploadimg/<?php echo $data['img1']; ?>" class="card-img" >
	                  <div class="card-body">
	                  	<h4 class="card-title"><?php echo $data['title'];?></h4>
	                  	<p><?php echo $data['address'] ."\t".  $data['city'];?></p>
	                  	<p style="color: red">Minimum Price<?php echo $data['minimum-price']; ?>/-</p>
	                  	<button class="btn btn-success"><a href="contact-us-2.php" style="color: white;">Book Now</a></button>
	                  </div>
	              </div>
	           	</div>          
		   	  <?php
		    }
  	    ?>

   </div>
 </div>

  <!-- footer -->
  <div id="footer" class="footer-main-block">
    <div class="container">
      <div class="footer-block">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="about-widget footer-widget">
              <h4 class="footer-heading">About Wedding Team</h4>
              <div class="about-dtl">
                <p>Sed ut perspiciatis unde omnis iste natus error volup tatem.</p>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit labo riosam.</p>
                <a href="#" class="btn btn-white">Find a Vendor</a>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-6">
            <div class="news-widget footer-widget">
              <h4 class="footer-heading">Latest News</h4>
              <ul>
                <li>
                  <div class="row"> 
                    <div class="col-xs-3">
                      <div class="latest-news-img">
                        <img src="images/footer-news-1.jpg" class="img-responsive" alt="news">
                      </div>
                    </div>
                    <div class="col-xs-9">
                      <div class="latest-news-dtl">
                        <a href="blog-detail.html">Sed ut perspiciatis unde omnis is te natus error sit volup</a>
                        <div class="date">March 22, 2017</div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row"> 
                    <div class="col-xs-3">
                      <div class="latest-news-img">
                        <img src="images/footer-news-2.jpg" class="img-responsive" alt="news">
                      </div>
                    </div>
                    <div class="col-xs-9">
                      <div class="latest-news-dtl">
                        <a href="blog-detail.html">Excepteur sint occaecat cupidatat non proident,</a>
                        <div class="date">March 21, 2017</div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="subscribe-widget footer-widget">
              <h4 class="footer-heading">Subscribe Newsletter</h4>
              <form id="subscribe-form" class="subscribe-form">
                <div class="form-group"> 
                  <input type="email" id="mc-email" class="form-control" placeholder="EMAIL ADDRESS">
                  <button type="submit" class="btn btn-white">Subscribe Now</button>
                  <label for="mc-email"></label>
                </div>
              </form>
              <ul class="social-btns">
                <li><a class="btn facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="btn twitter" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a class="btn pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-block text-center">
      <div class="container">
        <p>&copy; 2019, Havsky All rights reserved.</p>
      </div>
    </div>
  </div>
<!-- end footer -->
</body>
</html>