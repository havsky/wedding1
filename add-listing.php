<?php 
    include('dbcon.php');
	
  if(isset($_POST['submit']))
  {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $minprice = $_POST['minprice'];
    $maxprice = $_POST['maxprice'];
    $description = $_POST['description'];

    $img1 = $_FILES['img1']['name'];
    $tmp1 = $_FILES['img1']['tmp_name'];
    move_uploaded_file($tmp1,"uploadimg/$img1");
	
	$img2 = $_FILES['img2']['name'];
    $tmp2 = $_FILES['img2']['tmp_name'];
    move_uploaded_file($tmp2,"uploadimg/$img2");
	
	$img3 = $_FILES['img3']['name'];
    $tmp3 = $_FILES['img3']['tmp_name'];
    move_uploaded_file($tmp3,"uploadimg/$img3");
	
	$img4 = $_FILES['img4']['name'];
    $tmp4 = $_FILES['img4']['tmp_name'];
    move_uploaded_file($tmp4,"uploadimg/$img4");
	
	$img5 = $_FILES['img5']['name'];
    $tmp5 = $_FILES['img5']['tmp_name'];
    move_uploaded_file($tmp5,"uploadimg/$img5");
	
	$img6 = $_FILES['img6']['name'];
    $tmp6 = $_FILES['img6']['tmp_name'];
    move_uploaded_file($tmp6,"uploadimg/$img6");
	
	$img7 = $_FILES['img7']['name'];
    $tmp7 = $_FILES['img7']['tmp_name'];
    move_uploaded_file($tmp7,"uploadimg/$img7");
	
	$img8 = $_FILES['img8']['name'];
    $tmp8 = $_FILES['img8']['tmp_name'];
    move_uploaded_file($tmp8,"uploadimg/$img8");
	
	$img9 = $_FILES['img9']['name'];
    $tmp9 = $_FILES['img9']['tmp_name'];
    move_uploaded_file($tmp9,"uploadimg/$img9");
	
	$img10 = $_FILES['img10']['name'];
    $tmp10 = $_FILES['img10']['tmp_name'];
    move_uploaded_file($tmp10,"uploadimg/$img10");

   

     $query="INSERT INTO $category (`title`, `address`, `city`, `state`, `minimum-price`, `maximum-price`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`) VALUES ('$title','$address','$city','$state','$minprice','$maxprice','$description','$img1','$img2','$img3','$img4','$img5','$img6','$img7','$img8','$img9','$img10')";

     $run = mysqli_query($con,$query);
     if($run)
     {
      ?>
         <script type="text/javascript">
           alert("data insert successfully");
         </script>
      <?php
     }
     else
     {
      ?>
         <script type="text/javascript">
           alert("data not insert successfully");
         </script>
      <?php
     }
    }
?>

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
<title>Wedding Team — Best Vendor Service Provider</title>
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
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
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
              <li><a href="help.html">Help</a></li>
              <li><a href="pricing-table.html">Pricing</a></li>
              <li><a href="#" data-toggle="modal" data-target="#register-model">Register</a></li>
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
      
      <!-- register popup -->
      <div class="modal fade register-model" id="register-model" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Register</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="reg_name" placeholder="Enter Your Name"/>
                  <input type="email" class="form-control" id="reg_email" placeholder="Enter Your Email"/>
                  <input type="password" class="form-control" id="reg_password" placeholder="Enter Your Password"/>
                  <input type="password" class="form-control" id="reg_confirm-password" placeholder="Confirm Your Password"/>
                </div>
                <button type="submit" class="btn btn-default">Register</button>
              </form>
            </div>            
          </div>
        </div>
      </div>
      <!-- end register popup -->
    </div>
  </section>
