
<?php

	if(!isset($_SESSION))
		session_start();
	
	$uname = "";
	$email = "";
	
	$db = mysqli_connect('localhost', 'root', '', 'useraccounts');
	
	if(isset($_POST["signup"])){
		$uname = mysqli_real_escape_string($db,$_POST["newName"]);
		$email = mysqli_real_escape_string($db, $_POST["newEmail"]);
		$pass = mysqli_real_escape_string($db, $_POST["newPassword"]);
		 
		
		if (empty($uname)) {  echo "<script type='text/javascript'>alert('Username is required')</script>"; }
		if (empty($email)) {  echo "<script type='text/javascript'>alert('Email is required')</script>"; }
		if (empty($pass)) {  echo "<script>alert('Password is required')</script>"; }
		
		$user_check_query = "SELECT * FROM user WHERE Username='$uname' OR Email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
  
		if ($user) { 
			if ($user['Username'] === $uname) {
				 echo "<script>alert('Username already exists')</script>";
			}

			if ($user['Email'] === $email) {
				 echo "<script>alert('Email already exists');</script>";
			}
		}
		
		if (count($errors) == 0) {
		$password = md5($pass);//encrypt the password before saving in the database

		$query = "INSERT INTO user (Username, Email, Password) 
  			  VALUES('$uname', '$email', '$pass')";
		mysqli_query($db, $query);
		$_SESSION['Username'] = $uname;
		$_SESSION['success'] = true;
		echo "<script>alert('You are now logged in');</script>";
		echo "<script>location.href='index.php'</script>";
		

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

