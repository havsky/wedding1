<?php

 include('dbcon.php');
 
  if(isset($_POST['sbmt']))
  {
	  $vendr = $_POST['vndr'];
	  $city = $_POST['city'];
	  
	  if($vendr == '#'){
		  echo "<script> alert('Please Select a Service to proceed');</script>";
	  }else if($city == '#'){
		  echo "<script> alert('Please Select a CITY to proceed');</script>";
	  }
	  else{
	  echo "<script> window.open('srchRslt.php?vndr=$vendr&cty=$city','_self');</script>";
	  }
  }
 

?>


<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2019 .
**********************************************************************************************************  -->
<!-- 
Website Name: Wedding Team — Wedding Vendor Directory & Service Provider
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
<meta name="description" content="Wedding Team, Best Wedding Vendor Provider in Delhi, NCR " />
<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, Destination Wedding, Budget Shaadi, Find Vendors, Book Wedding Venue, wedding Team, wedding Service Provider,">
<meta name="author" content="Havsky" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/><!-- favicon -->
<!-- theme style -->
<link href="csss/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<!-- revolution -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="revolutions/css/settings.css">
<link rel="stylesheet" type="text/css" href="revolutions/css/layers.css">
<!-- end revolution -->
<link href="csss/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="csss/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="csss/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="csss/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="csss/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="csss/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="csss/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="csss/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->


<style>

.slct{
	width: 100%;
	height: 50px;
	border-radius: 7px;
}

</style>
<!-- end theme style -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5d341a8f9b94cd38bbe879eb/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
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
  <div class="top-trans">
    <div class="top-nav-info top-nav-info-two">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 hidden-xs">
            <div class="top-text">Welcome to Wedding Team</div>
          </div>
          <div class="col-sm-6">
            <div class="top-detail text-right">
              <ul>
                <li><a href="help.html">Help</a></li>
                <li><a href="pricing-plan.html">Pricing</a></li>
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
        
        <div class="modal fade register-model" id="register-model" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title text-center">Register</h5>
              </div>
              <div class="modal-body request-model-body text-center">
                <form id="register-form" action="#">
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
        <!-- end register btn -->
      </div>
    </div><!--  end top bar -->
<!--  navigation -->
    <header id="nav-bar" class="nav-bar navbar-two">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-3">
            <div class="wedding-logo">
              <a href="index.php"><img src="images/indexlogo.png" class="img-responsive" alt="logo"></a>
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
  </div>
