<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pass = $_POST['password'];
$npass = $_POST['n_password'];
$cpass = $_POST['c_password'];
 if($npass==$cpass)
 {
 echo $pass;
 echo $npass;
 echo $cpass;

 
$sql = "UPDATE login 
SET 
    password = '$npass'
WHERE
    username = 'admin'";
	
if (mysqli_query($conn, $sql)) {
	header("Location: http://localhost/Project1/profile1.php");
}
 }
	else
		header("Location: http://localhost/Project1/profile2.php");
 
?>
