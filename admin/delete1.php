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
$email_id = $_GET['email_id'];
// sql to delete a record
$sql = "DELETE FROM driver where email_id='$email_id' ";
if (mysqli_query($conn, $sql)) {
	
	header('Location: http://localhost/Project1/driverdtl.php?email_id=' . $email_id);
}
	else 
		echo "Unsuccessful deletion";
?>

