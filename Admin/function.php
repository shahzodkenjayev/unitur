<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function makeconnection() {
    $host = 'localhost';
    $username = 'root';
    $password = 'profi117'; // Bu yerda yangi parolni yozing
    $database = 'travel'; // Ma'lumotlar bazasining nomi

    $cn = mysqli_connect($host, $username, $password, $database);

    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $cn;
}
?>
</body>
</html>
