<?php
require __DIR__. '/_connect_db.php';

$stmt = $pdo->query("SELECT * FROM categories");
$rows = $stmt->fetchAll();
$my_cates = [];

foreach($rows as $k=>$v){
    if($v['parent_sid']=='0'){
        $my_cates[] = $v;
    }
}

echo json_encode($my_cates, JSON_UNESCAPED_UNICODE);