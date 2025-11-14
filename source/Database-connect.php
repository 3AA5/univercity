<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// ایجاد اتصال
$conn = new mysqli($host, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>