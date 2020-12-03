<!-- 
<?php include __DIR__. '/_connect_db.php'; 
$pageTitle = '會員中心';
$pageName = 'member';

$sql = "SELECT * FROM member where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['member']['id']]);
$r = $stmt->fetch();

?> -->


<?php include __DIR__. '/_html_header.php' ?>
<?php include __DIR__. '/_navbar.php' ?>
<style>
    
    .row {
        height: 700px;
    }

    .Account {
        margin: 80px 0;
    }

    ul li {
        list-style: none;
    }

    .MainTitle {
        font-size: 39px;
        font-style: italic;
        margin-bottom: 20px;
    }

    .myAccount {
        font-size: 20px;
        margin-bottom: 50px;
    }

    .secondTitle {
        font-size: 40px;
    }

    ul .accountChose {
        font-size: 20px;
        color: #c4c5c5;
    }

    ul .accountChose:hover {
        text-decoration: none;
        color: #f2b46d;
    }

    ul a.active {
        color: #f2b46d;
    }

    .chose li {
        margin: 15px 0;
    }


    .main {
        margin-top: 260px;
    }
    .memberAll{
        display:flex;
        height: 100px;
        text-align: center;
        position: absolute;
        right: 900px;
        top: 280px;
        
    }
    .memberAll div{
        padding-top:30px;
        margin-left:15px;
    }
    .memberPicture{
        height: 87px;
        width: 87px;
        background-color: #f2b46d;
        border-radius: 50%;
    }
    .memberName{
        font-size: 26px;
    }
    .memberLevel{
        background-color: #c4c5c5;
        border-radius: 8px;
        text-align: center;
        color: white;
        margin-top: 10px;
        font-size: 14px;
        padding: 0 7px;
    }

    .form-group {
        display: flex;
        align-items: center;
    }

    .formName {
        font-size: 20px;
        align-items: center;
        /* margin: 0 auto; */
    }

    .form-group2 {
        display: flex;
    }

    .formName2 {
        font-size: 20px;
        text-align: center;
        padding: 5px;
    }

    .qq,
    .hahah {
        padding: 0 !important;
        width: 100%;
    }

    .WEWE {
        padding: 0 4px 0 0;
        display:inline-block;
    }

    .drop-menu {
        max-width: 300px;
    }
    .dropName{
        color: #f2b46d;
        margin-top: 10px;
        cursor:pointer;
    }
    .formName2{
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
    input::placeholder ,.form-control , .custom-select{ 

    /* color: #E6E5E5 !important; */
    }
    .button{
        
        position: absolute;
        bottom: 30%;
        right: 5%;
        background-color:#F2B46D;
        color: #fff;
        width: 150px;
        text-align: center;
        border:none;
        padding: 6px;
        border-radius: 10px;
        height: 50px;
        /* line-height: 52px; */
        letter-spacing: 5px;
    }
    .button p {
        margin: 0;
    }
    .form-text{
        position: absolute;
        left: 65%;
        top: 58%;
    }
    .twzipcode{
        display: flex;
    }
    .cityup{
        width: 400px;
    }
    .city {
        margin-right: 8px;

    }
    #address{
        width: 400px;
        margin-top: 8px;
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
            <!-- --------------------------------- -->
            
            <div class=" memberAll ">
                <figure class="memberPicture">
                    <img src="" alt="">
                </figure>
                <div><p class="memberName"><?= $r['nickname'] ?></p></div>
                <div><p class="memberLevel" >一般會員</p></div>
            </div>   
            <form action=""class="col-lg-9 main d-flex" name="form1" method="post">
                <div class="col-lg-6">
                <div class="form-group">
                        <label for="exampleFormControlInput1" class="formName col-lg-3">姓名</label>
                        <input type="nickname" class="form-control" name="nickname"   id="nickname" value="<?= $r['nickname'] ?>" for="nickname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="formName col-lg-3">信箱</label>
                        <div  class="form-control" id="email" ><?= $r['email'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="formName col-lg-3">密碼</label>
                        <a href="<?= WEB_ROOT ?>/member-newpassword.php">設定新密碼</a>
                    </div>
                    <div class="form-group">
                        <label for="inlineFormCustomSelectPref" class="formName col-lg-3">生日</label>
                        <input type="date" class="form-control" id="birthday" name="birthday"  value="<?= $r['birthday'] ?>" for="birthday">
                    
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="formName col-lg-3">電話</label>
                        <input type="mobile" class="form-control" id="mobile" name="mobile"  pattern="09\d{2}-?\d{3}-?\d{3}" value="<?= $r['mobile'] ?>" for="mobile">
                        <small id="passwordHelp" class="form-text"></small>

                    </div>
                </div>
                <div class="col-lg-9 dressform d-flex">
                <label for="exampleFormControlInput1" class="formName col-lg-2">地址</label>
                    <div class=" hahah " > 
                        <div class="col-lg-12 d-flex hahah">
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
                </div>
                <button class="del button" type="submit" id="send" name="submit" onclick="return formCheck01()">
                    <p>修改</p> 
                </button>

            </form>


     
    <!-- --------------------------------- -->

</div>
</div>
<?php include __DIR__ . '/_html_footer.php' ?>
<?php include __DIR__ . '/_scripts.php' ?>

<script>
    const email = $('#email'),
            mobile = $('#mobile'),
            info_bar = $('#info-bar');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    function formCheck01(){
        email.next().text('');
        mobile.next().text('');
        email.css('border-color', '#CCCCCC');
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
                location.href = 'member.php';
                    }, 800);
                } else {
                    Swal.fire({
                        title: "修改失敗",
                        icon: 'error',
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
     $(".twzipcode").twzipcode({
            countySel: "<?= $r['county'] ?>", // 城市預設值, 字串一定要用繁體的 "臺", 否則抓不到資料
            districtSel: "<?= $r['city'] ?>", // 地區預設值
            zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
            css: ["city form-control  ", "town form-control"], // 自訂 "城市"、"地區" class 名稱
            countyName: "county", // 自訂城市 select 標籤的 name 值
            districtName: "city", // 自訂地區 select 標籤的 name 值
            
        });
</script>


