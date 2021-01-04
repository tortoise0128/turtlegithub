<?php
require __DIR__. '/turtle128.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

if(empty($_POST['email']) or empty($_POST['password'])){
    $output['error'] = '資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$email = strtolower(trim($_POST['email']));

$sql = "SELECT `id`, `email`, `nickname` FROM members WHERE email=? AND password=SHA1(?)";
// SHA1加密文件
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $email,
    $_POST['password'],
]);

$row = $stmt->fetch();

if(! empty($row)){
    $output['success'] = true;
    unset($row['password']);
    $_SESSION['member'] = $row;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
