<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Variable
$pickup = $_POST['pickup_loc'];
$destination = $_POST['destination_loc'];
$start = $_POST['start_address'];
$drop = $_POST['drop_address'];


// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
   echo "Connection Made";
}

$sql = "INSERT INTO location (pickup_loc, destination_loc, start_address, drop_address )
VALUES ('$pickup', '$destination', '$start','$drop')";

if (mysqli_query($conn, $sql)) {

    echo "...";
	header('Location: http://localhost/Project1/locationdtl.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>