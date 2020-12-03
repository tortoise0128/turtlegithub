<?php 
require __DIR__. "/_connect_db.php";

$sql = "SELECT * FROM course";
$stmt = $pdo->query($sql);
$row = $stmt->fetch();
$totalRows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);

$output = [
    'success' => true,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];
$_SESSION['Course'] = $_POST;

// $output[$row] = $_SESSION['course'];
print_r($totalRows);
exit;

