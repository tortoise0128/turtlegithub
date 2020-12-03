<?php
require __DIR__. '/_connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

if(empty($_POST['nickname'])){
    $output['error'] = '沒有姓名資料';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO: 檢查欄位

$mobile = $_POST['mobile'];
$mobile = implode('', explode('-', $mobile));

$sql = "UPDATE `member` SET 
            `mobile`=?,
            `county`=?,
            `city`=?,
            `address`=?,
            `birthday`=?,
            `nickname`=?
             WHERE `id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
        $mobile,
        $_POST['county'],
        $_POST['city'],
        $_POST['address'],
        $_POST['birthday'],
        $_POST['nickname'],
        // $_POST['id'],
        $_SESSION['member']['id'],
]);

if($stmt->rowCount()){
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
