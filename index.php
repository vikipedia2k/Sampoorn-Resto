<html>
<head> 
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="asset/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/custom1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body onload="all_func()">
	   <div class="container-fluid">
	      <div class="row mynav" >
		       <div class="col-md-3">
			     <label class="logo">Sampoorna</label>
			   </div>
			   <div class="col-md-9 mynav" id="myTopnav">
			     <ul>
				 <li><a href="#Home" class="active">Home</a></li>
				 <li><a href="#Book">Book Table</a></li>
				 <li><a href="#Resto">Resto Menu</a></li>
				 <li><a href="#About"> About Us</a></li>
				 <li><a href="#Contact">Contact</a></li>
				 <li><a href="http://localhost/samparn%20resto/login.php"><i class="fa fa-sign-in"></i></a></li>
				 </ul>
				 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
				</a>
			   </div>
		  </div>
		  <section id="Home" class="mt80">
		  <div class="row ">
		     <div class="col-md-12">
			     <div class="overlap">
			     <img src="asset/image/smp2.jpg" >
					 <div class="overtext">
					  <h2>Contactless Dining Experience</h2>
					  <p>Enjoy Seamless contact-Free Services</p>
					 
					 </div>
		        </div>
		     </div>
		     <!-- <div class="col-md-6"> -->
			     <!-- <img src="asset/image/smp.jpg"> -->
		     <!-- </div> -->
		  </div>
		  </section>
		  <section id="Book">
		  <div class="row">
		      <div class="col-md-12 text-center booktable">
			    <h3 class="white">Book Table</h3>
	          </div>
	      </div>  
		  <div class="row">
		       <div class="col-md-6 boxleft jumbotron">
			     <div class="jumbobox adr">
					   <h4>OPENING HOURS</h4>
					   <h6>MONDAY TO SUNDAY</h6>
					   <h6> 7:00 AM to 1O:00 PM</h6><br>  
					   <h4>ADDRESS</h4>
					   <h6>SHIVAJI NAGAR ,PUNE MAHARASHTRA </h6>
					   <h6>+91 - 987878775</h6><br> 
	             </div>
	          </div>
			  <div class="col-md-6 text-center  jumbotron">
			     <form method="post" name="form" onsubmit="" action="https://www.google.com/">
				     <div class="col-xs-3">
				    <input type="name" id="" class="form-control" name="cname" placeholder="Enter Your Fullname"><br>
				    </div>
					<div class="col-xs-3">
				    <input type="email" id="" class="form-control mb" name="cemail" placeholder="Enter Your Email ">
				    </div>
					
					
				    <!-- <label for="example" class="white1">Choose a Date</label> -->
					<div class="col-xs-3">
				    <input type="date" id="" class="form-control mb" name="date">
				    </div>
					
					
			        <div class="form-group">
						<!-- <label for="sel1" class="white1">Number of People</label> -->
						<div class="col-xs-3">
							<select class="form-control input-sm col-xs-3 mb" id="sel1">
							<option>Number of People</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							</select>
						</div>
					</div>
					<div class="form-group">
					     <div class="col-xs-3">
						<!-- <label for="sel1" class="white1">Choose a Time</label> -->
						<select class="form-group form-control input-sm " id="sel1">
						<option>Choose a Time</option>
						<option>10:00AM-2:00PM</option>
						<option>2:00AM-5:00PM</option>
						<option>5:00AM:7:00PM</option>
						<option>7:00AM-10:00PM</option>
						</select>
					     </div>
					</div>
					<input type="submit" class="btn btn-secondary sb" name="sub" value="Submit">
		         </form>
	          </div>
	      </div>
		  </section>
		  <section id="Resto">
		  <div class="row jumbotron white">
		  <div class="col-md-12 text-center rmenu">
			     <h3> Resto Menu</h3>
		      </div>
			<div class="col-md-4 first">
				<!--<form method="post" onsubmit="return myfun2()" action="include/execution.php">-->
					<div class="form-group user ">
						<p>Table Code:</p>
						<input name="username" id="user" type="text" class="form-control input" placeholder="Table Code">
						<span id="warn1" class="red"></span>
					</div>
					<!--<div class="form-group mob " >
						<p>Mobile:</p>
						<input name="mobile" id="mob" type="mobile" class="form-control input" placeholder="Mobile">
						<span id="warn2" class="red"></span>
					</div>-->
					<div id="show_cart_added"></div>
					<div id="show_cart"></div>
					<!--table class="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>Gravy</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</thead>
						<tbody>
						 // <?php  
						  // $attnum=1;
						  // $conn= mysqli_connect("localhost","root","","food_services");
						  // if($conn-> connect_error){
							  // die("Connection failed:". $conn-> connect_error);
						  // }
						  
						  // $sql = "SELECT id,name,price,quantity from cart";
						  // $result= $conn-> query($sql);
						  
						  // if($result-> num_rows >0){
							  // $total=0;
							  // 	
								 // echo '<tr><td>'. $row['id'].'</td><td>'. $row['name'].'</td><td>'. $row['price'].'</td><td>'. $row['quantity'].'</td><td>'.$row['quantity'] * $row['price'].'</td></tr>'; 
								 // $total=$row['quantity'] * $row['price']+$total;
								   
							  // }
						  // }
						  // ?>
							</tbody>
						 </table>
						 <input type="hidden" class="btn_tot" name="total" value="<?php echo $total;?>">
						 <div class="form-group">
							<input class="login_btn" name="submit" type="submit" class="btn btn-primary btn-block" value="submit" >
						</div>-->
					<!--</form>-->
				</div>
				<div class="col-md-2 total">
					<h2>Total + GST</h2>
					<?php
						$conn= mysqli_connect("localhost","root","","food_services");
						$sql = mysqli_query($conn,"SELECT SUM(total) AS value_sum from cart");
						$row=mysqli_fetch_assoc($sql);
						echo $row['value_sum'];						
					?>
				</div>		
			<div class="col-md-6 second ">
			<div id="show_text"></div>
			<div id="show_data" ></div>
			
			
				<!--<table class="table">
					<thead>
					  <tr>
						<th>Gravy</th>
						<th>Price</th>
						<th>Cart</th>
					  </tr>
					</thead>
					<tbody>
					  // <?php 
					  // $exeid=0;
					  // $conn= mysqli_connect("localhost","root","","food_services");
					  // if($conn-> connect_error){
						  // die("Connection failed:". $conn-> connect_error);
					  // }
					  
					  // $sql = "SELECT id,name,price from menu";
					  // $result= $conn-> query($sql);
					  
					  // if($result-> num_rows >0){
						  // while($row = $result->fetch_assoc()){
							  // echo '<tr><td>'. $row['name'].'</td><td>'. $row['price'].'</td> <td><a href="include/execution.php?name='.$row['name'].'&price='.$row['price'].'&exeid=1">+</a></td></tr>';
							  
						  // }
					  // }
					  // ?>
					</tbody>
				  </table-->
				  
			</div>
			<input type="submit" class="btn btn-secondary sb1" name="sub" value="Generate Invoice">
		</div>
		  </section>
		  <section id="About">
		  <div class="row abt1">
		     <div class="col-md-12 text-center">
			     <h3>About Us</h3>
			 </div>
		  </div>
		  <div class="row abt " >
		     <div class="col-md-4 ">
			   <img src="asset/image/smp1.gif">
		     </div>
			 <div class="col-md-8 abt2">
				<h6>It started with small resto in pune with delicious healthy and heartly servies. </h6>
				<h6>We expand the branches over the period of time and serve with regards and your support.  </h6>
			        
		     </div>
		  </div>
		  </section>
		  <section id="Contact">
		  <div class="row cn_us">
		     <div class="col-md-12 text-center">
			     <h3>Contact Us</h3>
			 </div>
		  </div>
		  <div class="row">
			 
			   <div class="col-md-3">
			    <form method="post" name="form" onsubmit="" action="https://www.google.com/">
					<div class="form-group">
						<input type="name" class="form-control ipad" name="name" placeholder="Enter Name">
				   </div>
			   </div>
			   <div class="col-md-3">
				   <div class="form-group">
						<input type="name" class="form-control ipad" name="phone" placeholder=" Phone Number ">
				   </div>
			   </div>
			    <div class="col-md-3">
				   <div class="form-group">
						<input type="email" class="form-control ipad" name="name" placeholder=" Email Address">
				   </div>
			   </div>
			   <div class="col-md-3">
				    <input type="submit" class="btn btn-secondary ipad " name="sub" value="Contact Us">
					</form>
			    </div>
			 
		  </div>
		  <div class="row">
		      <div class="col-md-6">
				   <div class="addr">
						<p>Oppo.to bakers point
						Shivajinagar ,Pune
						Maharashtra</p>
						<p>999-7777-000
						Sampoorna@gmail.com</p>
					   <p>10AM - 11PM</p>
				  </div>
			  </div>		      
			  <div class="col-md-6">
			  
				  <div class="map">
				  <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=shivaj%20nagar%20pune+(samparn)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
				  </iframe>
				  </div>
			  </div>
		 </div>
		 <div class="row footer">
				<div class="col-md-5">
				<h5>Sampoorna</h5>
				<p>Copyright © 2020 Sampoorna | Credits All  right reserved </p>
				</div>
				<div class="col-md-2 text-center">
				<p>DESIGN BY</p>
				<h5>GROUP D</h5>
				</div>
				<div class="col-md-5 icn">
					<a><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
	      </div>
	   </div>
    </body>
