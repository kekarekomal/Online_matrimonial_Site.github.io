<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Register :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->

<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><b>Create Or Update Your Profile<b></li>

     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="lname" size="60" maxlength="128" class="form-text required" required>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex" required>
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	               
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <select name="day" required>
	                    <option value=""><b>Date<b></option>
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
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
	                    <option value="01">January</option>
	                    <option value="02">February</option>
	                    <option value="03">March</option>
	                    <option value="04">April</option>
	                    <option value="05">May</option>
	                    <option value="06">June</option>
	                    <option value="07">July</option>
	                    <option value="08">August</option>
	                    <option value="09">September</option>
	                    <option value="10">October</option>
	                    <option value="11">November</option>
	                    <option value="12">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select name="year">
	                    <option value=""><b>Year<b></option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
		                    <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option> 
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>

                    </select>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <br><br>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-6 form_box">
	                  <div class="select-block1">
	                    <select name="religion" required>
		                                    <option value="Select">----Select Religion----</option>
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    <option value="Parsi">Parsi</option>
						                    <option value="Others">Others</option>
						                    
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-6 form_box2">
	                   <div class="select-block1">
	                   	 
	                    <input type="text" id="edit-name" name="caste" value="" size="100" maxlength="100" class="form-text required" placeholder="Enter your Caste" required>
	                  </div>
	                 </div>
	                 
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-6 form_box">
	                  <div class="select-block1">
	                    <select name="state">
		                   <option value="Select">----Select State----</option>
							                    <option value="Andra Pradesh">Andra Pradesh</option>
							                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
							                    <option value="Assam">Assam</option>
							                    <option value="Bihar">Bihar</option>
							                    <option value="Goa">Goa</option>
							                    <option value="Gujarat">Gujara</option> 
							                    <option value="Haryana">Haryana</option> 
							                    <option value="Himachal Pradesh">Himachal Pradesh</option> 
							                    <option value="Jammu & Kashmir">Jammu & Kashmir</option> 
							        	        <option value="Karnataka">Karnataka</option>
							        	        <option value="Kerala">Kerala</option>
							        	        <option value="Madhya Pradesh">Madhya Pradesh</option>
							        	        <option value="Mizoram">Mizora</option>
							        	        <option value="Nagaland">Nagaland</option>
							        	        <option value="Orissa">Orissa</option>
							        	        <option value="Punjab">Punjab</option>
							        	        <option value="Rajasthan">Rajasthan</option>
							        	        <option value="Sikkim">Sikkim</option>
							        	        <option value="Tripura">Tripur</option>
							        	        <option value="Uttar Pradesh">Uttar Pradesh</option>
							        	        <option value="West Bengal">West Bengal</option>
							        	        <option value="Chattisghar">Chattisghar</option>
							        	        <option value="Uttarakhand">Uttarakhand</option>
							        	        <option value="Jharkhand">Jharkhand</option>
							        	        <option value="Telangana">Telangana</option>
  
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-6 form_box2">
	                   <div class="select-block1">
	                    <input type="text" id="edit-name" name="caste" value="" size="100" maxlength="100" class="form-text required" placeholder="Enter your District" required>
	                  </div>
	                 </div>
	                
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age">
	                     <option value="age">----Select----</option>
		                    
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
		                    <option value="32">32</option>
		                    <option value="33">33</option>
		                    <option value="34">34</option>
		                    <option value="35">35</option>
		                    <option value="36">36</option>
		                    <option value="37">37</option>
		                    <option value="38">38</option>
		                    <option value="39">39</option>
		                    <option value="40">40</option>
		                    <option value="41">41</option>
		                    <option value="42">42</option>
		                    <option value="43">43</option>
		                    <option value="44">44</option>
		                    <option value="45">45</option>
		                    <option value="46">46</option>
		                    <option value="47">47</option>
		                    <option value="48">48</option>
		                    <option value="49">49</option>
		                    <option value="50">50</option>
		                    <option value="51">51</option>
		                    <option value="52">52</option>
		                    <option value="53">53</option>
		                    <option value="54">545</option>
		                    <option value="55">55</option>

		                    
		                    

	                </select>
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
	                    <option value="Single">Single</option>
	                    <option value="Married">Separated</option> 
	               		<option value="Divorsed">Divorsed</option>
	               		<option value="Widow">Widow/Widower</option>

	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="profileby">
	                    <option value="Self">Self</option>
	                    <option value="Son/Daughter">Son/Daughter</option>
                        <option value="Mother/Father">Divorsed</option>
	               		<option value="Other">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education">
	                    <option value="Primary">Primary</option>
	                    <option value="SSLC">SSLC</option> 
	               		<option value="PUC">PUC</option> 
	               		<option value="Degree">Degree</option> 
	               		<option value="PG">PG</option> 
	               		<option value="Doctorate">Doctorate</option>
	               		<option value="other">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="edudescr" value="" size="60" maxlength="60" class="form-text">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bodytype">
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option> 
	               		<option value="Average">Average</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="physicalstatus">
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option> 
	               		<option value="Deaf">Deaf</option>
	               		<option value="Dumb">Dumb</option> 
	                </select>
			    </div>
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option>
	                </select>
			    </div>
		    </div>
		    
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge">
	                    <option value="Select">----Select----</option>
						                    <option value="">Malayalam</option>
						                    <option value="">Hindi</option> 
						               		<option value="">English</option>
						               		<option value="">Kannada</option>
						               		<option value="">Marathi</option>
						               		<option value="">Gujarati</option>
						               		<option value="">Kashmiri</option>
						               		<option value="">Konkani</option>
						               		<option value="">Tamil</option>
						               		<option value="">Telgu</option>
						               		<option value="">Urdu</option>
						               		<option value="">Punjabi</option>
						               		<option value="">Other</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bloodgroup">
	                	<option value="select">----Select----</option>
	                	<option value="A +ve">A +ve</option>
	                	<option value="A -ve">A -ve</option>
	                    <option value="B +ve">B +ve</option>
	                    <option value="B -ve">B -ve</option>
	                    <option value="O -ve">O -ve</option> 
	                    <option value="O +ve">O +ve</option> 
	               		<option value="AB +ve">AB +ve</option>
	               		<option value="AB -ve">AB -ve</option>

	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		    <div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   	<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet">
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation Descrp <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="120" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   
		   
		    
</div>


             <!-- Seventh Row ends-->
  
           <!-- eighth Row starts-->
           <div class="col-lg-12">
            <div class="form-group col-sm-3">
		    		<label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
			  		<input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500" class="form-text">
		   </div>
           <div class="form-group col-sm-3">
		      <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500" class="form-text">
		    </div>
		    
          <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sis">
	                	<option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bros">
	                	<option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="edit-name">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		   
		    
		    <div class="form-actions">
	        <center><input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit"></center>
             </div>


		    
			  </div>
             <!-- eighth Row ends-->
         <hr/>
			  

		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>


</body>
</html>	