<html>
<body bgcolor="#fff5e6"><center>
<form name="frm1" action="http:\\localhost\project\register.php" method="POST">
Welcome to Modern Home decor's user sign up  <br>
<?php
session_start();
$counter_name = "counter.txt";

if (!file_exists($counter_name)) 
{
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

if(!isset($_SESSION['hasVisited']))
{
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
echo "You are visitor number". $counterVal." to this site.<br>";
echo "Today's date :".date("Y/m/d");
?>
<br>
<br>
<table>
<tr><td>Name<td><input type="text" name="t1"></tr>
<tr><td>Address<td><input type="text" name="t2"></tr>
<tr><td>Phone No.<td><input type="text" name="t3"></tr>
<tr><td>E-mail<td><input type="text" name="t4"></tr>
<tr><td>City<td><input type="text" name="t5"></tr>
<tr><td>Country<td><input type="text" name="t6"></tr>
<tr><td>Preference<td><input type="text" name="t7"></tr>
<tr>
<td><input type="submit" name="b1" value="Click here">&nbsp;&nbsp;&nbsp;
<td><input type="reset" name="b2" value="Reset">
</tr>
</table>
</form>
</center>
</body>
</html> 