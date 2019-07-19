<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Variable

$username = $_POST['username'];
$password = $_POST['password'];
	 
echo $username;
echo $password;
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   echo "Connection Made";
}
$result = $conn->query("select * from login where username = '$username' and password = '$password'")
	               or die("Failed to query database" .mysql_error());
	$row = $result->fetch_array();
	
  if($row['username']==$username && $row['password']==$password){

 echo "Login success!!!";
 header('Location: http://localhost/Project1/management.php');
}
else{

echo "Failed to login!";
 header('Location: http://localhost/Project1/adlogin1.html');
}
$conn->close();

?>
	  
