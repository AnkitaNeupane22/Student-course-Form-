<?php
//creating a new datbase through php
$con=mysqli_connect('localhost','root');
if(!$con){
	die ("error occur:".mysqli_connect_error());
}
$sql="CREATE database college";
$result=mysqli_query($con, $sql);
if($result){
	echo "successful";
}
else{
	echo "doesnot success";
}
?>
