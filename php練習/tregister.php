<?php
require __DIR__ . '/turtle128.php';
$pageName = 'ab-insert';
$pageTitle = '龜的註冊';
?>
<?php include __DIR__ . '/thead.php' ?>
<style>

</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <h3 class="card-title">龜的註冊</h3>
        <div id="info-bar" class="alert alert-success" role="alert" style="display: none"></div>


        <form name="form1" method="post" onsubmit="return formCheck()" novalidate>
            <div class="form-group">
                <label for="email">Email 帳號</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="emailHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password" placeholder="至少6位數字" name="password">
                <small id="passwordHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="nickname">暱稱</label>
                <input type="text" class="form-control" id="nickname" placeholder="至少2個國字" name="nickname">
                <small id="nicknameHelp" class="form-text"></small>
            </div>

            <button type="submit" class="btn btn-primary">註冊</button>
        </form>
        <p>如果已註冊，請到<a href="tlogin.php">登入</a>，謝謝</p>
    </div>

</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const email = $('#email'),
        nickname = $('#nickname'),
        password = $('#password'),
        info_bar = $('#info-bar');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    function formCheck() {
        email.next().text('');
        password.next().text('');
        nickname.next().text('');
        email.css('border-color', '#CCCCCC');
        password.css('border-color', '#CCCCCC');
        nickname.css('border-color', '#CCCCCC');
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

        if (nickname.val().trim().length < 2) {
            isPass = false;
            nickname.css('border-color', 'red');
            nickname.next().text('暱稱長度太短');
        }

        if (isPass) {
            $.post('tregisterapi.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    info_bar.removeClass('alert-danger')
                        .addClass('alert-success')
                        .html('註冊成功')
                        .css('background', 'green');
                    setTimeout(function() {
                        location.href = 'tlogin.php';
                    }, 3000);
                } else {
                    info_bar.removeClass('alert-success')
                        .addClass('alert-danger')
                        .html(data.error || '註冊失敗')
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