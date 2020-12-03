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
.container {
    width: 320px;
    padding: 0px;
    background-color: #F6F6F6;
    border-radius: 20px;
  }
.main {
    background-color: #F6F6F6;
    border-radius: 10px;
  }
.icon {
    display: flex;
    justify-content: flex-end;
    font-size: 20px;
    padding: 10px;
    margin-bottom: 5px;
  }
.QA {
    text-align: center;
    margin-bottom: 20px;
  }
.timeline {
    height: 150px;
    width: 250px;
    margin: 0 auto;
  }
h3 {
    background: #f2b46d;
    border-radius: 50%;
    height: 100px;
    width: 150px;
    margin: 10px;
    padding: 40px;
    position: relative;
    text-align: center;
  }

  .center h3 {
    opacity: 0.8;
    transition: all 300ms ease;
  }

  .center .slick-center h3 {
    -moz-transform: scale(1.08);
    -ms-transform: scale(1.08);
    -o-transform: scale(1.08);
    -webkit-transform: scale(1.08);
    color: black;
    opacity: 1;
    transform: scale(1.08);
  }

  .timeLineP {
    font-size: 14px;
    display: inline;
    line-height: 100px;
    position: absolute;
    text-align: center;
    right: 35px;
    top: 20px;


  }

  /* Icons */
  @font-face {
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('http://kenwheeler.github.io/slick/slick/fonts/slick.eot');
    src: url('http://kenwheeler.github.io/slick/slick/fonts/slick.eot?#iefix') format('embedded-opentype'), url('http://kenwheeler.github.io/slick/slick/fonts/slick.woff') format('woff'), url('http://kenwheeler.github.io/slick/slick/fonts/slick.ttf') format('truetype'), url('http://kenwheeler.github.io/slick/slick/fonts/slick.svg#slick') format('svg');
  }

  /* Arrows */
  
  .slick-prev,
  .slick-next {
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 100px;
    height: 100px;
    margin-top: -10px;
    padding: 0;

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
  }

  .slick-prev:hover,
  .slick-prev:focus,
  .slick-next:hover,
  .slick-next:focus {
    color: transparent;
    outline: none;
    background: transparent;
  }

  .slick-prev:hover:before,
  .slick-prev:focus:before,
  .slick-next:hover:before,
  .slick-next:focus:before {
    opacity: 1;
  }

  .slick-prev.slick-disabled:before,
  .slick-next.slick-disabled:before {
    opacity: .25;
  }

  .slick-prev:before,
  .slick-next:before {
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .slider {
    display: flex;
  }

  .timeLineImg {
    width: 80px;
    height: 70px;
    text-align: center;
    position: absolute;
    right: 35px;
    top: 0;

  }

  .timeline ul li {
    list-style: none;
    background-color: #f2b46d;
    border-radius: 100%;
    text-align: center;
    padding: 10px;

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

  .tableAll th {
    background-color: #c4c5c5;
    font-size: 14px;
    padding: 5px;
    text-align: center;
    font-weight: 100;
    width: 100%;
  }

  .Itemname {
    text-align-last: left;
  }

  .productItem2 {
    text-align: center;
    font-size: 14px;
    padding: 5px;
  }

  .productItem {
    font-size: 14px;
    line-height: 0.3;
    margin: 18px
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
      <li class="listD" class="active "><a onclick="location.href='<?= WEB_ROOT ?>/mobile-1-2.php'">會員中心</a></li>
      <li class="listD active01" ><a onclick="location.href='<?= WEB_ROOT ?>/mobile-2-2Order.php'">訂單查詢</a></li>
      <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/mobile-3QA.php'">常見問答</a></li>
      <li class="listD" ><a href="">收藏</a></li>
  </ul>
</article>
<!-- -------------------------------------- -->
<div class="QA">
      <h4>訂單查詢</h4>
    </div>
<div class="container">
  <div>
    <div class="main">
      <div class="icon"><i class="fas fa-redo-alt"></i></div>
      <div class="timeline">
        <div class="slider center">
          <div>
            <h3><img class="timeLineImg" src="img/01.png" alt="">
              <p class="timeLineP">訂單建立完成</p>
            </h3>
          </div>
          <div>
            <h3><img class="timeLineImg" src="img/02.png" alt="">
              <p class="timeLineP">訂單付款完成</p>
            </h3>
          </div>
          <div>
            <h3><img class="timeLineImg" src="img/03.png" alt="">
              <p class="timeLineP">訂單 處理中</p>
            </h3>
          </div>
          <div>
            <h3><img class="timeLineImg" src="img/04.png" alt="">
              <p class="timeLineP">物流 處理中</p>
            </h3>
          </div>
          <div>
            <h3><img class="timeLineImg" src="img/05.png" alt="">
              <p class="timeLineP">訂單 配送中</p>
            </h3>
          </div>
          <div>
            <h3><img class="timeLineImg" src="img/06.png" alt="">
              <p class="timeLineP">訂單取件成功</p>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table class="tableAll">
    <tr class="">
      <th class="Itemname">Item</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <tr class="allProduct">
      <td>
        <div class="productItem">
          <div class="textItem">
            <p>Simply Cafe</p><br>
            <p class="numberItem">036115</p>
          </div>
        </div>
      </td>
      <td>
        <div class="productItem2 ">35*20</div>
      </td>
      <td>
        <div class="productItem2 ">01</div>
      </td>
      <td>
        <div class="productItem2 ">NT.7100</div>
      </td>
    </tr>
    <tr class="allProduct">
      <td>
        <div class="productItem">
          <div class="textItem">
            <p>Simply Cafe</p><br>
            <p class="numberItem">036115</p>
          </div>
        </div>
      </td>
      <td>
        <div class="productItem2 ">35*20</div>
      </td>
      <td>
        <div class="productItem2 ">01</div>
      </td>
      <td>
        <div class="productItem2 ">NT.7100</div>
      </td>
    </tr>
    <tr class="allProduct">
      <td>
        <div class="productItem">
          <div class="textItem">
            <p>Simply Cafe</p><br>
            <p class="numberItem">036115</p>
          </div>
        </div>
      </td>
      <td>
        <div class="productItem2 ">35*20</div>
      </td>
      <td>
        <div class="productItem2 ">01</div>
      </td>
      <td>
        <div class="productItem2 ">NT.7100</div>
      </td>
    </tr>


</div>
</div>
</div>
</body>

</html>
<?php include __DIR__ . '/_scripts.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script src="lib/jquery-3.5.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script>
  var article = $('article');
  var line = $('<div />').addClass('line');

  line.appendTo(article);

  var active = article.find('.active');
  var pos = 0;
  var wid = 0;

  if (active.length) {
    pos = active.position().left;
    wid = active.width();
    line.css({
      left: pos,
      width: wid
    });
  }
  article.find('ul li a').click(function(e) {
    e.preventDefault();
    if (!$(this).parent().hasClass('active') && !article.hasClass('animate')) {
      article.addClass('animate');
      var _this = $(this);
      article.find('ul li').removeClass('active');
      var position = _this.parent().position();
      var width = _this.parent().width();

      if (position.left >= pos) {
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

  $(document).ready(function() {
    $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 1,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  });
</script>