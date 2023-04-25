<html>
<head>
<title> data in table</title>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','campus');
if(!$con){
	die ("error occur:".mysqli_connect_error());
}
$sql="SELECT * from faculty";
$result=mysqli_query($con, $sql);
if($result){
	 echo "<div> Number of records".mysqli_num_rows($result)."</div>";
?>
<br />
<table border="1" cellspacing="1" cellpadding="10" >
<tr>
<th>SN</th>
<th> Faculty Name</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result)){	
echo "<tr>
         <td> {$row['id']}</td>
		   <td> {$row['name']}</td>
		   </tr>";
}
}
?>
</table>
</body>
</html>