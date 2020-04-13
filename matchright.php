<!-- <div class="profile_search1">
	   <form>
		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		  <input type="submit" value="Go">
	   </form>
  </div> -->
  
  <section class="slider">
    <center>
	 <h3>Happy Marriage</h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="https://img.shaadi.com/success-story/nSH03391386-QSH41119319-big.jpg" alt=""/>
			<h4>Nisarg & Priyansh</h4>
			<p>I found my match on matrimony website.....Thanks.,.</p>
		  </li>
		  <li>
			<img src="https://img.shaadi.com/success-story/gSH16126261-tSH15869930-big.jpg" alt=""/>
			<h4>Dilnoor & Roop</h4>
			<p>I found my soulmate Thanks to matrimony website for this wonderful platform.,.</p>
		  </li>
		  <li>
			<img src="https://img.shaadi.com/success-story/FSH30388691-kSH26387757-big.jpg" alt=""/>
			<h4>Nitin & Mitali</h4>
			<p>It was a beautiful experience thanks matrimony website I found my partner..</p>
		  </li>
	    </ul>
	  </div>
     </center>
   </section>


   <div class="view_profile view_profile2">
        	<h3>View Recent Profiles</h3>
    <?php
     $sql="SELECT * FROM customer ORDER BY profilecreationdate DESC";
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