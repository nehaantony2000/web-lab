<?php
include "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];

$sql = "INSERT INTO `covaxindetails` ( `name`, `age`, `address`, `phonenumber`) VALUES ( '$name', '$age','$address', '$phonenumber')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<body>	
<h2> Covaxin user details </h2>
<form action="" method="POST">
 Name:<br>
<input type="text" name="name">
<br>
Age:<br>
<input type="text" name="age">
<br>
Address:
<br>
<input type="address" name="address">
<br>
Phonenumber:<br>
<input type="text" name="phonenumber">
<br>
<br>
<input type="submit" name="submit" value="submit">

</body>
</html>