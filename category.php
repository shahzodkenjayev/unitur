<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNITUR | Bosh sahifa </title>
<link rel="icon" href="favicon.png" type="image/x-icon">
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
	<div class="header-top">
    <!--container-->
    <div class="container">
        <div class="top-nav">
            <div class="logo">
                <a href="#"><img src="images/logo.png" id="section-1" width="120" height="25" class="img-responsive" alt="UNITUR"/></a>
            </div>
            <div class="menu">
		   
                <ul id="nav">
                    <li><a href="#section-1">Bosh sahifa</a></li>
                    <li><a href="#section-2">Biz haqimizda</a></li>
                    <li><a href="#section-3">Eng mashhur sayohatlar</a></li>
                    <li><a href="category.php">Kategoriyalar</a></li>
                    <li><a href="#section-4">Reklamalar</a></li>
                    <li><a href="#section-5">Aloqa</a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/container-->
</div>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Sayohatlar ro'yxati</b></td></tr>


<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to My Tour</td></tr>
<tr><td class="paraText" width="900px">Plan and Book Your Perfect Trip.Create your dream holiday.
what you like. Do what you love.
What's New Explore new experiences, attractions, food and wine trends.
What will you find during your visit to My Tour? Awe-inspiring natural beauty and the dramatic
red rock landscape of the Colorado National Monument. Exhilarating outdoor adventures including
hiking, camping or skiing on the Grand Mesa. Hundreds of miles of world-class mountain biking trails
such as the Kokopelli Trail. Incredible whitewater rafting on the Colorado River. Stunning golf courses
whose green fairways are juxtaposed against the craggy Redland desert. Peaceful places to reflect and
unwind amidst the natural splendor of Colorado's Western Slope. A charming downtown full of great
shops, restaurants, art galleries and so much more. This is My Tour, where you can experience
beautiful tourist places.</td><td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