<script>
	function myfun(){
		var n= document.getElementById("name").value;
		var z= document.getElementById("price").value;
	
	if(!n) {
		document.getElementById("warn4").innerHTML="* please fill name";
		return false;
	}
	if(!z) {
		document.getElementById("warn3").innerHTML="* please fill price";
		return false;
	}
	}
function myfun2(){
		var n= document.getElementById("user").value;
		var z= document.getElementById("mob").value;
	
	if(!n) {
		document.getElementById("warn1").innerHTML="* please fill username";
		return false;
	}
	if(!z) {
		document.getElementById("warn2").innerHTML="* please fill mobile no";
		return false;
	}
	}
	function check(){
		var name = document.getElementById("name").value;
		var price = document.getElementById("price").value;
		$.ajax({
			url:'include/exec.php',
			method:'POST',
			data:{
				name:name,price:price
			},
			success:function(responsedata){
				document.getElementById("show_text").innerHTML=responsedata;
				all();
			}
		});
	}
	function all(){
		$.ajax({
			url:'include/exec1.php',
			success:function(responsedata){
				document.getElementById("show_data").innerHTML=responsedata;
			}
		});
	}
	function all1(name,price){
		$.ajax({
			url:'include/exec3.php',
			method:'POST',
			data:{
				name:name,price:price
			},
			success:function(responsedata){
				document.getElementById("show_cart").innerHTML=responsedata;
				all2();
			}
		});
	}
	function all2(){
		$.ajax({
			url:'include/exec2.php',
			success:function(responsedata){
				document.getElementById("show_cart_added").innerHTML=responsedata;
			}
		});
	}
	function all3(name,price){
		$.ajax({
			url:'include/exec5.php',
			method:'POST',
			data:{
				name:name,price:price
			},
			success:function(responsedata){
				document.getElementById("show_cart").innerHTML=responsedata;
				all_func();
			}
		});
	}
	function deletedata(id){
		$.ajax({
			url:'include/exec4.php',
			method:'POST',
			data:{
				id:id
			},
			success:function(responsedata){
				document.getElementById("show_text").innerHTML=responsedata;
				all();
			}
		});
	}
	function all_func(){
	all();
	all2();
	}
</script>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</html>