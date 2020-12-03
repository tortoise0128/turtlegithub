<?php
include __DIR__ . "/_connect_db.php";

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();


$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1; //設定課程sid
$sql = "SELECT * FROM `course`  WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();

$c_sql =  "SELECT * FROM `course`  WHERE 1 ";
$c_row = $pdo->query($sql)->fetch();


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

    .textBold {
        font-weight: bold;
    }
    .textCenter{
        text-align: center;
        letter-spacing: 2px;
    }

    /* 01 */
    .logoImgBlock {
        width: 200px;
        height: 200px;
        /* overflow: hidden; */
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
        width: 18%;
        margin-left: 21px;
    }

    .title_txet {
        font-size: 17px;
    }

    .order {
        color: #B9B4B4;
    }

    .content_title_text {
        font-size: 16pt;
        margin-bottom: 29px;
    }

    /* 02 */
    #content {
        display: flex;
    }

    .back_to_store {
        color: #B9B4B4;
        font-size: 12pt;
        text-align: right;
        margin: 2vw 0 0 6vw;
    }

    .back_to_store a {
        text-decoration: none;
        color: #B9B4B4;
    }

    .content_title_text {
        font-size: 16pt;
        margin-bottom: 20px;
    }

    .member {
        margin-left: 1%;
        font-size: 12pt;
        width: 32vw;
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

    /* ---button ---- */
    .datail_button {
        position: absolute;
        right: 37vw;
        top: 35vw;
    }

    .darail_policy a {
        font-size: 12pt;
        text-decoration: none;
        margin-left: 55%;
        color: #2E3192;
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
        color: #fff !important;
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
    .LastPage:focus,
    .btnList:focus {
        outline: none;
        border: none;
    }

    .NextPage:hover {
        background-color: #ebab4b;
        color: #fff !important;
        text-decoration: none;
    }

    .LastPage:hover {
        background-color: #666666;
        color: #fff;
        text-decoration: none;
    }

    .btnList {
        background: none;
        color: #707070;
        margin-left: 60px;
        border: 0;
    }

    .btnList:hover {
        color: #F2B46D;
    }

    .form-text {
        color: red;
    }

    /* 滾輪以下 */
    .content_scrollbar {
        height: 550px;
        width: 55vw;
        overflow-y: scroll;
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
        background: #F2B46D;
        border-radius: 10px;
    }

    /* 滾輪以上 */
    /* 03 */
    .detail {
        background-color: #FFFFFF;
        position: absolute;
        right: 0%;
        top: 1px;
        height: calc(100vh - 1px);
        text-align: left;
        padding: 2vw;
    }

    .commodity_img {
        margin-top: 10px;
        margin-bottom: 20px;
        width: 500px;
        height: 400px;
        overflow: hidden;
    }

    .imgFix {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .content_text {
        width: 500px;
        display: flex;
        justify-content: space-between;
        font-size: 10pt;
        margin-bottom: 20px;
    }

    .detail_title {
        font-size: 24px;
        padding-bottom: 15px;
    }

    .datail_border {
        position: relative;
        border-top: 1px solid black;
        margin: 2vw 0;
    }

    .datail_name {
        position: relative;
        text-align: center;
        margin-top: 2vh;
        letter-spacing: 3px;
    }

    .datail_button {
        position: absolute;
        right: 37vw;
        top: 38vw;
    }

    .introBox {
        width: 400px;
        letter-spacing: 2px;
        line-height: 24px;
    }

    .datail_border {
        position: relative;
        border-top: 1px solid black;
        margin-top: 2vw;
    }

    .datail_name {
        position: relative;
        text-align: center;
        margin-top: 5px;
        letter-spacing: 3px;
    }

    .datail_all {
        margin-top: 16%;
    }
</style>

<body>
    <?php if ($_SESSION['Course']) : ?>

        <!-- 01 -->
        <header>
            <div class="logo_img">
                <div class="logoImgBlock">
                    <img src="img/logoblack.png" alt="">
                </div>
                <div class="title">
                    <h4 class="title_txet order">CHECK ORDER</h4>
                    <h4 class="title_txet"><i class="fas fa-caret-right"></i> ORDER COMPLE</h4>
                </div>
            </div>
            <!-- 02 -->
            <div id="content">
                <div class="back_to_store">
                    <a href="<?= WEB_ROOT ?>/course.php"><i class="fas fa-angle-left"></i> BACK TO COURSE</a>
                </div>
                <div class="member">
                    <div class="member_title">
                        <h2 class="content_title_text">會員訂單明細</h2>
                    </div>
                    <?php $r = $_SESSION['Course']; ?>
                    <div class="member_content">
                        <div class="infoBox textBold">
                            <div class="infoTitle">金額總計</div>
                            <div class="infoText">NT.<?= $c_row["course_price"] * $r["quantity"] ?></div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">報名人姓名</div>
                            <div class="infoText"><?= $r["name"] ?></div>
                        </div>
                        <div class="infoBox">
                            <div class="infoTitle">課程名稱</div>
                            <div class="infoText"><?= $c_row["course_name"] ?></div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">統一編號</div>
                            <div class="infoText"><?= $r["numbering"] ?></div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">課程日期</div>
                            <div class="infoText"><?= $c_row["course_date"] ?></div>
                        </div>
                        <div class=" infoBox" id="">
                            <div class="infoTitle">課程時段</div>
                            <div class="infoText"><?= $c_row["course_time"] ?></div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">匯款方式</div>
                            <div class="infoText"><?= $r["payment"] ?> <br><br> 轉入帳號： 斑斕 700-013223-451238</div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">報名人數</div>
                            <div class="infoText"><?= $r["quantity"] ?>人</div>
                        </div>
                        <div class="infoBox" id="">
                            <div class="infoTitle">課程金額</div>
                            <div class="infoText">NT.<?= $c_row["course_price"] ?>元 /人</div>
                        </div>

                    </div>

                    <div class="datail_button">
                        <div>
                            <a type="button" class="LastPage" href="<?= WEB_ROOT ?>/_index.php">回首頁</a>
                        </div>
                        <div>
                            <a type="button" class="NextPage" href="<?= WEB_ROOT ?>/member.php">回會員中心</a>
                        </div>
                    </div>
                </div>
            </div>


        </header>
        <!-- 03 -->
        <div class="detail">
            <div class="datail_all">
                <div class="detail_title">課程資訊</div>
                <?php $r = $_SESSION['Course']; ?>
                <div class="detail_content">
                    <figure class="commodity_img">
                        <img class="imgFix" src="img/course/<?= $row['img_01'] ?>.jpg">
                    </figure>
                    <div>
                        <div class="content_text">
                            <div>課程名稱：</div>
                            <div><?= $c_row['course_name'] ?></div>
                        </div>
                        <div class="content_text">
                            <div>課程日期：</div>
                            <div><?= $c_row['course_date'] ?></div>
                        </div>
                        <div class="content_text">
                            <div>課程價格：</div>
                            <div>NT.<?= $c_row['course_price'] ?>/人</div>
                        </div>
                        <div class="content_text">
                            <div>課程介紹：</div>
                            <div class="introBox"><?= $c_row['intro'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="datail_border"></div>
                <div>
                    <div class="textCenter">共 <span><?= $r["quantity"] ?></span> 人/課程金額總計：NT.<?= $c_row["course_price"] * $r["quantity"] ?></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <?php unset($_SESSION['Course']) ; ?>

    <?php include __DIR__ . "/_scripts.php" ?>
</body>

</html>