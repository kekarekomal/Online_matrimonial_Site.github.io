<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqlexec($sql);
		if($result){
			$row=mysqli_fetch_assoc($result);
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$complexion=$row['complexion'];
			$height=$row['height'];
			$diet=$row['diet'];
			$religion=$row['religion'];
			$caste=$row['caste'];
			
			$mother_tounge=$row['mothertounge'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			
			$descr=$row['descr'];
			
		}
		else{
			echo mysqli_error($conn);
		}



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Partner Prefs</title>
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
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3" style="background-color:#CCFFCC" >
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernce</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea name="descr" rows="5" cols="150"><?php echo $descr;?></textarea></p>
				    </div>
				    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label"><b>Age   :<b></td>
									<td class="day_value">
									<input type="text" name="agemin" value="<?php echo $agemin; ?>" required>to <input type="text" name ="agemax" value="<?php echo $agemax; ?>" required> 
									<br><br>
									</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label"><b>Marital Status :<b></td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus" required>
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>
                                            <option value="Select">----Select----</option>
						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
						                <br><br>
									</td>
								</tr>
							    <tr class="opened">
									<td class="day_label"><b>Complexion :<b></td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="colour">
						                	<option value="Select">----Select----</option>
						                    <option value="">Black</option>
						                    <option value="">Fair</option> 
						               		<option value="">Normal</option> 
						                </select>
								    </div>
								    <br><br>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Height<b></td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text" required><br><br>
                                    </td>
						        </tr>
								<tr class="opened">
									<td class="day_label"><b>Diet :<b></td>
									<td class="day_value closed"><div class="select-block1">
					                <select name="diet">
					                	<option value="Select">----Select----</option>
					                    <option value="Veg">Veg</option>
					                    <option value="Non Veg">Non Veg</option> 
					                </select>
							    	</div>
							    	<br><br>
							    	</td>
							    	
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Religion :<b></td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion" required>
					                    	<option value="Select">----Select----</option>
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    <option value="Parsi">Parsi</option>
						                     <option value="Others">Others</option>
						                    
					                    </select>
	                 				</div></span>
	                 				<br><br>
	                  			</td>
	                  			
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Caste<b></td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="caste" value="<?php echo $caste;?>" size="60" maxlength="60" class="form-text" required><br><br></td>
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Mother Tongue :<b></td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="mothertounge" required>
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
								    <br><br>
								    </td>
								    
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Education :<b></td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education" required>
						                	<option value="Select">----Select----</option>
						                    <option value="Primary">Primary</option>
						                    <option value="SSLC">SSLC</option> 
						               		<option value="PUC">PUC</option> 
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
						               		<option value="Doctorate">Doctorate</option>
						               		<option value="Other">Other</option>

						                </select>
								    </div>
								    <br><br>
								    </td>
								    
								</tr>
								<tr class="opened">
									<td class="day_label"><b>Occupation :<b></td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text" required><br><br></td>
								</tr>
								<tr class="opened">
									<td class="day_label"><b>State of Residence :<b></td>
									<td class="day_value closed">
										<div class="select-block1">
						                    <select name="state" required>
						                    	<option value="Select">----Select----</option>
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
						            </td>
                                     <br><br>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				  </div>
				  <br>
				  <br>

				 <center><input type="submit" value="Update Preferences" class="hvr-shutter-out-horizontal"></center>
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>
