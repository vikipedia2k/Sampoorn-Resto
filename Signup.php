<?php include_once'include/header.php'; ?>
	<div class="container-fluid">
		<div class="row Signup" id="row">
			<div class="col-md-offset-4 col-md-4 well back">
			<div class="inline">
				<hr class="line"><img src="asset/image/select-logo-15.jpg" class="center"><hr class="line">
			</div>
				<h3 class="text-center">Create your account.Its free and only takes a minute</h3>
				<form method="post" action="include/execution.php" onsubmit="return myfun()">
					<div class="form-group">
						<input name="first_name" id="first" type="text" class="form-control" placeholder="First Name">
						<span id="warn" class="red"></span>
					</div>
					<div class="form-group" >
						<input name="last_name" id="last" type="text" class="form-control" placeholder="Last Name">
						<span id="warn1" class="red"></span>
					</div>
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input name="mobile" type="number" class="form-control" placeholder="Mobile no" required>
					</div>
					<div class="form-group">
						<input id="passwords" name="password" type="password" class="form-control" placeholder="Password" value="">
					</div>
					<div class="form-group">
						<input id="passwordss" name="cnfpassword" type="password" class="form-control" placeholder="Confirm Password" value="">
						<span id="messagess" class="red"></span>
					</div>
					<div class="form-group">
						<input class="sub Signup" name="submit_data_register" type="submit" class="btn btn-primary btn-block" value="Register Now" >
					</div>
					<p class="login">
					<span>Already Register ? </span><a class="link" href="login.php">logIn</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</nav>
  


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
<script>
	function myfun(){
		var a= document.getElementById("passwords").value;
		var b= document.getElementById("passwordss").value;
		var n= document.getElementById("first").value;
		var z= document.getElementById("last").value;
	if(a!=b){
	document.getElementById("messagess").innerHTML="* Password are not same";
	return false;
	}
	
	if(!n) {
		document.getElementById("warn").innerHTML="* please fill first name";
		return false;
	}
	if(!z) {
		document.getElementById("warn1").innerHTML="* please fill last name";
		return false;
	}
	}
</script>
</html>

</html>