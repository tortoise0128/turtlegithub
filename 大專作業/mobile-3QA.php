<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'memberQA';

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?>

<?php include __DIR__ . '/_html_header.php' ?>
<?php include __DIR__ . '/_navbar.php' ?>
<style>
        body {
        width: 375px;
    }
    .ListB {
        position: relative;
        padding-bottom: 12px;
        margin-bottom: 30px;
    }
    .ListB .line {
        height: 2px;
        position: absolute;
        bottom: 0;
        margin: 0 0 10px 0;
        background: #f2b46d;
    }
    .ListB ul {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        justify-content: center;
    }
    .ListB ul li {
        margin: 0 20px 0 0;
        opacity: .4;
        transition: all 0.4s ease;
        padding: 0;
        text-align: center;
    }
    .ListB ul li:hover {
        opacity: .7;
    }
    .ListB ul li.active {
        opacity: 1;
    }
    .ListB ul li:last-child {
        margin-right: 0;
    }
    .ListB ul li a {
        text-decoration: none;
        color: black;
        text-transform: uppercase;
        display: block;
        font-weight: 600;
        letter-spacing: .1em;
        font-size: 16px;
        margin: 0;
    }
    .memberAll {
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .memberPicture {
        align-self: center;
        height: 48px;
        width: 48px;
        background-color: cadetblue;
        border-radius: 50%;
    }
    .main {
        /* background-color: cadetblue; */
        display: flex;
        flex-direction: column;
        
    }
    .QA{
        text-align: center;
    }

    .cccooo {
    margin: 0 auto;
    /* padding: 1rem; */
    width: 280px;
    }

    .accordion .accordion-item {
    border-bottom: 1px solid #c4c5c6;
    }

    .accordion .accordion-item button[aria-expanded='true'] {
    border-bottom: 1px solid #f2b46d;
    }

    .accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 0;
    color: black;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
    }

    .accordion button:hover, .accordion button:focus {
    cursor: pointer;
    color: #f2b46d;
    }

    .accordion button:hover::after, .accordion button:focus::after {
    cursor: pointer;
    color: #f2b46d;
    border: 1px solid #f2b46d;
    }

    .accordion button .accordion-title {
    padding: 1em 1.5em 1em 0;
    font-size: 16px;
    }

    .accordion button .icon {
    display: inline-block;
    position: absolute;
    top: 18px;
    right: 0;
    width: 22px;
    height: 22px;
    border: 1px solid;
    border-radius: 22px;
    }

    .accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
    }

    .accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
    }

    .accordion button[aria-expanded='true'] {
    color: #f2b46d;
    }

    .accordion button[aria-expanded='true'] .icon::after {
    width: 0;
    }

    .accordion button[aria-expanded='true'] + .accordion-content {
    opacity: 1;
    max-height: 30em;
    transition: all 200ms linear;
    will-change: opacity, max-height;
    }

    .accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
    font-size: 1rem;
    font-weight: 300;
    margin: 2em 0;
    }
    .active01{
    border-bottom: 3px solid #f2b46d;
    font-size: 20px   !important;
    opacity: 1   !important;

  }

</style>
<div class="memberAll">
        <figure class="memberPicture">
            <img src="" alt="">
        </figure>
        <div>
            <p>Ying Chen</p>
        </div>
    </div>
    <!-- -------------------------------------- -->
    <article class="ListB">
  <ul class="ListC">
      <li class="listD" class="active"><a onclick="location.href='<?= WEB_ROOT ?>/mobile-1-2.php'">會員中心</a></li>
      <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/mobile-2-2Order.php'">訂單查詢</a></li>
      <li class="listD active01" ><a onclick="location.href='<?= WEB_ROOT ?>/mobile-3QA.php'">常見問答</a></li>
      <li class="listD" ><a href="">收藏</a></li>
  </ul>
</article> 
<div class="container">
    <div class="row justify-content-center">
    <div class=" main">
            <div class="QA">
                <h4>FAQ</h4>
            </div>
            <div class="cccooo">
  <div class="accordion">
    <div class="accordion-item">
      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">該怎麼加入會員呢?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>請點選本站上方「會員」按鈕，在開啟的會員登入頁面中，點選「註冊會員」，填妥會員基本資料並完成Email認證後，即完成加入會員。</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">忘記密碼怎麼辦?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>請點選「忘記密碼」進行查詢。系統會寄送更改密碼連結到您註冊會員時所填寫的 Email 信箱。</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">我的帳號好像被盜用了怎麼辦？</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>若您懷疑您的帳號遭盜用，或發生不正常交易情形，請提供可疑資料，若查明屬實，本站將協助凍結該帳號。或立即連絡客服請專人為您服務</p>
                    <p>本站客服信箱為「banLan@gmail.com」，若您使用本站服務有任何問題或建議，歡迎您隨時來信告訴我們。</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">該如何取消訂單?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>預定送達時間72小時前取消訂單，可全額留存作為購物金使用；若選擇退款，則扣除總金額5%之金流處理費後退款。</br>
                    預定送達時間72小時~48小時前取消訂單，酌收總金額30%之耗材損失費用。</br>
                    預定送達時間前48小時不得取消訂單</p>
      </div>
    </div>
  </div>
</div>
            
        </div>
    </div>
</div>


</body>

</html>
<?php include __DIR__ . '/_scripts.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
var article = $('article');
var line = $('<div />').addClass('line');

line.appendTo(article);

var active = article.find('.active');
var pos = 0;
var wid = 0;

if(active.length) {
  pos = active.position().left;
  wid = active.width();
  line.css({
    left: pos,
    width: wid
  });
}
article.find('ul li a').click(function(e) {
  e.preventDefault();
  if(!$(this).parent().hasClass('active') && !article.hasClass('animate')) {   
    article.addClass('animate');
    var _this = $(this);
    article.find('ul li').removeClass('active');
    var position = _this.parent().position();
    var width = _this.parent().width();

    if(position.left >= pos) {
      line.animate({
        width: ((position.left - pos) + width)
      }, 150, function() {
        line.animate({
          width: width,
          left: position.left
        }, 150, function() {
          article.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    } else {
      line.animate({
        left: position.left,
        width: ((pos - position.left) + wid)
      }, 150, function() {
        line.animate({
          width: width
        }, 150, function() {
          article.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    }

    pos = position.left;
    wid = width;
  }
});
</script>

<script type="text/javascript">
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>