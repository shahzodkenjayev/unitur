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
$s = "SELECT * FROM category";
$result = mysqli_query($cn, $s);

if (mysqli_num_rows($result) > 0) {
    // Har bir kategoriyani ko'rsatadi
    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<p>" . $data['Cat_name'] . "</p>";
    }
} else {
    echo "Kategoriyalar mavjud emas.";
}

mysqli_close($cn);
?>


</body>
</html>
