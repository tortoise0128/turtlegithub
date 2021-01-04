<?php
if (empty($pageName)) {
    $pageName = '';
}
?>
<style>
    .header1 {
        width: 100%;
    }

    .header1-1 {
        display: flex;
        margin: 0 auto;
        padding-left: 0px;
        width: 80%;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        overflow: auto;
    }

    .header1-2 {
        /* flex: 1; */
        list-style: none;
    }

    .header1-2:hover {
        background: powderblue;
    }

    /* 購物清單檢視 */
    .sub-total {
        color: red;
    }

    .dropdown {
        /* position: relative; */
    }

    .dropdown-menu {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: wrap;
        overflow: auto;
        /* position: absolute; */
        display: none;
        /* z-index: 1; */
    }

    .dropdown-menu.active {
        display: block;
        /* left: 25%; */
        /* top: 15%; */
        /* right: 5%; */
        /* bottom: 10%; */
    }

    /* ----------------大家的版型-------------------- */
    .book {
        width: 100%;
    }

    .book1 {
        width: 80%;
        margin: 0 auto;
        overflow: auto;
    }

    .footer {
        display: flex;
        justify-content: flex-end;
        position: absolute;
        bottom: 0;
    }

    /* -------------大家的頁數-------------------- */
    .pagination {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        list-style: none;
    }

    .page-item {
        flex: 1;
        /* width: 5%; */
        /* 搞不定間距 */
    }

    /* ---------------大家的alert------------------ */
    .alert {
        text-align: center;
        font-weight: bold;
        /* color: whitesmoke; */
    }

    .alert-success {
        border: 2px dashed greenyellow;

    }

    .alert-danger {
        border: 2px dashed lightpink;
    }

    .form-group small {
        color: red;
    }

    .alertflex {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
</style>
<header>
    <div class="header1">
        <ul class="header1-1">
            <li class="header1-2"><a href="<?= WEB_ROOT ?>/tbookinsert.php">新增資料</a></li>
            <!-- ------------登入註冊-------------------- -->
            <?php if (isset($_SESSION['member'])) : ?>
                <li class="header1-2" style="font-weight: bold;">
                    你好，
                    <a href="">
                        <?= $_SESSION['member']['nickname'] ?>
                    </a>
                    !!!
                    <!-- //+<a class="" href="<?= WEB_ROOT ?>/tlogout.php">-登出-</a>+ -->
                </li>
                <li class="header1-2" style="font-weight: bold;">
                    +<a class="" href="<?= WEB_ROOT ?>/tlogout.php">-登出-</a>+
                </li>
            <?php else : ?>
                <li class="header1-2" style="font-weight: bold;">
                    +<a href="<?= WEB_ROOT ?>/tlogin.php">-登入-</a>+
                    <!-- //+<a href="<?= WEB_ROOT ?>/tregister.php">-註冊-</a>+ -->
                </li>
                <li class="header1-2" style="font-weight: bold;">
                    +<a href="<?= WEB_ROOT ?>/tregister.php">-註冊-</a>+
                </li>
            <?php endif; ?>
            <!-- ------------登入註冊-------------------- -->
        </ul>
        <ul class="header1-1">
            <li class="header1-2"><a href="<?= WEB_ROOT ?>/tproductlist.php">商品列表</a></li>
            <li class="header1-2"><a href="<?= WEB_ROOT ?>/tbooklist.php">資資料表</a></li>
            <li class="header1-2"><a href="<?= WEB_ROOT ?>/tcart.php">購物車+<span class="cart-count" style="color: red;">0</span>+</a> </li>
            <!-- cart-count在大家的scriipt裡 因為是共用的 -->
        </ul>
        <ul class="header1-1">
            <li class="header1-2 dropdown">
                <a href="#">購物清單檢視</a>
                <!-- "#" 哪裡也不去 在原地 -->
            </li>
            <li class="dropdown-menu cart-short-list" aria-labelledby="navbarDropdown">
                <!--
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        -->
            </li>
        </ul>
    </div>
</header>