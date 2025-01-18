<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yangi categoriya</title>
</head>

<body>
<?php
// Ma'lumotlar bazasiga ulanish funksiyasi
function makeconnection()
{
    $cn = mysqli_connect("localhost", "root", "profi117", "travel");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $cn;
}

// Ulanishni tekshirish va holatini ko'rsatish
$cn = makeconnection();
if ($cn) {
    echo "<p style='color: green;'>Bazaga muvaffaqiyatli ulandi!</p>";
} else {
    echo "<p style='color: red;'>Bazaga ulanishda xatolik yuz berdi!</p>";
}
?>
</body>
</html>
