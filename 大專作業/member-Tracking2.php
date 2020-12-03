
<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'memberTracking2';

$id= $_SESSION['member']['id'] ? $_SESSION['member']['id'] : 0;

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();



$cates = [];

$sql4 = " SELECT * FROM  order_detail where member_sid = $id ";
$stmt4 = $pdo->prepare($sql4);
// $stmt4->execute([$_SESSION['order_detail']['member_sid']]);
$cates = $pdo->query($sql4)->fetchAll();


?>



<?php include __DIR__ . '/_html_header.php' ?>
<?php include __DIR__ . '/_navbar.php' ?>
<style>
    .row {
        height: 700px;
    }
    .Account {
        margin: 80px 0;
    }
    p{margin: 0;}
    ul li {
        list-style: none;
    }

    .MainTitle {
        font-size: 39px;
        font-style: italic;
        margin-bottom: 20px;
    }

    .myAccount {
        font-size: 20px;
        margin-bottom: 50px;
    }

    .secondTitle {
        font-size: 40px;
    }

    ul .accountChose {
        font-size: 20px;
        color: #c4c5c5;
    }

    ul .accountChose:hover {
        text-decoration: none;
        color: #f2b46d;
    }

    ul a.active {
        color: #f2b46d;
    }

    .chose li {
        margin: 15px 0;
    }

    .main {
        margin-top: 64px;
    }
    .icon{
        display: flex;
        justify-content:flex-end;
        font-size: 20px;
        margin-bottom: 5px;
    }
    .timeLine a{
            color: #000 ;
    }
    .timeLineImg {
        margin-left: 12px;
        width: 100%;
        height: 90%;
        opacity: .2;
    }

    .timeLineName {
        justify-content: space-around;
        font-size: 10px;
        margin-bottom: 40px;
        line-height: 25px;
        text-align: center;
    }
    .timeLineLine{
        position: relative;
        bottom: 20px;
        height: 8px;
        width: 700px;
        margin-left: 50px;
    }

    .QA {
        width: 100%;
        text-align: center;
        margin: 150px 0 25px;
        font-style: italic;
    }

    .tableAll {
        width: 100%;
    }

    .tableAll th {
        background-color: #c4c5c5;
        font-size: 16px;
        padding: 5px;
        text-align: center;
        font-weight: 100;
    }

    .tableAll td {
        text-align: center;
        font-size: 16px;
        font-style: italic;
        padding:5px 0 ;
    }
    .Itemname{
       text-align: left;
    }
    .progress-bar{
        background-color: orange;
        width: 45% !important;
    }

    .search {
        background-color: #c4c5c5;
        border-radius: 20px;
    }

    .name {
        color: white;
    }

    .notice {
        color: red;
        font-size: 14px;
        padding: 10px;
    }
    .allProduct {
        border-bottom: 1px solid gray;

    }
    .productItem {
        width: 300px;
        height: 125px;
    }

    .pictureItem {
        width: 150px;
        height: 125px;
        overflow: hidden;
    }
    .pictureItem img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .textItem {
        margin:auto 0px auto 30px;
        line-height: 15px;
        text-align: left;
        font-size: 20px;
    }

    .numberItem {
        margin-right: 80px;
    }

    .productItem2 {
        padding-bottom: 20px;
    }
  /* -------------------------------- */
    tbody{
        height: 330px;
        display: block;
        overflow: overlay;
    }
    tbody> tr{
        height: 125px;
        margin: auto 0;
    }

    .width01{
        width: 350px;
    }
    .width02{
        width: 150px;
    }
    .width03{
        width: 100px;
    }
    th, td{
        display: inline-block;
    }

    ::-webkit-scrollbar {
        width: 5px;
        color: #fff;
    }
 
    ::-webkit-scrollbar-track {
        border-radius: 5px;
        background: #fff;
        z-index: 1
    }
 
    ::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: #f2b46d;
        z-index: 2;
    }
</style>
<div class="container">
<div class="row">
        <div class="col-lg-3 list">
            <ul class="Account">
                <li class="MainTitle">My Account</li>
                <li class="myAccount">我的帳戶</li>
            </ul>
            <ul class="chose">
                <li><a href="<?= WEB_ROOT ?>/member.php" class="accountChose ">會員中心</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-Tracking.php" class="accountChose active">訂單查詢</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-QA.php" class="accountChose">常見問答</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-like.php" class="accountChose ">收藏</a></li>
            </ul>
        </div>
        <div class="col-lg-9 main">
            <div class="timeLine col-lg-12">
            <a class="icon" href="<?= WEB_ROOT ?>/member-Tracking.php">
                <i class="fas fa-undo-alt"></i>
            </a>
                <ul class="d-flex">
                    <li><img class="timeLineImg" src="img/02.png" alt=""></li>
                    <li><img class="timeLineImg" src="img/03.png" alt=""></li>
                    <li><img class="timeLineImg" src="img/01.png" alt=""></li>
                    <li><img class="timeLineImg" src="img/05.png" alt=""></li>
                    <li><img class="timeLineImg" src="img/06.png" alt=""></li>
                    <li><img class="timeLineImg" src="img/07.png" alt=""></li>
                </ul>
                <div class="progress timeLineLine">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="d-flex timeLineName">  
                    <li>訂單建立完成<br></li>
                    <li>付款完成<br></li>
                    <li>訂單處理中</li>
                    <li>物流處理中</li>
                    <li>訂單配送中</li>
                    <li>取件成功</li>
                </ul>
            </div>
            
            <table class="tableAll">
                <thead>  
                    <tr>
                        <th class="width01">Item</th>
                        <th class="width02">Size</th>
                        <th class="width03">Quantity</th>
                        <th class="width03">Price</th>
                        <th class="width03">Status</th>
                    </tr>
                </thead> 
                <tbody>  
                <?php foreach($cates as $c ):?>
                    <tr class="allProductMain">
                        <td class="width01">
                            <div class="productItem d-flex">
                                <div class="pictureItem">
                                    <img src="img/small/<?= $c['img_small'] ?>-1.jpg" alt="">
                                </div>
                                <div class="textItem">
                                    <p><?= $c['product_name'] ?></p>
                                </div>
                            </div>
                        </td>
                        <td class="width02"><?= $c['size'] ?></td>
                        <td class="width03"><?= $c['quantity'] ?></td>
                        <td class="width03">NT.<?= $c['price']*$c['quantity'] ?></td>
                        <td class="width03">Preparing</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
          </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/_scripts.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<?php include __DIR__ . '/_html_footer.php' ?>


