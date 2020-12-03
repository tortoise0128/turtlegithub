<?php include __DIR__ . "/_connect_db.php" ?>

<?php include __DIR__ . "/_html_header.php" ?>

<?php include __DIR__ . "/RWD_navbar.php" ?>
<style>
    @media screen and (max-width:375px) {
        .imgFix {
            border: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel-item{
            width: 100%;
            height: 600px;
            overflow: hidden;
        }
        .carousel-inner img {
        height: 1076px;
    }
    

    }
    @media screen and (max-width: 968px){}
        .navRight {
            flex-direction: row !important;
        }

    /* 節慶花禮 */

    * {
        font-family: 'Lusitana', 'Noto Sans TC', serif;
    }

    .container {
        max-width: 1166px;
        margin-top: 100px;
    }

    .section {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
    }

    .section1 {
        font-size: 18px;
        font-weight: bold;

        display: flex;
        justify-content: center;
    }

    .word1 {
        color: #F2B46D;

        border-bottom: 6px solid #F2B46D;
        margin: 12px;

    }

    .word2 {
        color: #707070;

        border-bottom: 6px solid #707070;
        margin: 12px;

    }

    .content1 {
        display: flex;
        justify-content: center;
        font-weight: 16px;
        color: #707070;
        font-weight: bold;
        padding: 10px;
    }

    @media screen and (max-width:375px) {
        .word1 {
            border-bottom: 3px solid #F2B46D;
            width: 170px;
            text-align: center;
        }

        .word2 {
            border-bottom: 3px solid #707070;
            width: 170px;
            text-align: center;
        }

        .content1 {
            display: none;
        }

        .section1 {
            letter-spacing: 5px;
        }
    }

    /* 節慶花禮結束 */

    /* 四張圖片開始 */

    .content {
        margin: auto;
        padding: 10px;
        /* width: 1620px; */
    }

    .image {
        padding: 10px;
        height:355px;
    }

    .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .flowerTitle {
        font-size: 14px;
        font-weight: bold;
        color: #707070;
    }

    .flowerPrice {
        font-size: 14px;
        font-weight: bold;
        color: #707070;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    @media screen and (max-width:375px) {

        .image {
            padding: 0;
        }

        .img-summer {
            border: 0;
            width: 100%;
        }

        .info{
            position: absolute;
            bottom: 10px;
        }

        .info p {
            margin: 8px 0 8px 24px;
            letter-spacing: 1px;
            font-size: 16px;
            color: #707070;
        }

        .flowerTitle {
            font-size: 16px;
            font-weight: bold;
            color: #6B6B6B;
        }

        .flowerPrice {
            font-size: 16px;
            font-weight: bold;
            color: #F2B46D;
        }

        .slick-prev:before,
        .slick-next:before {
            display: none;
        }

        .flowerPrice {
            color: #F2B46D;
        }
    }

    /* 換shop now */
    .container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        /* max-width: 1166px; */
    }

    .shopnow {
        font-size: 36px;
        font-weight: bold;
        border-bottom: 2px solid #000;
        /* margin: 60px; */
        display: flex;

    }

    @media screen and (max-width:375px) {
        .shopnow {
            font-size: 16px;
            margin: 55px 0 15px;
        }
        .container{
            margin-top: 10px;
        }
    }

    /* 換夏日實驗 */

    @media screen and (max-width:375px) {
        .summer {
            font-size: 28px;
            color: #707070;
            font-weight: bold;
            margin: 0 auto;
        }

        .sec1 {
            display: flex;
            flex-direction: column;
        }

        .sec2 {
            display: flex;
            flex-direction: row;
            margin-bottom: 20px;
        }
        .summer-img1{
            width: 326px;
            height: 210px;
            overflow: hidden;
        }
        .summer-img2, .summer-img3{
            width: 161px;
            height: 161px;
        }
        .summer-img2 img {
            margin-right: 7px;
        }
        .summer-img3 {
            margin-left: 7px;
        }

        .info-1 p {
            margin-bottom: 0;
        }
    }

    /* 捧花主題課程 */
    @media screen and (max-width:375px) {
        .lesson {
            font-size: 24px;
            color: #707070;
            font-weight: bold;
            margin: 50px auto 10px;
        }
        .text-title {
            font-weight: bold;
            color: #707070;
            font-size: 18px;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .text-1 ,.text-2 {
            font-size: 14px;
            color: #707070;
            letter-spacing: 2px;
            line-height: 21px;
        }

        .summer-overimg img {
            width: 100%;
            height: 260px;
        }
        .courseImgAll img{
            object-fit: cover;
        }
    }

    .word110 {
        color: #707070;
        /* margin: 0 auto; */
        border-bottom: 6px solid #707070;
        margin: 12px;
        cursor: pointer;
        /*  turtle我動過的 */

    }

    .word120 {
        color: #707070;
        /* margin: 0 auto; */
        border-bottom: 6px solid #707070;
        margin: 12px;
        cursor: pointer;
        /* turtle我動過的 */

    }

    .word110.sun1 {
        color: #F2B46D;
        border-bottom: 6px solid #F2B46D;
        margin: 12px;
    }

    .word120.sun1 {
        color: #F2B46D;
        border-bottom: 6px solid #F2B46D;
        margin: 12px;
    }

    .sunflower,.sunflower2 {
        visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .sunflower.sun, .sunflower2.sun {
        visibility: visible;
    }

    .LayoutImage{
        width: 100%;
        height: 230px;
        overflow: hidden;
    }
    .LayoutImage .info > p{
        color:#fff;
    }
</style>
</head>

<body>

<header>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <?php include __DIR__ . "/index_slides.php" ?>
            </div>
    </header>
    <!-- 節慶花禮開始 -->
    <div class="section">
        <div class="section1">
            <div class="word1 word110 sun1">精選商品</div>
            <div class="word2 word120">節慶花禮</div>
        </div>

        <div class="content1">Check out our best sellers.</div>
    </div>
    <!-- 節慶花禮結束 -->

    <!-- 四張圖片slider -->
    <div class="content">
        <div class="position-relative" style="height:400px">
            <div class="sunflower sun">
                <div class="slider">
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=64"><img src="img/winter-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">冬日</p>
                                <p class="flowerPrice">NT 3,780</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=80"><img src="img/tuwhite-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">淨白亮度</p>
                                <p class="flowerPrice">NT 1,280</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=77"><img src="img/danger-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">耽美</p>
                                <p class="flowerPrice">NT 4,800</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=88"><img src="img/blue-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">輕藍典緻</p>
                                <p class="flowerPrice">NT 4,800</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=75"><img src="img/orchid-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">粉蘭</p>
                                <p class="flowerPrice">NT 4,500</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=17"><img src="img/wedding-5.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">甜蜜花嫁</p>
                                <p class="flowerPrice">NT 2,450</p>
                            </div>


                        </div> 
                    </div>
                </div> 

            </div> 
            <!-- 四張圖片slider結束 -->
            <div class="sunflower2">
                <div class="slider">
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=52"><img src="img/clean-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">純潔的愛</p>
                                <p class="flowerPrice">NT 4,280</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=53"><img src="img/end-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">無盡</p>
                                <p class="flowerPrice">NT 1,880</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=45"><img src="img/never-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">青春不散場</p>
                                <p class="flowerPrice">NT 1,980</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=55"><img src="img/view-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">最美的風景</p>
                                <p class="flowerPrice">NT 2,980</p>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=44"><img src="img/wife-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">老婆是用來疼的</p>
                                <p class="flowerPrice">NT 2,580</p>
                            </div>


                        </div> 
                    </div>
                    <div>
                        <div class="image">
                        <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=39"><img src="img/you-1.jpg" alt=""></a>
                            <div class="info">
                                <p class="flowerTitle">獻，誨我諄諄的你</p>
                                <p class="flowerPrice">NT 3,200</p>
                            </div>


                        </div> 
                    </div>
                </div> <!-- end slider -->
            </div>
        </div>
    </div>
    <!-- 換shop now -->

    <div class="container">
        <div class="shopnow">Shop Now</div>
    </div>
    <!-- shop now結束 -->

    <!-- 換夏日實驗 -->
    <div class="container">
        <div class="sec1">
            <div class="summer">
                <p>2020夏日實驗</p>
            </div>
            <div class="summer-img1 "><img class="imgFix" src="img/Summer_East_1.jpg" alt=""></div>
        </div>
    </div>
    <div class="container">
        <div class="sec2">
            <div class="summer-img2">
            <a href="<?= WEB_ROOT ?>/RWD_product_in.php?sid=91"><img class="img-summer imgFix" src="img/sunorg-1.jpg" alt=""></a>
                <div class="info-1">
                    <p class="flowerTitle">耀眼光芒</p>
                    <p class="flowerPrice">NT 2,500</p>
                </div>
            </div>
            <div class="summer-img3">
            <a href="<?=WEB_ROOT ?>/RWD_product_in.php?sid=94"><img class="img-summer imgFix" src="img/poem-1.jpg" alt=""></a>
                <div class="info-1">
                    <p class="flowerTitle">詩意</p>
                    <p class="flowerPrice">NT 1,800</p>
                </div>
            </div>
        </div>
    </div>
    <!-- 換捧花主題課程 -->
    <!-- 第一個課程 -->
    <div class="container">
        <div class="sec1">
            <div class="lesson">
                <p>捧花主題課程</p>
            </div>
        </div>
    </div>

    <div class="container-over">
        <div class="summer-overimg courseImgAll"><a href="<?= WEB_ROOT ?>/RWD_coursein.php?sid=2"><img src="img/course/red.jpg" alt=""></a></div>
    </div>

    <div class="container">
        <div class="text">
            <div class="text-title">
                <p>
                捧花主題課程｜《猖狂之紅》
                </p>
            </div>
            <div class="text-1">
                <p>/
                </p>

            </div>
            <div class="text-1">
                <p> 於是我們選定日子 趁歲月凋謝前 猖狂地綻放<br>
                於是我們拔除自己根上的刺 修剪身上的葉<br>
                選定日子 趁歲月凋謝前 猖狂地綻放<br>
                也就成為桌上那最亮眼的紅色饗宴<br>
                </p>
            </div>
            <div class="text-1">
                <p>－</p>
            </div>
        </div>
    </div>
    <!-- 第二個課程 -->
    <div class="container-over">
        <div class="summer-overimg courseImgAll"><a href="<?= WEB_ROOT ?>/RWD_coursein.php?sid=4"><img src="img/course/white.jpg" alt=""></a></div>
    </div>

    <div class="container">
        <div class="text">
            <div class="text-title">
                <p>
                 捧花主題課程｜《耀眼白茫》
                </p>
            </div>
            <div class="text-1">
                <p>/
                </p>
            </div>
            <div class="text-1">
                <p>我在一遍白茫裡找尋你<br>
                跟隨著所能發現的腳印<br>
                以為一切都終將因為刺眼而失去你的蹤跡<br>
                這是注定狂野的佳節 而我們聚在一起彼此依偎<br>
                </p>
            </div>
            <div class="text-1">
                <p>－</p>
            </div>
        </div>
    </div>
    <!-- 捧花課程結束 -->

    <!-- 換場地 -->
    <div class="container">
        <div class="lesson">場地設計</div>
    </div>

    <div class="content">
        <div class="slider">
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=1"><img class="imgFix" src="img/Wedding/OK/2-1.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2020-05-20</p>
                        <p class="text-2">設計師:Denny Chen.</p>

                    </div>

                </div>  
            </div>
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=3"><img class="imgFix" src="img/Wedding/OK/3-2.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2020-05-10</p>
                        <p class="text-2">設計師:Rita Yang.</p>

                    </div>


                </div> 
            </div>
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=2"><img class="imgFix" src="img/Wedding/OK/1-2.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2020-02-16</p>
                        <p class="text-2">設計師:J.R.R Tolkien.</p>
                    </div>
               


                </div> 
            </div>
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=9"><img class="imgFix" src="img/Wedding/OK/Black-BAR-1.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2019-07-21</p>
                        <p class="text-2">設計師: J.R.R Tolkien.</p>

                    </div>
              


                </div>
            </div>
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=7"><img class="imgFix" src="img/Wedding/OK/Rosemary-7.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2018-07-04</p>
                        <p class="text-2">設計師:Denny Chen.</p>

                    </div>


                </div>
            </div>
            <div>
            <div class="LayoutImage">
            <a href="<?= WEB_ROOT ?>/RWD_Wedding.php?sid=5"><img class="imgFix" src="img/Wedding/OK/4-1.jpg" alt=""></a>
                    <div class="info">
                        <p class="text-2">2018-04-11</p>
                        <p class="text-2">設計師:J.R.R Tolkien.</p>

                    </div>
               


                </div>
            </div>
        </div>
    </div> 

    <?php include __DIR__ . "/_scripts.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>


    <!-- 這邊開始是js -->

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                speed: 400,
                responsive: [{
                    breakpoint: 576,
                    settings: {

                        arrows: false,
                        slidesToScroll: 1,
                        slidesToShow: 1

                    }
                }]
            });
        });
        // -----------------turtle-----------------------
        $(".word110").click(function() {
            $(this).addClass("sun1").siblings().removeClass("sun1")
            $(".sunflower").addClass("sun").siblings().removeClass("sun")
        })
        $(".word120").click(function() {
            $(this).addClass("sun1").siblings().removeClass("sun1")
            $(".sunflower2").addClass("sun").siblings().removeClass("sun")
        })
    </script>

    <?php include __DIR__ . "/_html_footer.php" ?>