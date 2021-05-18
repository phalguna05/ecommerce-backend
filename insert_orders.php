<?php
require_once 'config.php';
$UserId=$_POST['userId'];
$title=$_POST['title'];
$img=$_POST['img'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$date=date("d/m/y");
$sql = "INSERT INTO orders(user_id,product_name,product_img,price,quantity,date) VALUES ('$UserId','$title','$img','$price','$quantity','$date')";
if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>