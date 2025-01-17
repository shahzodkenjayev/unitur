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

        <!-- Kategoriya jadvali -->
        <div style="width:30%; padding:10px;">
            <h3 style="font-family:Lucida Calligraphy; font-size:20px; color:#09F;">Kategoriyalar</h3>
            <?php
            // MySQL ulanish
            $cn = mysqli_connect("206.189.114.116", "root", "", "travel");

            if (!$cn) {
                die("Ulanishda xato: " . mysqli_connect_error());
            }

            // Kategoriyalarni olish
            $s = "SELECT * FROM category";
            $result = mysqli_query($cn, $s);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border='1' style='border-collapse:collapse; width:100%;'>";
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr><td style='padding:10px;'><b><a href='subcat.php?catid={$data['Cat_id']}'>" . 
                        htmlspecialchars($data['Cat_name']) . 
                        "</a></b></td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Kategoriyalar mavjud emas.</p>";
                }
            } else {
                echo "<p>MySQL so'rov xato: " . mysqli_error($cn) . "</p>";
            }

            // Ulanishni yopish
            mysqli_close($cn);
            ?>
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