<!--  end navigation -->
<!-- home slider -->
  <section class="home-revo-slider-2">
    <article class="content">    
      <div id="rev_slider_1066_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="  notgeneric125" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- slider bottom panel -->
        <div class="slider-bottom-panel-two">
          <div class="container">
            <div class="slider-bottom-two">
			<form action="" method="post">
              <div class="col-sm-4">
                <div >
                  <select class="slct" name="vndr">
				  <option value="#">Select Catagory</option>
                    <option value="wedding_venue">Wedding Venues</option>
                    <option value="wedding_photographers">Wedding Photographers</option>
                    <option value="bridal_makeup">Bridal Makeup</option>
                    <option value="wedding_decorators">Wedding Decorators</option>
                    <option value="bridal_mahendi">Bridal Mahendi</option>
                    <option value="wedding_cakes">Wedding Cakes</option>
                    <option value="wedding_dj's">Wedding DJ's</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4"    class="dropdown-menu">
               <div >
                  <select class="slct" name="city">
				  <option value="#">Select Catagory</option>
                    <option value="noida">Noida</option>
                    <option value="ghaziabad">Ghaziabad</option>
                    <option value="delhi">Delhi</option>
                    <option value="mumbai">Mumbai</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="slider-bottom-panel-btn">
                  <button type="submit" name="sbmt" class="btn btn-pink">Find A Vendor</button>
                </div>
              </div>
			  </form>
            </div>
          </div>
        </div>
        <!-- end slider bottom panel -->
        <div id="rev_slider_1066_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
          <ul>  
            <!-- SLIDE 1 -->
            <li class="slider-li-one" data-index="rs-3004" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="images/slider/slider-5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
            <div class="overlay-bg"></div>
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption NotGeneric-Title   tp-resizeme" 
              id="slide-3004-layer-1" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['top','top','top','top']" data-voffset="['272','272','272','272']" 
              data-fontsize="['52','52','52','52']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="text" 
              data-responsive_offset="on" 
              data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[29,29,29,29]"
              data-paddingleft="[0,0,0,0]"
              style="top: 10px;font-family:'Lora';z-index: 5; white-space: nowrap;text-transform:left;">Finding Your Wedding Vendor</div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
                id="slide-3004-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['364','364','364','364']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="font-family:'Lora';z-index: 6; white-space: nowrap;text-transform:left;">Wedding Team Have More Than 2000+ Vendor Items</div>
            </li>
   
            <!-- SLIDE 2  -->
            <li data-index="rs-3005" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off"  data-title="Chill" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/slider/slider-6.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <div class="overlay-bg"></div>
              <!-- LAYERS -->
              <!-- LAYER NR. 6 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3" 
                id="slide-3005-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['272','272','272','272']" 
                data-fontsize="['52','52','52','52']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[10,10,10,10]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[29,29,29,29]"
                data-paddingleft="[0,0,0,0]"
                style="top: 10px;font-family:'Lora';z-index: 10; white-space: nowrap;text-transform:left;">Best Vendor Provider</div>
              <!-- LAYER NR. 7 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2" 
                id="slide-3005-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['364','364','364','364']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 11; white-space: nowrap;text-transform:left;">Wedding Team Have More Than 2000+ Vendor Items</div>
              <!-- LAYER NR. 11 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-8" 
                id="slide-3005-layer-10" 
                data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
                data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image" 
                data-responsive_offset="on" 
                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 15;text-transform:left;border-width:0px;">
                <div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="imagess/slider/blurflake4.png" alt="" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" width="240" height="240" data-no-retina> </div>
              </div>
              <!-- LAYER NR. 12 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-7" 
                id="slide-3005-layer-11" 
                data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
                data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image" 
                data-responsive_offset="on" 
                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 16;text-transform:left;border-width:0px;">
                <div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="imagess/slider/blurflake3.png" alt="" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" width="170" height="170" data-no-retina> </div>
              </div>
              <!-- LAYER NR. 13 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" 
                id="slide-3005-layer-12" 
                data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
                data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image" 
                data-responsive_offset="on" 
                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 17;text-transform:left;border-width:0px;">
                <div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="imagess/slider/blurflake2.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina> </div>
              </div>
              <!-- LAYER NR. 14 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-6" 
                id="slide-3005-layer-13" 
                data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
                data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image" 
                data-responsive_offset="on" 
                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 18;text-transform:left;border-width:0px;">
                <div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="imagess/slider/blurflake1.png" alt="" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" width="120" height="120" data-no-retina> </div>
              </div>
            </li>
            <!-- SLIDE 3 -->
            <li data-index="rs-3006" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off"  data-title="Enjoy Nature" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/slider/slider-7.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <div class="overlay-bg"></div>
              <!-- LAYERS -->
              <!-- LAYER NR. 15 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                id="slide-3006-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['272','272','272','272']" 
                data-fontsize="['52','52','52','52']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[10,10,10,10]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[29,29,29,29]"
                data-paddingleft="[0,0,0,0]"
                style="top: 10px;font-family:'Lora';z-index: 19; white-space: nowrap;text-transform:left;">Perfection in Destination Wedding</div>
              <!-- LAYER NR. 16 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
                id="slide-3006-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['364','364','364','364']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="font-family:'Lora'; z-index: 11; white-space: nowrap;text-transform:left;">Wedding Team Have More Than 2000+ Vendor Items</div>
            </li>
            <!-- SLIDE 4 -->
            <li data-index="rs-3008" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off"  data-title="Hiking" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/slider/slider-8.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <div class="overlay-bg"></div>
              <!-- LAYERS -->
              <!-- LAYER NR. 26 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                id="slide-3008-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['272','272','272','272']" 
                data-fontsize="['52','52','52','52']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[10,10,10,10]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[29,29,29,29]"
                data-paddingleft="[0,0,0,0]"
                style="top: 10px;font-family:'Lora';z-index: 30; white-space: nowrap;text-transform:left;">Your Perfect Wedding Partner</div>
              <!-- LAYER NR. 27 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
                id="slide-3008-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" data-voffset="['364','364','364','364']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="font-family:'Lora'; z-index: 31; white-space: nowrap;text-transform:left;">Wedding Team Have More Than 2000+ Vendor Items</div>
            </li>
          </ul>
        </div>
      </div>
    </article>
  </section> 
