<?php include_once'include/header.php'; ?>
	<div class="container-fluid Signup">
		<div class="row" id="row">
			<div class="col-md-offset-4 col-md-4 well back">
			<div class="inline">
				<hr class="line"><img src="asset/image/select-logo-15.jpg" class="center"><hr class="line">
			</div>
				<h3 class="text-center">Login</h3>
				<form method="post" action="include/execution.php" onsubmit="return myfun()">
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input id="passwords" name="password" type="password" class="form-control" placeholder="Password" value="">
					</div>
					<p>
					<input type="checkbox" /><span>Keep me Signed In</span>
					</p>
					<div class="form-group">
						<input class="sub" name="submit_data_login" type="submit" class="btn btn-primary btn-block" value="Login">					
					</div>
				    <p class="login">
					<span>Not a member ? </span><a class="link" href="Signup.php">Sign Up</a>
				</form>
			</div>
		</div>
	</div>
</nav>
  


<!-- <footer class="container-fluid text-center"> -->
  <!-- <p>Footer Text</p> -->
<!-- </footer> -->

</body>
</html>

</html>