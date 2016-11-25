<?PHP
$con =mysql_connect("localhost","root","");
mysql_select_db("entry",$con);
$Rice  = $_POST['rice'];
$Sugar = $_POST['sugar'];
$wheat =$_POST['wheat'];
$Redgram = $_POST['redgram'];
$Uraddal = $_POST['uraddal'];
$Teapowder =$_POST['tea'];
$Mustardseeds =$_POST['mustardseeds'];
$cuminseeds =$_POST['cuminseeds'];
$Rava =$_POST['rava'];
$Maida =$_POST['maida'];
$Atta =$_POST['atta'];
$Kerosine =$_POST['kerosin'];
$Peanutoil =$_POST['oil'];
$query ="insert into quantity values('$Rice','$Sugar','$wheat','$Redgram','$Uraddal','$Teapowder','$Mustardseeds','$cuminseeds','$Rava','$Maida','$Atta','$Kerosine','$Peanutoil')";
mysql_query($query);
mysql_select_db("entry",$con);
$holdername =$_POST['name'];
$cardnumber =$_POST['number'];
$Rice  = $_POST['lrice'];
$Sugar = $_POST['lsugar'];
$wheat =$_POST['lwheat'];
$Redgram = $_POST['lredgram'];
$Uraddal = $_POST['luraddal'];
$Teapowder =$_POST['ltea'];
$Mustardseeds =$_POST['lmustardseeds'];
$cuminseeds =$_POST['lcuminseeds'];
$Rava =$_POST['lrava'];
$Maida =$_POST['lmaida'];
$Atta =$_POST['latta'];
$Kerosine =$_POST['lkerosin'];
$Peanutoil =$_POST['loil'];
$query ="insert into billing values('$holdername','$cardnumber','$Rice','$Sugar','$wheat','$Redgram','$Uraddal','$Teapowder','$Mustardseeds','$cuminseeds','$Rava','$Maida','$Atta','$Kerosine','$Peanutoil')";
mysql_query($query);
$cardnumber=$_GET['cardnumber'];
$qz = mysql_query("SELECT * FROM billing where cardnumber='111'");

?>
<html>
<body>
<h1><b><font color="green">RATION PORTAL</b></font></h1>
<h1><i><font color="red">Records:-</i></font></h1>
<table border=5>

<?php
while($row =mysql_fetch_array($qz) )
{
echo
"<tr>
<th><b>ITEMS</b></th>
<td>Rice</td>
<td>Sugar</td>
<td>wheat</td>
<td>Redgram</td>
<td>uraddal</td>
<td>Teapowder</td>
<td>Musardseeds</td>
<td>cuminseeds</td>
<td>Rava</td>
<td>Maida</td>
<td>Atta</td>
<td>kerosin</td>
<td>peanutoil</td></tr>
<tr><th><b>PRICE</b></th>
<td>{$row['Rice']}</td>
<td>{$row['Sugar']}</td>
<td>{$row['wheat']}</td>
<td>{$row['Redgram']}</td>
<td>{$row['Uraddal']}</td>
<td>{$row['Teapowder']}</td>
<td>{$row['Mustardseeds']}</td>
<td>{$row['cuminseeds']}</td>
<td>{$row['Rava']}</td>
<td>{$row['Maida']}</td>
<td>{$row['Atta']}</td>
<td>{$row['Kerosine']}</td>
<td>{$row['Peanutoil']}</td></tr>
</tr>\n";
}

?>
</table>
</body>
</html>