<!-- end home slider -->
<!-- plan start main block -->
  <section class="pt120 pb90">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 pad-0">
          <div class="plan-discription">
            <h3 class="plan-heading">Your Wedding Planing Start Here</h3>
            <p class="plan-sub-heading">Weddings are rare and special events & you’ll want to be able to experience every moment of excitement to the fullest.</p>
            <p class="plan-sub-heading">When you hire “Wedding Team”, you’re free to focus on the things that really matter, so you don’t have to waste your time on pesky details. All task will be taken care of by our experts.</p>
            <a href="budget-planner.html" class="btn btn-pink">Read More</a>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="plan-start-block">
            <div class="row">
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-wedding-day"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Check List</h4>
                  <p class="section-sub-heading">Your Big day is coming up and feeling nervous about preparation. Use our ultimate checklist to help you cover every small details to plan with ease. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-start-block">
            <div class="row"> 
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-love-talk"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Budget Planner</h4>
                  <p class="section-sub-heading">Our free Budget Planner puts you in control of your Wedding spending and analyses your results to help you take control of your money. It’s already helped hundreds of thousands of people.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-start-block">
            <div class="row">
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-wedding-planning"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Guest List</h4>
                  <p class="section-sub-heading">Weddings are time to bring family & friends together. Putting together a wedding guest list requires some thought and it may come as a bit of a challenge for you. We helps you overcome that problem with our Budget Planner.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end plan start main block -->
<!-- vendor categories -->
  <section class="vendor-categories-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Find Vendor's at every budget</h3>
        <p class="section-sub-heading">Photographers, venues, makeup artists & more at your budget & style.</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-1.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">23+</div>
              <div class="overlay-bg"></div>
              <a href="wedding-venue.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="wedding-venue.html">Wedding Venue</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-2.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">16+</div>
              <div class="overlay-bg"></div>
              <a href="wedding-cake.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="wedding-cake.html">Wedding Cakes</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-3.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">18+</div>
              <div class="overlay-bg"></div>
              <a href="bridal-makeup.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="bridal-makeup.html">Bridal Makeup</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-4.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">20+</div>
              <div class="overlay-bg"></div>
              <a href="wedding-photographer.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="wedding-photographer.html">Wedding Photography</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-5.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">08+</div>
              <div class="overlay-bg"></div>
              <a href="wedding-decorator.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="wedding-decorator.html">Wedding Decorator</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="vendor-categories-block">
            <div class="vendor-categories-img"> 
              <img src="images/vendor-categories-6.jpg" class="img-responsive" alt="vendor-category">
              <div class="meta-tags">21+</div>
              <div class="overlay-bg"></div>
              <a href="bridal-mehandi.html" class="btn btn-plan">View Details</a>
            </div>
            <div class="vendor-categories-dtl">
              <h4 class="vendor-category"><a href="bridal-mehandi.html">Wedding Mehandi</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="vendor-categories-btn text-center">
        <a href="category-listing.html" class="btn btn-pink">view all vendors</a>
      </div>
    </div>
  </section>
