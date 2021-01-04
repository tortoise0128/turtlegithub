<?php
require __DIR__ . '/turtle128.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

if (empty($_POST['name'])) {
    $output['error'] = '沒有姓名資料';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO: 檢查欄位

$mobile = $_POST['mobile'];
$mobile = implode('', explode('-', $mobile));

$sql = "UPDATE `address_book` SET 
            `name`=?,
            `email`=?,
            `mobile`=?,
            `birthday`=?,
            `address`=?
             WHERE `sid`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $mobile,
    $_POST['birthday'],
    $_POST['address'],
    $_POST['sid'],
]);

if ($stmt->rowCount()) {
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);