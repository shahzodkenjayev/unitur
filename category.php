<div style="width:1000px; margin:auto; display:flex; justify-content:space-between; align-items:center;">
    <!-- Asosiy sahifa tugmasi -->
    <a href="index.php" style="text-decoration:none; background:#09F; color:white; padding:10px 20px; border-radius:5px; font-family:Arial, sans-serif; font-size:16px;">
        Bosh sahifa
    </a>

    <!-- Kategoriya jadvali -->
    <div style="width:30%; padding:10px;">
        <h3 style="font-family:Lucida Calligraphy; font-size:20px; color:#09F;">Kategoriyalar</h3>
        <?php
        // MySQL ulanish
        $cn = mysqli_connect("localhost", "root", "", "travel");

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
