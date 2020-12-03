<?php
include __DIR__ . "/_connect_db.php";

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1;
$sql = "SELECT * FROM `course`  WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();


?>

<?php include __DIR__ . "/_html_header.php" ?>

<?php include __DIR__ . "/_navbar.php" ?>

<style>
    * {
        box-sizing: border-box;
        font-family: 'Lusitana', 'Noto Sans TC', serif;
    }

    /* ---------------navBar------------------ */

    .navbar {
        display: none !important;
    }

    @media screen and (max-width: 968px) {
        .navbar {
            display: flex !important;
        }
    }

    /* ----------------------------------------- */
    .courseAll {
        display: flex;
        height: 100vh;
    }

    .couresRh2 {
        display: none;
    }

    @media screen and (max-width: 968px) {
        .couresRh2 {
            display: block;
            text-align: center;
        }

        .couresRh2 h2 {
            font-size: 24px;
        }

        .courseAll {
            flex-direction: column;

        }

        article {
            margin-bottom: 200px;

        }
    }

    .carousel-item img {
        height: 100vh;
        object-fit: cover;
    }

    @media screen and (max-width: 968px) {
        .carousel-item img {
            height: 50vh;

        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        opacity: .7;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        width: 40px;
        height: 40px;
    }

    .carousel {
        padding: 0 !important;
    }

    /* ------------------ */
    .courLogo {
        display: flex;
        align-items: center;
        font-size: 36px;
        justify-content: center;
        text-align: right;
        height: 144px;
    }

    @media screen and (max-width: 968px) {
        .courLogo {
            display: none;
        }
    }

    .LogoImg {
        width: 175px;
        margin: 0 25%;
    }

    .LogoWork a {
        color: #000;

    }

    .courLogo img {
        width: 100%;
    }

    article {
        flex: 1;
    }

    .courMain {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    @media screen and (max-width: 968px) {
        .courMain {
            flex-direction: column;
            justify-content: center;
        }

        .top-work-h2 {
            display: none;
        }
    }

    .top-work-h2 h2 {
        color: #707070;
        font-weight: bold;
        margin-bottom: 18px;
        font-size: 40px;
    }

    .cour-left-work {
        display: flex;
        flex-direction: column;
    }

    @media screen and (max-width: 968px) {
        .cour-left-work {
            padding: 20px;
        }

        .cour-left-work span {
            line-height: 24px;
        }


    }

    .bot-work {
        width: 80%;
        line-height: 32px;
        font-size: 16px;
    }

    .rignt-work-day {
        line-height: 48px;
        font-size: 30px;
        font-style: italic;
        color: #707070;
        width: 230px;
    }

    @media screen and (max-width: 968px) {
        .rignt-work-day {
            font-size: 16px;
            width: 100%;
        }

        .rignt-work-day p {
            margin: 0;
        }

        .cour-right-work {
            position: Fixed;
            bottom: 0;
            background-color: #fff;
            z-index: 2;
            box-shadow: 0 0 15px #c4c5c5;
            width: 100%;
            padding: 20px 0;
            text-align: center
        }
    }

    .pick {
        display: flex;
        flex-wrap: wrap;
        /* margin: 36px 0 36px 36px; */
        padding: 36px;
    }

    .pick a.active {
        color: #f2b46d;
    }

    .tabcontent {
        display: none;
        font-size: 18px;
    }

    .pick a {
        font-size: 18pt;
        cursor: pointer;
        margin: 50px;
    }

    .comment {
        padding-left: 50px;
        font-size: 14pt;
        line-height: 20pt;
        width: 90%;
        letter-spacing: 2px;
    }

    @media screen and (max-width:968px) {
        .pick {
            flex-wrap: wrap;
            padding: 0;
            margin: 0 30px;
            border-bottom: 1px solid #707070;
        }

        .pick a {
            width: 100%;
            margin: 0 auto 15px;
        }

        .comment {
            padding: 5px;
            color: #707070;
            font-size: 14px;
        }

        .tablink {
            border-top: 1px solid #707070;
            padding-top: 15px;
        }

        .tabcontent {
            height: auto;
        }

        .productIntro {
            order: 1;
        }

        .productSending {
            order: 3;
        }

        .productComment {
            order: 5;
        }

        #Intro {
            order: 2;
        }

        #Sending {
            order: 4;
        }

        #About {
            order: 6;
        }

        /* ----------------- */
        #About .discuss {
            height: 200px;
        }

        #About li {
            width: 50px;
            height: 50px;
        }

        .memberComment .message {
            margin: 0;
        }

        .containerBar {
            width: 50px;
            padding: 0;
        }

        .memberStar h5 {
            font-size: 16px;
            margin: 0;
            line-height: 32px;
        }

        .message {
            font-size: 12px;
            /* word-spacing: 6px; */
            letter-spacing: 2px;
        }

        .discussAddPlace {
            display: none;
        }

        .sendAdd {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            background: #c4c5c5;
            word-spacing: 12px;
            color: #fff;
        }

        .sendAdd:hover {
            color: #fff;
        }
    }
    .NextPage {
        z-index: 3;
        right: 10%;
        bottom: 5%;
        border: 0;
        border-radius: 10px;
        color: white ! important;
        background-color: #F2B46D;
        text-align: center;
        line-height: 50px;
        width: 150px;
        height: 50px;
        position: absolute;
        letter-spacing: 3px;
        margin-top: 10px;
    }

    .NextPage:focus{
        outline: none;
        border: none;
    }

    .NextPage:hover {
        background-color: #ebab4b;
        color: #fff;
        text-decoration: none;
    }
    .NextPage p {
        margin: 0;
        font-size: 20px;
    }

    @media screen and (max-width:968px) {
        .NextPage {
            position: relative;
            width: 85vw;
            border-radius: 0;
            right: 0;
        }
    }
