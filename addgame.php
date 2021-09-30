<?php
	include('header.php');
	include('connection.php');

	if(isset($_POST['submit'])){
		$gameName = $_POST['gameName'];
		$publisherName = $_POST['publisherName'];
		$image = $_POST['image'];
		$yearValue = $_POST['yearValue'];
		$description = $_POST['description'];

		$insert = mysqli_query($db,"INSERT INTO gametable(gameName, publisherName, image, yearValue, description, dateTime)
		VALUES ('$gameName','$publisherName', '$image', '$yearValue', '$description', now())");

		if(!$insert)
		{
			echo mysqli_error();
		}
		// else
		// {
		// 	echo "Records added successfully.";
		// }
	}

	mysqli_close($db);
?>

<!-- Add Game Title -->
	<div class="container">
		<h2>Add a Game</h2>
		
	</div>
	
	<!-- Add Game -->
	<div class="container" id="AddGame">
		 <form method="POST">
		<!-- <form action="/submitGame.php"> -->
			Game:
			<br>
			<input type="text" name="gameName">
			<br>
			Publisher:
			<br>
			<input type="text" name="publisherName">
			<br>
			Cover art:
			<br>
			<input type="file" name="image" Required>
			<br>
			Year:
			<br>
			<input type="range" for="yearRange" value="2021" min="1980" max="2021" oninput="this.nextElementSibling.value = this.value" name="yearValue"><output>2021</output><br>
			Description:<br>
			<textarea id="description" name="description" rows="5" cols="50"> </textarea><br>
			<input type="submit" name= "submit" value="Submit">
		</form>
	</div>
<?php
	include('footer.php');
?>

