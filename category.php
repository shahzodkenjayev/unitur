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
// Xatoliklarni ko'rsatishni yoqish
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Ma'lumotlar bazasiga ulanish
$cn = mysqli_connect("host", "user", "password", "database");

// Agar ulanishda muammo bo'lsa, xatolikni ko'rsatish
if (!$cn) {
    die("Ma'lumotlar bazasiga ulanishda xato: " . mysqli_connect_error());
} else {
    echo "Ma'lumotlar bazasiga ulanish muvaffaqiyatli!<br>";
}

// SQL so'rovini bajarish
$query = "SELECT * FROM categories"; // To'g'ri jadval nomi va ustun nomini ishlatish zarur
$result = mysqli_query($cn, $query);

// Agar so'rov muvaffaqiyatli bo'lsa
if ($result) {
    // Agar kategoriyalar mavjud bo'lsa, ularni chiqarish
    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<li>" . htmlspecialchars($data['Cat_name']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Kategoriyalar mavjud emas.";
    }
} else {
    // Agar so'rov bajarilmagan bo'lsa, xatolikni ko'rsatish
    echo "SQL so'rovi bajarilmagan: " . mysqli_error($cn);
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
