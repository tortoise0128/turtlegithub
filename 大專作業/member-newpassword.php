<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'member-newpassword';
// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 讀取資料庫
$sid = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM `member` WHERE `id`=$sid";
$row = $pdo->query($sql)->fetch();

// $sql = "SELECT * FROM member where id=?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$_SESSION['member']['id']]);
// $r = $stmt->fetch();


?>
<?php include __DIR__. '/_html_header.php' ?>
<?php include __DIR__. '/_navbar.php' ?>
<style>
    .row{
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

    
    .main{
        /* background-color: cadetblue; */
      
    }
    .mainPassword{
        display: flex;
        flex-direction: column;
       margin-right: 250px;
       margin-top: 200px;
       /* padding-right:250px; */
      
       font-size:24px;
       letter-spacing: 2px;
       
    }
    .mainPassword label{
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1rem;
        
    }
    .PA{
        margin-right: 15px;
        line-height: 45px;
    }
    .mainBottom{
        display: flex;
        /* justify-content: center; */
        margin-top: 40px;

    }
    
    #send{
        height: 50px;
        width: 200px;
        border-radius: 4px;
        background-color: #f2b46d;
        border: 0px;
        color: #fff;
        margin-right: 20px;
        margin-left: 150px;
        
    }
    #delete{
        height: 50px;
        width: 200px;
        border-radius: 4px;
        background-color: gray;
        border: 0px;
        color: #fff;
        margin-right: 30px;
    }
    .del p{
        margin-top: 15px;

    }
.swal-button--cancel {
    width: 105px;
    color: #fff;
    background-color: #535151;
}
.swal-button--danger{
    width: 105px;
    margin-right: 105px;
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
.form-text{
    display:inline;
    color:red;
    position: absolute;
    right:15%;
}
label{
    width:100%;
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

            <li><a href="<?= WEB_ROOT ?>/member.php" class="accountChose active">會員中心</a></li>
            <li><a href="<?= WEB_ROOT ?>/member-Tracking.php" class="accountChose">訂單查詢</a></li>
            <li><a href="<?= WEB_ROOT ?>/member-QA.php" class="accountChose">常見問答</a></li>
            <li><a href="<?= WEB_ROOT ?>/member-like.php" class="accountChose ">收藏</a></li>

        </ul>
        </div>
        <div id="info-bar2" class="alert alert-success" role="alert" style="display: none"></div>
     <form class="col-lg-9 main"  novalidate name="form1" method="post">
        <div class="mainPassword">
            <label>
                <div class="PA">輸入原密碼 </div>
                <input type="password" name="oldpassword" />
            </label>
            <label>
                <div class="PA">輸入新密碼 </div>
                <input type="password" name="password" id="password"/>
            <small id="passwordHelp01" class="form-text"></small>

            </label>
            <label>
                <div class="PA">再次輸入新密碼 </div>
                <input type="password" name="password2" id="password2" /> 
                 <small id="passwordHelp02" class="form-text"></small>
            </label>

           
        </div>
        <div class="mainBottom">
            <button class="del button" type="submit" id="send" name="submit" onclick="return formCheck01()">
                <p>確認送出</p> 
            </button>
            <button class="del button" type="button" id="delete" 
            onclick="location.href='<?= WEB_ROOT ?>/member.php'">
                <p>取消</p> 
            </button>       
            </div>
    </form>

    </div>
</div>


<?php include __DIR__. '/_html_footer.php' ?>
<?php include __DIR__. '/_scripts.php' ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                location.href = 'member.php';
                    }, 800);
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
<!-- <script>
$('#send').click(function(){
        // swal("確定要刪除商品嗎?", "You clicked the button!", "warning",{button: "取消"});
        swal({
            title: "已修改完成",
            icon: "success",
            buttons: true,
            dangerMode: true,       
        });
       
      });
</script> -->
