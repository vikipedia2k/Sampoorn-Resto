<?php

mysql_connect("localhost","root","");
mysql_select_db("food_services");

//Registration Execution

if(isset($_POST['submit_data_menu'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$query=mysql_query("insert into menu(name,price) values('$name','$price')");
	if(!$query){
		echo mysql_error();
	}else{
		echo "<script>window.location='http://localhost/food_order';</script>";
	}
}
//Add exucution

if($_GET['exeid']=='1'){
	$name=$_GET['name'];
	$price=$_GET['price'];
	$sql = "SELECT * from cart where name='$name'";
	$result= mysql_query($sql);
	$check=mysql_num_rows($result);
	if($check=='1'){
		$row_data=mysql_fetch_array($result);
		$query=mysql_query("update cart set quantity=quantity+1 where name='$name'");
		$query=mysql_query("update cart set total=(quantity * price) where name='$name'");
	}else{
		$query=mysql_query("insert into cart(name,price,quantity,total) values('$name','$price','1','$price')");
	}
	echo "<script>window.location='http://localhost/food_order/';</script>";
	
}
//User Execution

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$mobile=$_POST['mobile'];
	$result= $_POST['total'];
	$query=mysql_query("insert into userid(username,mobile,total) values('$username','$mobile','$result')");
	if(!$query){
		echo mysql_error();
	}else{
		echo "<script>window.location='http://localhost/food_order/success.html';</script>";
	}
}
?>