<?php
	session_start();
if(isset($_SESSION['status'])){
	if($_SESSION['status'] == true)	
		include('headerUser.php');
}
else{
	echo "<script>alert('Please sign in');</script>";
	echo "<script>location.href='login.php'</script>";
	exit();
}
 ?>

<!-- Add Game Title -->
	<div class="container">
		<h2>Add a Game</h2>
		
	</div>
			
	
	
	<!-- Add Game -->
	<form action="insert.php" class="contact-form" method="post" enctype="multipart/form-data">
	<div class="container" id="AddGame">
		
		<h3>Enter the name of the game</h3>
		<input type="text" name="name" placeholder="Game Name">
		<br>
		<h3>Enter the name of the publisher</h3>
		<input type="text" name="publisher" placeholder="Publisher">
		<br>
		
		<h3>Year Range</h3>
		<input type="range" for="yearRange" value="2021" min="1980" max="2021" 
		oninput="this.nextElementSibling.value = this.value" name="year"><output>2021</output><br>
		

		<h3>Description of the game</h3>
		<textarea class="form-control" rows="6" placeholder="Description of the game" name="description" required></textarea>
		<br>
		<div class="col-md-4 col-sm-12">
		
		<h3>Enter username</h3>
		<input type="text" name="user" placeholder="Username" value = <?php echo $_SESSION['users'] ?> >
		<br>
		
		
		Choose Image:
		<br><input type="file" name="fileToUpload" id="fileToUpload" ></br>
		
			<input type="submit" class="form-control" name="submitNewGame" value="Submit">
		</div>
		<br>
		<br>
		
	</div>
</form>



<?php
	include('footer.php');
?>

