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

<?php

if (empty($_POST['name'])) {

// display error message (Name is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the  Name.');
history.go(-1);
</script>";
}
else if (empty($_POST['rating'])) {

// display error message (Name is empty)
echo "<script type='text/javascript'>
alert('Error: Please rate.');
history.go(-1);
</script>";
}


else if (empty($_POST['GameID'])) {

	// display error message (Name is empty)
	echo "<script type='text/javascript'>
	alert('Error: Please do not change the GameID.');
	history.go(-1);
	</script>";
	}

else if (isset ($_POST['message']) == false || empty($_POST['message'])) {

// display error message (Price is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the message.');
history.go(-1);
</script>";
}



else{

//Connect mySQL
$connection = mysqli_connect('localhost','root','','game');

//Select Database
mysqli_select_db($connection, 'rating');

$name = $_POST["name"];
$rating = $_POST["rating"];
$message = $_POST["message"];
$id = $_POST["GameID"];


//Insert Query 
$sql = "INSERT INTO rating (GameID,Names,Rate,Message)
 VALUES('$id','$name','$rating','$message');";

//Execute Query
$records = mysqli_query($connection,$sql);
echo '<script language="javascript">
alert("Data has been successfully uploaded");
window.location.replace("index2.php");
</script>';
}
?>





