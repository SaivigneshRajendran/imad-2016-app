
<html>
<body>
<h1><b><font size="50" font color="green"><img src="tn logo.png" length=50 width=50 align="middle">&nbsp;&nbsp;TAMIL NADU GOVERNMENT</h1></b>
<font size=10 color=red>Civil Supplies and Consumer Protection</font><br>
<form name="myform" action="quantity2.php" method="post">
<table align="center" border="0"color="black" width="1500" height="900">
<caption align="center"><font size="8" color="purple">Data feeding</caption></font>
<tr>
<td><i><font size="6" color="sky blue">ITEMS</font><i></td><td><i><font size="6" color="sky blue">QUANTITY</font></i></td><td><i><font size="6" color="sky blue">PRICE</font></i></td>
</tr>
<?php
$con =mysql_connect("localhost","root","");
mysql_select_db("card",$con);
$holdername=$_POST['name'];
$cardnumber=$_POST['number'];
$qz = mysql_query("SELECT * FROM number WHERE cardnumber='$cardnumber'");

while($row = mysql_fetch_array($qz))
{
?>
<td><font size="5" color="black">Holdername</font></td>
<td><input type="text" name="name" size="35" value='<?php echo $holdername; ?>'/></td></tr>
<tr>
<td><font size="5" color="black">cardnumber</font></td>
<td><input type="text" name="number" size="35" value='<?php echo $cardnumber;?>'/></td></tr>
<?php
}
?>
<tr>
<td><font size="5" color="black">Rice</font></td>
<td><input type="text" name="rice" size="35" placeholder="25kg"></td>
<td><input type="text" name="lrice" size="35" placeholder="free"></td></tr>
<tr>
<td><font size="5" color="black">Sugar</font></td>
<td><input type="text" name="sugar" size="35" placeholder="10kg"></td>
<td><input type="text" name="lsugar" size="35" placeholder="Rs50"></td></tr>
<tr>
<td><font size="5" color="black">wheat</font></td>
<td><input type="text" name="wheat" size="35" placeholder="10kg"></td>
<td><input type="text" name="lwheat" size="35" placeholder="Rs60"></td></tr>
<tr>
<td><font size="5" color="black">Red Gram</font></td>
<td><input type="text" name="redgram" size="35" placeholder="2kg"></td>
<td><input type="text" name="lredgram" size="35" placeholder="Rs50"></td></tr>
<tr>
<td><font size="5" color="black">Urad dal</font></td>
<td><input type="text" name="uraddal" size="35" placeholder="2kg"></td>
<td><input type="text" name="luraddal" size="35" placeholder="Rs100"></td></tr>
<tr>
<td><font size="5" color="black">Tea powder</font></td>
<td><input type="text" name="tea" size="35" placeholder="2kg"></td>
<td><input type="text" name="ltea" size="35" placeholder="Rs50"></td></tr>
<tr>
<td><font size="5" color="black">Mustard Seeds</font></td>
<td><input type="text" name="mustardseeds" size="35" placeholder="50gm"></td>
<td><input type="text" name="lmustardseeds" size="35" placeholder="Rs20"></td></tr>
<tr>
<td><font size="5" color="black">cumin seeds</font></td>
<td><input type="text" name="cuminseeds" size="35" placeholder="50gm"></td>
<td><input type="text" name="lcuminseeds" size="35" placeholder="Rs30"></td></tr>
<tr>
<td><font size="5" color="black">Rava</font></td>
<td><input type="text" name="rava" size="35" placeholder="1kg"></td>
<td><input type="text" name="lrava" size="35" placeholder="Rs22"></td></tr>
<tr>
<td><font size="5" color="black">Maida</font></td>
<td><input type="text" name="maida" size="35" placeholder="2kg"></td>
<td><input type="text" name="lmaida" size="35" placeholder="Rs35"></td></tr>
<tr>
<td><font size="5" color="black">Atta</font></td>
<td><input type="text" name="atta" size="35" placeholder="2kg"></td>
<td><input type="text" name="latta" size="35" placeholder="Rs48"></td></tr>
<tr>
<td><font size="5" color="black">Kerosine</font></td>
<td><input type="text" name="kerosin" size="35" placeholder="5 litter"></td>
<td><input type="text" name="lkerosin" size="35" placeholder="Rs100"></td></tr>
<tr>
<td><font size="5" color="black">Peanut oil</font></td>
<td><input type="text" name="oil" size="35" placeholder="1 litter"></td>
<td><input type="text" name="loil" size="35" placeholder="Rs89"></td></tr>
<tr>
<td align="right"><br><input type= "submit" src="tamil.jpg" name="submit"  value="submit" length=75 width=95 align="center"></td></form>
<td align="center"><br><input type= "image" src="tmp.jpg" name="image" length=75 width=95 align="center"></td>
</tr>
<tr>
<td align="right"><b><font size="3" color="black">Summit</font></b></td><td align="center"><b><font size="3" color="black">Re-enter</font></b></td>
</tr>
<tr>
<td align="center"><form name="myform" action="quantity1.php" method="post"><br><br><br><br><br><br><br><br><input type=image src="record.jpg" name=image length=100 width=100></td></form>
<td align="center"><form action="bio.html" method="GET"><br><br<br><br><br><br><br><br><input type=image src="2.jpg" name=image length=100 width=100></td></tr></form>
<tr>
<td align="center"><b><font size="3" color="black">Records</font></b></td><td align="center"><b><font size="3" color="black">Holder Details</font></b></td></tr>
<tr>
<td align="center"><br><br><br><br><img src="facebook.jpg" length=30 width=30 align="center"><font size="5" font color="black">rationportal@facebook.com</td>
<td align="center"><br><br><br><br><img src="twitter.jpg" length=40 width=40 align="center"><font size="5" font color="black">rationportal@twitter.com</td></tr>
<tr>
<td align="center"><br><img src="email.jpg" length=50 width=50 align="center"><font size="5" font color="black">rationportal@gmail.com</td>
<td align="center"><br><img src="whatsapp.jpg" length=30 width=30 align="center"><font size="5" font color="black">9944847921/8760279347</td></tr>
</table>


</body>
</html>