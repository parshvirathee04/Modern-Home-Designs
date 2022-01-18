<?php 
	$username = "root";
	$passwd = "";
	$servername="localhost";
	$db="world";
	$conn=mysqli_connect($servername,$username,$passwd,$db);
	if(!$conn)
	{
		die('could not connect'.mysqli_connect_error());
	}
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];
	$t5=$_POST['t5'];
	$t6=$_POST['t6'];
	$t7=$_POST['t7'];
    
    $sql="insert into item values('$t1','$t2','$t3','$t4','$t5','$t6','$t7') ";
	
	if(mysqli_query($conn,$sql))
	{	
		echo "Record inserted successfully"."<br>";
	}
	else
		echo "Error in insert query ";

	mysqli_close($conn);
?>
