<?php
	if($_SESSION['id'])
	{
		$_SESSION=['id'];
		$result=mysqli_query($connection, "select * from user where id=$_SESSION['id']");
		$show=mysqli_fetch_assoc($result);
		if($show)
		{
			echo "welcome [username]";
		}
	}
?>