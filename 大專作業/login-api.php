<?php
require __DIR__. '/_connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];






if(empty($_POST['useremail']) or empty($_POST['userPassword'])){
    $output['error'] = '資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}



$email = strtolower(trim($_POST['useremail']));





$sql = "SELECT `id`, `email` FROM member WHERE email=? AND password=SHA1(?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $email,
    $_POST['userPassword'],
]);

$row = $stmt->fetch();

if(! empty($row)){
    $output['success'] = true;
    unset($row['userPassword']);
    $_SESSION['member'] = $row;
}









echo json_encode($output, JSON_UNESCAPED_UNICODE);




