<?php
$servername = "sql211.epizy.com";
$database = "epiz_26169275_scave10";
$username = "epiz_26169275";
$password = "6uGZxrVdMM12C";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo “Connected successfully”;

mysqli_close($conn);

?>