<?php 
	//Connect mySQL
			$con = mysqli_connect('localhost','root','','game');
		
		//Select Database
			mysqli_select_db($con, 'game');
		
		//Select Query
			$sql = "Add FROM game WHERE gameID = ".$_GET['id'].";";
		
		//Execute Query
			if(mysqli_query($con,$sql))
				header("refresh:1; url=addgame.php");
			else
				echo "Not Added";
?>