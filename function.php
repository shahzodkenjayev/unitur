<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yangi categoriya</title>
</head>

<body>
<?php
// MySQL ulanishi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kategoriyalarni olish
function getCategories() {
    global $conn;
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
    $categories = [];
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    return $categories;
}

// Subkategoriyalarni olish
function getSubcategoriesByCategory($catid) {
    global $conn;
    $sql = "SELECT * FROM subcategory WHERE Catid = $catid";
    $result = $conn->query($sql);
    $subcategories = [];
    while ($row = $result->fetch_assoc()) {
        $subcategories[] = $row;
    }
    return $subcategories;
}

// Boshqa kerakli funksiyalarni qo'shish mumkin
?>


</body>
</html>
