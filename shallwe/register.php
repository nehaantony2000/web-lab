<?php
	include 'CONNECTION.php';	
if(isset($_POST['Register']))
{
	$name = $_POST['name'];
	$emailid = $_POST['emailid'];
  $date = $_POST['date'];
	$gender = $_POST['m'];
	
	$password = $_POST['password'];
	$sql = "INSERT INTO `register`(`Name`, `Email_id`, `Dob`, `Gender`,  `Password`) VALUES ('$name','$emailid','$date','$gender','$password')";
	$result = mysqli_query($conn,$sql);
	if($result){

     header("Location :login.php");
	}
	else{
	 echo mysqli_error($conn);
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<style>
  

.header {
  background-color:rgb(80, 7, 61);
  padding: 5px;
  text-align: center;
  text-decoration:white;
}
* {
  box-sizing: border-box;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: rgb(51, 6, 47);
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color:#810953;
  color: rgb(17, 3, 5);
}
.register{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 460px;  
        padding: 80px;  
        background: #ffec99;
        align-items: center; 
        border-radius: 15px ; } 
body{
  background: url("pics/rg1.jpg");
  background-repeat:no-repeat;
  background-size:100%,50% ;
  font-family: 'Arial';
  }




</style>
</head>
<body> 
<div class="header">
  <h1>SHALL WE</h1>
</div>
<div class="topnav">
  
     <a href="index.php">HOME</a>
    <a href="aboutus.html">ABOUT US</a>   
    <a href="search.php">SEARCH</a>
    <a href="createprofile.php">PROFILE</a>
    <a href="login.php">LOGIN</a>
  </div>
 
<form method="POST">
  <div class="register"> 
<table align="center">
<tr>
<th>
<h2> Register</h2></th></tr>
<tr><td>
Name:<br></td></tr>
<tr><td><input type="text" placeholder="name" name="name"></td></tr>

<tr><td>
Email id:<br></td></tr>
<tr><td><input type="emailid" name="emailid" placeholder="emailid"></td></tr>
<tr><td>DOB:<br></td></tr>
<tr><td><input type="date" name="date" placeholder="date"><br></td></tr><br>
<tr><td>Gender   <br> <input type ="radio" value="male" name="m">male
<input type ="radio" value="female" name="m">female
<input type="radio" value="others" name="m">others</td>
</tr>
<tr><td>Password:<br></td></tr>
<tr><td><input type="password" name="password" placeholder="password"><br></td></tr><br>
<tr><td>

<center><input type="submit" name="Register" value="Register"/center></td></tr>
</table>
</div>
</form>
<?php include "footer.php" ;?>
</body>
</html>
