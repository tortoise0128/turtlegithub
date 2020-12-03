<?php
include __DIR__ . "/_connect_db.php";

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

if (empty($_SESSION['cart']) or empty($_SESSION['member']) or empty($_SESSION['receiver'])){
    header('Location: product.php');
    exit;
}




// *** 抓到當下的價格資訊 *** begin
$sids = array_column($_SESSION['cart'], 'sid');
$sql = "SELECT * FROM `product` WHERE `sid` IN (". implode(',', $sids). ")";

$productData = [];
$stmt = $pdo->query($sql);

while($r = $stmt->fetch()){
    $productData[$r['sid']] = $r;
}
// print_r($productData);
//exit;

$totalPrice = 0;
foreach ($_SESSION['cart'] as $k=>$v){
    $_SESSION['cart'][$k]['price'] = $productData[$v['sid']]['price'];
    $totalPrice += $_SESSION['cart'][$k]['price'] * $v['quantity'];
}
// *** 抓到當下的價格資訊 *** end


// 寫入 orders

$sql = "INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ? , NOW())";
$stmt = $pdo -> prepare($sql);
$stmt -> execute([$_SESSION['member']['id'], $totalPrice]);

$order_sid = $pdo -> lastInsertId();

// 寫入 order_details

$sql2 = "INSERT INTO `order_detail`(`order_sid`, `member_sid`,`product_name`, `product_sid`,`img_small` ,`price`, `quantity`, `size`, `order_date`) VALUES (?,?,?,?,?,?,?,?, NOW())";
$stmt2 = $pdo -> prepare($sql2);

foreach($_SESSION['cart'] as $i){
    $stmt2 -> execute([$order_sid , $_SESSION['member']['id'] ,$i['name'] , $i['sid'] ,$i['img_small'], $i['price'] , $i['quantity'], $i['size'] ]);
}

// unset($_SESSION['cart']);


?>

<?php include __DIR__ . "/_html_header.php" ?>
<style>
    * {
        box-sizing: border-box;
        font-family: 'Lusitana', 'Noto Sans TC', serif;
    }

    body {
        background-color: #F4F4F4;
    }

    .imgFix {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .textBold {
        font-weight: bold;
    }

    /* 01 */
    .logoImgBlock {
        width: 200px;
        height: 200px;
    }

    .logoImgBlock img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .logo_img {
        display: flex;
        margin: 2vw 0 0 3vw;
    }

    .title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 33%;
        margin-left: 21px;
    }

    .title_txet {
        font-size: 17px;
    }

    .title h4 {
        margin-right: 3vw;
    }

    .shopping,
    .check {
        color: #B9B4B4;
    }

    /* 02 */
    #content {
        display: flex;
    }

    .back_to_store {
        color: #B9B4B4;
        font-size: 12pt;
        text-align: right;
        margin: 2vw 30px 0 90px;
    }

    .back_to_store a {
        color: #B9B4B4;
        text-decoration: none;
    }

    .content_title_text {
        font-size: 16pt;
        margin-bottom: 29px;
    }

    .member {
        margin-left: 1%;
        font-size: 16px;
        color: #282828;
        line-height: 1;
    }

    .infoBox {
        display: flex;
        border-bottom: 1px dotted #707070;
        font-size: 16px;
        padding: 17px 0;
        margin: 0;
    }

    .infoTitle {
        width: 175px;
        letter-spacing: 2px;
    }

    .infoText {
        width: 500px;
        letter-spacing: 2px;
        text-align: center;
    }

    /* 03 */
    .detail {
        background-color: #FFFFFF;
        position: absolute;
        right: 1px;
        top: 1px;
        height: calc(100vh - 1px);
        width: 30vw;
        text-align: left;
        padding: 2vw;
    }

    /* 滾輪以下 */
    .content_scrollbar {
        height: 650px;
        width: 59vw;
        overflow-y: scroll;
        /* margin-bottom: 25px; */
    }

    #scrollbar_style::-webkit-scrollbar {
        width: 5px;
        background: #E4E4E4;
        border-radius: 10px;
    }

    #scrollbar_style::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    #scrollbar_style::-webkit-scrollbar-thumb {
        background: #6B6B6B;
        border-radius: 10px;
    }

    .datail_button {
        position: absolute;
        right: 37vw;
        top: 38vw;
    }

    /* 滾輪以上 */
    .detail_content {
        display: flex;
    }

    .commodity_img {
        width: 110px;
        height: 110px;
        overflow: hidden;
        margin-bottom: 9px;
    }

    .content_text {
        width: 200px;
        font-size: 12pt;
        margin: auto 15px;
    }

    .content_price {
        margin: auto 0;
    }

    .detail_scrollbar {
        height: 600px;
        width: 104%;
        overflow-y: auto;
        margin-top: 26%;
    }

    .datail_border {
        position: relative;
        border-top: 1px solid black;
        margin-top: 2vw;
    }

    .datail_name {
        position: relative;
        margin-top: 2vh;
        text-align: center;
        letter-spacing: 3px;
    }


    .LastPage {
        color: #fff;
        background: #707070;
        border: 0;
        border-radius: 10px;
        width: 150px;
        height: 50px;
        cursor: pointer;
        line-height: 52px;
        text-align: center;
        letter-spacing: 3px;
        margin-top: 10px;
    }

    .NextPage {
        border: 0;
        border-radius: 10px;
        color: white;
        background-color: #F2B46D;
        text-align: center;
        line-height: 50px;
        width: 150px;
        height: 50px;
        cursor: pointer;
        position: relative;
        letter-spacing: 3px;
        margin-top: 10px;
    }

    .NextPage:focus,
    .LastPage:focus {
        outline: none;
        border: none;
    }

    .NextPage:hover {
        background-color: #ebab4b;
        color: #fff;
        text-decoration: none;
    }

    .LastPage:hover {
        background-color: #666666;
        color: #fff;
        text-decoration: none;
    }
