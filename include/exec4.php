<?php

mysql_connect("localhost","root","");
mysql_select_db("food_services");



	$id=$_POST['id'];
	$query=mysql_query("delete from menu where id=$id");
	echo "<h1>Delete Successfully</h1>";

?>