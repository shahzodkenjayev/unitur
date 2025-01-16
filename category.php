<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNITUR | Bosh sahifa </title>
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
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto">

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Kategoriyalar</b></td></tr>
<?php

$s = "SELECT * FROM category"; 
$result = mysqli_query($cn, $s); 

if (!$result) {
    die('Query failed: ' . mysqli_error($cn));
}

while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    // $data['Cat_id'] va $data['Cat_name'] ustunlaridan foydalanish
    echo "<tr><td style='padding:5px;'><b><a href='subcat.php?catid=" . $data['Cat_id'] . "'>" . $data['Cat_name'] . "</a></b></td></tr>";
}

mysqli_close($cn);


</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">UNITUR saytiga xush kelibsiz</td></tr>
<tr><td class="paraText" width="900px">Mavjud sayohatingizni rejalashtiring va buyurtma qiling. Orzularingizdagi ta'tilni yarating.
Nimalarni yoqtirasiz? Nimalarni sevgan ishlaringizni bajaring.
UNITUR sayti orqali siz hayratlanarli tabiiy go'zalliklar, Colorado Milliy Yodgorligi kabi dramatik qizil tosh manzaralarini va boshqa ko'plab sayohat imkoniyatlarini topasiz. Sayohatlar, o'rmonlarda piyoda sayohatlar, dam olish, qishki sportlar kabi bir qator hayajonli sarguzashtlar mavjud. Colorado daryosida oq suvda suzish, mukammal golf maydonlari hamda Redland cho'lida joylashgan go'zal tabiat va tinch joylar. Colorado G'arbiy Qiyaliklarida dam olish va yengil ishlarga ajoyib imkoniyatlar. Qishloq markazida juda ko'p savdo nuqtalari, restorantlar va san'at galereyalari mavjud. Bu My Tour, sizga sayohat qilish imkoniyatini beradi.</td><td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">YAXSHI VAKT O'TKAZING &nbsp;&nbsp;&nbsp; bir so'm sarflamasdan</div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
