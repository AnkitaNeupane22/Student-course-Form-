<?php
if(!empty($_POST)){
$con=mysqli_connect('localhost','root','','campus');
if(!$con){
	die ("occur error:".mysqli_connect_error());
}
$sql="INSERT INTO  student(firstname,lastname,address,age,phone)
VALUES ('{$_POST['fname']}','{$_POST['lname']}','{$_POST['address']}','{$_POST['age']}','{$_POST['phone']}')";
    $result=mysqli_query($con, $sql);
	if($result){
	header("Location:StudentForm.php");
	}
	else{
		die (mysqli_error($con));
	}
}
	else{
		echo "Form not submitted :(";
	}
	    
		?>