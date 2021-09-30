<?php
require_once('config.php');
?>

<?php

	if(!isset($_SESSION))
		session_start();
	
	if(isset($_POST["signup"])){
		$uname = $_POST["newName"];
		$email = $_POST["newEmail"];
		$pass = $_POST["newPassword"];
		
		$sql = "INSERT INTO user(Username, Email, Password) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$names=array($uname, $email, $pass);
		$result = $stmtinsert->execute([$uname, $email, $pass]);
		if ($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving.';
		}
	}
	
	include('header.php');
?>

<!-- Register Title -->
	<div class="container">
		<h2>Create an account</h2>
		<h3>To start rating your favourite games</h3>
	</div>
			
	
	
	<!-- Register -->
	<div>
	<form action ="register.php" method="post">
		<div class="container" id="registerNew">
		
			<h3>Enter Your Username</h3>
			<input type="text" name="newName" placeholder="Enter your username" required>
			<br>
			<h3>Enter Your Email</h3>
			<input type="email" name="newEmail" placeholder="Enter your email"required>
			<br>
			<h3>Enter Your Password</h3>
			<input type="password" name="newPassword" placeholder="Enter your password"required>
			<br>
			<br>
			<div class="col-md-4 col-sm-12">
				<input type="submit" class="form-control" name="signup" value="Sign Up">
			</div>
		<br>
		<br>
		</div>
	</form>
	</div>

	<!-- Login -->
	<div class="container" id="loginTransfer">
		<br>
		<h3>Already a member?</h3>
		<div class="col-md-4 col-sm-12">
			<a href="login.php">
			<input type="submit" class="form-control" name="loginTransfer" value="Log In">
			</a>
		</div>
		<br>
		<br>
		
	</div>







<?php
	include('footer.php');
?>

