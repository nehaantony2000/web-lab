<div class="col-md-4 profile_right">
    <!-- 	<div class="newsletter">
          <form>
             <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
             <input type="submit" value="Go">
          </form>
       </div> -->
       <div class="view_profile view_profile2">
           <h3>View Recent Profiles</h3>
   <?php
    $sql="SELECT * FROM customer ORDER BY profilecreationdate ASC";
     $result=mysqlexec($sql);
     $count=1;
     while($row=mysqli_fetch_assoc($result)){
           $profid=$row['cust_id'];
         //getting photo
         $sql="SELECT * FROM photos WHERE cust_id=$profid";
         $result2=mysqlexec($sql);
         $photo=mysqli_fetch_assoc($result2);
         $pic=$photo['pic1'];
         echo "<ul class=\"profile_item\">";
           echo"<a href=\"view_profile.php?id={$profid}\">";
             echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
              echo "<li class=\"profile_item-desc\">";
                 echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                 echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                 echo "<h5>" . "View Full Profile" . "</h5>";
              echo "</li>";
     echo "</a>";
     echo "</ul>";
     $count++;
     }
    ?>
          
</div>
      
       </div>
      
   </div>
 </div>
</div>
