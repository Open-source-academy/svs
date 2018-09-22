<?php
$servername = 'localhost';
$uname ='root';
$pass ='';
$dbname ='voting-system';
$conn = new mysqli($servername, $uname, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
