<?php
require __DIR__ . '/turtle128.php';
$pageName = 'bookinsert';
$pageTitle = '龜的新增資料';
?>
<?php include __DIR__ . '/thead.php' ?>
<style>

</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <h3 class="card-title">龜的新增資料</h3>
        <div id="info-bar" class="alert alert-success" role="alert" style="display: none">dsrfghrf</div>
        <!-- 恩 不會出現 -->
        <form name="form1" method="post" onsubmit="return formCheck()" novalidate>
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <small id="nameHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="email">電郵</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="emailHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="mobile">手機</label>
                <input type="text" class="form-control" id="mobile" pattern="09\d{2}-?\d{3}-?\d{3}" name="mobile" placeholder="09XX-XXX-XXX">
                <small id="mobileHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="birthday">生日</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
                <small id="birthdayHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="address">地址</label>
                <textarea class="form-control" id="address" name="address" cols="30" rows="3"></textarea>
                <small id="addressHelp" class="form-text"></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="button" value="回資料表" onclick="location.href='tbooklist.php'">
        </form>
        <!-- <button type=""><a href="tbooklist.php">回龜的資料表</a></button> -->
    </div>

</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const email = $('#email'),
        mobile = $('#mobile'),
        info_bar = $('#info-bar');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    function formCheck() {
        email.next().text('');
        mobile.next().text('');
        email.css('border-color', '#CCCCCC');
        mobile.css('border-color', '#CCCCCC');
        // TODO: 檢查欄位
        let isPass = true;

        if (!email_re.test(email.val())) {
            isPass = false;
            email.css('border-color', 'red');
            email.next().text('請填寫正確的 email 格式');
            // 那個small
        }

        if (!mobile_re.test(mobile.val())) {
            isPass = false;
            mobile.css('border-color', 'red');
            mobile.next().text('請填寫正確的手機格式');
        }

        if (isPass) {
            $.post('tbookinsertapi.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    info_bar.removeClass('alert-danger')
                        .addClass('alert-success')
                        .html('新增成功')
                        .css('background', 'green');
                } else {
                    info_bar.removeClass('alert-success')
                        .addClass('alert-danger')
                        .html(data.error || '新增失敗')
                        // data.error = '沒有姓名資料'
                        .css('background', 'red');
                }
                info_bar.slideDown();

                setTimeout(function() {
                    info_bar.slideUp();
                }, 3000);

            }, 'json');
        }


        return false;
    }
</script>
<?php require __DIR__ . '/tfoot.php' ?>