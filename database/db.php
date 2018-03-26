<?php
$servername = "localhost";
$username = "root";
$password = "navgurukul";
$dbname = "user";

if (isset($_POST['submit'])) {
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$contect = $_POST['cno'];
	$address = $_POST['add'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO raj (name, email, contect, address)
VALUES ('$name', '$email', '$contect', '$address')";

if ($conn->query($sql) === TRUE) {
    ///echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
