<?php 
function test_input($d)
{
	$d=trim($d);
	$d=stripslashes($d);
	$d=htmlspecialchars($d);
	return ($d);
} 
$nameErr="";
$emailErr="";
$genderErr="";

$name="";
$email="";
$gender="";


$errors=0;
if(empty($_POST["t1"]))
{ 
		$nameErr="Name is required";
		$errors=1;
}
else
{
	$name=test_input($_POST["t1"]);
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			$nameErr="Special characters not allowed in Name field";
			$errors=1;
		}
}
if(empty($_POST["t4"]))
	{
		$emailErr="Email is required";
		$errors=1;
	}
	else 
	{
		$email=test_input($_POST["t4"]);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailErr="Email not in proper format";
			$errors=1;
		}
		
	}

if($errors==0)
{
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
    
    $sql="insert into details values('$t1','$t2','$t3','$t4','$t5','$t6','$t7') ";
	
	if(mysqli_query($conn,$sql))
	{	
		echo "Record inserted successfully"."<br>";
	}
	else
		echo "Error in insert query ";

	mysqli_close($conn);
}
else
{	

	echo $nameErr."<br>";
	echo $emailErr."<br>";
	

}
	
	
	
	
?>
