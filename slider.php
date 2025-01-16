<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yangi hujjat</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // Siz ham shunday foydalanishingiz mumkin: "$(window).load(function() {"
			    $(function () {
			      // Slayder 4
			      $("#slider4").responsiveslides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>Oldin hodisa yuzaga keldi.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>Keyin hodisa yuzaga keldi.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slayder 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/sl1.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Bu dam olish kunida dam olishni o'ylab ko'ring</a></h2>
							<lable></lable>
							<h1><a href="#">UNITUR</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Plaža bo'yida zavqlaning</a></h2>
							<lable></lable>
							<h1><a href="#">UNITUR</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Bu dam olish kunida dam olishni o'ylab ko'ring</a></h2>
							<lable></lable>
							<h1><a href="#">Ko'ring! His eting! Sevging!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">Maqsad</a></h1>
							<lable></lable>
							<h2><a href="#">Sizning orzuingizdagi joy</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/sl4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Himoya his qiling</a></h2>
							<lable></lable>
							<h1><a href="#">Sizning dam olishingiz davomida</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->
</body>
</html>
