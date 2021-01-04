<?php
require __DIR__ . '/turtle128.php';
$pageName = 'login';
$pageTitle = '龜的登入';
?>
<?php include __DIR__ . '/thead.php' ?>
<style>

</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <h3 class="card-title">龜的登入</h3>
        <div id="info-bar" class="alert alert-success" role="alert" style="display: none">dsrfghrf</div>
        <form name="form1" method="post" onsubmit="return formCheck()" novalidate>
            <!--action連接資料庫get不保密要用post-->
            <div class="form-group">
                <label for="email">Email 帳號</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="emailHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="至少6位數字">
                <small id="passwordHelp" class="form-text"></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>如果未註冊，請到<a href="tregister.php">註冊</a>，謝謝</p>
    </div>
</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const email = $('#email'),
        password = $('#password'),
        info_bar = $('#info-bar');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;


    function formCheck() {
        email.next().text('');
        password.next().text('');
        email.css('border-color', '#CCCCCC');
        password.css('border-color', '#CCCCCC');
        // TODO: 檢查欄位
        let isPass = true;

        if (!email_re.test(email.val())) {
            isPass = false;
            email.css('border-color', 'red');
            email.next().text('請填寫正確的 email 格式');
        }

        if (password.val().length < 6) {
            isPass = false;
            password.css('border-color', 'red');
            password.next().text('密碼長度太短');
        }

        if (isPass) {
            $.post('tloginapi.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    info_bar.removeClass('alert-danger')
                        .addClass('alert-success')
                        .html('登入成功')
                        .css('background', 'green');
                    setTimeout(function() {
                        location.href = 'tproductlist.php';
                        // 跳轉到商品頁
                    }, 3000);
                } else {
                    info_bar.removeClass('alert-success')
                        .addClass('alert-danger')
                        .html('帳號或密碼錯誤')
                        .css('background', 'red');
                }
                info_bar.slideDown();

                setTimeout(function() {
                    info_bar.slideUp();
                }, 2000);

            }, 'json');
        }


        return false;
    }
</script>
<?php require __DIR__ . '/tfoot.php' ?>