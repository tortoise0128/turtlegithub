<?php include __DIR__. "/_connect_db.php";
$pageTitle = '訂單查詢';
$pageName = 'member-Tracking';

$id= $_SESSION['member']['id'] ? $_SESSION['member']['id'] : 0;

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

$cates = [];


$sql2 = " SELECT * FROM  orders where member_sid = $id ";
$stmt2 = $pdo->prepare($sql2);
// $stmt2->execute([$_SESSION['orders']['member_sid']]);
$cates = $pdo->query($sql2)->fetchAll();

?>



<?php include __DIR__ . '/_html_header.php' ?>
<?php include __DIR__ . '/_navbar.php' ?>
<style>
    .row {
        height: 700px;
    }
    .Account{
        margin:80px 0;
        /* margin-right: 15px; */
    }
    ul li{
        list-style:none;
    }
    .MainTitle{
        font-size:39px;
        font-style:italic;
        margin-bottom:20px;
    }
    .myAccount{
        font-size:20px;
        margin-bottom:50px;
    }
    .secondTitle{
        font-size:40px;
    }
    ul .accountChose{
        font-size:20px;
        color:#c4c5c5;
    }
    ul .accountChose:hover{
        text-decoration:none;
        color:#f2b46d;
    }
    ul a.active{
        color:#f2b46d;
    }
    .chose li{
        margin:15px 0;
    }
    .QA {
        width:100%;
        text-align:center;
        margin:150px 0 25px;
        font-style:italic;
    }
    .tableAll{
        width: 100%;
        border: 1px solid #c4c5c5;
    }
    .tableAll th{
    background-color: #c4c5c5;
    font-size: 20px;
    padding: 5px;
    text-align: center;
    font-weight: 100;
    }
    .tableAll td{
        text-align: center;
        font-size: 16px;
        /* font-style:italic; */
        padding: 20px;
    }
    .search{
        background-color: #c4c5c5;
        border-radius: 20px;
    }
    .name{
        color: white;
    }
    .notice{
        color: red;
        font-size: 14px;
        padding: 10px;
    }
    .search2{
        padding:2px 28px;
        border:none;
    }
    .search1{
        padding:2px 16px;
        border:none;
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
            <li><a href="<?= WEB_ROOT ?>/member-Tracking.php" class="accountChose active">訂單查詢</a></li>
            <li><a href="<?= WEB_ROOT ?>/member-QA.php" class="accountChose">常見問答</a></li>
            <li><a href="<?= WEB_ROOT ?>/member-like.php" class="accountChose ">收藏</a></li>
        </ul>
        </div>
        <div class="col-lg-9 main">
            <div class="QA">
                <h2>Order Tracking 訂單查詢</h2>
            </div>

        <table class="tableAll">

             <tr>
                 <th>訂單編號</th>
                 <th>訂單成立時間</th>
                 <th>預計出貨日</th>
                 <th>金額</th>
                 <th>狀態</th>
                 <th>查詢明細</th>
             </tr>
             <?php foreach($cates as $c): ?>

             <tr>
                 <td>NO.1235846</td>
                 <td><?= $c['order_date'] ?></td>
                 <td><?= date('Y-m-d', strtotime($c['order_date'])+3*24*60*60) ?></td>
                 <td>NT.<?= $c['amount'] ?></td>
                 <td><div class="search search1">未出貨</div></td>
                 <td>
                    <button class="search search2" onclick="location.href='<?= WEB_ROOT ?>/member-Tracking2.php'">
                        <a class="name" >查詢</a>
                    </button>
                </td>
             </tr>
             <?php endforeach; ?>
        </table>
         <div class="notice"><p>※提醒:僅保留半年內之訂單消費明細。</p></div>
        </div>
    </div>
</div>


<?php include __DIR__ . '/_html_footer.php' ?>
<?php include __DIR__ . '/_scripts.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</script>