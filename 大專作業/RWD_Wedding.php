<?php 
include __DIR__ . "/_connect_db.php" ;

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1;
$sql =  "SELECT * FROM `layout`  WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();

?>

<?php include __DIR__ . "/_html_header.php" ?>
<?php include __DIR__ . "/RWD_navbar.php" ?>

<style>
    .container{
        max-width:1366px;
    }
    .imgFix{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .main01 {
        display: flex;
        justify-content: space-between;
    }
    .article-main {
        margin-bottom: 5%;
        padding: 0px;
    }
    .article-text {
        margin-top: 5%;
        padding: 0px;
    }
    .date {
        font-size: 1rem;
    }
    .article-text h1 {
        font-size: 2.75rem;
        margin-bottom: 50px;
    }
    .text01 {
        font-size: 16px;
        letter-spacing: 2px;
        line-height: 30px;
        margin-bottom: 50px;
    }
    .text-name {
        font-size: 1.25rem;
    }
    .text-name span{
        color: #f2b46d;
    }
    .article-titleE{
            font-style: italic;
        }
    .article-pic {
        width: 630px;
        height: 800px;
    }
   
    @media screen and (max-width:968px) {
        .main01 {
            flex-wrap: wrap;
            position: relative;
        }
        .article-pic {
            width: 100%;
            height: 500px;
            order: 1;
            z-index: 1;
        }
        .article-main {
            width: 100%;
            order: 2;
        }
        .article-text h1 {
            font-size: 24px;
            color: white;
        }
        .article-text h1 span {
            display: none;
        }
        .article-title {
            width: 250px;
            position: absolute;
            top: -500px;
            left: 40px;
            z-index: 3;
            text-align: center;
        }
    }
    /* <!---------------------------------------------------------- --> */
    .article-main-two {
        display: flex;
    }

    .article-main-2{
        margin-top: 20px;
    }
    .article-main-2 span {
        display: none;
    }

    .article-pic2 {
        margin: 0;
        width: 820px;
        height: 300px;
        overflow: hidden;
    }
    .article-pic3 {
        width: 500px;
        height: 300px;
        overflow: hidden;
    }

    @media screen and (max-width:968px) {
        .article-main-2 span {
            display: block;
            margin:0;
        }
        .article-main-2 span{
            margin: 0;
            letter-spacing: 2px;
            line-height:30px ;
        }

        .article-pic2 {
            width: 350px;
        }
        .article-pic3{
            display: none;
        }
    }

    /* <!---------------------------------------------------------- --> */
    .article-pic-two {
        margin-top: 50px;
        width: 50%;
        position: relative;
        margin-right: 40px;
    }
    .article-text-two {
        margin: 50px;
        width: 40%;
        letter-spacing: 2px;
        line-height: 30px;
    }
    .pic4 {
        width: 330px;
        height: 350px;
        position: absolute;
    }
    .pic5 {
        width: 330px;
        height: 350px;
        position: absolute;
        top: 10rem;
        left: 10rem;
    }
    .pic6 {
        width: 330px;
        height: 350px;
        position: absolute;
        top: 20rem;
        left: 20rem;
    }
    .pic7 {
        width: 180px;
        height: 180px;
        border-radius: 30px;
        overflow: hidden;
    }
    /* <!---------------------------------------------------------- --> */
    .article-main-three {
        justify-content: flex-end;
        margin-bottom: 30px;
    }
    .moblieSlide{
        display: none;
        margin-top:10px 0 10px 0;
    }
    .designer{
            margin: auto 0;
        }
    .designer span{
        letter-spacing: 2px;
        line-height: 30px;
    }
    @media screen and (max-width:968px) {
        .article-main-three {
            margin-bottom: 30px;
            align-items: center;
        }
        .article-text-two {
            margin: 30px 0;
            width: 100%;
        }
        .article-pic-two,.article-text-two span,.article-text-two hr{
            display: none;
        }
        .article-text-two .text03{
            margin-top: 10%;
            text-align: left;
        }
        .article-text-two h3{
            margin: 20px 0;
        }
        .pic7{
            width: 90px;
            height: 60px;
            margin-left: 40px;
        }
        .designer h2{
            font-size: 20px;
        }
        .designer span{
            display: none;
        }
        .moblieSlide{
            display: block;
            margin-top: 10px;
        }
        .prePage{
            border-radius: 0;
            background-color: #E9E6D4;
            color: #fff;
            margin:0;
            width: 100%;
        }
        .nextPage{
            border-radius: 0;
            background-color: #F2B46D;
            margin:0;
            color: #fff;
            width: 100%;
        }
        .carousel-item{
            height: 350px;
        }
    }
</style>
<div class="container">
    <div class="main01">
        <article class="article-main">
            <div class="article-text col-lg-7" > <!-- aos1 -->
                <p class="date">DATE 　<?= $row["time"]?></p>
                <h1 class="article-title"><span><?= $row["name"]?></span> <br>
                <span class="article-titleE"><?= $row["eg_name"]?></span></h1>
                <div class="textBox" >      
                    <p class="text01">斑斕<br>
                        100%<br>
                </div>
                <p class="text-name"> <span>Style</span> 　Black<br><?= $row["designer"]?>
                </p>
            </div>
        </article>
        <figure class="article-pic col-lg-6" data-aos="zoom-in" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"> <!-- aos2 -->
            <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-1.jpg" alt="">
        </figure>
    </div>
    <!-- -------------------------------------------------------- -->
    <article class="article-main-2">
        <span>
            <h3>Health Kit</h3>
        </span>
        <span>
            <?= $row["intro3"]?></p>
        </span>
        <div class="d-flex"  data-aos="flip-up" data-aos-duration="500"> <!-- aos3 -->
        <figure class="article-pic2">
        <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-2.jpg" alt="">

        </figure>
        <figure class="article-pic3">
            <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-3.jpg" alt="">
        </figure>
        </div>
    </article>
    <!-- -------------------------------------------------------- -->
    <div class="article-main-two">
        <div class="article-pic-two">
            <figure class="pic4" data-aos="fade-down" data-aos-duration="1000"> <!-- aos4 -->
                <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-4.jpg" alt="">
            </figure>
            <figure class="pic5" data-aos="fade-down" data-aos-duration="1500"> <!-- aos5 -->
                <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-5.jpg" alt="">
            </figure>
            <figure class="pic6" data-aos="fade-down" data-aos-duration="2000"> <!-- aos6 -->
                <img class="imgFix" src="img/Wedding/OK/<?= $row["layout_img"]?>-6.jpg" alt="">
            </figure>
        </div>
        <div class="article-text-two">
            <span><h1 data-aos="flip-up">你可以獲得</h1></span> <!-- aos7 -->
            <div data-aos="flip-up" data-aos-duration="1000"> <!-- aos8 -->
                <h3 >Serum</h3>
                <p><?= $row["intro2"]?></p>
                <hr>
            </div>
            <div data-aos="flip-up" data-aos-duration="1000"> <!-- aos9 -->
                <span><h3>Health Kit</h3></span>
                
                <p><?= $row["intro3"]?></p>
                
                <hr>
            </div>
            <div data-aos="flip-up" data-aos-duration="2000"> <!-- aos10 -->
                <h3>Tracking Adapting </h3>
                <p><?= $row["intro4"]?></p>
            </div>
        </div>
    </div>
    <div class="article-main-three d-flex">
        <div class=" pic7 " data-aos="flip-up" data-aos-duration="2000"> <!-- aos11 -->
            <img class="imgFix" src="img/Wedding/people<?= $row["designer_img"]?>.jpg" alt="">
        </div>
        <div class="designer col-lg-7" data-aos="flip-up" data-aos-duration="2500"> <!-- aos12 -->
            <h2><?= $row["designer"]?></h2>
            <span><?= $row["designer_intro"]?></span>
        </div>
    </div>
</div>
</div>
<span class="moblieSlide">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/Wedding/OK/<?= $row["layout_img"]?>-4.jpg" class="d-block w-100 pic8 imgFix" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/Wedding/OK/<?= $row["layout_img"]?>-5.jpg" class="d-block w-100 imgFix" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Wedding/OK/<?= $row["layout_img"]?>-6.jpg" class="d-block w-100 imgFix" alt="...">
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
    <a type="button" class="btn btn-lg prePage" href="<?= WEB_ROOT ?>/Wedding.php?sid=<?= $row["sid"]-1?>">前一個作品 </a>
    <a type="button" class="btn btn-lg nextPage" href="<?= WEB_ROOT ?>/Wedding.php?sid=<?= $row["sid"]+1?>">下一個作品</a>
</span>

<?php include __DIR__ . "/_scripts.php" ?>
<?php include __DIR__ . "/_html_footer.php" ?>

<script>
    AOS.init();
</script>