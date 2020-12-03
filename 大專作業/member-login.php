<?php include __DIR__. '/_connect_db.php'; 
$pageName = 'member-login';




?>
<?php include __DIR__. '/_html_header.php' ?>

<?php include __DIR__. '/_navbar.php' ?>
<style>
    .RWDAll{
        display: none;
    }
    @media screen and (max-width:576px){
        .RWDAll{
        display: block;
        }
        .QAAll{
            display:none;
        }
    }
    .signInBox{
        display: flex;
        height: 700px;
        padding-top: 60px;
        padding-bottom: 100px;
        /* border-right:1px solid black ; */
    }
    .signIn{
        border-right:1px solid black ;
    }
    .signInH1{
         text-align: center;
         margin-bottom: 40px;
          }
   
    .userSignIn{
        display: flex;
        flex-direction: column;
        margin-bottom: 0px;
        margin-left: 100px;
        font-size:20px ;
            }
    .userClick{
        display: flex;
        /* margin-left:60px; */
        margin-top: 30px;
        /* justify-content: center; */
        /* margin-left: 100px; */
    }
    .rememberMe{
        margin-top: 5px;
    }
    #btn{
        color:#fff;
        font-size: 16px;
        height:40px;
        border-radius: 2px;
        background-color: #f2b46d;
        border: 0px;
        margin-right: 30px;
    }
    .forgetPassword{
        font-size:14px;
        color: #707070;
    }
   
    .fastSignIn{
        display: flex;
        margin-top:30px;
        margin-left: 100px;
        font-size: 20px;

    }
    .userFirstShopH1{
        text-align: center;
        margin-bottom: 40px;
    }
    .userFirstShop{
        display:flex;
        flex-direction: column;
        margin-left: 80px;
    }
    .firstIn{
        margin-top:10px;
        font-size: 20px;
    }
    .firstClick{
        margin-left: 36px;
        margin-top: 20px;
        margin-bottom: 20px;  
    }
    .firstfastSignIn{
        display:flex;
        /* justify-content: center; */
        margin-left: 80px;
        font-size: 20px;
    }
    .icon{
        font-size: 32px;
        margin-right: 10px;
        margin-left: 10px;
        color: #707070;
    }
    .userFirstShop input{
        width: 65%;
    }
  
    .btn1{
        width:130px;
        word-spacing: 12px;
    }
    .btn2{
        width:200px;
        word-spacing: 12px;

    }
    
    .form-text{
        display: inline;
        color:red;
    }
    .noteText{
        font-size: 14px; 
        color:#707070;
    }
    small{
        display: inline-block;
    }
    #useremail , #userPassword{
        width:72%;
    }
    button:focus , input:focus {
    box-shadow: none;
    outline: none;
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
    input[type="radio"]:focus{
        outline: none;
    }
    ::placeholder{
        color: lightgray;
    }
 
</style>
<div class="container signInBox">
    <div class="col-lg-6 signIn">
    <div id="info-bar" class="alert alert-success" role="alert" style="display: none"></div>
        <article class="signInMain" id="info-bar">  
            <div class="signInH1">
                <h1>SIGN IN
                    <span style="font-size: 16px;">
                    登入會員即可快速結帳 </span>
                </h1>
            </div>
            <form class="userSignIn"  novalidate name="form2" method="post"
             >
                    <label class="leftbar" for="useremail">帳號：</label>
                    <input type="email" name="useremail" id="useremail" class="form-control">
                    <small class="form-text" ></small>
                
                    <label class="leftbar" for="password">密碼：</label>
                    <input type="password" name="userPassword" id="userPassword" class="form-control">
                    <small class="form-text" ></small>
                    <div >
                        <a class="forgetPassword" href="">忘記密碼?</a>
                    </div>
                    <div class="userClick">
                <div class="bottom">
                    <input onclick="return formCheck01()"  id="btn" type="submit" name="submit" value="登 入" class="btn1">
                </div>        
                <div class="rememberMe"><input type="radio" name="remmber"  />
                    記住我</div>
			</div>
                
            </form>

           
            <div class="fastSignIn">
                <p>快速登入</p>
                <a href=""><i class="fab fa-facebook-square icon"></i></a>
                <a href=""><i class="fab fa-line icon"></i></a>
                <a href=""><i class="fab fa-google icon"></i></a>
            </div>
        </article>    

    </div>
<div class="col-lg-6 firstShop">
<div id="info-bar2" class="alert alert-success" role="alert" style="display: none"></div>
    <article>
           <div class="userFirstShopH1"> 
               <h1>FIRST SHOP
                   <span style="font-size: 16px;">加入會員即可訂購</span>
                </h1>
            </div>
            <form class="userFirstShop form-group" novalidate name="form1" method="post">
              
                    <label class="firstIn" for="email">申請帳號：</label>
                        <input type="email" id="email" name="email" class="form-control">
                        <small id="emailHelp" class="form-text" ></small>
                    <div class="noteText">(電子郵件或手機號碼)</div>
                
                    <label class="firstIn" for="password">申請密碼：</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small id="passwordHelp" class="form-text"></small>
                    <div  class="noteText">(密碼至少要6個字母或數字)</div>
              
                
                    <label class="firstIn" for="password2">確認密碼：</label>
                        <input type="password" name="password2" id="password2" class="form-control">
                        <small class="form-text"></small>
                    <div  class="noteText">(密碼至少要6個字母或數字)
                    </div>
                <div class="firstClick">
                <div class="bottom firstClickBtn">
                    <button  onclick="return formCheck()" id="btn" type="submit" name="submit" class="btn2">註 冊</button>
                </div>        
            </div>
             </form>
            <div class="firstfastSignIn">
                <p>綁定帳號</p>
                <a href=""><i class="fab fa-facebook-square icon"></i></a>
                <a href=""><i class="fab fa-line icon"></i></a>
                <a href=""><i class="fab fa-google icon"></i></a>
            </div>
        </article>
</div>
        
</div>



<?php include __DIR__. '/_scripts.php' ?>
<script>
    const  email = $('#useremail'),
            password = $('#userPassword'),
            info_bar = $('#info-bar');
        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;


        function formCheck01(){
            email.next().text('');
            password.next().text('');
            email.css('border-color', '#CCCCCC');
            password.css('border-color', '#CCCCCC');
            // TODO: 檢查欄位
            let isPass = true;

            if(! email_re.test(email.val())){
                isPass = false;
                email.css('border-color', 'red');
                email.next().text('請填寫正確的 email 格式');
            }

            if(password.val().length <6){
                isPass = false;
                password.css('border-color', 'red');
                password.next().text('密碼長度太短');
            }
          
            if(isPass){
                $.post('login-api.php', $(document.form2).serialize(), function(data){
                    console.log(data);
                    if(data.success){
                        Swal.fire({
                            title: "登入成功",
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function(){
                        location.href = 'member.php';
                            }, 800);
                    } else {
                        Swal.fire({
                        title: "帳號或密碼錯誤",
                        icon: "error",
                        showConfirmButton: false,
                            timer: 1500    
                    });
                    }
                   

                }, 'json');
            }


            return false;
        }
</script>
<!-- ----------------------------------------------------- -->

<script>
    const email2 = $('#email'),
        password2 = $('#password'),
        info_bar2 = $('#info-bar2');
    const email2_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    function formCheck(){
        const confirm1 = document.getElementById('password').value;
        const confirm2 = document.getElementById('password2').value;
        const password3 = $('#password2');
        

        email2.next().text('');
        password2.next().text('');
        email2.css('border-color', '#CCCCCC');
        password2.css('border-color', '#CCCCCC');
        // TODO: 檢查欄位
        let isPass = true;

       

        if(!email2_re.test(email2.val())){
            isPass = false;
            email2.css('border-color', 'red');
            email2.next().text('請填寫正確的 email 格式');
        }

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
            $.post('register-api.php', $(document.form1).serialize(), function(data){
                console.log(data);
                if(data.success){                        
                    Swal.fire({
                            title: "已註冊成功",
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function(){
                        location.href = 'member-login.php';
                            }, 800);
                }
                    else {
                    Swal.fire({
                        title: "此帳號已註冊過",
                        icon: "error",
                        showConfirmButton: false,
                            timer: 1500    
                    });
                }
                   

            }, 'json');
        }

        return false;
    }
</script>
<?php include __DIR__. '/_html_footer.php' ?>



