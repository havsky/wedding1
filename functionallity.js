 <div class="side">
							<?php
								 $sql1 = "SELECT * from menu";
								 $run_sql1 = mysqli_query($conn, $sql1);
								 while($row_products1 = mysqli_fetch_array($run_sql1)){

									$cat_Name = $row_products1['pName'];
									$pro_id = $row_products1['sNo'];

									echo "
									   <div id='catContent'> <p>$cat_Name</p> </div>
									";
								 }
							?>
					 </div>
					 
					 
					$sl2 = "INSERT INTO Orders (dName, quant, stuRoll, dt, token) VALUES ('$dishName', '$dishQuantity', '$eid', '$dt', '$tokenNo')";
		 $run_sl2 = mysqli_query($conn, $sl2);
		 
		 
		  $sql3 = "SELECT * FROM cart WHERE rollNo='$eid'";
	 $run_sql3 = mysqli_query($conn, $sql3);
	 while($row_sql3 = mysqli_fetch_array($run_sql3)){
		 $dishName = $row_sql3['dName'];
		 $Price = $row_sql3['price'];
		 $dishQuantity = $row_sql3['quantity'];
		 
		 echo "<script>alert('Added to Orders')</script>";