</style>
</head>

<body data-sid="<?= $row["sid"] ?>">
    <div class="couresRh2">
        <h2><?= $row['course_name'] ?></h2>
    </div>
    <div class="courseAll">
        <div id="carouselExampleInterval" class="carousel slide col-lg-5 col-sm-12" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="img/course/<?= $row['img_01'] ?>.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/course/<?= $row['img_01'] ?>-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/course/<?= $row['img_01'] ?>-2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <article >
            <div class="courLogo courseRight">
                <div class="LogoImg">
                    <img src="img/logoblack.png" alt="">
                </div>
                <div class="LogoWork">
                    <a href="<?= WEB_ROOT ?>/course.php"><i class="fas fa-undo-alt"></i></a>
                </div>
            </div>
            <div class="container courMain">
                <div class="cour-left-work">
                    <div class="top-work">
                        <div class="top-work-h2">
                            <h2><?= $row['course_name'] ?></h2>
                        </div>
                    </div>
                    <div class="bot-work">
                        <span>
                            /</br>
                            <?= $row['content'] ?>－－
                        </span>
                    </div>
                </div>
                <div class="cour-right-work">
                    <div class="rignt-work-day">
                        <p><?= $row['course_date'] ?></p>
                        <span> <?= $row['course_time'] ?> &emsp;&emsp;
                            $ <?= $row['course_price'] ?> / 堂</span>
                    </div>
                    <a type="button" href="Course_one.php?sid=<?= $row['sid']?>" class="NextPage">
                        <p>報名課程</p>
                    </a>
                </div>
            </div>
            <section class="container">
                <div class="row">
                    <div class="col-lg-12 pick">
                        <a class="tablink active productIntro" onclick="openPage('Intro', this, '')" id="defaultOpen">
                            <i class="fas fa-genderless"></i> 課程介紹
                        </a>

                        <a class="tablink  productSending" onclick="openPage('Sending', this, '')">
                            <i class="fas fa-genderless"></i> 報名流程
                        </a>

                        <a class="tablink  productComment" onclick="openPage('About', this, '')">
                            <i class="fas fa-genderless"></i> 課程規範
                        </a>

                        <div id="Intro" class="tabcontent comment">
                            <p>地點｜台北市大安區四維路134巷17號<br>
                                報名截止｜<?= $row['end_time'] ?><br>
                                <br>
                                花材使用｜不指定，由設計師依季節挑選合適花材<br>
                                作品尺寸｜<?= $row['size'] ?><br>
                                課程內容｜<?= $row['intro'] ?><br>
                            </p>
                        </div>

                        <div id="Sending" class="tabcontent comment">
                            <p>
                                step 1. 點選右下角 [ 報名課程 ]，進行繳款動作後，完成訂單且將為你預留名額。<br>
                                step 2. 親自前往 斑斕 門市，留存基本資料後，並給付訂金，即可完成報名<br><br><br>
                                * 辦公室開放時間：週一至週五，10:00-17:00
                            </p>
                        </div>
                        <div id="About" class="tabcontent comment">
                            <p>
                                一、課程規範<br>
                                1.學員所購買課程僅限本人使用，親友無法在旁陪伴上課，若有非本人使用情況，經確認後將立即停止上課。<br>
                                2.教師講課過程中的影音、教材講義等課程內容，禁止學員用於商業行為，或以任何形式公開播放，如有違反，<br>
                                學員須自負相關民、刑事責任。<br>
                                3.課程屬面授教學，若因個人因素缺課，恕無法提供補課服務/退還課程學費及材料費。<br>
                                4.本部保留更換師資、課程內容及時間之權利。<br><br>

                                【以上師資、課程內容、時間及場地等，本單位保留變更之權利。】
                            </p>
                        </div>

                    </div>

                </div>

            </section>

        </article>

    </div>
    <?php include __DIR__ . "/_scripts.php" ?>

    <script>
        function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


        $(".pick a").click(function() {
            $(this).toggleClass("active")
                .siblings().removeClass("active")
        })

        

    </script>
</body>