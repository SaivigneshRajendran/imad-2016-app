<?php
$con =mysql_connect("localhost","root","");
mysql_select_db("card",$con);
$holdername = $_POST['name'];
$cardnumber = $_POST['number'];
$query = "insert into number values('$holdername','$cardnumber')";
mysql_query($query);
header("Location:data.php");
?>