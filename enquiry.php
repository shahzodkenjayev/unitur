<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNITUR| Bosh sahifa</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
	
	mysqli_query($cn,$s);
	
	echo "<script>alert('Ma\'lumotlar saqlandi');</script>";
}
?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">Kategoriyalar</td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">So'rov</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>

<table border="0"; width="600px" height="400px" align="center" >
<?php

$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";

$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 
<form method="post" enctype="multipart/form-data">
<tr><td colspan="3" class="middletext">Paket ID:&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
<tr><td colspan="3" class="middletext">Paket nomi:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td class="lefttxt">Ism:</td><td><input type="text" name="t1" required pattern="[a-zA-Z1 _]{3,50}" title="Iltimos, faqat harflar va raqamlar kiriting, ism uchun 1 dan 50 gacha bo'lgan belgilar"/></td></tr><br/>
<tr><td class="lefttxt">Jins:</td><td><input type="radio" name="r1" value="Erkak" checked="checked" />Erkak<input type="radio" name="r1"  value="Ayol"/>Ayol</td></tr><br/>
<tr><td class="lefttxt">Mobil raqam:</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title="Iltimos, faqat 10 dan 12 gacha bo'lgan raqamlarni kiriting"/></td></tr><br/>
<tr><td class="lefttxt">Email:</td><td><input type="email" name="t3" required /></td><td><br/>
<tr><td class="lefttxt">Kunlar soni:</td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title="Iltimos, faqat 1 dan 20 gacha bo'lgan raqamlarni kiriting"/></td><td><br/>
<tr><td class="lefttxt">Bolalar soni:</td><td><input type="number" name="t5" required pattern="[1 _]{1,10}" title="Iltimos, faqat 1 dan 10 gacha bo'lgan raqamlarni kiriting"/></td><td><br/>
<tr><td class="lefttxt">Kattalar soni:</td><td><input type="number" name="t6" required pattern="[1 _]{1,20}" title="Iltimos, faqat 1 dan 20 gacha bo'lgan raqamlarni kiriting"/></td><td><br/>
<tr><td class="lefttxt">So'rov xabari:</td><td><textarea name="t7" required="required"/></textarea></td><td><br/>
<tr><td>&nbsp;</td><td ><input type="submit" value="Yuborish" name="sbmt" /></td></tr>

</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
