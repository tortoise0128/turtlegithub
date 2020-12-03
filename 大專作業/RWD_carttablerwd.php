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
foreach ($_SESSION['cart'] as $k=>$v){
    $_SESSION['cart'][$k]['price'] = $productData[$v['sid']]['price'];
}

// *** 抓到當下的價格資訊 *** end
?>



<?php include __DIR__ . "/_html_header.php" ?>



<style>
body{
    /* font-weight: bold; */

}
    .mewberlist {
        margin-top:42px;
        flex-direction: column;
        align-items: center;
    }

    /* ------------------------ */
    .mewall1 {
        width: 315px;

        /* line-height: 20px; */
    }

    .mewp {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }


    .mewtotal {
        justify-content: space-between;
        margin-bottom: 4px;

    }

    .mewp7 {
        font-size: 20px;
    }

    .mewp1 {
        font-size: 16px;
    }

    .mewp2 {
        font-size: 16px;
    }

    .mewp3 {
        font-size: 16px;
        margin-bottom: 14px;
    }

    .mewp4 {
        font-size: 16px;
        margin-bottom: 15px;
    }

    /* -------------------------- */
    .mewall2 {
        width: 315px;
        height: 315px;
        padding: 15px;
        margin-bottom: 15px;
        border-top: 1px solid #B9B4B4;
        border-bottom: 1px solid#B9B4B4;
        overflow: auto;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: #6B6B6B;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #E4E4E4;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #E4E4E4;
    }


    .mewtotal2 {
        justify-content: space-between;
    }

    .mewtext {
        line-height: 15px;
    }

    /* ----------------------- */
    .mewall3 {
        width: 315px;
        line-height: 15px;
    }

    .mewtotal3 {
        justify-content: space-between;
        /* width: 315px ; */
    }

    /* --------------------------------------------- */
    .detail_content{
        width: 100%;
    }

    .simplycofe {
        /* width: 270px; */
        flex-direction: column;
        align-items: flex-end;
        line-height: 19px;
        margin-top: 15px;
        width:100%;
    }

    .simplycofe1 {
        width: 260px;
        justify-content: space-between;
    }
    tbody{
        width: 100%;
        
    }
    tr{
        display: flex;
        justify-content: space-between;
    }

    .mewp5 {
        font-size: 14px;
        margin-bottom: 19px;
    }

    .mewp6 {
        font-size: 14px;
        margin-right: 5px;
        margin-bottom: 19px;
    }


    /* -------------------------------- */


    .fa-chevron-circle-left {
        /* margin-right: 57px; */
        color: rgba(255, 255, 255, 0.808);
        margin-top: 7px;
    }

    .fa-chevron-circle-right {
        /* margin-left: 57px; */
        color: rgba(255, 255, 255, 0.808);
        margin-top: 7px;

    }

    .bttn {
        justify-content: center;
        align-items: center;
        margin-top: 36px;
        height: 51px;
        width: 50vw;
        border: none;
        outline: none !important;
        /* 不想要邊框要加 !important*/
        background: #B9B4B4;
        font-size: 20px;
        font-weight: bold;
        color: white;

    }

    .bttn.active {
        background: #f2b46c;
        color:#fff;
    }

    .bttn1 {
        width: 375px;
        position: fixed;
        bottom:0;
    }
    .infoaddress{
        font-size:16px;
        margin:10px 0;
    }
    .btnList{
        border:0;
        background: none;
        color:blue;
        font-size: 12px;
    }
</style>
</head>

