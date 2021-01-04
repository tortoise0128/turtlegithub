<?php
require __DIR__ . '/turtle128.php';
$pageName = 'booklistedit';
$pageTitle = '龜的修改資料';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "SELECT * FROM `address_book` WHERE `sid`=$sid";
$row = $pdo->query($sql)->fetch();
if (empty($row)) {
    header('Location: tbooklist.php');
    exit;
}

?>
<?php include __DIR__ . '/thead.php' ?>
<style>

</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">

        <h3 class="card-title">龜的修改資料</h3>
        <div id="info-bar" class="alert alert-success" role="alert" style="display: none"></div>

        <form name="form1" method="post" onsubmit="return formCheck()" novalidate>
            <input type="hidden" name="sid" value="<?= $row['sid'] ?>">
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= htmlentities($row['name']) ?>" required>
                <small id="nameHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="email">電郵</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlentities($row['email']) ?>">
                <small id="emailHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="mobile">手機</label>
                <input type="text" class="form-control" id="mobile" pattern="09\d{2}-?\d{3}-?\d{3}" value="<?= htmlentities($row['mobile']) ?>" name="mobile" placeholder="09XX-XXX-XXX">
                <small id="mobileHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="birthday">生日</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
                <small id="birthdayHelp" class="form-text"></small>
            </div>
            <div class="form-group">
                <label for="address">地址</label>
                <textarea class="form-control" id="address" name="address" cols="30" rows="3"><?= htmlentities($row['address']) ?></textarea>
                <small id="addressHelp" class="form-text"></small>
            </div>
            <button type="submit" class="btn btn-primary">修改</button>
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
    // 討人厭的正規表達式
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
        }

        if (!mobile_re.test(mobile.val())) {
            isPass = false;
            mobile.css('border-color', 'red');
            mobile.next().text('請填寫正確的手機格式');
        }

        if (isPass) {
            $.post('tbooklisteditapi.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    info_bar.removeClass('alert-danger')
                        .addClass('alert-success')
                        .html('修改成功')
                        .css('background', 'green');
                } else {
                    info_bar.removeClass('alert-success')
                        .addClass('alert-danger')
                        .html(data.error || '資料沒有修改')
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