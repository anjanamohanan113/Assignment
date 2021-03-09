<?php
$test = "Hello World!";


$server_name = "localhost";
$username = "root";
$password = "";
$database = "db_technicaltest";

$conn = mysqli_connect($server_name, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    return true;
}

?>
