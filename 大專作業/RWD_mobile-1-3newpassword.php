<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';

// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 讀取資料庫
$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();




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
    .main{
        display: flex;
        flex-direction: column;
        align-items: center;   
    }
    .mainPassword{
        margin-left: 50px;
        line-height: 36px;
    }
    .PA{
        line-height: 50px;
    }
    .user{
        width: 274px;
    }

    #send{
        height:30px;
        /* width: 160px; */
        /* border-radius: 10px; */
        background-color: orange;
        border: 0px;
        /* margin-top: 20px; */
        line-height: 30px;
    }
    #delete{
        height: 30px;
        /* width: 160px; */
        /* border-radius: 10px; */
        background-color: gray;
        border: 0px;
        /* margin-top: 20px;   */
        line-height: 30px
    }
    .swal-button--cancel {
 color: #fff;
 background-color: #535151;
}
.swal-button--danger{
    width: 90.95px;
    margin-right: 60px;
}
.swal-button--danger {
    background-color:#F2B46D;
}
.swal-button--danger:not([disabled]):hover {
    background-color: #F2B46D;
}
.swal-button--cancel:focus {
    box-shadow: none;
    outline: none;
}
.swal-button--danger:focus {
    box-shadow: none;
    outline: none;
}
.button{
  color: #fff;
  width: 200px;
  border-radius: 30px;
  margin: 10px 38px;
}
.active01{
    border-bottom: 3px solid #f2b46d;
    font-size: 20px   !important;
    opacity: 1   !important;

}
.form-text{
  color: red;
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
    <li class="listD active01" class="active "><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-1-2.php'">會員中心</a></li>
    <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-2Order.php'">訂單查詢</a></li>
    <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-3QA.php'">常見問答</a></li>
    <li class="listD" ><a onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-like.php'">收藏</a></li>
  </ul>
</article> 
<div class="container">
    <div class="row justify-content-center">
    <div class=" main">
            <div class="QA">
                <h4>修改密碼</h4>
            </div>
            <div class=" main">
        <form class="mainPassword" name="form1" method="post">
            <label>
              <div class="PA">輸入原密碼</div>
              <input class="user" type="password" name="oldpassword" />
            </label>
            <label>
              <div class="PA">輸入新密碼</div>
              <input  class="user" type="password" name="password" id="password" />
              <small id="passwordHelp01" class="form-text"></small>
            </label>
            <label>
              <div class="PA">再次輸入新密碼</div>
              <input class="user" type="password" name="password2" id="password2"/>
              <small id="passwordHelp02" class="form-text"></small> 
            </label>
            <div class="BottomSend">
            <button class="del button" type="submit" id="send" name="submit" onclick="return formCheck01()">
                <p>確認送出</p>    
                </button>
            </div>
            <div class="BottomDel">
            <button class="del button" type="button" id="delete" 
            onclick="location.href='<?= WEB_ROOT ?>/RWD_mobile-1-2.php'">
                <p>取消</p> 
            </button>     
        </div>
        </form>
        
    </div>
        </div>
    </div>
</div>


</body>

</html>
<?php include __DIR__ . '/_scripts.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
   $('.Question').click(function(){
        // swal("確定要刪除商品嗎?", "You clicked the button!", "warning",{button: "取消"});
        swal({
            title: "已修改完成",
            icon: "success",
            buttons: true,
            dangerMode: true,       
        });
       
      });

</script>
<script>
    const 
        password2 = $('#password'),
        info_bar2 = $('#info-bar2'),
        oldpassword = $('#oldpassword');

    function formCheck01(){
        const confirm1 = document.getElementById('password').value;
        const confirm2 = document.getElementById('password2').value;
        const password3 = $('#password2');
        

       password2.next().text('');
       password2.css('border-color', '#CCCCCC');
        // TODO: 檢查欄位
        let isPass = true;

        if(password2.val().length <6){
            isPass = false;
            password2.css('border-color', 'red');
            password2.next().text('密碼長度太短');
        }

        if(confirm1 !== confirm2){
            isPass = false;
            password3.css('border-color', 'red');
            password3.next().text('兩次密碼不同');
        }

        if(isPass){
            
            $.post('mem-newpassword-api.php', $(document.form1).serialize(), function(data){
                if(data.success){                        
                        Swal.fire({
                        title: "修改成功",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                setTimeout(function(){
                location.href = 'RWD_mobile-1-2.php';
                    }, 500);
                } else {

                    Swal.fire({
                        title: "原密碼輸入錯誤",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                // info_bar2.slideDown();

                // setTimeout(function(){
                //     info_bar2.slideUp();
                // }, 2000);

            }, 'json');
        }

        return false;
    }
</script>