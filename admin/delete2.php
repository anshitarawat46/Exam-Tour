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
$pickup_loc = $_GET['pickup_loc'];
// sql to delete a record
$sql = "DELETE FROM location where pickup_loc='$pickup_loc' ";
if (mysqli_query($conn, $sql)) {
	
	header('Location: http://localhost/Project1/locationdtl.php?pickup_loc=' . $pickup_loc);
}
	else 
		echo "Unsuccessful deletion";
?>

