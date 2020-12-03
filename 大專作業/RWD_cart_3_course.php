<?php
include __DIR__ . "/_connect_db.php";

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?>
<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/RWD_navbar.php" ?>

<style>
       @media screen and (max-width:375px){
         .container{
           padding:0 28px;
         }
         .title p{
          font-weight: bold;
          font-size: 20px;
          color: #6B6B6B;
          margin-bottom: 23px;
         }
         /* 換收件資訊 */
         .title-infor{
          font-size: 20px;
          font-weight: bold;
          color:black;  
          width:100%
          /* letter-spacing: 3px; */
         }
         .false-infor{
           color: #E94D4D;
           font-size: 12px;
         }
         .person{
           display: flex;
           flex-direction: row;
           align-items: center;
           margin-bottom: 10px;
         }
         .false-infor{
           margin-left: 15px;
         }
         .form-group label{
           color: #707070 ;
           font-size: 14px ;
           font-weight: bold ;
         }
         .address{
           color: #707070 ;
           font-size: 14px ;
           font-weight: bold ;
         }
         .deliver{
           display: flex;
           flex-direction: column;
         }
        .form-check-label{
          /* margin-right: 270px; */
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          /* padding-left: 10px; */
          white-space: nowrap;

        }
      
        .form-check-label-two{
          margin-right: 242px;
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          /* padding-left: 10px; */
          white-space: nowrap;
        }
        .form-group{
          padding: 10px;
          margin-bottom:0;
        }
        .address{
          padding: 10px;
        }
        .form-check-label-three{
          margin-right: 237px;
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          /* padding-left: 10px; */
          white-space: nowrap;
        }
        .choseaddress{
            padding-left: 0;
            padding-right:0;
            /* width:100%; */
        }
        
        #emailHelp{
          color: #797979;
          font-size: 12px;
        }
        .title-infor .bank{
          color: #707070;
          font-size: 12px;
          font-weight: normal;
        }
        .form-check-label-four{
          /* margin-right: 228px; */
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          /* padding-left: 10px; */
          text-align: center;
          justify-content: space-between;
          width:100%;

        }
        .collapsible {
          background-color: #fff;
          color: black;
          cursor: pointer;
          /* padding: 18px; */
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 20px;
          font-weight: bold;
          outline: none !important;

    
          }

        .active, .collapsible:hover {
            /* background-color: #555; */
            margin-bottom:16px;
            }

        .collapsible:after {
          content: '\002B';
          color: #C4C5C5;
          font-weight: bold;
          float: right;
          margin-left: 5px;
          }

        .active:after {
          content: "\2212";
          }

        .content {
          padding: 0 8px;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
          /* background-color: #f1f1f1; */
          }
        .pro-img{
          width: 60px;
          height:60px;
        }
        .pro-img img{
          width: 100%;
          height: 66px;
          object-fit:cover;

        }
        .pro-word{
          color: #6B6B6B;
          font-size: 13px;
          font-weight: normal;
          
          
        }
        .pro-ano{
          color: #6B6B6B;
          font-size: 13px;
          font-weight: normal;
          
        }
        .product{
          display: flex;
          justify-content: space-between;
          width: 300px;
          /* padding-left: 20px; */
          margin-bottom: 10px;
          align-items: center;
        }
        .pro-list{
          display: flex;
          flex-direction: column;
          
        }

        .container1{
          height: 56px;
          border-bottom: 1px solid #B9B4B4;   
          
          white-space: nowrap;
        }
        .total{
          color: #6B6B6B;
          font-size: 20px;
          margin: 12px;
          text-align: center;
          display: flex;
          justify-content: center;
        }
        .container2{
          display: flex;
          flex-direction: row;
          font-weight: bold;
          font-size: 20px;
          white-space: nowrap;
        }
        .left-button{
          background: #B9B4B4;
          width: 50vw;
          height: 51px;
          display: flex;
          justify-content: center;
          color: #fff;
          border: none;
         
        }
        
        .left-button:hover{
          /* background: #F2B46D; */
          outline: none;
          border: none;

        }
        .right-button{
          background: #B9B4B4;
          width: 50vw;
          height: 51px;
          display: flex;
          justify-content: center;
          color: #fff;
          border: none;
          
        }
        .right-button:hover{
          /* background: #F2B46D; */
          outline: none;
          border: none;

        }
        .left-button p{
          margin: 10px 0 0 0 !important;
         
        }
        .right-button p{
          margin: 10px 0 0 0 !important;
          color:#fff;
          
        }
        input[type="text"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: inline-block;
        width: 20px;
        height: 20px;
        background-clip: content-box;
        border: 1px solid #CFCFCF;
        background-color: #D6D5D5;
        border-radius: 50%;
        }
        input[type="radio"]:checked {
            padding: 2px;
            background-color: #F2B46D !important;
            outline: none !important;
            border: 1px solid #F2B46D;

            
        }
        input[type="email"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="password"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        #inputState{
            border-color: none;
            box-shadow: none;
            
            outline: 0 none;
        }
        #inputState:focus{
            border: 1px solid black;
            

        }
        #exampleFormControlSelect1{
            border-color: none;
            box-shadow: none;
        }
        #exampleFormControlSelect1:focus{
            border: 1px solid black;
            background: #fff;
            

        }

        .contact{
          color: #2E3192;
          display: flex;
          justify-content: center;
          font-size: 12px;
          margin-bottom: 10px;
        }
        .contact:hover{
          text-decoration: underline;
        }
        .bttn.active1{
          background:#F2B46D ;
        }
        .fa-chevron-circle-right{
          margin: 15px;
          margin-left: 0;
        }
        .fa-chevron-circle-left{
          margin-right: 0;
          margin-top: 15px;
        }
        .city select{
            border-radius: 0.25rem;
            border-width: 2px;
            outline: none;
            
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            font-weight: 400;
            background-clip: padding-box;
            width: 142px;
        }
        .d-flex{
            /* width: 345px; */
            display: flex;
            justify-content:space-between;
            margin-left: 9px;
        }
        .city select:focus{
            border: 1px solid black;
        }
        .city .district{
            margin-left: 35px ;
            color: #B9B4B4;
           
        }
       
        .city .county{
            color: #B9B4B4;

        }
        .form-check-inline{
          margin-bottom: 8px;
          width:90%;
        }
        .address{
          margin-bottom: 12px;
        }
        input[type="number"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="month"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="e-mail"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        .setL{
            width:100%;
        }
        .setXS{
            width: 100px;
        }
        .half{
            display: flex;
            flex-direction: row;
            text-align: center;
            margin-top: 0;
            padding-top: 0;
        }
        .half-one{
            margin-right: 20px;
            
        }
        .atm-blank{
            display: flex;
            flex-direction: row;
            text-align: center;
            
        }
        .form-credit{
            display: flex;
            flex-direction: row;
            text-align: center;
        }
        
        .btnList:focus{
            outline: none;
            border: none;
        }
        .btnList{
            background: none;
            color: blue;
            border:0;
            font-size: 12px;
            margin-top:12px ;
        }

        .darail_policy{
          text-align: center;
        }
        .darail_policy a{
        font-size: 12pt;
        text-decoration: none;
        margin-left: 55%;
        color: #2E3192;
        }
        .form-check-input{
          margin: 0 ;
        }
        .form-control{
          margin:10px 0;
        }
        .twzipcode{
          display:flex;
        }
        label{
          width:100%; 
        }
        .rec_numbering{
          padding:0;
        }
        .addressWork{
          padding:0;
        }
        .city{
          margin:10px 4px 0 0;
        }
        .delivery{
          display:flex;
          justify-content: space-between;
          margin:10px 0;
          
        }
     
        .form-check-inline .form-check-input{
          margin-right:0;
        }
        select{
          width:100%;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          padding: 8px;
          margin-bottom:16px;
        }
   
       }      
    </style>

