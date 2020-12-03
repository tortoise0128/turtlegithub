<?php include __DIR__. "/_connect_db.php";
if(empty($pageName)){
    $pageName = '';
}
?>

<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/RWD_navbar.php" ?>

<style>
        /* 用Alt看XD長寬 */
        body {
            box-sizing: border-box;
        }

        .brand {
            height: 78vh;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            transform: translateY(-50px);
        }

        /* ---------------------------- */
        .ban {
            margin-bottom: 40px;
            margin-left: 80px;
            position: absolute;
            height: 300px;
            width: 500px;
            top: 15%;
            left: 70px;
        }

        .ban1 {
            font-size: 32px;
            font-weight: bold;
        }

        .ban2 {
            font-size: 24px;
            line-height: 38px;
            letter-spacing: 2px;
        }

        /* ------------------------------- */
        .tit {
            z-index: 2;
            position: absolute;
            height: 200px;
            width: 200px;
            top: 40%;
            right: 5%;
        }

        .pa {
            font-size: 24px;
            font-weight: bold;
            line-height: 31px;
            color: black;
            cursor: pointer;
        }

        .pa.active {
            text-decoration: none;
            color: orange;
        }

        /* ------------------------------------ */

        .slider {
            height: 100vh;
            position: absolute;
            top: 0vh;
            transition: all 0.3s ease-in-out 0.5s;
            /* top:-100vh; */
        }

        /* --------------------------------- */
        .title {
            font-size: 32px;
            font-weight: bold;
        }

        .title1 {
            font-size: 16px;
            line-height: 36px;
            letter-spacing: 1px;
        }

        .hoho {
            margin-top: 38px;
        }

        /* --------------------------------------- */
        .slider1, .slider2, .slider3 {
            height: 100vh;
        }

        .slider1 {
            position: relative;
            right: 430px;
            top: 8%;
        }

        .slider1 .img {
            position: absolute;
            margin-left: 200px;
            top: 15%;
            left: 1000px;
            /* 不要數字這麼大的left用right */
            height: 800px;
            width: 800px;
        }

        .slider1 .ha2 {
            position: absolute;
            margin-left: 80px;
            left: 500px;
            top: 400px;
            height: 200px;
            width: 450px;
            flex: auto;
        }

        .mewimg {
            align-items: flex-end;
        }

        .Story01 {
            height: 300px;
            width: 400px;
            overflow: hidden;
            margin-right: 32px;
        }

        .Story02 {
            height: 600px;
            width: 500px;
            overflow: hidden;
        }

        .imgFit{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* ------------------------------ */
        .slider2 {
            position: relative;
            right: 430px;
            top: 8%;
        }

        .slider2 .img {
            position: absolute;
            margin-left: 180px;
            top: 15%;
            left: 1000px;
            height: 800px;
            width: 800px;
        }

        .slider2 .ha2 {
            position: absolute;
            margin-left: 80px;
            left: 500px;
            top: 400px;
            height: 200px;
            width: 400px;
            flex: auto;
        }

        .mewimg1 {
            position: relative;
        }

        .Workshop01 {
            position: absolute;
            top: 70%;
            left: 5%;
            height: 320px;
            width: 480px;
            overflow: hidden;
        }

        .Workshop02 {
            margin-left: 300px;
            width: 650px;
            overflow: hidden;
        }


        /* ---------------------------- */
        .slider3 {
            position: relative;
            right: 430px;
            top: 8%;
        }

        .slider3 .img {
            position: absolute;
            margin-left: 180px;
            top: 15%;
            left: 1000px;
            height: 800px;
            width: 800px;
        }

        .slider3 .ha2 {
            position: absolute;
            margin-left: 80px;
            left: 500px;
            top: 400px;
            height: 200px;
            width: 400px;
            flex: auto;
        }

        .mewimg2 {
            position: relative;
        }

        .layout01{
            z-index: 2;
            width: 500px;
            overflow: hidden;
        }

        .layout02{
            position: absolute;
            top: 50%;
            left: 25%;
            height: 370px;
            width: 550px;
            overflow: hidden;
        }

        .penguinpower {
            display: none;
        }

        /* ------------------------------ */
        @media screen and (max-width: 968px) {
            .brand {
                display: none;
            }

            .penguinpower {
                display: block;
            }

            /* 手機設高度 寬度100% */
            .penguinpower {
                margin: 0 auto;
            }

            .sliderrwd {
                height: 500px;
                width: 100%;
            }

            /* -------------------------- */
            .StoryRWD {
                height: 500px;
                object-fit: cover;
            }

            .brand2 {
                position: relative;
                height: 500px;
                width: 100%;
            }

            /* ----------------------------- */


            .brand2 .content {
                position: absolute;
                /* Position the background text */
                bottom: 0;
                /* At the bottom. Use top:0 to append it to the top */
                background: rgb(0, 0, 0);
                /* Fallback color */
                background: rgba(0, 0, 0, 0.5);
                /* Black background with 0.5 opacity */
                color: #f1f1f1;
                height: 170px;
                /* Grey text */
                width: 100%;
                /* Full width */
                padding-top:30px ;
                padding-right: 50px;
                padding-left: 50px;
                /* Some padding */
                overflow-x: auto;
            }

            .penguinp {
                font-size: 14px;
                line-height: 28px;
                letter-spacing: 1px;
            }

            /* ---------------------------------- */
            .brand2 .content1 {
                position: absolute;
                top: 79px;
                left: 114px;
            }

            .titleRWD {
                font-size: 32px;
                font-weight: bold;
                color: white;
                letter-spacing: 10px;
                text-shadow: 5px #000;
            }

            .infoTableRWD {
                /* display: flex; */
                flex-direction: column;
                align-items: center;
                margin-top: 28px;
            }

            .infoTitleRWD {
                font-size: 24px;
                font-weight: bold;
            }

            .infoRWD {
                font-size: 14px;
                line-height: 28px;
                letter-spacing: 1.5px;
            }

            
        }
    </style>
</head>

<body>
    <div class="brand">
        <div class="ban">
            <p class="ban1">斑斕<i>[ban` Lan]</i> ____門市資訊
            </p>
            <p class="ban2">門市地址/<br>
                台北市大安區敦化南路一段187巷40號<br>
                營業時間/<br>
                13:00~21:00<br>
                連絡電話/<br>
                (02)2254-6783
            </p>
        </div>
        <div class="tit">
            <p id="p1" class="pa active">品牌故事</p>
            <p id="p2" class="pa">課程介紹 </p>
            <p id="p3" class="pa">婚宴設計 </p>
        </div>
        <div class="slider">
            <div class="slider1 ">
                <div class="ha2">
                    <p class="title">品牌故事</p>
                    <p class="title1">
                    花&emsp;人與人之間的媒介<br>
                    在情感與情感間創造氛圍<br>
                    我們琢磨每一朵花葉與生俱來的美好<br>
                    替人訴說每一段愛情無與倫比的重要<br>
                    比起浪漫&emsp;你是否也喜歡放肆的去恨去愛？<br>
                    </p>
                </div>
                <div class="img">
                    <div class="d-flex mewimg">
                        <div class="Story01">
                            <img class="imgFit" src="img/About Us/Story01.jpg" alt="">
                        </div>
                        <div class="Story02">
                            <img class="imgFit" src="img/About Us/Story02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider2 ">
                <div class="ha2">
                    <p class="title">課程介紹</p>
                    <p class="title1">
                    準備一個花束，慶祝生活中的大小事<br>
                    <br>
                    祝賀青春多采多姿的美好回憶與光明燦爛的未來<br>
                    將這些感性都用優雅浪漫的復古色系包在花束裡<br>
                    把最珍貴的時光化成祝福，慶祝我們的每一天<br>
                    </p>
                </div>
                <div class="img">
                    <div class="d-flex mewimg1">
                        <div class="Workshop01">
                            <img class="imgFit" src="img/About Us/Workshop01.jpg" alt="">
                        </div>
                        <div class="Workshop02">
                            <img class="imgFit" src="img/About Us/Workshop02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider3 ">
                <div class="ha2">
                    <p class="title">婚宴設計</p>
                    <p class="title1">
                    辦過許許多多的婚禮”感動”的表情，永遠是最美麗的畫面，新郎新娘兩顆真摯的心，也永遠可以溫暖現場所有的人這是婚禮工作最迷人的地方了。<br>
                    我們希望每一對我們服務過的新人都能永遠記得當初兩個人因為愛而結合的感動。<br>
                    </p>
                </div>
                <div class="img">
                    <div class="d-flex mewimg2">
                        <div class="layout01">
                            <img class="imgFit" src="img/About Us/layout01.jpg"
                                alt="">
                        </div>
                        <div class="layout02">
                            <img class="imgFit" src="img/About Us/layout02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------- -->
    <div class="penguinpower">
        <div class="sliderrwd">
            <div class="brand2 slide-1">
                <div class="content1">
                    <p class="titleRWD">品牌故事</p>
                </div>
                <div class="StoryRWD">
                    <img class="imgFit" src="img/About Us/Story01.jpg" alt="Notebook">
                </div>
                <div class="content">
                    <p class="penguinp">花<br>
                        人與人之間的媒介<br>
                        在時間與空間中傳遞情感<br>
                        在情感與情感間創造氛圍
                    </p>
                </div>
            </div>
            <div class="brand2 slide-2">
                <div class="content1">
                    <p class="titleRWD">課程介紹</p>
                </div>
                <div class="StoryRWD">
                    <img class="imgFit" src="img/About Us/Workshop01.jpg" alt="Notebook">
                </div>
                <div class="content">
                    <p class="penguinp">準備一個花束，慶祝生活中的大小事<br>
                        適合春夏豔陽的夢幻繽紛色<br>
                        祝賀青春多采多姿的美好回憶與光明燦爛的未來
                    </p>
                </div>
            </div>
            <div class="brand2 slide-3">
                <div class="content1">
                    <p class="titleRWD">場地設計</p>
                </div>
                <div class="StoryRWD">
                    <img class="imgFit" src="img/About Us/layout01.jpg" alt="Notebook">
                </div>
                <div class="content">
                    <p class="penguinp">辦過許多婚禮的”感動”表情，永遠是<br>
                        最美麗的畫面，新郎新娘兩顆真摯的心，<br>
                        也永遠可以溫暖現場所有的人這是婚禮工作最迷人的地方了。
                    </p>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------- -->
        <div class="infoTableRWD d-flex">
            <p class="infoTitleRWD">斑斕<i>[ban` Lan]</i> ____門市資訊 </p>
            <p class="infoRWD">門市地址/<br>
                台北市大安區敦化南路一段187巷40號<br>
                營業時間/<br>
                13:00~21:00<br>
                連絡電話/<br>
                (02)2254-6783</p>
        </div>
        
    </div>

<?php include __DIR__. "/_scripts.php" ?>


<script>
        var pIndex = 0;
        //  給起始值
        $(document).ready(function () {
            $("#p1").click(function () {
                $(".pa").eq(0).addClass("active").siblings().removeClass("active")
                // ---------------------------
                $(".slider").css("top", "0vh")//.css("transition", "all 0.3s ease-in-out 0.3s")
                pIndex = 0;
            })

            $("#p2").click(function () {
                $(".pa").eq(1).addClass("active").siblings().removeClass("active")
                // --------------------------
                $(".slider").css("top", "-100vh")//.css("transition", "all 0.3s ease-in-out 0.3s")
                pIndex = 1;
            })
            $("#p3").click(function () {
                $(".pa").eq(2).addClass("active").siblings().removeClass("active")
                // ---------------------------
                $(".slider").css("top", "-200vh")//.css("transition", "all 0.3s ease-in-out 0.3s")
                pIndex = 2;
            })
        })
        // -------------------JS和JQ可以混用---------------------------------
        // -------------100vh的滑鼠滾動效果-------------------
        window.addEventListener('wheel', function (event) {
            if (event.deltaY > 0) {
                switch (pIndex) {
                    case 0:
                        $("#p2").click();
                        break;
                    case 1:
                        $("#p3").click();
                        break;
                    case 2:
                        break;
                }
            } else {
                switch (pIndex) {
                    case 0:
                        break;
                    case 1:
                        $("#p1").click();
                        break;
                    case 2:
                        $("#p2").click();
                        break;
                }
            }
        })
        // -------------------------------------------
        $('.sliderrwd').slick({
            centerMode: true,
            autoplay: true,
            arrows: true,
            dots: true,
            centerPadding: '0',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        dots: false,
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1

                    }
                }
            ]
        });
    </script>

<?php include __DIR__. "/_html_footer.php" ?>