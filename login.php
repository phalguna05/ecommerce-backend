<?php
require_once 'config.php';
$UserName=$_POST['Username'];
$Password=$_POST['Password'];
$sql="Select user_name,password from users where user_name='$UserName'";
$result=$conn->query($sql);
if($result->num_rows==0){
echo json_encode("false");
}
else{
$flag=0;
while($row = $result->fetch_assoc()) {
    if($row['user_name']==$UserName && $row['password']==$Password){
	echo json_encode("true");
	$flag=1;
	break;
	}
  }
  if($flag==0){
  echo json_encode("false");
  }
  }
  $conn->close();
  ?>