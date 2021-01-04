<?php
require __DIR__ . '/turtle128.php';
$pageName = 'buystart';
$pageTitle = '龜的結帳';
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
foreach ($_SESSION['cart'] as $k => $v) {
    $_SESSION['cart'][$k]['price'] = $productData[$v['sid']]['price'];
}
// *** 抓到當下的價格資訊 *** end

?>
<?php include __DIR__ . '/thead.php' ?>
<style>
    .card-img {
        width: 30%;
        height: 30%;
        margin-left: 30%;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">

        <h3>龜的訂單確認</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">商品圖</th>
                    <th scope="col">商品名</th>
                    <th scope="col">單價</th>
                    <th scope="col">數量</th>
                    <th scope="col">小計</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $i) : ?>
                    <tr class="p-item" data-sid="<?= $i['sid'] ?>" data-price="<?= $i['price'] ?>" data-quantity="<?= $i['quantity'] ?>">
                        <td class="card">
                            <div class="card-img">
                                <img class="card-img-top" src="img/<?= $i['flower_img'] ?>.jpg" alt="商品圖">
                            </div>
                        </td>
                        <td><?= $i['flowername'] ?></td>
                        <td class="price"></td>
                        <td class="quantity"><?= $i['quantity'] ?></td>
                        <td class="sub-total"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="alert alert-success alertflex" role="alert">
            <a type="button" class="btn btn-primary" role="button" href="tcart.php">
                <i class="fas fa-arrow-circle-left"></i> 回購物車
            </a>

            <div> 總計: <span id="total-price"></span></div>

            <a type="button" class="btn btn-success" role="button" href="tbuyfinish.php">
                <i class="fas fa-arrow-circle-right"></i> 確定購買
            </a>


        </div>

        <div class="row">

        </div>

    </div>


</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };

    function prepareCartTable() {
        const $p_items = $('.p-item');
        if (!$p_items.length && $('#total-price').length) {
            // location.href = location.href;
            location.reload();
            return;
        }
        let total = 0;
        $p_items.each(function() {
            const sid = $(this).attr('data-sid');
            const price = $(this).attr('data-price');
            const quantity = $(this).attr('data-quantity');

            $(this).find('.price').text('$ ' + dallorCommas(price));
            $(this).find('.qty').val(quantity);
            $(this).find('.sub-total').text('$ ' + dallorCommas(quantity * price));
            total += quantity * price;
            $('#total-price').text('$ ' + dallorCommas(total));
        })
    }
    prepareCartTable();
</script>
<?php require __DIR__ . '/tfoot.php' ?>