</head>


<body>
  <div class="container">
    <div class="title">
        <p><i class="fas fa-caret-right"></i> CHECK ORDER</p>
    </div>
  </div>
  <!-- 換收件資訊 -->
  <div class="container">
    <div class="person">
      <div class="title-infor">
        <p>收件資料</p>
      </div>
    </div>
  </div>
  <!-- 換表格 -->
  <div class="container">
        <form name="form1" class="receiver" method="post" onsubmit="return formCheck()">
            <div class="form-group">
                <label for="mail" name="email">
                    <div class="bold-title">電子郵件</div>
                    <div id="mail" class="form-control inputL" type="text" name="mail" size="50" value="<?= empty($_SESSION['receiver']['mail']) ? $r['email'] : htmlentities($_SESSION['receiver']['mail']) ?>"><?= $r['email'] ?></div>
                    
                </label>
            </div>

            <div class="form-group phone_name">
                <label for="nec_name" name="name">
                    <div class="bold-title">收件人姓名</div>
                    <input id="name" class="form-control inputM" type="name" name="name" size="23.5" placeholder="古小美" value="<?= empty($_SESSION['receiver']['name']) ? $r['nickname'] : htmlentities($_SESSION['receiver']['name']) ?>">
                    <small id="nameHelp" class="form-text"></small>
                </label>
            </div>

            <div class="form-group">
                <label for="mobile" name="phone" class="phone">
                    <div class="bold-title">手機號碼</div>
                    <input id="mobile" class="form-control inputM" type="tel" name="mobile" size="23.5" pattern="09\d{2}-?\d{3}-?\d{3}" placeholder="0912-321-123" value="<?= empty($_SESSION['receiver']['mobile']) ?  $r['mobile'] : htmlentities($_SESSION['receiver']['mobile']) ?>">
                    <small id="mobileHelp" class="form-text"></small>
                </label>
            </div>
    <!--  -->
    <label class="address" for="inputState" name="package">
            <div class="bold-title choseaddress">選擇配送方式</div>
            <div class="transport_bu_input ">
              <div class="form-check form-check-inline">
                  <label class="form-check-label gohom " for="addressC">
                  <div class="delivery">
                  <p>宅配</p>
                  <input class="form-check-input tohome click_two shipWay" type="radio" name="addressC" id="inlineRadio1" value="宅配">
                  </div>
                  <div class="delivery">
                  <p>到店取貨</p>  
                  <input class="input_all click shipWay" type="radio" name="addressC" value="到店取貨">
                  </div>                  
                  </label>
              </div>
              
            </div>
            <div class="twzipcode"></div>
            <label class="address choseaddress" for="inputState">收件地址

                <div class="form-group addressWork">
                    <input type="text" class="form-control setL littleword try try_two form-control inputL" id="address" value="<?= empty($_SESSION['receiver']['address']) ? $r['address'] : htmlentities($_SESSION['receiver']['address']) ?>" name="address">
                </div>
                <small id="addressHelp" class="form-text"></small>
            </label>
            <small id="addressHelp" class="form-text"></small>
            <div class="form-group rec_numbering">
                <label for="numbering" name="tax" class="numbering">
                    <div class="bold-title ">統一編號</div>
                    <input type="text" name="numbering" class="  form-control inputL form-control setL" id="formGroupExampleInput2" value="<?= empty($_SESSION['receiver']['numbering']) ? '' : htmlentities($_SESSION['receiver']['numbering']) ?>">
                </label>
            </div>
    </div>
  <!-- 換配送時間 -->
  <div class="container">
    <div class="deliver">
        <div class="title-infor"> 
        <p>選擇配送時段</p>
        </div>
          <div class="time_bu_input">
              <div class="time_bu_input_two">
                <select for="SendTime form-control setL">
                  <option class="input_all SendTime" type="radio" name="SendTime" value="不指定時間">不指定時間</option>
                  <option class="input_all SendTime" type="radio" name="SendTime" value="13點前">13點前</option>
                  <option class="input_all SendTime" type="radio" name="SendTime" value="13-18點">13-18點</option>
                  <option class="input_all SendTime" type="radio" name="SendTime" value="不須選擇送貨時段">不須選擇送貨時段</option>
                  <small id="SendTimeHelp" class="form-text timeText"></small>
                </select>
              </div>
          </div>
    </div>
  </div>
  <!-- 付款方式 -->
  <div class="container">
    <div class="person">
      <div class="title-infor">
        <p>付款方式</p>
        <div class="form-check form-check-inline form-credit payment_bu">
            <label class="form-check-label-four d-flex" for="inlineRadio1" name="atm" for="payment">
              <div>
                ATM轉帳
                </div>
                    <input class="form-check-input useatm input_all payment_click payment1" type="radio" name="payment" id="inlineRadio1" value="ATM轉帳">
        </div>
        <div class="atm payment_hide payment_show">
            <div class="form-group">
                <label  for="exampleInputEmail1" class="bank" >請輸入銀行代碼</label>
                <input type="text" class="form-control setXS inputS " id="bankCode" aria-describedby="emailHelp" placeholder=" 007">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="bank account_code">請輸入轉出帳號...(13~16位)</label>
                <input type="number" class="form-control inputL" id="bankAcount" type="text" placeholder=" 1547-895-4876542">
                <small id="emailHelp" class="form-text text-muted">轉入帳號：斑斕  700-01322345123</small>
            </div>
            </label>
        </div>
         <!-- 信用卡 -->
        <div class="form-check form-check-inline form-credit">
            <label class="form-check-label-four d-flex" for="inlineRadio1" name="credit">
            <div>信用卡付款</div>  
            
            
                <input class="form-check-input creditcard input_all credit_click payment1" type="radio" name="payment" id="dewey" value="信用卡付款">
        </div>
        <div class="creditblank credit_hide credit_show"> 
            <div class="form-group">
                <label  for="exampleInputEmail1" class="bank credit_code" >請輸入信用卡卡號...(12碼)</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" 9384-3495-6984">
            </div>
            <div class="form-group half">
                <div class="half-one credit_code">
                    <label for="exampleInputPassword1" class="bank credit_month">卡片有效日期(月/年)</label>
                    <input type="number" class="form-control setXS inputS" id="creditDate" type="text" placeholder=" 25/11">
                </div>
                <div class="half-two credit_code">
                    <label for="credit_security" class="bank">信用卡背面安全碼</label>
                    <input type="number" class="form-control setXS inputS" id="creditCode" type="text" placeholder=" 668">
                </div>
                
            </div>
        </div>
        </label>
      </div>
    </div>
  </div>
  </form>

  <!-- 購物確認 -->
  <div class="container">
    <button class="collapsible">購物確認</button>
    <div class="content">
    <?php if ($_SESSION['cart']) : ?>
          <!-- <div class="pro-list detail_scrollbar" id="scrollbar_style"> -->
          <?php foreach ($_SESSION['cart'] as $i) : ?>
            <div class="product detail_content"
              data-sid="<?= $i['sid'] ?>"
              data-name="<?= $i['name'] ?>"
              data-img="<?= $i['img_small'] ?>"
              data-price="<?= $i['price'] ?>"
              data-quantity="<?= $i['quantity'] ?>"
            >
              <figure class="pro-img commodity_img">
                <img class="imgFix" src="img/small/<?= $i['img_small'] ?>-1.jpg">
              </figure>
              <div class="pro-word">
                <div><?= $i['name'] ?></div>              
              </div>
              <div class="pro-ano">
                <div><?= $i['quantity'] ?> 組</div>
              </div>
              <div class="content_price">
                <div class="price"></div>
              </div>
            </div>
          
          <?php endforeach; ?>
      </div>
  </div>


  

   <!-- 換底線 -->
   <div class="container1"></div>

   <!-- 換總價 -->
   <div class="container darail_policy">
        <button type="button" class="btnList" data-toggle="modal" data-target="#staticBackdrop">契約條款</button>
        <?php include __DIR__ . "/_test_contact.php" ?>
   </div>
   <div class="container">
       <div class="total">
       <div>共<span class="cart-count">0</span>件/商品金額總計：<span id="total-price"></span></div>
       </div>
       
   </div>
   <?php endif ?>
  
   <!-- 換兩個按鈕 -->
   <div class="container2">
       
       <a type="button" class="bttn left-button" href="<?= WEB_ROOT ?>/RWD_cart_2.php">
          <p>上一步</p>
       </a>
       <a type="button" class="bttn right-button active1 NextPage">
          <p>下一步</p>
       </a>
   </div>

   <?php include __DIR__. "/_scripts.php"?>
   
   <script>
        var coll = document.getElementsByClassName("collapsible");
      var i;
      
      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight){
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          } 
        });
      }
        // 按鈕顏色
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
                $.post('shopping_Check_api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);
                    if(data.success){
                        setTimeout(function(){
                            location.href = 'RWD_carttablerwd.php';
                        },0);
                    }
                }, 'json')
            }

            return false;
        }



  </script>

