<?php
	include 'CONNECTION.php';	
	session_start();

if(isset($_POST['submit']))
{
	
	$agemin = $_POST['agemin'];
    $agemax = $_POST['maxage'];
	$ms   =    $_POST['ms'];
	$colour = $_POST['colour'];
	$height = $_POST['height'];
  $diet = $_POST['diet'];
	$religion = $_POST['religion'];
	$caste = $_POST['caste'];
	$mothertounge = $_POST['mothertounge'];
  $education = $_POST['education'];
	$occupation = $_POST['occupation'];
	$country = $_POST['country'];
	$desp = $_POST['desp'];
	$sql = "INSERT INTO `partnerpreferance`(`Min_Age`, `Max_Age`, `M_Status`, `Complexion`,  `Height`,`Diet`, `Religion`, `Caste`, `Mother_Tongue`,  `Education`,`Occupation`,`Country_of_Residence`,`Desp`) VALUES ('$agemin','$agemax','$ms','$colour','$height','$diet','$religion','$caste','$mothertounge','$education','$occupation','$country','$desp')";
	$result = mysqli_query($conn,$sql);
	if($result){
echo " SUCCESSFULL";
     header("Location :partnerpreference.php");
	}
	else{
	 echo mysqli_error($conn);
	}
}
?>

<html>
<head>
<title>Partner Prefs</title>
<link rel="stylesheet" href="css/style.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("https://media.nojoto.com/wallpaper/main/wallpaper-2019-07-24-15-43-23-145142634774d54fbaf39c883c228c8b.jpg");
    background-attachment: fixed;
    background-position:center;
}
</style>
</head>
<body>
<?php include "header.php" ;?>

			   <form action="" method="POST" name="partner">
				    	
						<table>
                          <tr>
							  <th> <h3>My Ideal Partner would be </h3></th><th>
								<textarea  rows="3" cols="5"  name="desp" placeholder="My Ideal Partner would be........."></textarea></th>
						  </tr>
				    	
				    
				    	  
		
							<tr><td>	Age   :</td>
									<td>
									<input type="number" name="agemin" value="minimum " placeholder="minimum age">  <input type="number" name="maxage" placeholder='maximum age' value="maximum"> 
									</td>
								</tr>
				        		<tr>
									<td >Marital Status :</td>
									    <td>
										<select name="ms">

						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						    
									</td>
								</tr>
							    <tr >
									<td>Complexion :</td>
									<td >
							
						                <select name="colour">
						                    <option value="">Black</option>
						                    <option value="">Fair</option> 
						               		<option value="">Normal</option> 
						                </select>
							
								    </td>
								</tr>
								<tr>
									<td >Height</td>
									<td><input type="text"  id="edit-name" name="height" value=""></td>
								</tr>
								<tr >
									<td >Diet :</td>
									<td >
					                <select name="diet">
					                    <option value="Veg">Veg</option>
					                    <option value="Non Veg">Non Veg</option> 
					                </select>
							    
							    	</td>
								</tr>
								<tr >
									<td >Religion :</td>
									<td ><span>
									<div >
					                    <select name="religion">
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    
					                    </select>
	                 				</span>
	                  			</td>
								</tr>
								<tr>
									<td>Caste :</td>
									<td>
								
	                    				<select name="caste">
			                   				<option value="Roman Cathaolic">Roman Cathaolic</option>
						                    <option value="Latin Catholic">Latin Catholic</option>
						                    <option value="Penthecost">Penthecost</option>
						                    <option value="Mappila">Mappila</option>
						                    <option value="Thiyya">Thiyya</option>  
					                    </select>
                                 </td>
								</tr>
								<tr>
									<td>Mother Tongue :</td>
									<td>
					
						                <select name="mothertounge">
						                    <option value="">Malayalam</option>
						                    <option value="">Hindi</option> 
						               		<option value="">English</option> 
						                </select>
								   
								    </td>
								</tr>
								<tr>
									<td >Education :</td>
									<td >
						                <select name="education">
						                    <option value="Primary">Primary</option>
						                    <option value="Tenth level">Tenth level</option> 
						               		<option value="+2">+2</option> 
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
						               		<option value="Doctorate">Doctorate</option> 
						                </select>
								   
								    </td>
								</tr>
								<tr >
									<td >Occupation :</td>
									<td class> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value=""></td>
								</tr>
								<tr>
									<td>Country of Residence :</td>
									<td>
									
						                    <select name="country">
							                    <option value="Not Applicable">Country</option>
							                    <option value="Hindu">India</option>
							                    <option value="Christian">China</option>
							                    <option value="Muslim">UAE</option>
						                    </select>
						         </td>
                                 </tr>
                                 <tr>
                                     <td colspan="2"> <input type="submit" name="submit" value="submit">
                                 </tr>
				 
</table>
</form>
<?php include "footer.php" ;?>
<body>
    <html>

		    

