<?php
include __DIR__ . "/_connect_db.php";

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?>

<?php include __DIR__ . "/_html_header.php" ?>

<?php include __DIR__ . "/shopping_Check_Css.php" ?>


<body>
    <!-- 01 -->
    <header>
        <div class="logo_img">
            <div class="logoImgBlock">
                <a href="<?= WEB_ROOT ?>/_index.php"><img src="img/logoblack.png" alt=""></a>
            </div>
            <div class="title">
                <h4 class="title_txet shopping">SHOPPING CART</h4>
                <h4 class="title_txet"><i class="fas fa-caret-right"></i> CHECK ORDER</h4>
                <h4 class="title_txet order">ORDER COMPLE</h4>
            </div>
        </div>
        <!-- 02 -->
        <div id="content">
            <div class="back_to_store">
                <a href="<?= WEB_ROOT ?>/product.php"><i class="fas fa-angle-left"></i> BACK TO STORE</a>
            </div>
            <div class="content_scrollbar" id="scrollbar_style">
                <div class="content_receive">
                    <form name="form1" class="receiver" method="post" onsubmit="return formCheck()">
                        <h2 class="content_title_text">收件資料</h2>
                        <label class="email" for="mail">
                            電子信箱<br />
                            <input id="mail" class="form-control inputL" type="text" name="mail" size="50" placeholder="<?= $r['email'] ?>" value="<?= empty($_SESSION['receiver']['mail']) ? $r['email'] : htmlentities($_SESSION['receiver']['mail']) ?>">
                            <small id="mailHelp" class="form-text"></small>
                        </label>
                        <div class="phone_name">
                            <label class="nec_name" for="name">
                                收件人姓名<br />
                                <input id="name" class="form-control inputM" type="name" name="name" size="23.5" placeholder="古小美" value="<?= empty($_SESSION['receiver']['name']) ? $r['nickname'] : htmlentities($_SESSION['receiver']['name']) ?>">
                                <small id="nameHelp" class="form-text"></small>
                            </label>
                            <label class="phone" for="mobile">
                                手機號碼<br />
                                <input id="mobile" class="form-control inputM" type="tel" name="mobile" size="23.5" pattern="09\d{2}-?\d{3}-?\d{3}" placeholder="0912-321-123" value="<?= empty($_SESSION['receiver']['mobile']) ?  $r['mobile'] : htmlentities($_SESSION['receiver']['mobile']) ?>">
                                <small id="mobileHelp" class="form-text"></small>
                            </label>
                        </div>
                        <div class="rec_address">
                            <h2 class="content_title_text">收件人地址</h2>
                            <div class="transport_bu">
                                <div class="transport_shipping">選擇配送方式</div>
                                <div class="transport_bu_input">
                                    <div>
                                        <label for="addressC">
                                            <input class="input_all click_two shipWay" type="radio" name="addressC" value="宅配" checked>
                                            宅配
                                            <input class="input_all click shipWay" type="radio" name="addressC" value="到店取貨">
                                            到店取貨
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="twzipcode"></div>
                            <label for="address">
                                <input name="address" id="address" class="try try_two form-control inputL" type="text" size="50" placeholder="信義路四段2號" value="<?= empty($_SESSION['receiver']['address']) ? $r['address'] : htmlentities($_SESSION['receiver']['address']) ?>">
                                <small id="addressHelp" class="form-text"></small>
                            </label>
                            <small id="addressHelp" class="form-text"></small>
                            </input>
                            <div class="rec_numbering">
                                <label for="numbering" class="numbering">統一編號
                                    <input class="form-control inputL" name="numbering" type="text" placeholder="52543699"
                                    value="<?= empty($_SESSION['receiver']['numbering']) ? '' : htmlentities($_SESSION['receiver']['numbering']) ?>">
                                    
                                </label>
                            </div>
                            <div class="time_bu">
                                <h2 class="content_title_text">選擇配送時段</h2>
                                <div class="time_bu_input">
                                    <div class="time_bu_input_two">
                                        <label for="SendTime">
                                            <input class="input_all SendTime" type="radio" name="SendTime" value="不指定時間">不指定時間
                                            <input class="input_all SendTime" type="radio" name="SendTime" value="13點前">13點前
                                            <input class="input_all SendTime" type="radio" name="SendTime" value="13-18點">13-18點
                                            <input class="input_all SendTime" type="radio" name="SendTime" value="不須選擇送貨時段">不須選擇送貨時段
                                            <small id="SendTimeHelp" class="form-text timeText"></small>
                                        </label>
                                    </div>
                                </div>

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
                                                    <div>請輸入轉出帳號 (末5碼)</div>
                                                </div>
                                                <div class="account_input">
                                                    <input class="form-control inputL" id="bankAcount" type="text" placeholder="76542">
                                                </div>
                                                <div class="account_shop">轉入帳號： 斑斕 700-013223-451238</div>
                                            </div>
                                        
                                            <input class="input_all credit_click payment1" type="radio" id="dewey" name="payment" value="信用卡付款">信用卡付款
                                            <div class="credit_hide credit_show">
                                                <div class="credit_code">
                                                    <div>請輸入信用卡卡號...(12碼)</div>
                                                </div>
                                                <div class="account_input">
                                                    <label class="creditAcount">
                                                        <input class="form-control inputL" id="creditAcount" type="text" placeholder=" 9384-3495-6984" aria-describedby="emailHelp">
                                                    </label>
                                                </div>
                                                <div class="credit_code">
                                                    <div>卡片有效日期(月/年)</div>
                                                </div>
                                                <label class="credit_month">
                                                    <input class="form-control inputS" id="creditDate" type="text" placeholder=" 25/11">
                                                </label>
                                                <div class="credit_code">
                                                    <label class="credit_security">
                                                        請輸入信用卡安全碼...(3碼)
                                                        <input class="form-control inputS" id="creditCode" type="text" placeholder=" 668">
                                                    </label>
                                                </div>
                                            </div>


                                        </label>
                                        <small id="paymentHelp" class="form-text paymentText"></small>
                                    </div>
                                    
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
                                    <a type="button" class="LastPage" href="<?= WEB_ROOT ?>/shopping_Cart.php">上一步</a>
                                </div>
                                <div>
                                    <a type="submit" class="NextPage" >下一步</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

            <!-- ----------右邊------------ -->


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



    <?php include __DIR__ . "/_scripts.php" ?>
    <script>
        $(".NextPage").click(function(){
            $(".receiver").submit();
        })

        $(".twzipcode").twzipcode({
            countySel: "<?= $r['county'] ?>", // 城市預設值, 字串一定要用繁體的 "臺", 否則抓不到資料
            districtSel: "<?= $r['city'] ?>", // 地區預設值
            zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
            css: ["city form-control", "town form-control"], // 自訂 "城市"、"地區" class 名稱
            countyName: "county", // 自訂城市 select 標籤的 name 值
            districtName: "city" // 自訂地區 select 標籤的 name 值
        });

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

        $(document).ready(function() {
            $(".click").click(function() {
                $(".try").val('106台北市大安區信義路三段153號');
                $(".twzipcode").hide()
            })
        });

        $(document).ready(function() {
            $(".click_two").click(function() {
                $(".try_two").val('');
                $(".twzipcode").show()
            })
        });

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

            });
        }
        prepareCartTable();


        // --------檢查欄位-------------

        function formCheck() {

            const SendTime_re = $('input:radio[name="SendTime"]:checked').val();
            const payment_re = $('input:radio[name="payment"]:checked').val();

            const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

            const email = $("#mail"),
            name = $("#name"),
            mobile = $("#mobile"),
            address = $("#address"),
            payment1 = $(".payment1"),
            SendTime = $(".timeText"),
            shipWay = $(".shipWay"),
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

            if (address.val().length < 7) {
                isPass = false;
                address.css('border-color', 'red');
                address.next().text('請填寫送貨地址');
            }
            if (SendTime_re == null) {
                isPass = false;
                SendTime.text('請勾選配送時段');
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
                if (bankAcount.val().length < 5 || bankAcount.val().length > 5) {
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
                $.post('shopping_Check_api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);
                    if(data.success){
                        setTimeout(function(){
                            location.href = 'shopping_three.php';
                        },0);
                    }
                }, 'json')
            }

            return false;
        }


        
    </script>
</body>

</html>