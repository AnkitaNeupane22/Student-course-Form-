<html>
<head>
<title> entry form</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
	if(empty($_POST["fname"])){
		$nameErr="firstname field cannot be empty";
	}
	else if((strlen($_POST["fname"]))<5){
		$nameErr="firstname should be more than 5!";
	}
}
?>
<form action="StdSave.php" method="POST">
<table>
<tr> 
<td> Firstname</td>
<td> <input type="text" name="fname"/></td>

<td> <span class="error"> 
<?php if(isset($nameErr)){
	echo $nameErr;
}
?></span>
</td>
 </tr>
<tr> 
<td> Lastname</td>
<td> <input type="text" name="lname"/></td>
</tr>
<tr> 
<td>Address</td>
<td> <input type="text" name="address"/></td>
</tr>
<tr> 
<td> Age</td>
<td> <input type="text" name="age"/></td>
</tr>
<tr> 
<td> Phone</td>
<td> <input type="text" name="phone"/></td>
</tr>
<tr> 
<td colspan="2" align="right"> <input type="submit" name="submit" value="submit"/>
</tr>

</table>
</form>
</body>
</html>
