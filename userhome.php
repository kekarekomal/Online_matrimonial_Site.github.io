<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony
 | User Home :: Matrimony
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
<body style="background-color:#00ff99">
<!-- ============================  Navigation Start =========================== -->

 <!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
		            <li><a href="about.php">About</a></li>
		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search Existing Profile</a></li>
		                
		                
		              </ul>
		            </li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
					
					<li>
					<a href="index.php">Logout</a>
					
					</li>
					
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<!-- ============================  Navigation End ============================ -->
<br>
<h1><center><i><?php include_once("welc_acc.php");?> </center></i></h1>
<div class="heart-divider">
          <span class="grey-line"></span>
          <i class="fa fa-heart pink-heart" style="color:#ff1493"></i>
          <i class="fa fa-heart grey-heart"></i>
          <span class="grey-line"></span>
        </div>
<div class="grid_0">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
		
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><b>User Home<b></li>
     </ul>
   </div>
   <div class="navigation" style="background-color:  #a30066;"><!-- Innernavigation starts -->
   	
   	  	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
		            <li><a href="partner_preference.php?id=<?php echo $id;?>">Partner Preference</a></li>
		            <li><a href="photouploader.php?id=<?php echo $id;?>">Upload Photos</a></li>
		            <li><a href="view_recent_profile.php?id=<?php echo $id;?>">View Recent Profile</a></li>
		    	    <li><a href="faq.php">Faq</a></li>
		    	     <li><a href="change_password.php?id=<?php echo $id;?>">Change/Reset Password</a></li>

		    	    
		         </ul>
		         
		</div>
   </div><!-- End of inner navigation -->
   <div>
  </div>
</div>

<?php include_once("create_profile.php"); ?>

		    	
		    
</body>
</html>	