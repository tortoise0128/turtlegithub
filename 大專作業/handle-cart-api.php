<?php
require  __DIR__. "/_connect_db.php";

if (! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$action = isset($_GET['action']) ? $_GET['action'] : '' ;
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0 ;
$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 0 ;
$output = [
    'action' => $action,
    'code' => 0
];


/*      加入商品 / 移除商品 / 清空商品
 * action: add / remove  / empty
 */


switch ($action){
    case 'add':
        if ( empty($sid) or $quantity<=0){
            //不做任何事情
            $output['code'] = 400;
        } else{
            $index = array_search($sid , array_column($_SESSION['cart'] , 'sid'));
            if ($index === false){
                //原本沒有此商品
                $sql = "SELECT `sid`, `name`, `price`, `img_small`, `size`, `flower`, `intro` FROM `product` WHERE `sid`= $sid";
                $row = $pdo->query($sql)->fetch();
                if (empty($row)){
                    //找不到商品
                    $output['code']=230;
                }else{
                    $row['quantity']=$quantity;
                    $_SESSION['cart'][] = $row;
                    $output['code']=250;
                }
            } else{
              //已有此商品
                  $_SESSION['cart'][$index]['quantity'] = $quantity;
                  $output['code'] = 210 ;
            }
        }
        break;
    case 'remove':
        $index = array_search($sid , array_column($_SESSION['cart'] , 'sid'));
        if ($index === false){
            //原本沒有此商品
            $output['code'] = 300;
        } else{
            //已有此商品
            array_splice($_SESSION['cart'], $index , 1); //找到cart裡面的sid,有的話取代1筆(刪除)
            $output['code'] = 310 ;
        }
        break;
    case  'empty':
        $_SESSION['cart'] = [];
        break;
};

$output['cart'] = $_SESSION['cart'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);