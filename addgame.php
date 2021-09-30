<?php
	include('header.php');
?>

<!-- Add Game Title -->
	<div class="container">
		<h2>Add a Game</h2>
		
	</div>
			
	
	
	<!-- Add Game -->
	<div class="container" id="AddGame">
		
		<h3>Enter the name of the game</h3>
		<input type="text" name="newGameName" placeholder="Game Name">
		<br>
		<h3>Enter the name of the publisher</h3>
		<input type="text" name="newPublisher" placeholder="Publisher">
		<br>
		<h3>Year of release</h3>
		<div class="slidecontainer">
			<input type="range" min="1" max="100" value="50" class="slider" id="myRange">
		</div>
		<br>
		<h3>Description of the game</h3>
		<textarea class="form-control" rows="6" placeholder="Description of the game" name="message" required></textarea>
		<br>
		<div class="col-md-4 col-sm-12">
			<input type="submit" class="form-control" name="submitNewGame" value="Submit">
		</div>
		<br>
		<br>
		
	</div>




<?php
	include('footer.php');
?>

