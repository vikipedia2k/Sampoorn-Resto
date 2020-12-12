<?php

mysql_connect("localhost","root","");
mysql_select_db("Samparm");
$con=mysqli_connect("localhost","root","","Samparm");
session_start();
date_default_timezone_set('Asia/Kolkata');
//Registration Execution

if(isset($_POST['submit_data_register'])){
	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$query=mysql_query("insert into login(first_name,last_name,email,mobile,password) values('$firstname','$lastname','$email','$mobile','$password')");
	if(!$query){
		echo mysql_error();
	}else{
		echo "<script>window.location='http://localhost/samparn%20resto/login.php';</script>";
	}
}

//End of Execution

//Login

if(isset($_POST['submit_data_login'])){
	$username=$_POST['email'];
	$password=$_POST['password'];
	
	$result=mysql_query("select * from login where email='$username' and password = '$password'")
					or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['email'] == $username && $row ['password'] == $password)
	{
		$_SESSION['loggedIn']=$row['id'];
			 echo "<script>window.location='http://localhost/samparn%20resto/';</script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Wrong Username or Password');
				window.location='http://localhost/samparn%20resto/login.php';
				</script>";
	}
}

//End of Execution

// //Request Execution
// if(isset($_GET['send_request'])){
	// $user_id=$_GET['user_id'];
	// $requested_id=$_GET['requested_id'];
	// $query=mysql_query("insert into requests(user_id,requested_id,status) values('$user_id','$requested_id',0)");
	// if(!$query){
		// echo mysql_error();
	// }else{
		// echo "<script>window.location='http://localhost/message%20app/find.php';</script>";
	// }
// }
// //End of execution

// //Accept Execution
// if(isset($_GET['accept'])){
	// $requested_id=$_GET['requested_id'];
	// $query=mysql_query("UPDATE requests SET status=1 WHERE requested_id=$requested_id");
	// if(!$query){
		// echo mysql_error();
	// }else{
		// echo "<script>window.location='http://localhost/message%20app/dashboard.php';</script>";
	// }
// }
// //End of execution

// //Reject Execution
// if(isset($_GET['reject'])){
	// $requested_id=$_GET['requested_id'];
	// $query=mysql_query("UPDATE requests SET status=2 WHERE requested_id=$requested_id");
	// if(!$query){
		// echo mysql_error();
	// }else{
		// echo "<script>window.location='http://localhost/message%20app/dashboard.php';</script>";
	// }
// }
// //End of execution

// //Sending Message Execution
// if(isset($_POST['sent_message'])){
		// $user_id=$_POST['user_id'];
		// $sender_id=$_POST['sender_id'];
		// $message=$_POST['message'];
		// $date=date('d-M | h:i A');
		// $query=mysql_query("insert into messages(user_id,requested_id,message,date) values('$user_id','$sender_id','$message','$date')");
	
	// if(!$query){
		// echo mysql_error();
	// }else{
		// echo "<script>window.location='http://localhost/message%20app/chat_box.php?request_id=$sender_id';</script>";
	// }
// }
// //End of execution
?>