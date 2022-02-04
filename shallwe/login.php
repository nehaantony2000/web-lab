<?php
session_start();
include 'CONNECTION.php';

if(isset($_POST['login'])){
	$name = $_POST['name'];
	$password = $_POST['Password'];
	$sql = "SELECT * From register where UserName = '$name' and Password = '$password' and status = '1' ";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);


            if ($row['UserName'] === $name && $row['Password'] === $pass) 

                echo "Logged in!";

                $_SESSION['name'] = $row['Name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['Register_id'];

                header("Location: user.php");

                
           
  

}

?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<style>

.login{  
        width: 392px;  
        overflow: hidden;  
        margin: auto;  
        margin: 50 0 0 460px;  
        padding: 50px;  
        background: #d1e2e2;
        align-items: center; 
        border-radius: 15px ;  
        
} 
body{
      
    background-image: url("pics/bg.jpg");
    background-size:100%,100%;
    background-repeat:no-repeat;
    margin: 0;
   font-family: Arial, Helvetica, sans-serif;

    background-attachment: fixed;
    background-position:center;
}
    


 
.column {
  float: left;
  width: 33.33%;
}

  

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}



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
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
.button {
    display: inline-block;
    vertical-align: middle;
  background-color: pink;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button:hover {background-color: violet;}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.footer {
  background-color: rgb(80, 7, 61);
  padding: 10px;
  text-align: center;
  text: size adjust 4px; ;
  text-decoration-color: seashell;
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  
  
}
</style>

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
<div class="login"> 
  <table align="center">

<tr><th><h2> Login</h2></th></tr>
<tr><td>Name: <input type="text"  name="name" placeholder="Enter your username"></td></tr>
<tr><td>Password:<input type="password" name="Password" placeholder="password"><br></td></tr><br>
<tr><td>
<center><input type="submit" name="login" value="login"></center></td></tr>
<tr><td>  <br>Don't have an account<a href="register.php"> Sign up </a></td></tr>
</div>      
</table>
                
</form>

</body>
<?php include "footer.php" ;?>
</html>
