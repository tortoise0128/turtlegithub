<?php
if(empty($pageName)){
    $pageName = '';
}
?>
<style>

     * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Lusitana', 'Noto Sans TC', serif; 
    }


    .navWhite a{
        color:#fff;
    }
    .navWhite a:hover , .dropdown-item.navDD{
        color:#f2b46d;
    }
    .LogoNav{
        width: 136px;
        height: 100px;
    }
    .LogoNav img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .navAll{
        padding: 0 !important;
        margin: 25px 70px;
        position: absolute !important;
        width: 90%;
        top: 0;
        z-index: 2 !important;
    }
    .navLeft a{
        font-size: 24px;
        font-family: 'Lusitana', serif;
    }

    .navRight .countSet{
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

    .navRight{
        font-size: 24px;
    }
    .navIcon{
        z-index: 15;
    }


    @media screen and (max-width:968px){
        
        
        .LogoNav{
            width: 70px;
            height: 70px;
        }
        .nav-item{
            display: none;
        }
        .navAll{
            width: 85%;
            margin:15px 25px;
            position: absolute !important;
        }
        
        .navRight {
            flex-direction: row;
        }
        .navRight li{
            margin: 0 10px;
            padding: 0;
        }
        .navRight li a{
            align-items: center;
        }
        nav #navbarSupportedContent{
            flex-basis: unset;
        }

        .rightBar{
            position: absolute;
            left: -30px;
        }

    }

/* ----------------------------------- */


    :root {
    --overlay-color: rgba(24, 39, 51 , 0.85);
    --menu-speed: 0.75s;
    }



    .menu-wrap .toggler {
    position: absolute;
    z-index: 12;
    cursor: pointer;
    width: 52px;
    height: 52px;
    opacity: 0;
    }

    .menu-wrap .hamburger {
    position: absolute;
    z-index: 11;
    width: 52px;
    height: 52px;
    padding: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    /* Hamburger Line */
    .menu-wrap .hamburger > div {
    position: relative;
    flex: none;
    width: 100%;
    height: 2px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    
    }

    /* Hamburger Lines - Top & Bottom */
    .menu-wrap .hamburger > div::before,
    .menu-wrap .hamburger > div::after {
    content: '';
    position: absolute;
    z-index: 11;
    top: -10px;
    width: 100%;
    height: 2px;
    background: inherit;
    }

    /* Moves Line Down */
    .menu-wrap .hamburger > div::after {
    top: 10px;
    }

    /* Toggler Animation */
    .menu-wrap .toggler:checked + .hamburger > div {
    transform: rotate(135deg);
    background: #000;
    }

    /* Turns Lines Into X */
    .menu-wrap .toggler:checked + .hamburger > div:before,
    .menu-wrap .toggler:checked + .hamburger > div:after {
    top: 0;
    transform: rotate(90deg);
    background: #000;
    }

    /* Rotate On Hover When Checked */
    .menu-wrap .toggler:checked:hover + .hamburger > div {
    transform: rotate(225deg);
    }

    /* Show Menu */
    .menu-wrap .toggler:checked ~ .menu {
    visibility: visible;
    }

    .menu-wrap .toggler:checked ~ .menu > div {
    transform: scale(1);
    transition-duration: var(--menu-speed);
    }

    .menu-wrap .toggler:checked ~ .menu > div > div {
    opacity: 1;
    transition:  opacity 0.4s ease 0.4s;
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
    z-index: 5;
    }

    .menu > div {
    background:rgba(255, 255, 255);
    border-radius: 50%;
    width: 300vw;
    height: 300vw;
    display: flex;
    flex: none;
    align-items: center;
    justify-content: center;
    transform: scale(0);
    transition: all 0.4s ease;
    z-index: 10;
    }

    .menu > div > div {
    text-align: center;
    max-width: 90vw;
    max-height: 100vh;
    opacity: 0;
    transition: opacity 0.4s ease;
    }

    .menu > div > div ul li {
    list-style: none;
    color: #000;
    font-size: 1.5rem;
    padding: 1rem;
    }

    .menu > div > div ul li a {
    color: inherit;
    text-decoration: none;
    transition: color 0.4s ease;
    }

    @media screen and (min-width: 968px){
    .menu-wrap{
        display: none;
    }

    .dropdown-item.navDD{
        color: #707070;
    }
}
</style>


<nav class="navbar navbar-expand-lg d-flex navAll">

<a class="navbar-brand LogoNav" href="#">
    <img src="img/logowhite.png" alt="">
</a>


<div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
    <div class="col-lg-10">
        <ul class="navbar-nav d-flex justify-content-around navLeft ">

            <li class="nav-item navWhite">
                <a class="nav-link" href="<?= WEB_ROOT ?>/_index.php">Home</a>
            </li>

            <li class="nav-item navWhite">
                <a class="nav-link" href="<?= WEB_ROOT ?>/product.php">Products</a>
            </li>

            <li class="nav-item navWhite">
                <a class="nav-link " href="<?= WEB_ROOT ?>" >Workshop</a>
            </li>
            
            <li class="nav-item navWhite active">
                <a class="nav-link" href="<?= WEB_ROOT ?>/_about_us.php">About</a>
            </li>

            <li class="nav-item navWhite">
                <a class="nav-link" href="<?= WEB_ROOT ?>">Layout</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2 rightBar">
        <ul class="navbar-nav d-flex justify-content-end navRight ">
        <?php if(isset($_SESSION['member'])): ?>
                <li class="nav-item dropdown navWhite">
                        <a class="nav-link dropdown-toggle" href="<?= WEB_ROOT ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item navDD" href="<?= WEB_ROOT ?>/member.php">會員中心</a>
                            <a class="dropdown-item navDD" href="#">訂單查詢</a>
                            <a class="dropdown-item navDD" href="#">收藏</a>
                            <a class="dropdown-item navDD" href="<?= WEB_ROOT ?>/logout.php">登出</a>
                        </div>
                    </li>
            <?php else: ?>
                <li class="navWhite">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/member-login.php">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <?php endif; ?>

            <li class="navWhite">
                <a class="nav-link" href="<?= WEB_ROOT ?>/shopping_Cart.php">
                    <i class="fas fa-shopping-cart"><span class="countSet cart-count">0</span></i>
                </a>
            </li>
            <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                <div class="hamburger"><div></div></div>
                <div class="menu">
                  <div>
                    <div>
                      <ul>
                        <li><a href="<?= WEB_ROOT ?>/_index.php">Home</a></li>
                        <li><a href="<?= WEB_ROOT ?>/product.php">Products</a></li>
                        <li><a href="#">Workshop</a></li>
                        <li><a href="<?= WEB_ROOT ?>/_about_us.php">About</a></li>
                        <li><a href="#">Layout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        </ul>
    </div>

</div>
</nav>
