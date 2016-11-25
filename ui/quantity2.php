
<?php
$con =mysql_connect("localhost","root","");
mysql_select_db("entry",$con);
$rice  = $_POST['rice'];
$sugar = $_POST['sugar'];
$Wheat =$_POST['wheat'];
$redgram = $_POST['redgram'];
$uraddal = $_POST['uraddal'];
$teapowder =$_POST['tea'];
$mustardseeds =$_POST['mustardseeds'];
$Cuminseeds =$_POST['cuminseeds'];
$rava =$_POST['rava'];
$maida =$_POST['maida'];
$atta =$_POST['atta'];
$kerosine =$_POST['kerosin'];
$peanutoil =$_POST['oil'];
$query ="insert into quantity values('$rice','$sugar','$Wheat','$redgram','$uraddal','$teapowder','$mustardseeds','$Cuminseeds','$rava','$maida','$atta','$kerosine','$peanutoil')";
mysql_query($query);
mysql_select_db("entry",$con);
$holdername =$_POST['name'];
$cardnumber =$_POST['number'];
$Rice  = $_POST['lrice'];
$Rice =$_POST['rice']; 
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
?>
<?php
$Rice=$_POST['lrice'];
$Sugar=$_POST['lsugar'];
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
$Total =($Rice+$Sugar+$wheat+$Redgram+$Uraddal+$Teapowder+$Mustardseeds+$cuminseeds+$Rava+$Maida+$Atta+$Kerosine+$Peanutoil);
?>	
<html>
<head>
<script type="text/javascript">
function validateform() 
{

alert("printer must be connected");
return false;
}
</script>
</head>
<body>
<h1><b><font color="magenta">RATION PORTAL</b></font></h1>
<h1><i><font color="blue">Billing:-</i></font></h1>
<form name="" action="" method="post" onSubmit="return validateform()">
<table border="5">
<tr>
<th><i><font size="5" color="orange" >Name of product</i></font></th>
<th><i><font size="5" color="orange">Quantity</i></font></th>
<th><i><font size="5" color="orange">Price</i></font></th></tr>
<tr>
<td><font color="black" size="3">Rice</font></td>
<td><?php echo $rice; ?></td>
<td><?php echo $Rice; ?></td></tr>
<tr>
<td><font color="black" size="3">Sugar</font></td>
<td><?php echo $sugar; ?></td>
<td><?php echo $Sugar; ?></td></tr>
<tr>
<td><font color="black" size="3">Wheat</font></td>
<td><?php echo $Wheat; ?></td>
<td><?php echo $wheat; ?></td></tr>
<tr>
<td><font color="black" size="3">Redgram</font></td>
<td><?php echo $redgram; ?></td>
<td><?php echo $Redgram; ?></td></tr>
<tr>
<td><font color="black" size="3">Uraddal</font></td>
<td><?php echo $uraddal; ?></td>
<td><?php echo $Uraddal; ?></td></tr>
<tr>
<td><font color="black" size="3">Teapowder</font></td>
<td><?php echo $teapowder; ?></td>
<td><?php echo $Teapowder; ?></td></tr>
<tr>
<td><font color="black" size="3">Mustardseeds</font></td>
<td><?php echo $mustardseeds; ?></td>
<td><?php echo $Mustardseeds; ?></td></tr>
<tr>
<td><font color="black" size="3">Cuminseeds</font></td>
<td><?php echo $Cuminseeds; ?></td>
<td><?php echo $cuminseeds; ?></td></tr>
<tr>
<td><font color="black" size="3">Rava</font></td>
<td><?php echo $rava; ?></td>
<td><?php echo $Rava; ?></td></tr>
<tr>
<td><font color="black" size="3">Maida</font></td>
<td><?php echo $maida; ?></td>
<td><?php echo $Maida; ?></td></tr>
<tr>
<td><font color="black" size="3">Atta</font></td>
<td><?php echo $atta; ?></td>
<td><?php echo $Atta; ?></td></tr>
<tr>
<td><font color="black" size="3">Kerosine</font></td>
<td><?php echo $kerosine; ?></td>
<td><?php echo $Kerosine; ?></td></tr>
<tr>
<td><font color="black" size="3">Peanutoil</font></td>
<td><?php echo $peanutoil; ?></td>
<td><?php echo $Peanutoil; ?></td></tr>
<tr>
<td></td>
<td><font color="black" size="3">Total</font></td>
<td><?php echo $Total; ?></td></tr>

</table><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Print" size="5">
</body>
</html>