</style>

<body>
    <!-- 01 -->
    <header>
        <div class="logo_img">
            <div class="logoImgBlock">
                <a href="<?= WEB_ROOT ?>/_index.php"><img src="img/logoblack.png" alt=""></a>
            </div>
            <div class="title">
                <h4 class="title_txet shopping">SHOPPING CART</h4>
                <h4 class="title_txet check">CHECK ORDER</h4>
                <h4 class="title_txet"><i class="fas fa-caret-right"></i> ORDER COMPLE</h4>
            </div>
        </div>
        <!-- 02 -->
        <div id="content">
            <div class="back_to_store">
                <a href="<?= WEB_ROOT ?>/product.php"><i class="fas fa-angle-left"></i> BACK TO STORE</a>
            </div>
            <?php if ($_SESSION['receiver']) : ?>
                <div class="member">
                    <div class="member_title">
                        <h2 class="content_title_text">會員訂單明細</h2>
                    </div>
                    <?php $r = $_SESSION['receiver']; ?>
                    <div class="member_content">
                        <div class="infoBox textBold">
                            <div class="infoTitle ">金額總計</div>
                            <div class="infoText"><span id="totalPrice" val="0"></span>元</div>
                        </div>

                        <div class=" infoBox" id="">
                            <div class="infoTitle">收件人姓名</div>
                            <div class="infoText"><?= $r["name"] ?></div>
                        </div>

                        <div class="infoBox">
                            <div class="infoTitle">收件人地址</div>

                            <div class="infoText"><?= $r["county"] ?> <?= $r["city"] ?> <?= $r["address"] ?></div>

                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">統一編號</div>
                            <div class="infoText"><?= $r["numbering"] ?></div>
                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">訂單日期</div>
                            <div class="infoText"><span id="date" val="0"></div>
                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">匯款方式</div>
                            <div class="infoText"><?= $r["payment"] ?></div>
                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">送貨方式</div>
                            <div class="infoText"><?= $r["addressC"] ?></div>
                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">購買件數</div>
                            <div class="infoText"> <span class="cart-count">0</span>件</div>
                        </div>
                   
                        <div class="infoBox" id="">
                            <div class="infoTitle">運費</div>
                            <div class="infoText">免運費</div>
                        </div>

                        <div class="infoBox" id="">
                            <div class="infoTitle">會員折扣金額</div>
                            <div class="infoText">NT.0元</div>
                        </div>

                    </div>
                    <div class="datail_button">
                        <div>
                            <a type="button" class="LastPage" href="<?= WEB_ROOT ?>/_index.php" >回首頁</a>
                        </div>
                        <div>
                            <a type="button" class="NextPage" href="<?= WEB_ROOT ?>/member.php">回會員中心</a>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

        </div>
    </header>

    <!-- 03 -->
    <div class="detail">
        <?php if ($_SESSION['cart']) : ?>
            <div class="detail_scrollbar" id="scrollbar_style">
                <?php foreach ($_SESSION['cart'] as $i) : ?>
                    <div class="detail_content" data-sid="<?= $i['sid'] ?>" data-name="<?= $i['name'] ?>" data-img="<?= $i['img_small'] ?>" data-size="<?= $i['size'] ?>" data-flower="<?= $i['flower'] ?>" data-price="<?= $i['price'] ?>" data-quantity="<?= $i['quantity'] ?>" data-intro="<?= $i['intro'] ?>">

                        <figure class="commodity_img">
                            <img class="imgFix" src="img/small/<?= $i['img_small'] ?>-1.jpg">
                        </figure>
                        <div class="content_text">
                            <div><?= $i['name'] ?></div>
                            <div><?= $i['size'] ?></div>
                            <br>
                            <div>購買數量: <?= $i['quantity'] ?> 組</div>
                        </div>
                        <div class="content_price">
                            <div class="price"></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!--  -->
            </div>

            <div class="datail_border"></div>
            <div>
                <div class="datail_name">
                    <div>共<span class="cart-count">0</span>件/商品金額總計：<span id="total-price"></span></div>
                </div>
            </div>
        <?php endif ?>
    </div>

    <?php
     unset($_SESSION['cart']) ;
     unset($_SESSION['receiver']) ;
     ?>
    <?php include __DIR__ . "/_scripts.php" ?>

    <script>

        const today=new Date();
        const currentDateTime =
        today.getFullYear()+' /'+
        (today.getMonth()+1)+' /'+
        today.getDate()+' ';

        // -----三碼加 , ----
        const dallorCommas = function(n) {
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };

        // ----------------

        function prepareCartTable() {
            $p_items = $('.detail_content');

            if (!$p_items.length && $('#total-price').length) {
                location.reload();
                return;
            }

            let total = 0;
            $p_items.each(function() {
                const sid = $(this).attr('data-sid');
                const price = $(this).attr('data-price');
                const quantity = $(this).attr('data-quantity');

                $(this).find('.price').text("NT. " + dallorCommas(quantity * price));
                $(this).find('.npd-form-counter-quantity').val(quantity);

                total += quantity * price;
                $('#total-price').text('NT.' + dallorCommas(total));

                const cart_countF = $(".cart-countF"),
                    date = $("#date"),
                    totalPrice = $("#totalPrice");

                cart_countF.text(quantity);
                totalPrice.text('NT.' + dallorCommas(total));
                date.text(currentDateTime);
            });
        }
        prepareCartTable();

    
    </script>

</body>

</html>