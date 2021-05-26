<?php

@mysql_connect("localhost","root","");
mysql_select_db("food_services");

//Registration Execution

	$query=mysql_query("select * from menu");
	$count=mysql_num_rows($query);
	if($count>0){
	echo '
	<table  class="table">
		<thead>
			<tr>
				<th>Gravy</th>
				<th>price</th>
				<th>cart</th>
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
				<td><a href="javaScript:void(0)" onclick="all1('.$name.','.$row['price'].')" >+</a></td>
			</tr>
		';
	}
	echo '</tbody></table>';
	}else{
		echo'No data found';
	}

?>