<?php
include __DIR__ . "/_connect_db.php";

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();


$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1;
$sql = "SELECT * FROM `course`  WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();

// $row["sid"] = $_SESSION['course'];
// print_r ($_SESSION['course']);
// exit;
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
        width: 20%;
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
        margin-bottom: 20px;
        margin-top: 35px;
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
        text-decoration: none;
        color: #B9B4B4;
    }

    .receive {
        margin-left: 4%;
        font-size: 12pt;
    }

    .receive input {
        padding: 5px;
        background: white;
        border: 1px solid #DEDCDC;
        border-radius: 5px;
    }

    .phone_name {
        display: flex;
        margin-top: 10px;
    }

    .phone {
        margin: 0 0 0 10px;
    }

    .numbering {
        margin-top: 10px;
    }

    .title-infor {
        margin-top: 10px;
    }

    .transport_bu_input {
        display: flex;
        justify-content: space-between;
    }

    .payment {
        flex-wrap: wrap;
        width: 500px;
    }

    .payment_bu {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
        width: 100%;
    }

    .payment_bu label {
        width: 100%;

    }

    .bank_code {
        display: flex;
        align-items: center;
        margin-left: 32px;
        /* margin-top: 10px; */
        font-size: 12pt;
    }

    .bank_input {
        margin-left: 10px;
    }

    .account_code,
    .credit_code,
    .credit_month,
    .credit_number {
        width: 260px;
        margin-top: 10px;
        margin-left: 32px;
        font-size: 12pt;
    }

    .account_input,
    .account_shop {
        margin-top: 10px;
        margin-left: 32px;
    }

    .credit_security {
        margin-top: 10px;
    }

    .credit_input {
        margin-top: 13px;
    }

    .transport_shipping,
    .transport_bu_input {
        margin-bottom: 13px;
    }

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

    input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: inline-block;
        width: 18px;
        height: 18px;
        background-clip: content-box;
        border: 1px solid #CFCFCF;
        background-color: #F4F4F4;
        border-radius: 50%;
    }

    input[type="radio"]:checked {
        padding: 2px;
        background-color: #F2B46D;
        outline: none !important;
        border: 1px solid #F2B46D;
    }

    input[type="radio"]:focus {
        outline: none;
    }

    ::placeholder {
        color: lightgray;
    }

    .input_all {
        margin-right: 5px;
        cursor: pointer;
    }

    .phone_input {
        width: 91%;
    }

    /* 報名人數 */
    .form-control {
        width: 96%;
        cursor: pointer;
    }

    .form-control:focus {
        border-color: none;
        box-shadow: none;
        border: 1.5px solid #F2B46D;
        outline: 0 none;
    }

    /* 報名人數 */

    /* input width */
    .inputS {
        width: 100px;
    }

    .inputM {
        width: 195px;
    }

    .inputL {
        width: 400px;
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

    /* ----03----- */

    .detail_title {
        font-size: 24px;
        padding-bottom: 15px;
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

    .introBox {
        width: 400px;
        letter-spacing: 2px;
        line-height: 24px;
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
    .tranparant{
        display: none;
    }
</style>

<body>
    <!-- 01 -->
    <header class="p_item">
        <div class="logo_img">
            <div class="logoImgBlock">
                <img src="img/logoblack.png" alt="">
            </div>
            <div class="title">
                <h4 class="title_txet"><i class="fas fa-caret-right"></i> CHECK ORDER</h4>
                <h4 class="title_txet order">ORDER COMPLE</h4>
            </div>
        </div>
        <!-- 02 -->
        <div id="content">
            <div class="back_to_store">
                <a href="<?= WEB_ROOT ?>/course.php"><i class="fas fa-angle-left"></i> BACK TO COURSE</a>
            </div>
            <div class="content_scrollbar" id="scrollbar_style">
                <div class="content_receive">
                    <form name="form1" class="Course" method="post" onsubmit="return formCheck()">
                        <h2 class="content_title_text">報名資料</h2>
                        <label class="email" for="mail">
                            電子信箱<br />
                            <input id="mail" class="form-control inputL" type="text" name="mail" size="50" placeholder="<?= $r['email'] ?>" value="<?= empty($_SESSION['Course']['mail']) ? $r['email'] : htmlentities($_SESSION['Course']['mail']) ?>">
                            <small id="mailHelp" class="form-text"></small>
                        </label>
                        <div class="phone_name">
                            <label class="nec_name" for="name">
                                收件人姓名<br />
                                <input id="name" class="form-control inputM" type="name" name="name" placeholder="古小美" value="<?= empty($_SESSION['Course']['name']) ? $r['nickname'] : htmlentities($_SESSION['Course']['name']) ?>">
                                <small id="nameHelp" class="form-text"></small>
                            </label>
                            <label class="phone" for="mobile">
                                手機號碼<br />
                                <input id="mobile" class="form-control inputM" type="tel" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}" placeholder="0912-321-123" value="<?= empty($_SESSION['Course']['mobile']) ?  $r['mobile'] : htmlentities($_SESSION['Course']['mobile']) ?>">
                                <small id="mobileHelp" class="form-text"></small>
                            </label>
                        </div>
                        <div class="rec_numbering">
                            <label for="numbering" class="numbering">統一編號
                                <input class="form-control inputL" name="numbering" type="text" placeholder="52543699" value="<?= empty($_SESSION['Course']['numbering']) ? '' : htmlentities($_SESSION['Course']['numbering']) ?>">

                            </label>
                        </div>
                        <!-- 報名人數 -->
                        <div class="deliver">
                            <div class="title-infor">
                                <div>報名人數</div>
                            </div>
                            <label class="form-group">
                                <select name="quantity"  class="form-control inputL" id="exampleFormControlSelect1">
                                    <option selected>1</option>
                                    <option>2</option>
                                </select>
                            </label>
                        </div>
                        <!-- 報名人數 -->

                        <div class="payment d-flex">
                            <h2 class="content_title_text">付款方式</h2>
                            <div class="payment_bu">
                                <label for="payment">
                                    <input class="input_all payment_click payment1" type="radio" name="payment" value="ATM轉帳">ATM轉帳

                                    <div class="payment_hide payment_show">
                                        <div class="bank_code">
                                            <div>請輸入銀行代碼</div>
                                            <div class="bank_input">
                                                <input class="form-control inputS" id="bankCode" type="text" placeholder=" 007">
                                            </div>
                                        </div>
                                        <div class="account_code">
                                            <div>請輸入轉出帳號...(13~16位)</div>
                                        </div>
                                        <div class="account_input">
                                            <input class="form-control inputL" id="bankAcount" type="text" placeholder=" 1547-895-4876542">
                                        </div>
                                        <div class="account_shop">轉入帳號： 斑斕 700-013223-451238</div>
                                    </div>
                                </label>

                                <label for="payment">
                                    <input class="input_all credit_click payment1" type="radio" id="dewey" name="payment" value="信用卡付款">信用卡付款
                                    <div class="credit_hide credit_show">
                                        <div class="credit_code">
                                            <div>請輸入信用卡卡號...(12碼)</div>
                                        </div>
                                        <div class="account_input">
                                            <label for="creditNumber">
                                                <input class="form-control inputL" id="creditAcount" type="text" placeholder=" 9384-3495-6984">
                                            </label>
                                        </div>
                                        <div class="credit_code">
                                            <div>信用卡有效截止日期</div>
                                        </div>
                                        <label class="credit_month">
                                            <input class="form-control inputS" id="creditDate" type="text" placeholder=" 25/11">
                                        </label>
                                        <div class="credit_code">
                                            <label class="credit_security">
                                                請輸入信用卡安全碼...(3碼)
                                                <input class="form-control inputS" id="creditCode" type="text" placeholder=" 007">
                                            </label>
                                        </div>
                                    </div>


                                </label>
                                <label class="commodity_img tranparant">
                                    <input id="courseImg" data-id="<?= $row["sid"]?>" >
                                </label>
                                <small id="paymentHelp" class="form-text paymentText"></small>
                            </div>

                        </div>

                        <div class="datail_button">
                            <div class="darail_policy">
                                <button type="button" class="btnList" data-toggle="modal" data-target="#staticBackdrop">
                                    契約條款
                                </button>
                                <?php include __DIR__ . "/_test_contact.php" ?>
                            </div>
                            <div>
                                <a type="button" class="LastPage" href="<?= WEB_ROOT ?>/courseRWD.php?sid=1">上一步</a>
                            </div>
                            <div>
                                <a type="submit" class="NextPage">報名課程</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- 03 -->
    <div class="detail">
        <div class="datail_all">
            <div class="detail_title">課程資訊</div>
            <div class="detail_content">
                <figure class="commodity_img">
                    <img id="courseImg" data-id="<?= $row["sid"]?>" class="imgFix" src="img/course/<?= $row['img_01'] ?>.jpg">
                </figure>
                <div>
                    <div class="content_text">
                        <div>課程名稱：</div>
                        <div><?= $row['course_name'] ?></div>
                    </div>
                    <div class="content_text">
                        <div>課程日期：</div>
                        <div><?= $row['course_date'] ?></div>
                    </div>
                    <div class="content_text">
                        <div>課程時段：</div>
                        <div><?= $row['course_time'] ?></div>
                    </div>
                    <div class="content_text">
                        <div>課程價格：</div>
                        <div>NT.<?= $row['course_price'] ?>/人</div>
                    </div>
                    <div class="content_text">
                        <div>課程介紹：</div>
                        <div class="introBox"><?= $row['intro'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . "/_scripts.php" ?>
    <script>
        $(".NextPage").click(function() {
            $(".Course").submit();
        })

        $(".credit_hide").hide();
        $(".payment_hide").hide();

        $(document).ready(function() { //ATM
            $(".payment_click").click(function() {
                $(".credit_hide").hide();
            })
        })

        $(document).ready(function() {
            $(".payment_click").click(function() {
                $(".payment_show").show();
            })
        })

        $(document).ready(function() { //信用卡
            $(".credit_click").click(function() {
                $(".payment_hide").hide();
            })
        })

        $(document).ready(function() { //
            $(".credit_click").click(function() {
                $(".credit_show").show();
            })
        })

        // --------檢查欄位-------------

        function formCheck() {

            const payment_re = $('input:radio[name="payment"]:checked').val();

            const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

            const email = $("#mail"),
                name = $("#name"),
                mobile = $("#mobile"),
                payment1 = $(".payment1"),
                payment = $(".paymentText"),
                bankCode = $("#bankCode"),
                bankAcount = $("#bankAcount"),
                creditCode = $("#creditCode"),
                creditDate = $("#creditDate"),
                creditAcount = $("#creditAcount"),
                numbering = $("#numbering")

            let isPass = true;

            if (!email_re.test(email.val())) {
                isPass = false;
                email.css('border-color', 'red');
                email.next().text('請填寫正確的 email 格式');
            }
            if (!mobile_re.test(mobile.val())) {
                isPass = false;
                mobile.css('border-color', 'red');
                mobile.next().text('請填寫正確的手機格式');
            }

            if (payment_re == null) {
                isPass = false;
                payment.text('請選擇付款方式');
            }
            if (payment_re == "ATM轉帳") {
                if (bankCode.val().length < 3) {
                    isPass = false;
                    bankCode.css('border-color', 'red');
                }
                if (bankAcount.val().length < 13 || bankAcount.val().length > 16) {
                    isPass = false;
                    bankAcount.css('border-color', 'red');
                }
            }
            if (payment_re == "信用卡付款") {
                if (creditAcount.val().length < 12) {
                    isPass = false;
                    creditAcount.css('border-color', 'red');
                }
                if (creditDate.val().length < 4) {
                    isPass = false;
                    creditDate.css('border-color', 'red');
                }
                if (creditCode.val().length < 3) {
                    isPass = false;
                    creditCode.css('border-color', 'red');
                }
            }



            if (isPass) {
                $.post('Course_api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);
                    if (data.success) {
                            Swal.fire({
                                title: "已經成功報名!",
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 2000
                            });
                            setTimeout(function() {
                                location.href = 'Course_two.php';
                            }, 2000)
                    }
                }, 'json')
            }

            return false;
        }

        const courseImg = $("#courseImg").attr('data-id');
        console.log(courseImg);
    </script>
</body>

</html>