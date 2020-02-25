<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$severname = "localhost";
$username = "root";
$password= "";
$dbname="db1";
//create connection
$conn = new mysql($servername, $username, $password, $dbname);

//check connection
if ($conn->connect error) {
	die("connection failed: " , $conn->connect_error);
}
echo "connected sucessfully";
$sql = " insert into 'user'('fname','lname') VALUES ('$x','$y');

if ($conn->query($sql)=== TRUE)
{
	echo "connected Sucessfully";
	$sql =
?>