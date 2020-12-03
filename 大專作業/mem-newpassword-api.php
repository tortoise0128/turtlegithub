<?php
require __DIR__. '/_connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];
// TODO: 檢查欄位



$sql2 = "SELECT * FROM member WHERE `id`=? AND `password`=SHA1(?)";

$stmt2 = $pdo->prepare($sql2);
$stmt2->execute([
    $_SESSION['member']['id'],
    $_POST['oldpassword'],
]);

if($stmt2->rowCount() < 1 ){
    $output['error'] = '原始密碼錯誤';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


$sql = "UPDATE `member` SET 
            `password`=SHA(?)
             WHERE `id`=?";

$pas = $_POST['password'];

$stmt = $pdo->prepare($sql);
$stmt->execute([
        $pas,
        $_SESSION['member']['id'],
]);

if($stmt->rowCount()){
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
