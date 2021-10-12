<?php

if (empty($_POST['name'])) {

// display error message (Name is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the Game Name.');
history.go(-1);
</script>";
}

else if (isset ($_POST['description']) == false || empty($_POST['description'])) {

// display error message (Price is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the Description.');
history.go(-1);
</script>";
}

else if (isset ($_POST['publisher']) == false || empty($_POST['publisher'])) {

// display error message (Publisher is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the Publisher Name.');
history.go(-1);
</script>";
}

else if (isset ($_POST['user']) == false || empty($_POST['user'])) {

// display error message (Username is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the Username.');
history.go(-1);
</script>";
}

else if (isset ($_POST['year']) == false || empty($_POST['year'])) {

// display error message (Year is empty)
echo "<script type='text/javascript'>
alert('Error: Please enter the Year.');
history.go(-1);
</script>";
}


else if (empty($_FILES["fileToUpload"]["name"])) {

// display error message (File is empty)
echo "<script type='text/javascript'>
alert('Error: Please upload the Image.');
history.go(-1);
</script>";
}
else {



$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}
// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
}
}

//Connect mySQL
$connection = mysqli_connect('localhost','root','','game');

//Select Database
mysqli_select_db($connection, 'game');

$name = $_POST["name"];
$publisher = $_POST["publisher"];
$year = $_POST["year"];
$user = $_POST["user"];
$description = $_POST["description"];
$image = $target_file;

//Insert Query 
$sql = "INSERT INTO game (Name,Publisher,Year,Description,Image,user)
 VALUES('$name','$publisher','$year','$description','$image','$user');";

//Execute Query
$records = mysqli_query($connection,$sql);
echo '<script language="javascript">
alert("Data has been successfully uploaded");
window.location.replace("index.php");
</script>';
}
?>





