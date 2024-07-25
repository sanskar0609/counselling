<?php
$servername = "localhost";
$username = "mypp"; // replace with your database username
$password = "321"; // replace with your database password
$dbname = "college_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$college_name = $_POST['college_name'];
$college_type = $_POST['college_type'];
$city = $_POST['city'];
$cap_round = $_POST['cap_round'];
$branch=$_POST['branch'];
$general = $_POST['general'];
$obc = $_POST['obc'];
$sc = $_POST['sc'];
$st = $_POST['st'];
$nt = $_POST['nt'];
$ews = $_POST['ews'];

// Insert data into the database
$sql = "INSERT INTO colleges (college_name, college_type, city, cap_round,branch, general, obc, sc, st, nt, ews)
VALUES ('$college_name', '$college_type', '$city', '$cap_round','$branch', $general, $obc, $sc, $st, $nt, $ews)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
