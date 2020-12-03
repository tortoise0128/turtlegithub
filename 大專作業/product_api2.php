<?php 
require __DIR__. "/_connect_db.php";

$qs = []; // query string

$perPage = 12;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$output = [
    'perPage' => $perPage,
    'page' => $page,
    'totalRows' => 0,
    'totalPages' => 0,
    'rows' => [], // 該頁的資料
    'pageBtns' => [],
];



$where = ' WHERE 1 ';

if(!empty($_GET["cart"])){
    $where = sprintf(".`category` IN (%s)" , implode(",",$_GET["cart"])) ;
}
if(!empty($_GET["colorChose"])){
    $where = sprintf(".`color` IN (%s)" , implode(",",$_GET["colorChose"])) ;
}
if(!empty($_GET["stlye"])){
    $where = sprintf(".`style` IN (%s)" , implode(",",$_GET["stlye"])) ;
}

// SELECT * FROM `product` WHERE `product`.`category` IN ("3")
//"SELECT * FROM `product` ORDER BY `product`.`category` ASC"


$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$output =[
    'perPage' => $perPage,
    'page' => $page,
    'totalRows' => 0,
    'totalPages' => 0,
    'rows' =>[], // 該頁的資料
    'pagesBtns' => [],
];

if($totalRows>0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) $page = 1;

    $sql = sprintf("SELECT * FROM product ORDER BY `sid` ASC LIMIT %s, %s" , ($page-1)*$perPage, $perPage);
    $stmt = $pdo->query($sql);

    if ($page > $totalPages) {
        $page = $totalPages;
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
        $tmpAr2 = [];
        for ($i = $page + 2; $i >= 1; $i--) {
            if ($i <= $totalPages) {
                array_unshift($tmpAr2, $i);
            }
            if (count($tmpAr2) >= 5) {
                break;
            }
        }
        $pageBtns = count($tmpAr1) > count($tmpAr2) ? $tmpAr1 : $tmpAr2;
        

        $output['page'] = $page;
        $output['totalRows'] = $totalRows;
        $output['totalPages'] = $totalPages;
        $output['rows'] = $stmt->fetchAll();
        $output['pageBtns'] = $pageBtns;
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
    
}
header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>

