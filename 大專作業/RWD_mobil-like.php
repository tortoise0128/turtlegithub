<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'RWD_mobile-1-2';

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
<?php include __DIR__ . '/RWD_navbar.php' ?>
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
    }
    .row{
        justify-content: center;
    }
    .picture{
        width: 104px;
        height: 104px;
        background-color: salmon;
    }
    .QA {
        /* width: 100%; */
        text-align: center;
        font-style: italic;
    }
    .tableAll {
        /* width: 100%; */
        background-color: #F6F6F6;
        font-size: 14px;
        border-collapse:unset;
       padding-left: 0px;
    }
    .picture{
        background-color: salmon;
        width: 104px;
        height: 104px;
    }
    .searchAll{
        justify-content: space-around;
        background-color: #F6F6F6;
        margin-bottom: 10px;
    }
    .search{
        background-color: #DEDEDE;
        text-align: center;
        height: 30px;
        line-height: 30px;
    }
    .search1{
        background-color: #f2b46d;
        text-align: center;
        height: 30px;
        line-height: 30px;

    }
    .name{
        color:white;
    }
    .notice{
        color: red;
        font-size: 14px;
        padding: 10px;
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
        <p><?= $r['nickname'] ?></p>
    </div>
</div>
<!-- -------------------------------------- -->
<article class="ListB">
  <ul class="ListC">
  <li class="listD " class="active "><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-1-2.php'">會員中心</a></li>
    <li class="listD " ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-2Order.php'">訂單查詢</a></li>
    <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-3QA.php'">常見問答</a></li>
    <li class="listD active01" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-like.php'">收藏</a></li>
  </ul>
</article> 


<div class="container">
    <div class="row">
      <div class="QA">
                <h4>收藏明細</h4>
      </div>
        <div class="main">
            <table cellspacing="10" class="tableAll col-sm-10">
                <tr>
                <th rowspan="3" class="picture"><img src="" alt=""></th>    
                    <td>商品編號</td>
                    <td>NO.1588967</td>
                </tr>
                <tr>
                    <td>收藏時間</td>
                    <td></td>
                </tr>
                <tr>
                    <td>金額</td>
                    <td>NT.</td>
                </tr> 

            </table>
            <div class="d-flex searchAll">
            <div class="search col-6"><a class="name" href="">未出貨</a></div>
            <div class="search1 col-6"><butoon class="name" type="button" onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-2-2Order.php'">查詢明細</button></div>
            </div>
        </div>
        <div class="main">
            <table cellspacing="10" class="tableAll col-sm-10">
                <tr>
                <th rowspan="3" class="picture"><img src="" alt=""></th>    
                    <td>商品編號</td>
                    <td>NO.2877967</td>
                </tr>
                <tr>
                    <td>收藏時間</td>
                    <td></td>
                </tr>
                <tr>
                    <td>金額</td>
                    <td>NT.</td>
                </tr> 

            </table>
            <div class="d-flex searchAll">
            <div class="search col-6"><a class="name" href="">未出貨</a></div>
            <div class="search1 col-6"><butoon class="name" type="button" onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-2-2Order.php'">查詢明細</button></div>
            </div>
        </div>
       
    </div>
    <div class="notice">
         <p>※提醒:花朵會有花期限制。</p>
     </div>
</div>


</body>

</html>
<?php include __DIR__ . '/_scripts.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</script>
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