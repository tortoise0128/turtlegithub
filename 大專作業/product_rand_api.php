<?php 
require __DIR__. "/_connect_db.php";

$qs = []; // query string
$perPage = 3;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$color = isset($_GET['color']) ? intval($_GET['color']) : 0;




$where = ' WHERE 1 ';
if($cate_id){
    $where .= " AND `category`=$cate_id ";
    $qs['cate'] = $cate_id;
}

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$output =[
    'rows' =>[], // 該頁的資料
];

if($totalRows>0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: productTest.php');
        exit;
    }

    $sql = sprintf("SELECT * FROM product ORDER BY RAND( ) LIMIT %s, %s" , ($page-1)*$perPage, $perPage);
    $stmt = $pdo->query($sql);

    if ($page > $totalPages) {
        header('Location: productTest.php?page='. $totalPages);
        exit;
    }if($totalPages<=5){
        for($i=1; $i<=$totalPages; $i++){
            $pageBtns[] = $i;
        }
    } else {
        $tmpAr1 = [];
        for($i=$page-2; $i<=$totalPages; $i++){
            if($i>=1) {
                $tmpAr1[] = $i;
            }
            if(count($tmpAr1)>=5){
                break;
            }
        }
        $output['rows'] = $stmt->fetchAll();
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
    
}
header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>

