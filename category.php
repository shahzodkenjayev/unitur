<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITUR | Bosh sahifa</title>
    <link href="stylecss.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
</head>
<body>
    <?php include('function.php'); ?>
    <?php include('top.php'); ?>
    <?php include('slider.php'); ?>

    <div style="height:50px"></div>
    <div style="width:1000px; margin:auto; display:flex;">

        <!-- Kategoriyalar -->
        <div style="width:30%; padding:10px;">
            <h3 style="font-family:Lucida Calligraphy; font-size:20px; color:#09F;">Kategoriyalar</h3>
            <ul id="nav">
                <li><a href="subcat.php?catid=1">Oilaviy sayohatlar</a></li>
                <li><a href="subcat.php?catid=2">Diniy sayohatlar</a></li>
                <li><a href="subcat.php?catid=3">Sarguzashtli sayohatlar</a></li>
                <li><a href="subcat.php?catid=4">Maxsus tadbirlarga sayohatlar</a></li>
                <li><a href="subcat.php?catid=5">O'rmonlarga sayohat</a></li>
                <li><a href="subcat.php?catid=6">Dam olish kunlari sayohat</a></li>
                <li><a href="subcat.php?catid=7">Kichik guruh sayohatlari</a></li>
            </ul>
        </div>

        <!-- UNITUR ma'lumotlari -->
        <div style="width:70%; padding:10px;">
            <h2 class="headingText">UNITUR saytiga xush kelibsiz</h2>
            <p class="paraText">
                Mavjud sayohatingizni rejalashtiring va buyurtma qiling. Orzularingizdagi ta'tilni yarating. 
                <br><br>
                UNITUR sayti orqali siz hayratlanarli tabiiy go'zalliklar va boshqa ko'plab sayohat imkoniyatlarini topasiz.
                Colorado daryosida oq suvda suzish, mukammal golf maydonlari va Redland cho'lida joylashgan go'zal tabiat — barchasi siz uchun.
            </p>
        </div>
    </div>

    <?php include('bottom.php'); ?>
</body>
</html>
