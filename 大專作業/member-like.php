<?php 
include __DIR__ . '/_connect_db.php' ;
$pageTitle = '會員中心';
$pageName = '收藏';

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

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
        margin-top: 100px;
    }
    .QA {
        width:100%;
        text-align:center;
        margin:80px 0 25px;
        font-style:italic;
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
        padding: 20px;
    }
    .Itemname{
       text-align: left;
    }
    .progress-bar{
        background-color: orange;
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
    .allProductMain{
        height: 200px;
        overflow: scroll;
    }
    .allProduct {
        border-bottom: 1px solid gray;
    }
    .productItem {
        width: 300px;
        height: 100px;
    }

    .pictureItem {
        width: 127px;
        height: 98px;
        background-color: green;
    }

    .textItem {
        margin-top: 30px;
        margin-left: 15px;
        line-height: 5px;
    }

    .numberItem {
        margin-right: 80px;
    }

    .productItem2 {
        padding-bottom: 20px;
    }
    .addTo{
        background-color: #f2b46d;
        padding: 10px 0 10px 0;
        color: white;
        border-radius: 10px;
    }
    .productItem2 i{
        vertical-align:middle;
        margin: 0 30px;
        cursor: pointer;
        transition: 1s;
    }

    .productItem2 i:hover{
        color: #f2b46d;
        transition: 1s;
    }
    .btnAdd{
        background:#c4c5c5;
        width: 130px;
        height: 40px;
        color: #fff;
        transition: 1s;
    }

    .btnAdd:hover{
        background:#f2b46d;
        color: #fff;
        transition: 1s;
    }

    .likeAdd.active{
        color: #f2b46d;

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
                <li><a href="<?= WEB_ROOT ?>/member.php" class="accountChose">會員中心</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-Tracking.php" class="accountChose">訂單查詢</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-QA.php" class="accountChose">常見問答</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-like.php" class="accountChose active">收藏</a></li>
            </ul>
        </div>
        <div class="col-lg-9 main">
        <div class="QA">
                <h2>Wish List 收藏清單</h2>
            </div>   
        <table class="tableAll">
                <tr class="">
                    <th class="Itemname">Item</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Like</th>
                    <th>Add to</th>

                </tr>
                <tr class="allProduct">
                    <td>
                        <div class="productItem d-flex">
                            <div class="pictureItem">
                                <img src="" alt="">
                            </div>
                            <div class="textItem">
                                <p>Simply Cafe Latte</p><br>
                                <p class="numberItem">036115</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="productItem2 ">35*20</div>
                    </td>
                    <td>
                        <div class="productItem2 ">NT.7100</div>
                    </td>
                    <td>
                    <div class="productItem2 "><i class="fas fa-heart likeAdd active"></i></div>
                    </td>
                    <td>
                    <button type="button" class="btn btn-sm addTo">加入購物車</button>
                    </td>
                </tr>
                <tr class="allProduct">
                    <td>
                        <div class="productItem d-flex">
                            <div class="pictureItem">
                                <img src="" alt="">
                            </div>
                            <div class="textItem">
                                <p>Simply Cafe Latte</p><br>
                                <p class="numberItem">036115</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="productItem2 ">35*20</div>
                    </td>
                    <td>
                        <div class="productItem2 ">NT.7100</div>
                    </td>
                    <td>
                        <div class="productItem2 "><i class="fas fa-heart likeAdd active"></i></div>
                    </td>
                    <td>
                    <button type="button" class="btn btn-sm addTo">加入購物車</button>
                    </td>
                </tr>
            
            </table>
        </div>
    </div>
</div>
</div>
<?php include __DIR__ . '/_scripts.php' ?>

<script>
$(".likeAdd") .click(function(){
        $(this) .toggleClass("active")
    })
</script>
<?php include __DIR__ . '/_html_footer.php' ?>
