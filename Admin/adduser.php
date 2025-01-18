<?php
// Xatoliklarni ko'rsatish
ini_set('display_errors', 1);
error_reporting(E_ALL);

// MySQL ulanish funksiyasi
function makeconnection() {
    $server = "localhost";  // MySQL serveri
    $username = "root";     // MySQL foydalanuvchi nomi
    $password = "";         // MySQL paroli
    $dbname = "travel";     // Ma'lumotlar bazasi nomi

    // MySQLga ulanish
    $cn = mysqli_connect($server, $username, $password, $dbname);

    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $cn;
}

// Foydalanuvchi ma'lumotlarini qo'shish
$cn = makeconnection();
$sql = "INSERT INTO users (Username, Pwd, Typeofuser) VALUES ('profi', '" . password_hash('profi117', PASSWORD_DEFAULT) . "', 'admin')";

// SQL so'rovini bajarish
if (mysqli_query($cn, $sql)) {
    echo "Foydalanuvchi muvaffaqiyatli qo'shildi.";
} else {
    echo "Xatolik yuz berdi: " . mysqli_error($cn);
}

// MySQL ulanishini yopish
mysqli_close($cn);
?>
