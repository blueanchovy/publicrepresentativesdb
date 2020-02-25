 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (FNAME,LNAME,AGE,EMAIL,ACC,EDC,SEX)
VALUES ('echo $FirstName ', 'echo $LastName ', 'echo $email' , 'echo $Age' , 'echo $gender' , 'echo $EDC' , 'echo $Acc' , 'echo $psw' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
