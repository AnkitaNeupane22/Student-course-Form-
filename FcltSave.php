<?php
if (!empty($_POST)){
$con=mysqli_connect('localhost','root','','campus');
if(!$con){
	die ("error occur:".mysqli_connect_error());
}
$sql="INSERT INTO faculty(name)
         VALUES('{$_POST['fcname']}')";
 $result=mysqli_query($con,$sql);
        if($result){
	          header("Location:FacultyForm.php");
                  }
				  else{
					  echo die(mysqli_error($con));
				  }
}
                      else{
	                      echo "form not submtted";
                                }

                                  ?>

	