<!--  end top bar -->
<!--  navigation -->
<header id="nav-bar" class="nav-bar navbar-two">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="wedding-logo">
            <a href="index.php"><img src="imagess/logo.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
              <ul class="css-menu">
                <li class="active"><a href="index.php">Home</a>
                  
                </li>   
                <li><a href="#">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="blog.html">Blog</a>
                      
                    </li>
                    <li><a href="gallery-col3.html">Gallery</a>
                      
                    </li>
                    
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="register.html">Register</a></li>
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
        <h2 class="banner-heading">Add Listing</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
            <li class="active">Add Item Listing</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- add listing main block -->
  <section id="add-listing" class="add-listing-main-block">
    <div class="container">
      <ul class="add-listing-tabs general-nav-tabs tabs">
          <li><a href="vendor-dashboard.php" class=" btn btn-default"><span class="badge">Dashboard</span></a></li>
          <li><a href="manage-item-listing.php" class="btn btn-default"><span class="badge">Manage Listing</span></a></li>
          <li><a href="vendor-profile.html" class="btn btn-default"><span class="badge">My Profile</span></a></li>
          <li><a href="#" class="active btn btn-default"><span class="badge">Add Listing</span></a></li>
          <li><a href="pricing-table.html" class="btn btn-default"><span class="badge">Pricing Plan</span></a></li>
      </ul>
      <h4 class="new-add-listing-heading">Add Your New Listing</h4>
        <div class="form-group">
           <form action="#" method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                  <label>SELECT CATEGORY</label>
                  <select class="form-control" name="category">
                    <option value="wedding_venue">Wedding Venues</option>
                    <option value="wedding_photographers">Wedding Photographers</option>
                    <option value="bridal_makeup">Bridal Makeup</option>
                    <option value="wedding_decorators">Wedding Decorators</option>
                    <option value="bridal_mahendi">Bridal Mahendi</option>
                    <option value="wedding_cakes">Wedding Cakes</option>
                    <option value="wedding_dj's">Wedding DJ's</option>
                  </select>
                </div> 
                <div class="form-group">
                  <label>Title:</label>
                  <input type="text" class="form-control" id="text" placeholder="Enter Title" name="title"/>
                </div>
                <div class="form-group">
                  <label>Address:</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"/>
                </div>
                <div class="form-group">
                  <label>City:</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"/>
                </div>
                <div class="form-group">
                  <label>State:</label>
                  <input type="text" class="form-control" id="state" placeholder="Enter State" name="state"/>
                </div>
               <div class="form-group">
                  <label>Minimum Price:</label>
                  <input type="text" class="form-control" id="minprice" placeholder="Enter Minimum Price" name="minprice"/>
                </div>
                <div class="form-group">
                  <label>Maximum Price:</label>
                  <input type="text" class="form-control" id="maxprice" placeholder="Enter Maximum Price" name="maxprice"/>
                </div>
                <div class="form-group">
                  <label>Description:</label>
                  <textarea type="text" name="description" id="description" class="md-textarea form-control" rows="3"/></textarea>
                </div>
                <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label>Upload Vendor 1st Image:</label>
                        <input type="file" name="img1"/>
                    </div>
                     <div class="form-group">
                        <label>Upload Vendor 2nd Image:</label>
                        <input type="file" name="img2"/>
                    </div>
					 <div class="form-group">
                        <label>Upload Vendor 3rd Image:</label>
                        <input type="file" name="img3"/>
                    </div>
					<div class="form-group">
                        <label>Upload Vendor 4th Image:</label>
                        <input type="file" name="img4"/>
                    </div>
                  </div>
				  <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label>Upload Vendor 5th Image:</label>
                        <input type="file" name="img5"/>
                    </div>
                     <div class="form-group">
                        <label>Upload Vendor 6th Image:</label>
                        <input type="file" name="img6"/>
                    </div>
					 <div class="form-group">
                        <label>Upload Vendor 7th Image:</label>
                        <input type="file" name="img7"/>
                    </div>
					<div class="form-group">
                        <label>Upload Vendor 8th Image:</label>
                        <input type="file" name="img8"/>
                    </div>
                  </div>
				  <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label>Upload Vendor 9th Image:</label>
                        <input type="file" name="img9"/>
                    </div>
                     <div class="form-group">
                        <label>Upload Vendor 10th Image:</label>
                        <input type="file" name="img10"/>
                    </div>
					 
                  </div>
                  
                 
                </div><br>
                <div class="form-group" align="center">
                  <input type="submit" name="submit"/>
                </div>
           </form>

        </div>
  </section>
<!-- end add listing main block -->
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
        <p>&copy; 2017 All rights reserved.</p>
      </div>
    </div>
  </div>
<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js--> 
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<script>
  $(function($) {
      // Asynchronously Load the map API 
      var script = document.createElement('script');
      script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    });
    function initialize(){
      var myLatLng = {lat: 25.3500, lng: 74.6333}; // Insert Your Latitude and Longitude For Footer Wiget Map
      var mapOptions = {
        center: myLatLng, 
        zoom: 15,
        disableDefaultUI: true,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      // For Footer Widget Map
      var map = new google.maps.Map(document.getElementById("location"), mapOptions);
      var image = 'images/icons/map-marker-1-1.png';
      var beachMarker = new google.maps.Marker({
        position: myLatLng, 
        map: map,   
        icon: image
      });    
  }
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>