<!-- end vendor categories -->
<!-- vendor profile -->
  <section class="ptb120">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Top Feature Vendor Profile</h3>
        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="vendor-profile-block">
            <div class="vendor-profile-img">
              <img src="images/vendor-profile-11.jpg" class="img-responsive" alt="vendor-profile">
              <div class="overlay-bg"></div>
              <div class="vendor-dtl">
                <h4 class="vendor-heading">Photographer</h4>
                <div class="vendor-sub-heading">Ghaziabad</div>
              </div>
            </div>
            <div class="vendor-profile-dtl">
              <h4 class="vendor-profile-heading"><a href="#">Royal Studio</a></h4>
              <p>Photographer<br>Ghaziabad Delhi NCR</p>
              <a href="#" class="btn read-more">Read More</a>
              <ul class="social-icons">
                <li>
                  <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.plus.google.com/" class="google-plus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="vendor-profile-block">
            <div class="vendor-profile-img">
              <img src="images/vendor-profile-12.jpg" class="img-responsive" alt="vendor-profile">
              <div class="overlay-bg"></div>
              <div class="vendor-dtl">
                <h4 class="vendor-heading">Venue</h4>
                <div class="vendor-sub-heading">Ghaziabad</div>
              </div>
            </div>
            <div class="vendor-profile-dtl">
              <h4 class="vendor-profile-heading"><a href="#">Cloud9</a></h4>
              <p>Marriage Garden<br>Ghaziabad Delhi NCR</p>
              <a href="#" class="btn read-more">Read More</a>
              <ul class="social-icons">
                <li>
                  <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.plus.google.com/" class="google-plus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="vendor-profile-block">
            <div class="vendor-profile-img">
              <img src="images/vendor-profile-13.jpg" class="img-responsive" alt="vendor-profile">
              <div class="overlay-bg"></div>
              <div class="vendor-dtl">
                <h4 class="vendor-heading">Bridal Makeup</h4>
                <div class="vendor-sub-heading">Ghaziabad</div>
              </div>
            </div>
            <div class="vendor-profile-dtl">
              <h4 class="vendor-profile-heading"><a href="#">Asees Beauty Salon</a></h4>
              <p>Beauty Salon<br>Ghaziabad Delhi NCR</p>
              <a href="#" class="btn read-more">Read More</a>
              <ul class="social-icons">
                <li>
                  <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.plus.google.com/" class="google-plus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="vendor-profile-block">
            <div class="vendor-profile-img">
              <img src="images/vendor-profile-14.jpg" class="img-responsive" alt="vendor-profile">
              <div class="overlay-bg"></div>
              <div class="vendor-dtl">
                <h4 class="vendor-heading">Decorator</h4>
                <div class="vendor-sub-heading">Delhi</div>
              </div>
            </div>
            <div class="vendor-profile-dtl">
              <h4 class="vendor-profile-heading"><a href="#">Riveting Events</a></h4>
              <p>Events Decorator<br>Ghaziabad Delhi NCR</p>
              <a href="#" class="btn read-more">Read More</a>
              <ul class="social-icons">
                <li>
                  <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.plus.google.com/" class="google-plus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end vendor profile -->
<!-- testimonial -->
  <section id="testimonial-block" class="testimonial-main-block" style="background-image: url('images/bg/call-out-parr.jpg');">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Words From Happy Couples</h3>
        <p class="section-sub-heading">Our clients helps us achieve new heights and give us opportunities.</p>
      </div>
      <div id="testimonials-slider" class="testimonials-slider">
        <div class="item testimonial-block text-center">
          <p class="testimonial-comment">“From our very first meeting with "Wedding Team" their energy, passion and professionalism stood out. There was absolutely no way we were going ahead in the planning of our wedding without "Wedding Team"</p>
          <div class="testimonial-client-img">
            <img src="images/testi-1.jpg" class="img-responsive" alt="testimonial">
          </div>
          <div class="testimonial-dtl">
            <h5 class="testimonial-client">Shivani &amp;Aayansh</h5>
            <div class="date">April 27, 2017</div>
          </div>
        </div>
        <div class="item testimonial-block text-center">
          <p class="testimonial-comment">“We are so thankful to "Wedding Team" for their expertise, kindness, and attention to detail that allowed us to truly enjoy our wedding day to the fullest! ”</p>
          <div class="testimonial-client-img">
            <img src="images/testi-2.jpg" class="img-responsive" alt="testimonial">
          </div>
          <div class="testimonial-dtl">
            <h5 class="testimonial-client">Himanshu &amp; Jyoti</h5>
            <div class="date">April 27, 2017</div>
          </div>
        </div>
        <div class="item testimonial-block text-center">
          <p class="testimonial-comment">“ Our wedding day turned out beautifully! Everything was perfect and went smoothly!!. 
            All the vendors of "Wedding Team" made the day even better with their professionalism and great services. They were well-prepared and ready when they arrived at our wedding location, which made everything seamless.”</p>
          <div class="testimonial-client-img">
            <img src="images/testi-2.jpg" class="img-responsive" alt="testimonial">
          </div>
          <div class="testimonial-dtl">
            <h5 class="testimonial-client">Himanshu &amp; Priya</h5>
            <div class="date">April 27, 2017</div>
          </div>
        </div>
      </div>
    </div>    
  </section>
