<!-- 
<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'memberQA';

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?> -->
<?php include __DIR__ . '/_html_header.php' ?>
<?php include __DIR__ . '/_navbar.php' ?>
<style>
    .row {
        height: 700px;
    }
    .Account{
        margin:80px 0;
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
    .icon{
        margin-right: 20px;
    }

    .likeNavbar {
        width:100%;
        height:40px;
        display:flex;
        background:#c4c5c5;
        align-items: center;
        margin-bottom:25px;
    }
    .likeNavbar img{
        width:50px;
        height:40px;
        margin: 0 auto;
    }

    .Question {
        /*標題的CSS定義*/
        width: 100%;
        border-bottom: 1px #aaa dotted;      
        margin-top: 20px;
        font-size: 24px;
        cursor: pointer;
    }
    .QandA .Answer {
        /*內文的CSS定義*/
        overflow: hidden;
        line-height: 30px;
        letter-spacing: 2px;
        opacity: 0;
        height: 0;
        transform: translateY(-50px);
        width: 90%;
        padding: 10px 0px;
        transition: 1s;
        padding: 0;
        margin: auto;
    }

    .QandA .Answer.active{
        opacity: 1;
        height: auto;
        transform: translateY(0px);
        /* display: block; */
        /* border-bottom: 1px #aaa dotted; */
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
                <li><a href="<?= WEB_ROOT ?>/member-Tracking.php" class="accountChose">訂單查詢</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-QA.php" class="accountChose active">常見問答</a></li>
                <li><a href="<?= WEB_ROOT ?>/member-like.php" class="accountChose ">收藏</a></li>
        </ul>
        </div>
        <div class="col-lg-9 main">
            <div class="QA">
                <h2>FAQ 常見問與答</h2>
            </div>
            <div class="likeNavbar"><img src="img/logoblack.png" alt=""></div>
            <div class="QandA">
                <p class="Question"><i class="fas fa-plus-circle icon"></i>該怎麼加入會員呢?</p>
                <div class="Answer active">
                    <p >請點選本站上方「會員」按鈕，在開啟的會員登入頁面中，點選「註冊會員」，填妥會員基本資料並完成Email認證後，即完成加入會員。</p>
                </div>
            </div>
            <div class="QandA">
                <p class="Question"><i class="fas fa-plus-circle icon"></i>忘記密碼怎麼辦?</p>
                <div class="Answer">
                    <p >請點選「忘記密碼」進行查詢。系統會寄送更改密碼連結到您註冊會員時所填寫的 Email 信箱。</p>
                </div>
            </div>
            <div class="QandA">
                <p class="Question"><i class="fas fa-plus-circle icon"></i>我的帳號好像被盜用了怎麼辦？</p>
                <div class="Answer">
                    <p>若您懷疑您的帳號遭盜用，或發生不正常交易情形，請提供可疑資料，若查明屬實，本站將協助凍結該帳號。或立即連絡客服請專人為您服務</p>
                    <p>本站客服信箱為「banLan@gmail.com」，若您使用本站服務有任何問題或建議，歡迎您隨時來信告訴我們。</p>
                </div>
            </div>
            <div class="QandA">
                <p class="Question"><i class="fas fa-plus-circle icon"></i>該如何取消訂單?</p>
                <div class="Answer">
                    <br >預定送達時間72小時前取消訂單，可全額留存作為購物金使用；若選擇退款，則扣除總金額5%之金流處理費後退款。</br>
                    預定送達時間72小時~48小時前取消訂單，酌收總金額30%之耗材損失費用。</br>
                    預定送達時間前48小時不得取消訂單</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include __DIR__ . '/_scripts.php' ?>


<script>
    $(".QandA").click(function(){
        $(this).children(".Answer") .toggleClass("active")
        $(this).siblings().children(".Answer") .removeClass("active")
    })
</script>
<?php include __DIR__ . '/_html_footer.php' ?> 