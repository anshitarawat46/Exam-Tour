<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Variable

$mail = $_POST['Email'];
$password = $_POST['npassword'];
$password = md5($password); 
 
	 
echo $mail;
echo $password;
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   echo "Connection Made";
}
$sql = "UPDATE usertable
SET 
    password = '$password'
WHERE
    email = '$mail'";
	
if (mysqli_query($conn, $sql)) {
	header("Location: http://localhost/Project1/login.php");
}
 
 
?>
