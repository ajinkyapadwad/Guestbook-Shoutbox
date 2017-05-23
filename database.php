<?php
	$connection = mysqli_connect("localhost","root","","guestbook");

	//test
	if (mysqli_connect_errno()) 
	{
		die("FAILED CONNECTION @AJ:  ".mysqli_connect_error());
	}
?>