<!-- end testimonial -->
<!-- upcoming wedding -->
  <section class="ptb120">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Top Inspirations Real Wedding</h3>
        <p class="section-sub-heading">Browse Real Wedding Stories from around the World!</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="upcoming-wedding-block">
            <div class="upcoming-wedd-img">
              <a href="real-wedding-listing.html"><img src="images/upcoming-wedd-1.jpg" class="img-responsive" alt="upcoming-wedding"></a>
            </div>
            <div class="upcoming-wedding-dtl text-center">
              <div class="date">Jun 18, 2017</div>
              <h4 class="wdding-couple"><a href="real-wedding-listing.html">Mohit&amp; Charru</a></h4>
              <img src="images/sep-1.png" class="img-responsive" alt="icon">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="upcoming-wedding-block">
            <div class="upcoming-wedd-img">
              <a href="real-wedding-listing.html"><img src="images/upcoming-wedd-2.jpg" class="img-responsive" alt="upcoming-wedding"></a>
            </div>
            <div class="upcoming-wedding-dtl text-center">
              <div class="date">March 4, 2018</div>
              <h4 class="wdding-couple"><a href="real-wedding-listing.html">Kshitiz &amp; Khusbu</a></h4>
              <img src="images/sep-1.png" class="img-responsive" alt="icon">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="upcoming-wedding-block">
            <div class="upcoming-wedd-img">
              <a href="real-wedding-listing.html"><img src="images/upcoming-wedd-3.jpg" class="img-responsive" alt="upcoming-wedding"></a>
            </div>
            <div class="upcoming-wedding-dtl text-center">
              <div class="date">November 28, 2017</div>
              <h4 class="wdding-couple"><a href="real-wedding-listing.html">Varun&amp; Aditi</a></h4>
              <img src="images/sep-1.png" class="img-responsive" alt="icon">
            </div>
          </div>
        </div>
      </div>
      <div class="upcoming-wedding-btn text-center">
        <a href="real-wedding-listing.html" class="btn btn-pink">View More Inspirations</a>
      </div>
    </div>
  </section>
<!-- end upcoming wedding -->
<!-- call out -->
  <section id="call-out" class="call-out-main-block">
    <div class="parallax" style="background-image: url('images/bg/call-out-parr.jpg');">
      <div class="overlay-bg"></div>
      <div class="container text-center">
        <div class="call-out-dtl">
          <h2 class="call-out-heading">Are you trying our planning tools ?</h2>
          <a href="budget-planner.html" class="btn btn-pink">Start Planning Today</a>
        </div>
      </div>
    </div>
  </section>
