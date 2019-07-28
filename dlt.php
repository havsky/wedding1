<?php
   include('dbcon.php');
   $db = $_GET['db'];
   $product = $_GET['prod'];
   
    if(isset($_POST['Yes']))
	{
		$sql = "DELETE FROM $db WHERE id='$product'";
		$run_sql = mysqli_query($con, $sql);
	  
	       if($run_sql)
	        {
		   
		     echo "<script>alert('This entry has been deleted')</script>";
		      echo "<script>window.open('manage-item-listing.php','_self')</script>";
	        }
	       
	}
	if(isset($_POST['No']))
    {
	   
		  
		   echo "<script>window.open('manage-item-listing.php','_self')</script>";
	   
    }
   
   
?>
<html>
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
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->


<style>
 
   .dltt{
	   top: 30%;
	   left: 20%;
	   padding: 40;
	   position: absolute;
	   background: #EEEEEE;
	   
   }
   
   input{
	   width: 30%;
   }
 
</style>

</head>
<body>
   <div class="container">
      <div class="dltt">
	  <center>
	    <h3>Do you really want to delete this entry from your Entry ?</h3>
	    <form action="" method="post">
         <input class="btn btn-danger" type="submit" name="Yes" value="Yes">
         <input class="btn btn-primary" type="submit" name="No" value="No">
       </form>
	  </center>
	  </div>
   </div>
</body>
</html>