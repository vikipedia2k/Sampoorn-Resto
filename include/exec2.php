<?php

@mysql_connect("localhost","root","");
mysql_select_db("food_services");
	$total=0;
	$query=mysql_query("select * from cart");
	$count=mysql_num_rows($query);
	if($count>0){
	echo '
	<table  class="table">
		<thead>
			<tr>
				<th>Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				<th>Change</th>
			</tr>
		</thead>
	';
	while($row=mysql_fetch_array($query)){
		$name="'".$row['name']."'";
		echo '
		<tbody>
			<tr>
				<td>'.$row['name'].'</td>
				<td>'.$row['price'].'</td>
				<td>'.$row['quantity'].'</td>
				<td>'.$row['quantity'] * $row['price'].'</td>
				<td><a href="javaScript:void(0)" onclick="all3('.$name.','.$row['price'].')" >-</a></td>
			</tr>
		';
		 $total=$row['quantity'] * $row['price']+$total;
	}
	echo '</tbody></table>';
	}else{
		echo'No data found';
	}

?>