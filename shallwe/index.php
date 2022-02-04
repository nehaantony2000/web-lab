<html>
<head>

<style>
    * {
  box-sizing: border-box;
}
h1 {
  text-align: center;
}
h3 {
  text-align: center;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("https://i.pinimg.com/originals/5c/5a/ff/5c5afffbf933c51c8e7ec95642c748ed.jpg");
    background-attachment: fixed;
    background-position:center;
    background-repeat:no-repeat;
    background-size:115%,100% ;
    
}

/* Style the header */
.header {
  background-color:rgb(80, 7, 61);
  padding: 5px;
  text-align: center;
  text-decoration:white;
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
  background-color: violet;
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
 
  <div class="row">
  <div class="column">
      <center>

    <h1> SHALL WE</h1>
         <h3> HELP YOU TO FIND YOUR IDEAL PARTNER</h3>
    <a href="register.php" > <input type="button" class="button" value="Find Your Ideal Partner"></a></center>
</div>
</div>

  <div class="footer">
      <p><B>DESIGNED BY www.shallwe.in</B></p>
      
    </div>
</body>
</html>
