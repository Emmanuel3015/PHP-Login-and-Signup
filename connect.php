<?php
// Database Configuration
// User account details 
$host = "localhost";
$user = "root";
$pass = "";
$db = "users";


// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check for connection
try {
    $conn = new mysqli($host, $user, $pass, $db);
    // echo "Database connected successfully";
} 

// If connection to the database fails it will catch the error
catch (mysqli_sql_exception) {
    echo "Connection Failed";
}


?>

