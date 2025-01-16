<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yangi xujjat</title>
</head>

<body>
<?php
function makeconnection()
{
	$cn = mysqli_connect("127.0.0.1", "root", "", "travel");

if (!$cn) {
    die("Ma'lumotlar bazasiga ulanishda xatolik: " . mysqli_connect_error());
} else {
    echo "Ma'lumotlar bazasiga ulanish muvaffaqiyatli!";
}

	return $cn;
}
$cn=mysqli_connect("127.0.0.1","root","","travel");
?>
</body>
</html>
