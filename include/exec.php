<?php

mysql_connect("localhost","root","");
mysql_select_db("food_services");

//Registration Execution

	$name=$_POST['name'];
	$price=$_POST['price'];
	$query=mysql_query("insert into menu(name,price) values('$name','$price')");
	echo "<h1>Food added to Menu</h1>";

?>