
    <html>
    <head>
    <link rel="stylesheet" href="css/style.css">
        <style>
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

.footer {
  background-color: #3b051e;
  padding: 5px;
  text-align: center;
  text: size adjust 4px; ;
  color: rgb(224, 235, 238);
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  
  
}
.header {
  background-color:rgb(61, 10, 59);
  padding: 2px;
  color: rgb(241, 241, 241);
  text-align: center;
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
</style>

</head>

<body>
<div class="header">
    <h1>SHALL WE</h1>
  </div>
  <div class="topnav">
    
       <a href="admin.php">HOME</a>
      
      <a href="viewreg.php" >VIEW REGISERED USERS</a> 
      <a href="logout.php">LOGOUT</a> 
     
</div>
<form action="#" method="post">
<table>
<tr>

<th>REGISTER_ID</th>
<th>NAME</th>
<th>EMAILID</th>
<th>DOB</th>
<th>GENDER</th>
<th>PASSWORD</th>
<th>STATUS</th>
</tr>
<?php
include 'CONNECTION.php';
$sql = "SELECT * FROM `register` ";
$res=mysqli_query($conn,$sql);
 if($res)
{
while($row=mysqli_fetch_row($res))
{
?>
<tr>
<td><input type="text" value="<?php echo $row[0]; ?> "></td>
<td><input type="text" value=" <?php echo $row[1];?>" ></td>
<td><input type="text" value=" <?php echo $row[2];?> "></td>
<td><input type="text" value=" <?php echo $row[3]; ?>"> </td>
<td><input type="text" value=" <?php echo $row[4]; ?>"> </td>
<td><input type="text" value=" <?php echo $row[5]; ?>"> </td>
<td><input type="text" value=" <?php echo $row[6]; ?>"> </td>


</tr>

<?php
}
}
?>
</table>
</form>
<div class="footer">
<p><B>DESIGNED BY www.shallwe.in</B>     </p>
 
</div>
</body>
</html>