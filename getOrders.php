<?php
require_once 'config.php';
$UserId=$_POST['userId'];
$sql="select * from orders where user_id='$UserId'";
$result=$conn->query($sql);
$ans=array();
while($row=$result->fetch_assoc()){
    $ans[]=$row;
}
if($result->num_rows>0)
echo json_encode($ans);
else
echo json_encode("false");
?> 