<?php
	include 'CONNECTION.php';	
    session_start();
	function isloggedin(){
		if(!isset($_SESSION['id'])){
			 return false;
		}
		else{
			return true;
		}
	}
	
$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

    if(isset($_POST['upload']))
    {

$pic1=($_FILES['pic1']['name']);
$pic2=($_FILES['pic2']['name']);
$pic3=($_FILES['pic3']['name']);
$pic4=($_FILES['pic4']['name']);


		$sql="INSERT INTO photo ( pic1, pic2, pic3, pic4) VALUES (  '$pic1' ,'$pic2', '$pic3','$pic4')";
		// Writes the information to the database
		$result = mysqli_query($conn,$sql);
	if($result){
echo " SUCCESSFULL";
     header("Location :photo.php");
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
        .services_top {
    margin-bottom: 2em;
    padding:0;
}
.form-item.form-type-textfield.form-item-name {
    margin-bottom: 1em;
}
</style>
</head>
<body>

<?php include "header.php" ;?>


  
  
	   <form action="" method="post" enctype="multipart/form-data">
       <table>
       <tr><td>
  	    <div class="form-item form-type-textfield form-item-name">

	      <label for="edit-name">Upload Your Photo(Upto 4 images, Use 300 x 250 dimensions) 
          <span class="form-required" title="This field is required.">*</span></label>
</td></tr>
<tr><td>
	     PHOTO 1 : <input type="file" id="edit-name" name="pic1" class="form-file required"></td></tr>
          <tr><td> PHOTO 2 : <input type="file" id="edit-name" name="pic2" class="form-file required"></td></tr>
          <tr><td>PHOTO 3 : <input type="file" id="edit-name" name="pic3" class="form-file required"></td></tr>
          <tr><td> PHOTO 4 : <input type="file" id="edit-name" name="pic4" class="form-file required"></td></tr>
	    </div>
	    <tr><td><div class="form-actions">
	    	<input type="submit" id="edit-submit" name="upload" value="Upload" >
	    </div></td></tr>
</table>
	   </form>
	  
<?php include "footer.php" ;?>
</body>
</html>