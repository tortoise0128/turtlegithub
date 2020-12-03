<?php
if (empty($pageName)) {
    $pageName = '';
}
?>

<style>
    * {
        box-sizing: border-box;
        font-family: 'Lusitana', 'Noto Sans TC', serif;
    }


    li a {
        color: #000;
    }

    .Logo {
        width: 136px;
        height: 100px;
    }

    .Logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    nav {
        padding: 0 !important;
        margin: 25px 70px;
        /* position: absolute !important;
        width: 90%;
        top: 0; */
    }

    .navLeft a {
        font-size: 24px;
        font-family: 'Lusitana', serif;
    }

    .nav-link:hover {
        color: #f2b46d;
    }

    .navRight .countSet {
        font-size: 16px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #f2b46d;
        color: #000;
        position: absolute;
        top: 0;
        right: 15px;
        text-align: center;
        line-height: 25px;
    }

    .navRight {
        font-size: 24px;
    }


    @media screen and (max-width:968px) {


        .Logo {
            width: 70px;
            height: 70px;
        }

        .nav-item {
            display: none;
        }

        nav {
            width: 85%;
            margin: 15px 25px;
            /* position: absolute !important; */
        }

        .navRight {
            flex-direction: row;
        }

        .navRight li {
            margin: 0 10px;
            padding: 0;
        }

        .navRight li a {
            align-items: center;
        }

        nav #navbarSupportedContent {
            flex-basis: unset;
        }

        .rightBar {
            position: absolute;
            left: -30px;
        }

        .MenuAll {
            padding: 0;
        }

    }

    /* ----------------------------------- */


    :root {
        --overlay-color: rgba(24, 39, 51, 0.85);
        --menu-speed: 0.75s;
    }



    .menu-wrap .toggler {
        position: absolute;
        z-index: 112;
        cursor: pointer;
        width: 52px;
        height: 52px;
        opacity: 0;
    }

    .menu-wrap .hamburger {
        position: absolute;
        z-index: 111;
        width: 52px;
        height: 52px;
        padding: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Hamburger Line */
    .menu-wrap .hamburger>div {
        position: relative;
        flex: none;
        width: 100%;
        height: 2px;
        background: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;

    }

    /* Hamburger Lines - Top & Bottom */
    .menu-wrap .hamburger>div::before,
    .menu-wrap .hamburger>div::after {
        content: '';
        position: absolute;
        z-index: 111;
        top: -10px;
        width: 100%;
        height: 2px;
        background: inherit;
    }

    /* Moves Line Down */
    .menu-wrap .hamburger>div::after {
        top: 10px;
    }

    /* Toggler Animation */
    .menu-wrap .toggler:checked+.hamburger>div {
        transform: rotate(135deg);
    }

    /* Turns Lines Into X */
    .menu-wrap .toggler:checked+.hamburger>div:before,
    .menu-wrap .toggler:checked+.hamburger>div:after {
        top: 0;
        transform: rotate(90deg);
    }

    /* Rotate On Hover When Checked */
    .menu-wrap .toggler:checked:hover+.hamburger>div {
        transform: rotate(225deg);
    }

    /* Show Menu */
    .menu-wrap .toggler:checked~.menu {
        visibility: visible;
    }

    .menu-wrap .toggler:checked~.menu>div {
        transform: scale(1);
        transition-duration: var(--menu-speed);
    }

    .menu-wrap .toggler:checked~.menu>div>div {
        opacity: 1;
        transition: opacity 0.4s ease 0.4s;
    }

    .menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        visibility: hidden;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 107;
    }

    .menu>div {
        background: rgba(255, 255, 255);
        border-radius: 50%;
        width: 300vw;
        height: 300vw;
        display: flex;
        flex: none;
        align-items: center;
        justify-content: center;
        transform: scale(0);
        transition: all 0.4s ease;
        z-index: 110;
    }

    .menu>div>div {
        text-align: center;
        max-width: 90vw;
        max-height: 100vh;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .menu>div>div ul li {
        list-style: none;
        color: #000;
        font-size: 1.5rem;
        padding: 1rem;
    }

    .menu>div>div ul li a {
        color: inherit;
        text-decoration: none;
        transition: color 0.4s ease;
    }

    @media screen and (min-width: 968px) {
        .menu-wrap {
            display: none;
        }
    }
</style>


<nav class="navbar navbar-expand-lg d-flex">

    <a class="navbar-brand Logo" href="<?= WEB_ROOT ?>/RWD_index.php">
        <img src="img/logoblack.png" alt="">
    </a>


    <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
        <div class="col-lg-10">
            <ul class="navbar-nav d-flex justify-content-around navLeft ">

                <li class="nav-item ">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_product.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?= WEB_ROOT ?>/RWD_course.php">Course</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_about_us.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_Wedding-1.php">Layout</a>
                </li>

            </ul>
        </div>
        <div class="col-lg-2 rightBar">
            <ul class="navbar-nav d-flex justify-content-end navRight ">
                <?php if (isset($_SESSION['member'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= WEB_ROOT ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= WEB_ROOT ?>/RWD_mobile-1-2.php">會員中心</a>
                            <a class="dropdown-item" href="<?= WEB_ROOT ?>/RWD_mobile-2-2Order.php.php">訂單查詢</a>
                            <a class="dropdown-item" href="#">收藏</a>
                            <a class="dropdown-item" href="<?= WEB_ROOT ?>/logout.php">登出</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li>
                        <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_mobile-1login.php">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <li>
                    <a class="nav-link" href="<?= WEB_ROOT ?>/RWD_cart_2.php">
                        <i class="fas fa-shopping-cart"><span class="countSet cart-count">0</span></i>

                    </a>
                </li>
                <div class="menu-wrap">
                    <input type="checkbox" class="toggler">
                    <div class="hamburger">
                        <div></div>
                    </div>
                    <div class="menu">
                        <div>
                            <div>
                                <ul class="MenuAll">
                                    <li><a href="<?= WEB_ROOT ?>/RWD_index.php">Home</a></li>
                                    <li><a href="<?= WEB_ROOT ?>/RWD_product.php">Products</a></li>
                                    <li><a href="<?= WEB_ROOT ?>/RWD_course.php">Course</a></li>
                                    <li><a href="<?= WEB_ROOT ?>/RWD_about_us.php">About</a></li>
                                    <li><a href="<?= WEB_ROOT ?>/RWD_Wedding-1.php">Layout</a></li>
                                    <?php if (isset($_SESSION['member'])) : ?>

                                        <li><a href="<?= WEB_ROOT ?>/RWD_mobile-1-2.php">Member</a></li>
                                    <?php else : ?>
                                        <li><a href="<?= WEB_ROOT ?>/RWD_mobile-1login.php">Member</a></li>
                                    <?php endif; ?>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <?php if (isset($_SESSION['member'])) : ?>

                                        <li><a href="<?= WEB_ROOT ?>/RWD_logout.php">Logout</a></li>
                                    <?php else : ?>
                                        <!-- <li><a href="<= WEB_ROOT ?>/RWD_logout.php"></a></li> -->
                                    <?php endif; ?>




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>

    </div>
</nav>