<?php
require __DIR__ . '/turtle128.php';
$pageName = 'buyfinish';
$pageTitle = '龜的訂購';
if (empty($_SESSION['cart']) or empty($_SESSION['member'])) {
    header('Location: tproductlist.php');
    exit;
}

// *** 抓到當下的價格資訊 *** begin
$sids = array_column($_SESSION['cart'], 'sid');
$sql = "SELECT * FROM `products` WHERE `sid` IN (" . implode(',', $sids) . ")";
$productData = [];
$stmt = $pdo->query($sql);
while ($r = $stmt->fetch()) {
    $productData[$r['sid']] = $r;
}
$totalPrice = 0;
foreach ($_SESSION['cart'] as $k => $v) {
    $_SESSION['cart'][$k]['price'] = $productData[$v['sid']]['price'];

    $totalPrice += $_SESSION['cart'][$k]['price'] * $v['quantity'];
}
// *** 抓到當下的價格資訊 *** end

// 寫入 orders
$sql = "INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ? , NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id'], $totalPrice]);

$order_sid = $pdo->lastInsertId();  // 訂單流水號

// 寫入 order_details
$sql2 = "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?,?,?,?)";
$stmt2 = $pdo->prepare($sql2);
// 買了3個商品會寫同一個`order_sid`乘以3和各自的 `product_sid`那些資料
foreach ($_SESSION['cart'] as $i) {
    $stmt2->execute([$order_sid, $i['sid'], $i['price'], $i['quantity']]);
}

// 清除購物車內容
unset($_SESSION['cart']);


?>
<?php include __DIR__ . '/thead.php' ?>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">

    <div class="book1">

        <h3>龜的感謝訂購!!!</h3>

    </div>


</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>

</script>
<?php require __DIR__ . '/tfoot.php' ?>