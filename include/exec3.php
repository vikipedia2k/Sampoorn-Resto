<?php
mysql_connect("localhost","root","");
mysql_select_db("food_services");

//Registration Execution
	

	$name=$_POST['name'];
	$price=$_POST['price'];
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
	echo "<h1>Food added to cart</h1>";
?>