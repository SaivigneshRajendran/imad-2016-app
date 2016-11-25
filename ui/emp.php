<?PHP
$con =mysql_connect("localhost","root","");
mysql_select_db("admin",$con);
$username = $_POST['fname'];
$password = $_POST['password'];
echo $username;
echo $password;
$qz = mysql_query("SELECT * FROM adminsec where username='$username' and password='$password'");
$count=mysql_num_rows($qz);
echo $count;
if($count==0)
echo "Invalid Username and Password";
else
header("Location:4.html");

?>