<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Variable
$email = $_POST['email_id'];
$name = $_POST['first_name'];
$company = $_POST['company_name'];
$phone = $_POST['phone_no'];


// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
   echo "Connection Made";
}

$sql = "INSERT INTO driver (email_id, first_name, company_name, phone_no )
VALUES ('$email', '$name', '$company','$phone')";

if (mysqli_query($conn, $sql)) {

    echo "...";
	header('Location: http://localhost/Project1/driverdtl.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>