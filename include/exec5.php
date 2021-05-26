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
		$query=mysql_query("update cart set quantity=quantity-1 where name='$name'");
		$query=mysql_query("update cart set total=(quantity * price) where name='$name'");
	}
	echo "<h1>Food added to cart</h1>";
	$query=mysql_query("SELECT quantity from cart ");
	while($row=mysql_fetch_array($query)){
			$delete=mysql_query("delete from cart where quantity=0");
		}
?>