<!-- end call out -->
<!-- why choose block -->
  <section id="why-choose" class="why-choose-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <h3 class="section-heading">Why Choose Wedding Team</h3>
              </div>
              <div class="col-md-8 col-sm-8">
                <p class="section-sub-heading">We at "Wedding Team" don’t offer set packages — that’s because we believe that no two weddings should ever be alike.<br> What we do offer, instead, is a complimentary consultation session that lets you choose from our list of extensive wedding planning services.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-heart-with-arrow"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">20 Years Experience</h4>
                      <p class="why-choose-sub-heading">Our Team vast experience in planning & execution of wedding & have successfully create happy couples through out their journey.</p>
                      <a href="#" class="btn read-more">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-food"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">Budget Management</h4>
                      <p class="why-choose-sub-heading">Planning and monitoring the budget related to weddings and events to execute your special day with no holds barred.</p>
                      <a href="#" class="btn read-more">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-valentine-day"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">Vendor Management</h4>
                      <p class="why-choose-sub-heading">Vendor referrals, attending vendor meetings and coordinating and managing deliverables on the event date is our expertise.</p>
                      <a href="#" class="btn read-more">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-wedding-day"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">Delivery of Commitments</h4>
                      <p class="why-choose-sub-heading">Our team ensures that all the services are delivered as committed to ensure a hassle-free experience for you.
                        No need to run around for your wedding services - </p>
                      <a href="#" class="btn read-more">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="weddlist-img">
            <img src="#" class="img-responsive" alt="wedding Team img">
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end why choose -->
<!-- wedding gallery -->
  <section id="wedding-gallery" class="wedding-gallery-main-block">
    <div class="container-fluid">
      <div class="row">
        <div id="gallery-slider" class="gallery-slider">
          <div class="item gallery-block">
            <div class="gallery-img">
              <img src="images/galleryindex-1.jpg" class="img-responsive" alt="gallery">
            </div>
            <div class="overlay-bg"></div>
            <div class="gallery-dtl">
              <i class="fa fa-heart" aria-hidden="true"></i><span>21</span>
              <h4 class="gallery-heading"><a href="images/galleryindex-1.jpg" title="Elina &amp; Williams">Harsh &amp; Ritika</a></h4>
            </div>
          </div>
          <div class="item gallery-block">
            <div class="gallery-img">
              <img src="images/galleryindex-2.jpg" class="img-responsive" alt="gallery">
            </div>
            <div class="overlay-bg"></div>
            <div class="gallery-dtl">
              <i class="fa fa-heart" aria-hidden="true"></i><span>30</span>
              <h4 class="gallery-heading"><a href="images/galleryindex-2.jpg" title="Jerry &amp; Jon">Harish &amp; Varsha</a></h4>
            </div>
          </div>
          <div class="item gallery-block">
            <div class="gallery-img">
              <img src="images/galleryindex-3.jpg" class="img-responsive" alt="gallery">
            </div>
            <div class="overlay-bg"></div>
            <div class="gallery-dtl">
              <i class="fa fa-heart" aria-hidden="true"></i><span>45</span>
              <h4 class="gallery-heading"><a href="images/galleryindex-3.jpg" title="Mariya &amp; Uday">Pankaj &amp; Pooja</a></h4>
            </div>
          </div>
          <div class="item gallery-block">
            <div class="gallery-img">
              <img src="images/galleryindex-4.jpg" class="img-responsive" alt="gallery">
            </div>
            <div class="overlay-bg"></div>
            <div class="gallery-dtl">
              <i class="fa fa-heart" aria-hidden="true"></i><span>20</span>
              <h4 class="gallery-heading"><a href="images/galleryindex-4.jpg" title="Jenny &amp; Williams">Ankit &amp; Jyoti</a></h4>
            </div>
          </div>
          <div class="item gallery-block">
            <div class="gallery-img">
              <img src="images/galleryindex-5.jpg" class="img-responsive" alt="gallery">
            </div>
            <div class="overlay-bg"></div>
            <div class="gallery-dtl">
              <i class="fa fa-heart" aria-hidden="true"></i><span>45</span>
              <h4 class="gallery-heading"><a href="images/gallery-5.jpg" title="Denila &amp; Sams">Vikash &amp; Sakshi</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end wedding gallery -->
