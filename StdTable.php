<html>
<head>
<title> data in table</title>
</head>
<style type="text/css">
table{
	border-collapse:collapse;
}
tr{
	line-height:1.5em;
}
table th{
	background: black;
	color :white;
}
.btn-success{
	background:green;
	color:white;
	border-radius:2px;
	border:1px solid green;
}	
.btn-danger{
	background:red;
	color:white;
	border-radius:2px;
	border:1px solid red;
}
</style>
<body>
<?php
$con=mysqli_connect('localhost','root','','campus');
if(!$con){
	die ("error occur:".mysqli_connect_error());
}
$sql="SELECT * from student";
$result=mysqli_query($con, $sql);
if($result){
	 echo "<div> Number of records".mysqli_num_rows($result)."</div>";
?>
<br />
<table border="1" cellspacing="1" cellpadding="10" >
<tr>
<th> SN</th>
<th> Firstname</th>
<th> Lastname</th>
<th> Address</th>
<th> Age</th>
<th> Phone</th>
<th> Action</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>
	<td> {$row['id']}</td>
	<td> {$row['firstname']}</td>
	<td> {$row['lastname']}</td>
	<td> {$row['address']}</td>
	<td> {$row['age']}</td>
	<td> {$row['phone']}</td>
	<td><a><button class='btn-success'>Edit</button></a>
	<button class='btn-danger'>Delete</button></td>
	</tr>";
}
}
	
?>

</table>
</body>
</html>
