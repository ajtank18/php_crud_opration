<?php

	$conn=new mysqli("localhost","root","","demo");
	if($conn->connect_error)
	{
		die("connection failed");
	}
	$o=$_GET['n'];
	$sql="DELETE FROM `d1` WHERE name='$o'";
	if($conn->query($sql))
	{
		echo "record deleted";
	}
?>