<?PHP
$con =mysql_connect("localhost","root","");
mysql_select_db("entry",$con);
$rice  = $_POST['rice'];
$sugar = $_POST['sugar'];
$wheat =$_POST['wheat'];
$redgram = $_POST['redgram'];
$uraddhal = $_POST['uraddal'];
$teapowder =$_POST['tea'];
$mustardseeds =$_POST['mustardseeds'];
$cuminseeds =$_POST['cuminseeds'];
$rava =$_POST['rava'];
$maida =$_POST['maida'];
$atta =$_POST['atta'];
$kerosin =$_POST['kerosin'];
$peanutoil =$_POST['oil'];
$query ="insert into quantity values('$rice','$sugar','$wheat','$redgram','$uraddhal','$teapowder','$mustardseeds','$cuminseeds','$rava','$maida','$atta','$kerosin','$peanutoil')";
mysql_query($query);
echo "success";
?>