<?php
	include('header.php');
?>

<!-- Register Title -->
	<div class="container">
		<h2>Create an account</h2>
		<h3>To start rating your favourite games</h3>
	</div>
			
	
	
	<!-- Register -->
	<div class="container" id="registerNew">
		
		<h3>Enter Your Name</h3>
		<input type="text" name="newName" placeholder="Enter your Name">
		<br>
		<h3>Enter Your Email</h3>
		<input type="email" name="newEmail" placeholder="Enter your email">
		<br>
		<h3>Enter Your Password</h3>
		<input type="text" name="newPassword" placeholder="New Password">
		<br>
		<br>
		<div class="col-md-4 col-sm-12">
			<input type="submit" class="form-control" name="signup" value="Sign Up">
		</div>
		<br>
		<br>
		
	</div>


	<!-- Login -->
	<div class="container" id="loginTransfer">
		<br>
		<h3>Already a member?</h3>
		<div class="col-md-4 col-sm-12">
			<input type="submit" class="form-control" name="loginTransfer" value="Log In">
		</div>
		<br>
		<br>
		
	</div>







<?php
	include('footer.php');
?>

