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
    $cn = mysqli_connect("localhost", "root", "", "travel");
    if (!$cn) {
        die("MySQL ulanishda xatolik: " . mysqli_connect_error());
    }
    return $cn;
}
?>

</body>
</html>
