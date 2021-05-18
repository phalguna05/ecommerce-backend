<?php
require_once 'config.php';
$UserName=$_POST['userName'];
$sql="select user_id,user_name,email from users where user_name='$UserName'";
$result=$conn->query($sql);
$ans=array();
while($row=$result->fetch_assoc()){
    $ans[]=$row;
}
if($result->num_rows>0)
echo json_encode($ans[0]);
else
echo json_encode("false");
?> 