<?php include __DIR__. '/_connect_db.php'; 
$pageName = 'mobile-1login';

?>

<?php include __DIR__ . '/_html_header.php' ?>
<style>
@import url("https://fonts.googleapis.com/css?family=Fira+Sans");
html, body {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
   background-color:cadetblue;

}

.form-structor {
  /* background-color:cadetblue; */
  height: 812px;
  width: 375px;
  position: relative;
  overflow: hidden;
}

.form-structor::after {
  content: '';
  opacity: .8;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-repeat: no-repeat;
  background-position: left bottom;
  background-size: 600px;
  background-image: url("https://images.unsplash.com/photo-1575558418409-8620c7a691a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2832&q=80 2832w, ");
}

.form-structor .signup {
  position: absolute;
  top: 40%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 65%;
  z-index: 5;
  -webkit-transition: all .3s ease;
}

.form-structor .signup.slide-up {
  top: 5%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all .3s ease;
}

.form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
}

.form-structor .signup.slide-up .form-title {
  font-size: 1.5em;
  color: white;
  cursor: pointer;
}

.form-structor .signup.slide-up .form-title span {
  margin-right: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}

.form-structor .signup .form-title {
  color: #fff;
  font-size: 2em;
  text-align: center;
  margin-right: 20px;
}

.form-structor .signup .form-title span {
  color:#f2b46d;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}

.form-structor .signup .form-holder {
  /* border-radius: 15px; */
  /* background-color: #fff; */
  overflow: hidden;
  margin-top: 50px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}

.form-structor .signup .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 40px;
  line-height: 40px;
  padding: 8px 15px;
  border-bottom: 1px solid #eee;
  width: 100%;
  font-size: 12px;
  margin-top: 30px;
  border-radius: 30px;
}
.text{
    margin-left: 30px;
}
.form-structor .signup .form-holder .input:last-child {
  border-bottom: 0;
}

.form-structor .signup .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.form-structor .signup .submit-btn {
  background-color: white;
  color: black;
  border: 0;
  border-radius: 30px;
  display: block;
  margin: 15px auto;
  margin-top: 30px;
  padding: 15px 45px;
  width: 100%;
  height: 40px;
  line-height: 10px;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
  
}

.form-structor .signup .submit-btn:hover {
  transition: all .3s ease;
  background-color: rgba(255, 255, 255, 0.7);
}

.form-structor .login {
  position: absolute;
  top: 30%;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 5;
  -webkit-transition: all .3s ease;
}

.form-structor .login::before {
  content: '';
  position: absolute;
  left: 50%;
  top: -20px;
  -webkit-transform: translate(-50%, 0);
  background-color: #fff;
  width: 200%;
  height: 250px;
  border-radius: 100%;
  z-index: 4;
  -webkit-transition: all .3s ease;
}

.form-structor .login .center {
  position: absolute;
  top: calc(50% - 10%);
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 65%;
  z-index: 5;
  -webkit-transition: all .3s ease;
}

.form-structor .login .center .form-title {
  /* color: #000; */
  font-size: 1.7em;
  text-align: center;
  margin-right: 40px;
  color: #f2b46d;

}
.small{
    font-size: 12px;
    margin-left: 5px;
    color: #B9B4B4;
}

.form-structor .login .center .form-title span {
  color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}

.form-structor .login .center .form-holder {
  /* border-radius: 15px; */
  /* background-color: #E4E4E4; */
  /* border: 1px solid #eee; */
  overflow: hidden;
  margin-top: 40px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}

.form-structor .login .center .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 40px;
  line-height: 40px;
  padding: 8px 15px;
  /* border-bottom: 1px solid #eee; */
  width: 100%;
  font-size: 14px;
  background-color: #E4E4E4;
  margin-top: 15px;
  border-radius: 20px;
}

.form-structor .login .center .form-holder .input:last-child {
  border-bottom: 0;
}

.form-structor .login .center .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}

.form-structor .login .center .submit-btn {
  background-color: #f2b46d;
  color: white;
  border: 0;
  border-radius: 30px;
  display: block;
  margin: 15px auto;
  margin-top: 30px;
  padding: 15px 45px;
  width: 100%;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  height: 40px;
  line-height: 10px;
  -webkit-transition: all .3s ease;
}

.form-structor .login .center .submit-btn:hover {
  transition: all .3s ease;
  background-color:#f2b46d;
  opacity:0.5;
}

.form-structor .login.slide-up {
  top: 90%;
  -webkit-transition: all .3s ease;
}

.form-structor .login.slide-up .center {
  top: 10%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all .3s ease;
}

.form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}

.form-structor .login.slide-up .form-title {
  font-size: 1em;
  margin: 0;
  padding: 0;
  cursor: pointer;
  -webkit-transition: all .3s ease;
}

.form-structor .login.slide-up .form-title span {
  margin-right: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.firstfastSignIn{
        display:flex;
        justify-content: center;
        /* margin-left: 80px; */
        font-size: 20px;
    }
    .icon{
        font-size: 24px;
        margin-right: 10px;
        margin-left: 10px;
        color: gray;
    }
    .icon2{
        font-size: 24px;
        margin-right: 10px;
        margin-left: 10px;
        margin-top: 15px;
        color: white;
    }
    .small{
        display: inline-block;
    }
    .form-text{
      display: inline;
        color:red;
    }
    </style>

<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>[Ban `Lan]<br><p class="text">____</p></h2>
		<form class="form-holder" name="form2" method="post">
      
      <input type="email" class="input" placeholder="Email" name="useremail"
      id="useremail"/>
      <small class="form-text" ></small>
      <input type="password" class="input" placeholder="Password"  name="userPassword" id="userPassword"/>
      <small class="form-text" ></small>
		</form>
        <button class="submit-btn" onclick="return formCheck01()" id="btn" type="submit" name="submit" value="登 入">Sign In</button>
        <div class="firstfastSignIn">
                <a href=""><i class="fab fa-facebook-square icon2"></i></a>
                <a href=""><i class="fab fa-line icon2"></i></a>
                <a href=""><i class="fab fa-google icon2"></i></a>
            </div>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>New Account</h2>
			<form class="form-holder" name="form1">
                <label class="firstIn" for="email"></label>
                <input type="email" class="input" placeholder="Email" id="email" name="email"/>
                <small id="emailHelp" class="form-text" ></small>
                <div class="small">(填寫註冊電子郵件)</div>
                <label class="firstIn" for="password"></label>
                <input  type="password" class="input" placeholder="申請密碼" name="password" id="password"/>
                <small id="passwordHelp" class="form-text"></small>
                <div class="small">(密碼至少要6個字母或數字)</div>
                <label class="firstIn" for="password2"></label>
                <input type="password" name="password2" class="input" placeholder="確認密碼" id="password2"/>
                <small class="form-text" ></small>
                <div class="small">(密碼至少要6個字母或數字)</div>
                <button onclick="return formCheck()" class="submit-btn btn2" id="btn" type="submit" name="submit">Sign Up</button>
			</form>
            
            <div class="firstfastSignIn">
                <a href=""><i class="fab fa-facebook-square icon"></i></a>
                <a href=""><i class="fab fa-line icon"></i></a>
                <a href=""><i class="fab fa-google icon"></i></a>
            </div>
		</div>
	</div> 
</div>
<?php include __DIR__ . '/_scripts.php' ?>

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
                        location.href = 'mobile-1-2.php';
                            }, 3000);
                    } else {
                        Swal.fire({
                        title: "此帳號尚未註冊",
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
                        location.href = 'mobile-1login.php';
                            }, 3000);
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
<script>
    console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
</script>