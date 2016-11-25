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
$query ="insert into billing values('$Rice','$Sugar','$wheat','$Redgram','$Uraddal','$Teapowder','$Mustardseeds','$cuminseeds','$Rava','$Maida','$Atta','$Kerosine','$Peanutoil')";
mysql_query($query);
echo "success";
?>