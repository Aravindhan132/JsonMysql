<?php
$hostname = "localhost";
$username = "root";
$password = "admin";
$dbname = "db";
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM profile";

$result = $conn->query($sql);

if ($result->num_rows >0) {
 // output data of each row
 while($row[] = $result->fetch_assoc()) {

 $tem = $row;

 $json = json_encode($tem);
