<?php include __DIR__ . "/_connect_db.php" ?>
<?php include __DIR__ . "/_html_header.php" ?>

<?php include __DIR__ . "/_navbar.php" ?>


<style>
    .container {
        max-width: 1166px;
        margin-top: 100px;
    }

    p header {
        z-index: 0 !important;
        height: 1076px;
    }

    p {
        margin: 10px 0 0 0;
        margin-bottom: 0rem !important;
    }

    /* header結束 */
    .carousel-inner img {
        height: 1076px;
    }

    .section {
        display: flex;
        flex-direction: column;

        margin-top: 100px;
    }

    .section1 {
        font-size: 20px;
        /* font-weight: bold; */
        letter-spacing: 10px;
        display: flex;
        justify-content: center;
    }

    .word1, .word2 {
        color: #707070;
        border-bottom: 3px solid #707070;
        margin: 12px;
        cursor: pointer;
    }

    .word1.sun1 , .word2.sun1 {
        color: #F2B46D;
        border-bottom: 3px solid #F2B46D;
        margin: 12px;
    }

    .content1 {
        display: flex;
        justify-content: center;
        font-weight: 16px;
        color: #707070;
        font-weight: bold;
        padding: 10px;
        font-style: italic;
        letter-spacing: 2px;
    }

    @media screen and (max-width:375px) {
        .word1 , .word2 {
            border-bottom: 3px solid #F2B46D;
        }

        .content1 {
            display: none;
        }
    }

    /*    放四張圖片*/


    img {
        width: 373px;
        height: 345px;
        object-fit: cover;
    }

    .slide-1 {
        border: 5px solid #fff;
        width: 373px;
        height: 345px;

    }


    .slider {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;

    }

    .slide-3 {
        border: 5px solid #fff;
        width: 373px;
        height: 345px;
        /* turtle */
    }

    .slider3 {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
        /* turtle */
    }

    .img-word {
        color: #6B6B6B;
        font-size: 20px;
        margin-left: 10px;
    }

    .img-price {
        color: #C4C5C5;
        font-size: 14px;
        margin-left: 10px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #000 !important; 
        font-size: 30px !important;
        margin: -31%;
    }

    .slick-prev {
        left: -35px;
    }

    @media screen and (max-width:375px) {
        .img {
            width: 100px;
            height: 100px;
        }

        .img-word {
            font-size: 16px;
        }

        .img-price {
            font-size: 16px;
            color: #F2B46D;
        }

        .slide-1 {
            width: 300px;
            height: 300px;
        }
    }



    /* 換shop now */
    .container2 {
        display: flex;
        justify-content: center;
    }

    .shopnow, .shopnow2  {
        font-size: 32px;
        font-weight: bold;
        border-bottom: 2px solid #707070;
        margin: 60px auto 30px;
        display: flex;
        height: 60px;
    }

    .shopnow1 {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    /* 換夏日實驗 */
    .container3 {
        /* margin: 0 !important;
        width: 100vw; */
        display: flex;
        flex-direction: row;
        margin-top: 100px;
    }

    .aside-left {
        width: 977px;
        height: 651px;
        transform: translateX(-977px);
        transition: ease-out 0.8s;
        overflow: hidden;
        /* turtle */

    }

    .aside-left.show {
        transform: translateX(0);
        /* transition: 0.5s; */
        /* turtle */
    }

    .img-lesson {
        /* width:100%; */
        width: 977px;
        height: 651px;
    }

    .aside-right {
        width: 800px;
        height: 600px;
        /* background: #59cff3; */
    }

    .aside-right-top p {
        font-size: 36px;
        font-weight: bold;
        color: #707070;
    }

    .left-img {
        width: 310px;
        height: 310px;
        margin-right: 48px;
        margin-left: 48px;
    }

    .left-img p,
    .right-img p {
        margin: 0;
    }

    .right-img {
        width: 310px;
        height: 310px;
    }

    .asideImg {
        width: 310px;
        height: 310px;
    }

    .asideImg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .aside-right-bottom {
        display: flex;
        flex-direction: row;
        height: 400px;
        padding-top: 170px;

    }

    .summer-title {
        margin-left: 117px;
    }

    .summerTitleIta {
        color: #F2B46D;
        font-style: italic;
    }

    .summer-text {
        margin-left: 133px;
        margin-bottom: 153px;
    }

    /* 換主題課程 */
    .main {
        margin-top: 117px;
        display: flex;
        flex-direction: row;
    }

    .title {
        font-size: 34px;
        font-weight: bold;
        color: #707070;
        margin-left: 135px;
    }

    .title-2 {
        font-size: 34px;
        font-weight: bold;
        color: #707070;
        margin-left: 24px;
        margin-top: 72px;
    }

    .smallword {
        font-size: 14px;
        color: #707070;
        margin-left: 210px;
        line-height: 32px;
        letter-spacing: 1px;
    }

    .smallword-2 {
        font-size: 14px;
        color: #707070;
        margin-left: 95px;
        line-height: 32px;
        letter-spacing: 1px;

    }

    .left-sec {
        width: 771px;
        margin-left: 189px;
        /* transform: translateX(-960px);
        transition: ease-out 0.8s;
        overflow: hidden; */

    }

    .left-sec.show {
        transform: translateX(0);
    }

    .right-sec {
        width: 900px;
        margin-right: 189px;
        /* transform: translateX(+1089px);
        transition: ease-out 0.8s;
        overflow: hidden; */
    }

    .right-sec.show {
        transform: translateX(0);
    }

    .left-sec-img img {
        width: 640px;
        height: 502px;
        margin-bottom: 48px;
    }

    .right-sec-img {
        margin-left: 50px;

    }

    .right-sec-img img {
        width: 679px;
        height: 456px;
        margin-left: 128px;
        margin-top: 80px;
    }

    .middle-text {
        font-size: 32px;
        color: #707070;
        display: flex;
        justify-content: center;
        font-style: italic;
        text-align: center;
    }


    /* 換三張圖片 */

    .progress {
        display: block;
        width: 100%;
        height: 10px;
        border-radius: 10px;
        overflow: hidden;
        background-color: #f5f5f5;
        background-image: linear-gradient(to right, black, black);
        background-repeat: no-repeat;
        background-size: 0 100%;
        transition: background-size .4s ease-in-out;
    }


    .content {
        margin: auto;
        padding: 20px;
        width: 1620px;
    }
    .image {
        padding: 10px;
    }

    img {
        display: block;
        width: 100%;
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

    .p-24-bold {
        font-size: 16px;
        font-weight: bold;
        color: #707070;
    }

    .p-14-bold {
        font-size: 10px;
        font-weight: bold;
        color: #707070;
    }

    .sunflower , .sunflower2 {
        visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .sunflower.sun, .sunflower2.sun {
        visibility: visible;
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
    <!-- header結束 -->
    <div class="section">
        <div class="section1">
            <div class="word1 sun1">精選商品</div>
            <div class="word2">節慶花禮</div>
        </div>
        <div class="content1">Check out our best sellers.</div>
    </div>

    <!--    擺四張圖片-->

    <div class="container">
        <div class="position-relative" style="height:500px">
            <div class="sunflower sun">
                <div class="slider">
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=64"><img src="img/winter-5.jpg" alt=""></a>
                        <p class="img-word">冬日</p>
                        <p class="img-price">NT 3,780</p>
                    </div>
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=17"><img src="img/wedding-5.jpg" alt=""></a>
                        <p class="img-word">甜蜜花嫁</p>
                        <p class="img-price">NT 2,450</p>
                    </div>
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=80"><img src="img/tuwhite-5.jpg" alt=""></a>
                        <p class="img-word">淨白亮度</p>
                        <p class="img-price">NT 1,280</p>
                    </div>
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=77"><img src="img/danger-5.jpg" alt=""></a>
                        <p class="img-word">耽美</p>
                        <p class="img-price">NT 4,800</p>
                    </div>
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=88"><img src="img/blue-5.jpg" alt=""></a>
                        <p class="img-word">輕藍典緻</p>
                        <p class="img-price">NT 4,800</p>
                    </div>
                    <div class="slide-1"><a href="<?= WEB_ROOT ?>/product_in.php?sid=75"><img src="img/orchid-5.jpg" alt=""></a>
                        <p class="img-word">粉蘭</p>
                        <p class="img-price">NT 4,500</p>
                    </div>


                </div>

            </div>
            <div class="sunflower2">
                <div class="slider3">
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=52"><img src="img/clean-1.jpg" alt=""></a>
                        <p class="img-word">純潔的愛</p>
                        <p class="img-price">NT 4,280</p>
                    </div>
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=53"><img src="img/end-1.jpg" alt=""></a>
                        <p class="img-word">無盡</p>
                        <p class="img-price">NT 1,880</p>
                    </div>
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=45"><img src="img/never-1.jpg" alt=""></a>
                        <p class="img-word">青春不散場</p>
                        <p class="img-price">NT 1,980</p>
                    </div>
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=55"><img src="img/view-1.jpg" alt=""></a>
                        <p class="img-word">最美的風景</p>
                        <p class="img-price">NT 2,980</p>
                    </div>
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=44"><img src="img/wife-1.jpg" alt=""></a>
                        <p class="img-word">老婆是用來疼的</p>
                        <p class="img-price">NT 2,580</p>
                    </div>
                    <div class="slide-3"><a href="<?= WEB_ROOT ?>/product_in.php?sid=39"><img src="img/you-1.jpg" alt=""></a>
                        <p class="img-word">獻，誨我諄諄的你</p>
                        <p class="img-price">NT 3,200</p>
                    </div>


                </div>

            </div>
        </div>
    </div>



    <!-- 四張圖片結束 -->

    <!-- 換shop now -->
    <div class="container2">
        <div class="shopnow1">
            <div class="shopnow" data-in-effect="bounceIn" data-out-effect="pulse">Shop Now</div>
        </div>
    </div>

    <!-- 這是wrapper的div結尾 -->
    </div>


    <!-- 換夏日實驗 -->
    <div class="container3">
        <div class="aside-left"><img class="img-lesson" src="img/Summer_East_1.jpg" alt=""></div>
        <div class="aside-right" data-aos="flip-left">
            <div class="aside-right-top">
                <p class="summer-title"> 2020 夏日實驗 / <span class="summerTitleIta">[ban` Lan] </span></p>
                <p class="summer-text">Summer East Asia Style</p>
            </div>
            <div class="aside-right-bottom">
                <div class="left-img ">
                    <div class="asideImg">
                        <a href="<?= WEB_ROOT ?>/product_in.php?sid=91"><img src="img/sunorg-1.jpg" alt=""></a>
                    </div>
                    <p class="img-word">耀眼光芒</p>
                    <p>
                        <span style="color: #F2B46D;">NT 2,500</span>
                    </p>
                </div>
                <div class="right-img">
                    <div class="asideImg">
                        <a href="<?=WEB_ROOT ?>/product_in.php?sid=94"><img src="img/poem-1.jpg" alt=""></a>
                    </div>
                    <p class="img-word">詩意<p>
                            <p><span style="color: #F2B46D;">NT 1,800</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- 換主題課程 -->
    <!-- <div class="container"> -->
    <div class="main">
        <div class="left-sec" data-aos="fade-right">
            <div class="left-sec-img"><a href="<?= WEB_ROOT ?>/coursein.php?sid=2"><img src="img/course/red.jpg" alt=""></a></div>
            <p class="title">捧花主題課程｜《猖狂之紅》</p>
            <p class="smallword">/<br>
                於是我們選定日子 趁歲月凋謝前 猖狂地綻放<br>
                於是我們拔除自己根上的刺 修剪身上的葉<br>
                選定日子 趁歲月凋謝前 猖狂地綻放<br>
                也就成為桌上那最亮眼的紅色饗宴－－<br>
                －<br></p>
        </div>

        <div class="right-sec" data-aos="fade-left">
            <p class="title-2">捧花主題課程｜《耀眼白茫》</p>
            <p class="smallword-2"> / <br>
                &nbsp;&nbsp;我在一遍白茫裡找尋你<br>
                &nbsp;&nbsp;跟隨著所能發現的腳印<br>
                &nbsp;&nbsp;以為一切都終將因為刺眼而失去你的蹤跡<br>
                &nbsp;&nbsp;這是注定狂野的佳節 而我們聚在一起彼此依偎－－<br></p>
            <div class="right-sec-img"><a href="<?= WEB_ROOT ?>/coursein.php?sid=4"> <img src="img/course/white.jpg" alt=""></a></div>
        </div>
    </div>
    <!-- </div> -->

    <div class="container">
        <p class="middle-text" data-in-effect="fadeIn" data-out-effect="fadeOut"> We make timeless, responsibly-made sneakers
        </p>
        <p class="middle-text" data-in-effect="fadeIn" data-out-effect="fadeOut"> that are designed to be great, and made to be worn.
        </p>
    </div>

    <!-- 換場地設計 -->
    <div class="container2">
        <div class="shopnow1">
            <div class="shopnow2" data-in-effect="bounceIn" data-out-effect="pulse">場地設計</div>
        </div>
    </div>

    <!-- 換三張圖片 -->

    <div class="content">
        <div class="slider2">
            <div>
                <div class="image">
                <a href="<?= WEB_ROOT ?>/Wedding.php?sid=1"><img class="imgFix" src="img/Wedding/OK/2-1.jpg" alt=""></a>
                    <p class="p-24-bold">2020-05-20</p>
                    <p class="p-24-bold">設計師: Denny Chen.</p>
                    <p class="p-14-bold">明媚的陽光下，利用純白的鮮花搭乘一座愛的拱門，異地戀的距離並未拉開兩人的愛戀，反而讓他們一起看到更加廣闊的世界。</p>

                </div> 
            </div>
            <div>
                <div class="image">
                <a href="<?= WEB_ROOT ?>/Wedding.php?sid=3"><img class="imgFix" src="img/Wedding/OK/3-2.jpg" alt=""></a>
                    <p class="p-24-bold">2020-05-10</p>
                    <p class="p-24-bold">設計師: Rita Yang.</p>
                    <p class="p-14-bold">這次以粉紫色與天空藍搭配白色，象徵藍天白雲，為田園鄉村風客製化婚禮設計增添了一抹幽靜.塑造獨有的特色。</p>

                </div> 
            </div>
            <div>
                <div class="image">
                    <a href="<?= WEB_ROOT ?>/Wedding.php?sid=2"><img class="imgFix" src="img/Wedding/OK/1-2.jpg" alt=""></a>
                    <p class="p-24-bold">2020-02-16</p>
                    <p class="p-24-bold">設計師: J.R.R Tolkien.</p>
                    <p class="p-14-bold">利用原有的歐式風格裝潢及流通的動線，我們將打造一場浪漫的歐式花園風格婚禮，不用出國也能沉浸在這趟美好的旅程。</p>
                </div> 
            </div>
            <div>
                <div class="image">
                <a href="<?= WEB_ROOT ?>/Wedding.php?sid=9"><img class="imgFix" src="img/Wedding/OK/Black-BAR-1.jpg" alt=""></a>
                    <p class="p-24-bold">2019-07-21</p>
                    <p class="p-24-bold">設計師: J.R.R Tolkien.</p>
                    <p class="p-14-bold">傾聽最細膩的聲音，讓整個充滿愛與溫馨；忘了幾歲以後，我們才長得夠大成為不再害怕黑暗的大人，不單止是設計一個空間，而是營造出獨特專屬的個人品味。</p>

                </div> 
            </div>
            <div>
                <div class="image">
                <a href="<?= WEB_ROOT ?>/Wedding.php?sid=7"><img class="imgFix" src="img/Wedding/OK/Rosemary-7.jpg" alt=""></a>
                    <p class="p-24-bold">2018-07-04</p>
                    <p class="p-24-bold">設計師: Denny Chen.</p>
                    <p class="p-14-bold">每個季節都自有不同的花朵盛開，其中我們追求的是觸動人心的「單純」，總希望能用最極簡的手法、花材、顏色，來表現讓人難忘的記憶。</p>

                </div> 
            </div>
            <div>
                <div class="image">
                <a href="<?= WEB_ROOT ?>/Wedding.php?sid=5"><img class="imgFix" src="img/Wedding/OK/4-1.jpg" alt=""></a>
                    <p class="p-24-bold">2018-04-11</p>
                    <p class="p-24-bold">設計師: J.R.R Tolkien.</p>
                    <p class="p-14-bold">和諧的白綠配色，在戶外證婚下顯得格外的清新自在。白花叢由入口處拍照區開始蔓延至證婚拱門，由下至上透著勃勃生機。</p>

                </div> 
            </div>
            
        </div> <!-- end slider -->
        <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            <span class="slider__label sr-only">
        </div>
        </span>
    </div> <!-- end content -->


    <?php include __DIR__ . "/_scripts.php" ?>


    <script>
         AOS.init();
        // -----呼叫AOS.js-------
        // 四張圖片的輪播

        $('.slider').slick({
            centerMode: false,
            centerPadding: '48px',
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            dots: false,
            arrows: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '20px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 375,
                    settings: {
                        dots: false,
                        arrows: true,
                        centerMode: false,
                        centerPadding: '10px',
                        slidesToScroll: 1,
                        slidesToShow: 1

                    }
                }
            ]
        });

        //四張圖片的輪播結束

        // 三張圖片==
        $(document).ready(function() {
            let $slider = $('.slider2');
            let $progressBar = $('.progress');
            const $progressBarLabel = $('.slider__label');

            $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                const calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

                $progressBar
                    .css('background-size', calc + '% 100%')
                    .attr('aria-valuenow', calc);

                $progressBarLabel.text(calc + '% completed');
            });

            $slider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                speed: 400
            });
        });
        // ----------------------------------------------------
        $('.slider3').slick({
            centerMode: false,
            centerPadding: '48px',
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            autoplay: true,
            dots: false,
            arrows: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '20px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 375,
                    settings: {
                        dots: false,
                        arrows: true,
                        centerMode: false,
                        centerPadding: '10px',
                        slidesToScroll: 1,
                        slidesToShow: 1

                    }
                }
            ]
        });


        $(".word1").click(function() {
            $(this).addClass("sun1").siblings().removeClass("sun1")
            $(".sunflower").addClass("sun").siblings().removeClass("sun")
        })
        $(".word2").click(function() {
            $(this).addClass("sun1").siblings().removeClass("sun1")
            $(".sunflower2").addClass("sun").siblings().removeClass("sun")
        })
    
        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop()
            // console.log(scrollTop)
            if (scrollTop >= 1500) {
                $(".aside-left").addClass("show")
            } else {


            }
        })
        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop()
            // console.log(scrollTop)
            if (scrollTop >= 2500) {
                $(".left-sec").addClass("show")
                $(".right-sec").addClass("show")
            } else {
            }
        })

        // 屬性設定[註1]data-in-effect: 進場效果
        $(".shopnow").textillate({
            autoStart: true,
            loop: true
        });
        $(".shopnow2").textillate({
            autoStart: true,
            loop: true
        });
        $(".middle-text").textillate({
            autoStart: true,
            loop: true
        });

        // -------------------
        const animateCSS = (element, animation, prefix = 'animate__') =>
            // We create a Promise and return it
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = document.querySelector(element);

                node.classList.add(`${prefix}animated`, animationName);

                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd() {
                    node.classList.remove(`${prefix}animated`, animationName);
                    node.removeEventListener('animationend', handleAnimationEnd);

                    resolve('Animation ended');
                }

                node.addEventListener('animationend', handleAnimationEnd);
            });


        $(".aside-left").hover(function() {
            $(this).addClass("animate__animated animate__pulse");
        }, function() {
            $(this).removeClass("animate__animated animate__pulse");
        });
    </script>
    <?php include __DIR__ . "/_html_footer.php" ?>