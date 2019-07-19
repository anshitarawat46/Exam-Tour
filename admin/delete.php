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
$busRegi_no = $_GET['busRegi_no'];
// sql to delete a record
$sql = "DELETE FROM management where busRegi_no='$busRegi_no' ";
if (mysqli_query($conn, $sql)) {
	
	header('Location: http://localhost/Project1/management.php?busRegi_no=' . $busRegi_no);
}
	else 
		echo "Unsuccessful deletion";
?>