<!-- footer -->
  <section id="footer" class="footer-main-block" style="background-image: url('images/footer-Patterns.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="about-widget footer-widget">
            <h4 class="footer-heading">About Wedding Team</h4>
            <div class="about-dtl">
                <p>We are the leading wedding portal in the world but beyond that, we are a few romantics who help couples organise their wedding; a unique day to enjoy with family and friends that involves hours of preparation and work.</p>
              <a href="category-listing.html" class="btn btn-pink">Find A Vendor</a>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-6">
          <div class="row">
            <div class="col-xs-6">
              <div class="links-widget footer-widget">
                <h4 class="footer-heading">Links</h4>
                <ul>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact-us-2.php">Contact Us</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 pad-0">
              <div class="links-widget footer-widget">
                <h4 class="footer-heading">Services</h4>
                <ul>
                  <li><a href="listing-wedding-venue.php">Services</a></li>
                  <li><a href="#">Wedding Dj</a></li>
                  <li><a href="listing-wedding-cakes.php">Wedding Cakes</a></li>
                  <li><a href="listing-wedding-photo.php">Wedding Photography</a></li>
                  <li><a href="listing-wedding-decorators.php">Wedding Decorators</a></li>
                </ul>
                <ul>
                  <li><a href="listing-bridal-mehandi.php">Bridal Mehandi</a></li>
                  <li><a href="listing-bridal-makeup.php">Bridal Makeup</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="subscribe-widget footer-widget">
            <h4 class="footer-heading">Subscribe Newsletter</h4>
            <form id="subscribe-form" class="subscribe-form">
              <div class="form-group"> 
                <input type="email" id="mc-email" class="form-control" placeholder="EMAIL ADDRESS">
                <button type="submit" class="btn btn-pink">Subscribe Now</button>
                <label for="mc-email"></label>
              </div>
            </form>
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/weddingteamwt" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/weddingteam3"  class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://in.pinterest.com/weddingteamwt/"  class="pinterest" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
          </div>
        </div>
      </div>       
    </div>
    <div class="copyright-block text-center">
      <p>&copy; 2019 All rights reserved.</p>
    </div>
  </section>
<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="jss/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="jss/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="jss/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="jss/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="jss/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="jss/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="jss/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="jss/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="jss/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="jss/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="jss/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="jss/bootstrap-datepicker.js"></script> <!-- datepicker js-->
<!-- revolution js files -->
<script type="text/javascript" src="revolutions/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolutions/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolutions/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- end revolution js files -->
<script type="text/javascript" src="jss/theme.js"></script> <!-- custom js -->  
<script type="text/javascript">
  var tpj=jQuery;   
  var revapi1066;
  tpj(document).ready(function() {
  if(tpj("#rev_slider_1066_1").revolution == undefined){
  revslider_showDoubleJqueryError("#rev_slider_1066_1");
  } 
  else
  {
  revapi1066 = tpj("#rev_slider_1066_1").show().revolution({
  sliderType:"standard",
  jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/jss/",
  sliderLayout:"fullscreen",
  dottedOverlay:"none",
  delay:9000,
  navigation: {
    keyboardNavigation:"off",
    keyboard_direction: "horizontal",
    mouseScrollNavigation:"off",
    mouseScrollReverse:"default",
    onHoverStop:"off",
    touch:{
          touchenabled:"on",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
          },
    bullets: {
      container:"slider",
      rtl:false,
      style:"",
      enable:true,
      hide_onmobile:true,              
      hide_onleave:false,
      hide_delay:200,
      hide_delay_mobile:1200,
      hide_under:0,
      hide_over:9999,
      direction:"horizontal",
      h_align:"center",
      v_align:"center",
      space:17,
      h_offset:0,
      v_offset:250,
      tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
    }
  },
  responsiveLevels:[1240,1024,778,480],
  visibilityLevels:[1240,1024,778,480],
  gridwidth:[1240,1024,778,480],
  gridheight:[868,768,960,720],
  gridwidth: 1000,
  lazyType:"none",
  parallax: {
    type:"mouse",
    origo:"slidercenter",
    speed:2000,
    levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
    type:"mouse",
    disable_onmobile:"on"
  },
  shadow:0,
  spinner:"off",
  stopLoop:"off",
  stopAfterLoops:1,
  stopAtSlide:0,
  shuffle:"off",
  autoHeight:"off",
  fullScreenAutoWidth:"off",
  fullScreenAlignForce:"off",
  fullScreenOffsetContainer: ".header",
  fullScreenOffset: "60px",
  disableProgressBar:"on",
  hideThumbsOnMobile:"off",
  hideSliderAtLimit:0,
  hideCaptionAtLimit:0,
  hideAllCaptionAtLilmit:0,
  debugMode:false,
  fallbacks: {
        simplifyAll:"off",
        nextSlideOnWindowFocus:"off",
        disableFocusListener:false,
        }
      });
    }
  });
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>