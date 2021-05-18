<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: multipart/form-data; charset=UTF-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (! $conn) {
  die("Connection failed");
}
