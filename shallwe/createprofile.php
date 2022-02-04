<?php
include 'CONNECTION.php';
session_start();

?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <style>


  body{
    background-image:url("https://www.marivalresidences.com/blog/media/uploads/2018/10/Paisajes-1.jpg");
    background-attachment: fixed;
    background-position:center;
}
  }

        </style>
         
    </head>
    <body>
    <?php include "header.php" ;?>
        <form action="" method="POST">
            <table>
            <tr>
               <center> <th colspan='4'> <h2> CREATE PROFILE  </h2> </th></center>
            </tr> 
            <tr><td>
            <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label><br>
            <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" >
         
    </td><td>
            <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label><br>
            <input type="text" id="edit-last" name="lname" size="60" maxlength="128" >
        
        </td></tr>
        <tr><td>
            <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label><br>
            
                  <select name="sex">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option> 
                 
                  </select>
                 </td><td>
            <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label><br>
            <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" >
   </td><td> 

    
                <label for="edit-pass">
                  Date Of Birth <span class="form-required" title="This field is required.">*</span></label><br>
               
                      <input type='date' name= 'dob' value='01/01/2022'>
                          
                    </td></tr>
                    <tr> <td>
                <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label><br>
                 
                      <select name="religion">
                          <option value="Not Applicable">Not Applicable</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Christian">Christian</option>
                          <option value="Muslim">Muslim</option>
                          <option value="Jain">Jain</option>
                          <option value="Sikh">Sikh</option>
                          
                      </select>
                    </td><td> 
                        <label for="edit-pass">Caste <span class="form-required" title="This field is required.">*</span></label><br>
                      <select name="caste">
                          <option value="Roman Cathaolic">Roman Cathaolic</option>
                          <option value="Latin Catholic">Latin Catholic</option>
                          <option value="Penthecost">Penthecost</option>
                          <option value="Mappila">Mappila</option>
                          <option value="Thiyya">Thiyya</option>  
                      </select>
                    </td><td>
                        <label for="edit-pass">Sub-Caste <span class="form-required" title="This field is required.">*</span></label> <br>
                      <select name="subcaste">
                          <option value="Not Applicable">Not Applicable</option>
                          <option value="sub cast1">sub cast1</option>
                          <option value="sub caste2">sub caste2</option>
                        
                      </select>
                     
                    </td></tr>
        
           <tr><td>
                <label for="edit-pass">Country <span class="form-required" title="This field is required.">*</span></label><br>
                 
                      <select name="country">
                          <option value="Not Applicable">Country</option>
                          <option value="India">India</option>
                          <option value="China">China</option>
                          <option value="UAE">UAE</option>
                          
                      </select>
                    </td><td> 
                        <label for="edit-pass">State <span class="form-required" title="This field is required.">*</span></label><br>
                         
                        <select name="state">
                          <option value="">State</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Taminadu">Tamilnadu</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Andhrapradesh">Andrapradesh</option>  
                      </select>
                    </td><td> 
                        <label for="edit-pass">District <span class="form-required" title="This field is required.">*</span></label><br>
                      <select name="district">
                          <option value="">District</option>
                          <option value="Trivandrum">Trivandrum</option>
                          <option value="Kollam">Kollam</option>
                          <option value="Pathanamthitta">Pathanamthitta</option>
                          <option value="Wayanad">Wayanad</option>
                          </select>
                    </td></tr>
          <tr><td>
            <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label><br>
             
                  <select name="age">
                       <option value=""></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                  </select>
                </td><td>
            <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label><br>
              
                  <select name="maritalstatus">
                      <option value="Single">Single</option>
                      <option value="Married">Married</option> 
                         <option value="Divorsed">Divorsed</option>
                  </select>
                </td><td> 
            <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label><br>
              
                  <select name="profileby">
                      <option value="Self">Self</option>
                      <option value="Son/Daughter">Son/Daughter</option> 
                         <option value="Other">Other</option> 
                  </select>
                </td></tr>
                <tr>
                    <td>
            <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
              
                  <select name="education">
                      <option value="Primary">Primary</option>
                      <option value="Tenth level">Tenth level</option> 
                         <option value="+2">+2</option> 
                         <option value="Degree">Degree</option> 
                         <option value="PG">PG</option> 
                         <option value="Doctorate">Doctorate</option> 
                  </select>
                </td><td> 
            <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label><br>
            <input type="text" id="edit-name" name="edudescr" value="" size="60" maxlength="60" >
        </td><td> 
            <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label><br>
              
                  <select name="bodytype">
                      <option value="Slim">Slim</option>
                      <option value="Fat">Fat</option> 
                         <option value="Average">Average</option> 
                  </select>
                </td></tr>
               <tr> <td>
            <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
              
                  <select name="physicalstatus">
                      <option value="No Problem">No Problem</option>
                      <option value="Blind">Blind</option> 
                         <option value="Deaf">Deaf</option> 
                  </select>
                </td><td>
          
            <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label><br>
              
                  <select name="drink">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option> 
                         <option value="Sometimes">Sometimes</option> 
                  </select>
                </td><td>
            <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label><br>
            
                  <select name="smoke">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option> 
                         <option value="Sometimes">Sometimes</option>
                  </select>
                </td></tr>
         <tr><td>
            <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
              
                  <select name="mothertounge">
                      <option value="Malayalam">Malayalam</option>
                      <option value="Hindi">Hindi</option> 
                         <option value="English">English</option> 
                  </select>
                </td><td>
            <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label><br>
              
                  <select name="bloodgroup">
                      <option value="O +ve">O +ve</option>
                      <option value="O -ve">O -ve</option> 
                         <option value="AB -ve">AB -ve</option> 
                  </select>
                </td><td>
                    <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label><br>
            
                  <select name="diet">
                      <option value="Veg">Veg</option>
                      <option value="Non Veg">Non Veg</option> 
                         
                  </select>
                </td>
            </tr>
                <tr>
                    <td>
          
            <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label><br>
            <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" >
          
        </td>
        <td>
            <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label><br>
            <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" >
        </td><td>
            <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label><br>
             
                  <select name="colour">
                      <option value="Dark">Dark</option>
                      <option value="Fair">Fair</option> 
                         <option value="Normal">Normal</option> 
                  </select>
                </td></tr>
          <tr>
            <td>
            <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
            <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" >
        </td><td>
            <label for="edit-name">Occupation Description <span class="form-required" title="This field is required."></span></label>
            <input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="120" ></td><td>
            <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
            <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" >
        </td></tr>
        <tr><td>

         
                  <label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
                    <input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500" >
                </td><td>
            <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
            <input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500" >
            </td><td>
            <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
             
                  <select name="sis">
                      <option value="1">1</option>
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 	
                  </select>
                </td><td>
            <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
              
                  <select name="bros">
                      <option value="1">1</option>
                      <option value="2">2</option> 
                      <option value="3">3</option> 
                      <option value="4">4</option> 
                      <option value="5">5</option> 	
                  </select>
                </td></tr>
                <tr><td colspan="4">
          
              <label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label><br>

              <textarea rows="5" name="aboutme"  placeholder="Write about you"  rows="2" cols="2"></textarea>
            </td></tr>
            <tr><td colspan="4">
            <center> <input type="submit" id="edit-submit" name="op" value="Submit" ></center> 
            </td></tr>
            </table>
        </form>
    
        
        <?php include "footer.php" ;?>
        </body>
 </html>