<body>
<div class="mewberlist d-flex">
    <?php if ($_SESSION['receiver']) : ?>
        <div class="mewall1">
            <p class="mewp"><i class="fas fa-caret-right"></i>ORDER COMPLETE</p>
            <p class="mewp">訂單明細</p>
            <?php $r = $_SESSION['receiver']; ?>

            <div class="mewtotal d-flex">
                <p class="infoTitle">金額總計</p>
                <p class="infoText"><span id="totalPrice" val="0">元</span></p>
            </div>
            <div class=" infoBox" id="">
                <div class="infoText"><?= $r["name"] ?></div>
             </div>

            <div class="infoBox">
                <div class="infoText infoaddress"><?= $r["county"] ?> <?= $r["city"] ?> <?= $r["address"] ?></div>
             </div>

        </div>
    <?php endif; ?>

        <!-- -------------------------------------------------- -->
        <div class="mewall2">
            <div class="mewtext">
                <div class="mewtotal2 d-flex">
                    <p class="infoTitle">訂單日期</p>
                    <p class="infoText"><span id="date" val="0"></p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="infoTitle">統一編號</p>
                    <p class="infoText"><?= $r["numbering"] ?></p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="infoTitle">匯款方式</p>
                    <p class="infoText"><?= $r["payment"] ?></p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="infoTitle">送貨方式</p>
                    <p class="infoText"><?= $r["addressC"] ?></p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="infoTitle">購買件數</p>
                    <p class="infoText"><span class="cart-count">0</span>件</p>
                </div>
         </div>
                    <!-- ------------------------------------------------------ -->
        <?php if ($_SESSION['cart']) : ?>
            <div class="simplycofe d-flex detail_scrollbar" id="scrollbar_style">
            <?php foreach ($_SESSION['cart'] as $i) : ?>
                <div data-sid="<?= $i['sid'] ?>"
                    data-name="<?= $i['name'] ?>"
                    data-price="<?= $i['price'] ?>"
                    data-quantity="<?= $i['quantity'] ?>" class="detail_content">
                <table class="simplycofe d-flex ">
                    <tr class="simplycofe1 d-flex ">
                        <td class="mewp5 content_text">
                            <?= $i['name'] ?>
                        </td>
                        <td class="mewp6 content_price">
                            <div class="price"></div>
                        </td>
                        <td>
                            <div><?= $i['quantity'] ?> 組</div>
                        </td>
                    </tr>
                </table>
                </div>
                <?php endforeach; ?>
            </div>
            
    </div>
        <!-- --------------------------------------------------- -->
        <div class="mewall3">
            <div class="mewtotal3 d-flex">
                <p class="mewp1">產品金額</p>
                <div class="mewp2"><span id="total-price"></span></div>
            </div>
        
            <div class="mewtotal3 d-flex">
                <p class="mewp1">運費</p>
                <p class="mewp2">免運費</p>
            </div>
            <div class="mewtotal3 d-flex">
                <p class="mewp1">會員折扣金額</p>
                <p class="mewp2">NT.0</p>
            </div>
        </div>
        <div class="alow">
            <button type="button" class="btnList" data-toggle="modal" data-target="#staticBackdrop">契約條款</button>
            <?php include __DIR__ . "/_test_contact.php" ?>
        </div>
        <div class="bttn1 d-flex">
            <a class="bttn d-flex LastPage" type="button" href="<?= WEB_ROOT ?>/RWD_cart_3course.php">
            修改</a>
            <a class="bttn d-flex active NextPage buyBtn" type="button" onclick="changePage()">
            確認</a>
        </div>
        <?php endif; ?>
        
</div>

    <?php include __DIR__ . "/_scripts.php" ?>
    
    
    

    <script>
        $(".bttn").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        })
    </script>
   <script>
        const today=new Date();
        const currentDateTime =
        today.getFullYear()+' /'+
        (today.getMonth()+1)+' /'+
        today.getDate()+' ';

        const dallorCommas = function(n) {
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };
        function prepareCartTable(){
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
                $(this).find('.content_text').val(quantity);

                total += quantity * price;
                $('#total-price').text('NT.' + dallorCommas(total));

                

                const date = $("#date"),
                    totalPrice = $("#totalPrice");
                    
                totalPrice.text('NT.' + dallorCommas(total));
                date.text(currentDateTime);
            });

        }
        prepareCartTable();
        

        function changePage(){
            Swal.fire({
                title: "感謝購買!",
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
                });
            setTimeout(function(){
                location.href = 'RWD_carttablerwd1.php';
            },2000)        
        };


   </script>
    

    