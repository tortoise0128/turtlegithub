<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'RWD_mobile-1-2';

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?> 

<?php include __DIR__. '/_html_header.php' ?>
<?php include __DIR__. '/RWD_navbar.php' ?>
<style>
    body {
        width: 375px;
    }

    .ListB {
    position: relative;
    padding-bottom: 12px;
    /* margin-bottom: 30px; */
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
    width: 100%;
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

    .drop-menu {
        max-width: 300px;
        position: absolute;
       left: 30px;
       top:970px;
       font-size: 14px;
    }

    .dropName {
        color: #f2b46d;
        margin-top: 10px;
        cursor: pointer;
    }

    .formName2 {
        font-size: 14px;
    }

    input {
        display: none;
    }

    .menu-list {
        background-color: #FFF;
        overflow: hidden;
        max-height: 0;
    }
    input:checked+.menu-list {
        max-height: 400px;
    }
    .BottomSend{
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
    }
    #send{
        height:40px;
        width: 110px;
        border-radius: 10px;
        background-color: orange;
        border: 0px;
        line-height: 40px;
        color: white;
    }
    #delete{
        height: 40px;
        width: 110px;
        border-radius: 10px;
        background-color: gray;
        border: 0px;
        line-height: 40px;
        color: white;
    }
    .password{
        display: flex;
        flex-direction: column;
    }
    .passwordMain{
        margin: 10px 0;
    }
    #send {
        margin: 0 57px;
        width: 200px;
    }
    .form-text{
        color:red;
        display: inline;
    }
    .active01{
    border-bottom: 3px solid #f2b46d;
    font-size: 20px   !important;
    opacity: 1   !important;

  }
  .twzipcode{
      display: flex;
  }
  .qq{
      padding: 0;
  }
</style>
<div>
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
  <ul class="ListC">
      <li class="listD active01" class="active "><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-1-2.php'">會員中心</a></li>
      <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-2-2Order.php'">訂單查詢</a></li>
      <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-3QA.php'">常見問答</a></li>
      <li class="listD" ><a href="">收藏</a></li>
  </ul>
  </ul>
</article> 
    <!-- -------------------------------------- -->
    <form class="col-sm-6" style="padding:30px;" name="form1" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1" class="formName">姓名</label>
            <input type="nickname" class="form-control" id="exampleFormControlInput1 nickname" placeholder="Ying Chen" value="<?= $r['nickname'] ?>" name="nickname">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1" class="formName">信箱</label>
            <div type="email" class="form-control" id="exampleFormControlInput1 email" ><?= $r['email'] ?></div>
        </div>
        <div class="password">
            <label for="exampleFormControlInput1" class="formName">密碼</label>
            <a  class="passwordMain" href="<?= WEB_ROOT ?>/RWD_mobile-1-3newpassword.php">設定新密碼</a>
        </div>
        <div class="form-group">
            <label for="inlineFormCustomSelectPref" class="formName">生日</label>
            <input type="date" class="form-control" id="birthday" name="birthday"  value="<?= $r['birthday'] ?>" for="birthday">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1" class="formName">電話</label>
            <input type="mobile" class="form-control" id="exampleFormControlInput1 mobile" pattern="09\d{2}-?\d{3}-?\d{3}" name="mobile" value="<?= $r['mobile'] ?>" for="mobile">
            <small id="passwordHelp" class="form-text"></small>
        </div>
        <label for="exampleFormControlInput1" class="formName">地址</label>
        <div class="form-group">
            <div class="d-flex hahah">
                <div class="form-group qq WEWE" >
                    <div class="twzipcode cityup"></div>
                         <label for="address col-lg-12">
                        <input name="address" id="address" class="try try_two form-control inputL" type="text" size="50" placeholder="請輸入地址" value="<?= $r['address'] ?>">
                        <small id="addressHelp" class="form-text"></small>
                        </label>
                        <small id="addressHelp" class="form-text"></small>
                        </input>
                        
                </div>
            </div>
        </div>
        <button class="del button" type="submit" id="send" name="submit" onclick="return formCheck01()">
                <p>修改</p> 
        </button>
        
    </form>
</body>
</html>

<?php include __DIR__ . '/_scripts.php' ?>
<script>
    const mobile = $('#mobile'),
        info_bar = $('#info-bar');
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    function formCheck01(){
        mobile.next().text('');
        mobile.css('border-color', '#CCCCCC');
        // TODO: 檢查欄位
        let isPass = true;


        if(! mobile_re.test(mobile.val())){
            isPass = false;
            mobile.css('border-color', 'red');
            mobile.next().text('請填寫正確的手機格式');
        }

        if(isPass)
        {
            Swal.fire({
            title: '確定要修改內容嗎?',
            icon: 'warning',
            showCancelButton: true,
            showCloseButton:true,
            confirmButtonColor: '#F2B46D',
            cancelButtonColor: '#707070',
            confirmButtonText: '確 定',
            cancelButtonText: '取 消'
            }).then((result) => {
                if (result.value){
                    $.post('member-api.php', $(document.form1).serialize(), function(data){
                if(data.success){                        
                        Swal.fire({
                        title: "修改成功",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                setTimeout(function(){
                location.href = 'RWD_mobile-1-2.php';
                    }, 3000);
                } else {
                    Swal.fire({
                        title: "修改失敗",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

            }, 'json');
                }
            })
            
           
        }
        return false;
    }
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
<script>
     $(".twzipcode").twzipcode({
            countySel: "<?= $r['county'] ?>", // 城市預設值, 字串一定要用繁體的 "臺", 否則抓不到資料
            districtSel: "<?= $r['city'] ?>", // 地區預設值
            zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
            css: ["city form-control  ", "town form-control"], // 自訂 "城市"、"地區" class 名稱
            countyName: "county", // 自訂城市 select 標籤的 name 值
            districtName: "city", // 自訂地區 select 標籤的 name 值
            
        });
</script>
