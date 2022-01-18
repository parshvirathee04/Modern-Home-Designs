<html>
<body bgcolor="#ffdb4d">
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

$sql="select * from item where  category='Clock' or category='clock'";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0)
{
?>
<h3 align="center"><font color="blue">List of clocks</font></h3>
<table border="1" bordercolor="blue"  align="center" cellspacing="5" cellpadding="5">
<tr align="center"><th>Icode</th>
<th>Name</th>
<th>Category</th>
<th>MRP</th>
<th>Discount</th>
<th>NetPrice</th>
<th>Manufacturing Date</th>
</tr>
<?php
	while($row=mysqli_fetch_assoc($result))
	{
?>
<tr align="center"><td><?php echo $row["code"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["category"];?></td>
<td><?php echo $row["mrp"];?></td>
<td><?php echo $row["disc"];?></td>
<td><?php echo $row["price"];?></td>
<td><?php echo $row["mfg"];?></td>
</tr>

<?php	
	}
}
else
{
?>
<h4>No records found</h4>

<?php 
}
mysqli_close($conn);
?>
</body>
</html>
