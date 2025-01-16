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
	<?php
$cn = mysqli_connect("127.0.0.1", "root", "", "travel");

if (!$cn) {
    die("Ma'lumotlar bazasiga ulanishda xatolik: " . mysqli_connect_error());
}

$query = "SELECT * FROM category";
$result = mysqli_query($cn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        echo "<p>" . $data['Cat_name'] . "</p>";
    }
} else {
    echo "Kategoriyalar mavjud emas.";
}

mysqli_close($cn);
?>

</body>
</html>
