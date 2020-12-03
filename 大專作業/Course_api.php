<?php
require  __DIR__. "/_connect_db.php";

if (!isset($_SESSION['Course'])) {
    $_SESSION['Course'] = [];
}

$output = [
    'success' => true,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];
$_SESSION['Course'] = $_POST;

echo json_encode($output, JSON_UNESCAPED_UNICODE);