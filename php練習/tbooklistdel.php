<!-- 資料表的刪除  -->
<?php
require __DIR__ . '/turtle128.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
if (!empty($sid)) {
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid";
    $pdo->query($sql);
}

// echo $_SERVER['HTTP_REFERER'];
if (empty($_SERVER['HTTP_REFERER'])) {
    header('Location: tbooklist.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
