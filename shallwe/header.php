<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
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
  padding: 2px;
  text-align: center;
}
* {
  box-sizing: border-box;
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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(51, 7, 42);
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(212, 22, 155);
}

li.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(51, 6, 40, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

</head>

<body>
  <div class="header">
    <h1><text-color="white"></text-de>SHALL WE</text></h1>
  </div>
    <ul>
    <div class="topnav"></div>
    <li><a href="user.php">Home</a></li>
   <li><a href="partnerpreference.php">Partner Preference</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">MY PROFILE</a>
      <div class="dropdown-content">
        <a href="#">VIEW MY PROFILE</a>
        <a href="createprofile.php">EDIT MY PROFILE</a>
        <a href="photo.php">UPLOAD PHOTOS</a>
      </div>
    </li>
    <li>
      <li class="dropdown">
      <a href="javascript:void(1)" class="dropbtn">SEARCH</a>
      <div class="dropdown-content">
        <a href="search.php">SEARCH</a>
      </div>
      
    </li>
    <li><text-align="topnav-left"><a href="logout.php">logout</a></align></li>
  </ul>
</div>
</body>
</html>