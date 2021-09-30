<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!-- $dbName = 'test';
// $db = mysqli_connect("localhost","root","","testDB");
$mysqli = new mysqli($host, $username, $passwd, $dbName, $port, $socket);

if($mysqli→connect_errno ) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
 }
 printf('Connected successfully.<br />');
 $mysqli→close(); -->