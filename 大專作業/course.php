<?php
include __DIR__ . "/_connect_db.php";


$sql = "SELECT * FROM course";
$stmt = $pdo->query($sql);
$row = $stmt->fetch();
$totalRows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
$t = $totalRows;

?>

<?php include __DIR__ . "/_html_header.php" ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php include __DIR__ . "/_navbar.php" ?>


<style>
  h2 {
    text-align: center;
    font-size: 48px;
    font-weight: bold;
    margin: 22px;
    color: #707070;
  }

  @media screen and (max-width: 968px) {
    h2 {
      font-size: 20px;
      margin-top: 42px;
    }
  }

  h3 {
    font-size: 30px;
    margin-bottom: 32px;
    font-weight: bold;
  }

  ul {
    padding: 0;
  }

  ul li {
    list-style: none;
  }

  .top {
    background-image:
      linear-gradient(rgba(77, 77, 77, 0.5), rgba(87, 87, 87, 0.5)), url(img/img2.jpeg);
    background-attachment: scroll;
    background-size: cover;
    margin: 0 6vw;
    height: 25vw;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .top h2 {
    color: #ffff;
    letter-spacing: 10px;
  }

  .bottomTop {
    border-bottom: 4px solid #fff;
    width: 0;
    height: 10px;
    opacity: 0;
  }

  @media screen and (max-width: 968px) {
    .container {
      margin: 0;
    }

    .top {
      margin: 0 !important;
      height: 65vh;
      flex-direction: column;
    }

    .bottomTop {
      width: 40%;
      opacity: 1;
    }

    .navtext p {
      font-size: 3vmin !important;
    }

    nav {
      width: 100%;
      margin: 15px 0;
    }
  }

  .navtext {
    text-align: center;
    line-height: 60px;
  }

  @media only screen and (max-width: 576px) {
    .navtext {
      line-height: 22px;
    }
  }

  .navtext p {
    font-size: 24px;
  }

  /* -------------------------------- */
  .articleAll {
    display: flex;
    justify-content: center;
    margin-top: 60px;
    align-items: center;

  }

  .articleMain {
    display: flex;
    justify-content: center;
    margin: 50px 0;
    height: 200px;

  }

  .articleTop {
    border-bottom: 1px solid #000;

  }

  .articleLeft {
    border-right: 1px solid #000;
    margin-left: 15px;
  }

  .articleWork {
    flex: 1;
    margin: 0 15px;

  }

  .articleAll img {
    margin-left: 40px;
    max-width: 100%;
  }

  .articleWork span {
    font-size: 16px;
  }

  .ImgAll {
    flex: 1;
    width: 50%;
  }

  .container {
    max-width: 1320px
  }

  .ImgAll img {
    max-width: 80%;
  }

  @media only screen and (max-width: 991px) {
    article {
      background: url(img/bg.jpg);
      background-size: cover;
      filter: 50px;
    }

    .articleMain {
      flex-direction: column;
      text-align: center;
      align-items: center;

    }

    .desktop-only {
      display: none !important;
    }

    .articleMain {
      width: 100%;
      height: 350px;
      border: none;
    }

    .articleLeft,
    .articleTop {
      border: none;
    }

    .articleWork h3 {
      font-size: 14px;
    }


    .articleWork span {
      font-size: 12px;
    }

    .articleAll img {
      margin: auto;
    }

    .ImgAll {
      width: 45vw;
      flex: none;
    }

    .mobile-only {
      width: 100%;
    }

    .ImgAll img {
      max-width: 50%;
    }
  }

  @media only screen and (max-width: 576px) {
    .articleMain {
      height: 318px;
    }
  }

  @media only screen and (min-width: 992px) {
    .mobile-only {
      display: none !important;
    }
  }

  /* ------------------------------------ */
  .sectionTop h2 {
    margin: 90px 0 76px 0;
  }

  .sectionTop {
    text-align: center;
    margin: 48px;
  }

  .sectionMain {
    display: flex;
    align-items: center;
  }

  .sectionWork {
    margin-left: 36px;
  }

  .sectionWork span {
    font-size: 14px;
    line-height: 36px;
  }

  .Video {
    width: 500px;
  }

  .Secircle {
    display: flex;
    justify-content: center;
    margin: 74px;

  }

  .smallCircle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
    margin: 16px;

  }

  .smallCircle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .sectionWork h3 {
    display: inline-block;
    border-bottom: 2px solid #000;
  }

  @media screen and (max-width: 968px) {
    section {
      padding: 0 !important;
      margin: 0 !important;
    }

    .Video {
      display: none;
    }

    .sectionMain {
      background: #F2B46D;
    }

    .sectionWork h3 {
      font-size: 20px;
      padding: 8px;

    }

    .sectionWork {
      padding: 28px 0;
      height: 360px;
      overflow: overlay;
      color: #fff;
      margin: 30px;
    }

    .sectionWork::-webkit-scrollbar {
      width: 12px;
    }

    .sectionWork::-webkit-scrollbar-track {
      -webkit-box-shadow: none;
    }

    .sectionWork::-webkit-scrollbar-thumb {
      border-radius: 10px;
      -webkit-box-shadow: none;
    }

    .sectionWork span {
      font-size: 14px;
    }

    .Secircle {
      margin: 0px !important;
    }

    .smallCircle {
      width: 150px;
      height: 150px;
      margin-top: 26px;
      /* flex:1; */
    }

  }

  .bottomWork {
    text-align: center;
    font-size: 18px;
    padding: 68px;
    border-bottom: solid 1px #000;
  }

  @media screen and (max-width: 968px) {
    .bottomWork {
      display: none;
    }
  }

  /* ----------------------------------------- */
  .slick-list {
    padding: 0 25px !important;
  }

  .asideWork img {
    max-width: 100%;
  }



  @media screen and (max-width: 968px) {
    .slick-list {
      padding: 0 80px !important;
    }

    .asideWork {
      padding: 5px;
    }

  }

  .asideWork img {
    max-width: 100%;
  }

  .asideH2 {
    text-align: center;
    margin: 96px 0 48px 0;
  }

  .asideWork span {
    display: block;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 32px;
  }

  .asideWork p {
    font-size: 16px;
    line-height: 32px;
    padding: 0 40px;
  }

  .slick-prev:before,
  .slick-next:before {
    color: #000000;
  }

  /* ------------------------******-------------------------------- */
  @media screen and (max-width: 968px) {
    .asideWork p {
      padding: 0;
    }
  }


  /* ----------------------------************--------------------- */
  .btnAll {
    display: flex;
    justify-content: space-around;
    margin: 68px 0;
  }

  .tablinkMain {
    display: flex;
    justify-content: flex-start;
  }

  .tablinkImg {
    width: 500px;
    height: 397px;
  }

  .tablinkImg img {
    width: 100%;
  }

  .tablinkWork {
    flex: 1;
    flex-direction: column;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .tablinkTop {
    justify-content: flex-start;
    align-items: flex-start;
  }

  .tablinkBot {
    justify-content: space-between;
    align-items: flex-end;
  }

  .tablinkP {
    line-height: 32px;
  }

  .tablink {
    color: #707070;
    border: none;
    font-size: 32px;
    width: 100%;
    font-weight: bold;
  }

  @media screen and (max-width: 968px) {
    .btnAll {
      margin: 30px 0;
    }

    .tablink {
      font-size: 20px;
      padding: 6px;
    }

    aside {
      display: flex;
      flex-direction: column-reverse;
      justify-content: center;
    }

    .tablinkImg {
      width: 100vw;
    }

    .tablinkMain {
      justify-content: none;
      align-items: center;
      flex-direction: column;
    }

    .tablinkBot {
      flex-direction: column-reverse;

    }

    .tablinkTop,
    .tablinkBot {
      position: relative;
    }

    .tablinkH3 {
      position: absolute;
      top: 5%;
      left: 0;
      background: #B9B4B4;
    }

    .tablinkH3 h3 {
      margin: 0;
      padding: 12px;
      font-size: 14px;
      color: #fff;
    }

    .tablinkP {
      line-height: 24px;
      font-size: 12px;
      margin: 20px;
    }
  }

  @media screen and (max-width: 768px) {
    .tablinkP {
      line-height: 24px;
      font-size: 12px;
      margin: 20px;
    }
  }

  /* ----------------------------------------------- */
  .RecordH2 {
    margin-top: 122px;
  }

  .h3none,
  .RecordCircle01 {
    display: none;
  }

  .bg-light {
    background: none;
    flex: 1;
    margin: auto;
    padding: 0;

  }

  .RecordMain {
    margin: auto;
    width:70%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .RecordWoek {
    text-align: left;
    margin: 20px;
    border-bottom: 2px solid #000;
  }

  .RecordWoek h3 {
    margin-bottom: 30px;
  }

  .RecordWoek span {
    font-size: 16px;
  }

  .CircleAll {
    width: 80px;
    height: 80px;
    text-align: center;
    border: solid 1px #000;
    padding: 14px 20px;
    border-radius: 50%;
  }

  .CircleAll span {
    text-align: center;
  }

  .RecordWoek p {
    text-align: end;
  }

  @media screen and (max-width: 968px) {
    .row {
      margin: 0;
      width: 100vw;
    }

    .RecordImg {
      margin-bottom: 60px;
    }

    .container {
      max-width: 100%;
    }

    .MainNone,
    .RecordCircle {
      display: none;
    }

    .h3none,
    .RecordCircle01 {
      display: block;
      margin: 20px;
    }

    .RecordCircle01 {
      background: #fff;
      opacity: 0.7;
    }

    .navbar-toggler h3 {
      font-size: 24px;
    }

    .navbar02 h3 {
      color: #fff;

    }

    .navbar01,
    .Main01 {
      background: #E9E6D4;
    }

    .navbar02,
    .Main02 {
      background: #F2B46D;
      color: #fff;
    }

    .Main02 {
      line-height: 32px;
    }

    .navbar-toggler {
      float: 1;
      display: flex;
      width: 100%;
      justify-content: space-between;
      border: none;
      align-items: center;
    }

    .CircleAll {
      margin: 0;
      font-size: 14px;
      width: 50px;
      height: 50px;
      padding: 10px;
    }

    .RecordMain {
      flex-direction: column-reverse;

      margin: 0;
      width: 100% !important;
      justify-content: center;
    }

    .RecordImg img {
      width: 100%;
    }

    .RecordWoek {
      margin: 40px;
      border-bottom: none;
    }

    .RecordWoek p {
      display: none;
    }
  }

  @media screen and (max-width: 576px) {
    .navbar-toggler h3 {
      font-size: 14px;
    }
  }

  @media screen and (max-width: 1024px) {
    .RecordMain {
      width: 90%;
    }

    .RecordWoek h3 {
      font-size: 24px;
    }

    .RecordWoek span {
      font-size: 14px;
    }
  }

  .bg-light {
    background-color: #fff !important;
  }


  /* --------------- */
  @media screen and (max-width: 968px) {
    .container {
      margin: 0 !important;
      padding: 0 !important;
    }
  }

  @media screen and (max-width: 576px) {
    .smallCircle {
      width: 80px;
      height: 80px;

    }

  }

  .animate__animated.animate__fadeIn {
    --animate-duration: 5s;
  }


</style>
</head>

<body>

  <nav>
    <div class="top top1 animate__animated animate__fadeIn">
      <h2>花藝課程</h2>
      <div class="bottomTop"></div>
    </div>
    <div class="navtext">
      <h2>課程特色</h2>
      <p>全新教學項目正式上線！全新系列課程＋深入淺出的連貫性內容！</p>
      <p>▼ 在斑斕學院的學習過程，你可以獲得 ▼</p>
    </div>
  </nav>
  <article class="container custom-container-width">
    <div class="articleAll">
      <div class="articleLeft">
        <div class="LeftTop articleMain articleTop LeftTop1" data-aos="zoom-in">
          <div class="ImgAll">
            <img src="img/course/Workshop01.jpg" alt="" class="desktop-only">
            <img src="img/course/flowerp.png" alt="" class="mobile-only">
          </div>
          <div class="TopWork articleWork">
            <h3>美術系的師生互動</h3>
            <span>每位老師都具備藝術創作能力，除了技法傳授，更能夠進行創作討論、設計思考、創意啟發等。</span>
          </div>
        </div>
        <div class="LeftBot articleMain LeftTop2" data-aos="zoom-in">
          <div class="ImgAll">
            <img src="img/course/Workshop02.jpg" alt="" class="desktop-only">
            <img src="img/course/shears.png" alt="" class="mobile-only">
          </div>
          <div class="BotWork articleWork">
            <h3>花藝特有的空間饗宴</h3>
            <span>
              迷你桌花能起到優化空間的效果，使商業空間或居家環境提升點綴情緻、舒緩都市緊張情緒。盒裝花禮係以花卉裝飾達到提升禮品質感與趣味性的目的，除了受到「您所愛的人」喜愛外。</span>
          </div>
        </div>
      </div>
      <div class="articleRight ">
        <div class="RighrTop articleMain articleTop RighrTop1" data-aos="zoom-in">
          <div class="ImgAll">
            <img src="img/course/Workshop02.jpg" alt="" class="desktop-only">
            <img src="img/course/treehousep.png" alt="" class="mobile-only">
          </div>
          <div class="TopWork articleWork">
            <h3>手工花藝的禮物</h3>
            <span>手工花藝向來是向您所愛的人表達關心慰問和感謝的最佳禮物。而不凋花與乾燥花除了能展現另一種花卉的風情，更能讓作品與心意能擁有更長的保存期限。</span>
          </div>
        </div>
        <div class="Rightbot articleMain RighrTop2" data-aos="zoom-in">
          <div class="ImgAll">
            <img src="img/course/Workshop04.jpg" alt="" class="desktop-only">
            <img src="img/course/userp.png" alt="" class="mobile-only">
          </div>
          <div class="BotWork articleWork">
            <h3>花藝的設計巧思</h3>
            <span>本課程提供花藝師將專業的造型設計理念和色彩感的表現，以不同的創作技巧和組合方式結合架構工藝創作， 更加靈活在花藝設計上的運用，並透過架構式的手法讓花藝有更多更豐富的呈現姿態。</span>
          </div>
        </div>
      </div>
    </div>
  </article>
  <section class="container custom-container-width">
    <div class="sectionTop">
      <h2>課程體驗</h2>
    </div>
    <div class="sectionMain">
      <div class="Video">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/BIUWGfMZHEI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
      <div class="sectionWork">
        <h3>課程特色</h3>
        <ul>
          <li><span>1、基礎打底：著重基礎技巧的訓練，有系統的教學歷程，打好地基才能讓技巧穩定疊升。</span></li>
          <li><span>2、創意激發：非制式化的固定配材，激發學員創意能力，培養具真實設計能力的花藝設計師。</span></li>
          <li><span>3、素材豐富：擁有豐富的花材、資材，學員選材不受限，藉此刺激學員熟稔應用與結合多樣素材。</span></li>
          <li><span>4、彈性排課：一人即可上課，讓你的時間運用更自由，不用擔心缺課問題。</span></li>
          <li><span>5、量身訂做：專人協助你設立學習目標與擬定課程計劃，可密集排課，完整貼近你的需求。</span></li>
          <li><span>6、完整教師群：囊括各式設計風格，統一教學系統，讓你的選擇更多，卻能兼顧教學品質。</span></li>
          <li><span>7、多元證照：備有日本三大不凋花證照、日本藝術蠟燭證照、乾燥花證照，課程搭配組合更靈</span></li>
          <li><span>8、專業整合：金屬珠寶花、不凋花、乾燥花、藝術蠟燭等異材質的結合的應用，學習主題選擇多</span></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="Secircle">
      <div class="smallCircle smallCircle1">
        <img src="img/course/bottom_pic1.jpg" alt="">
      </div>
      <div class="smallCircle smallCircle2 ">
        <img src="img/course/bottom_pic2.jpg" alt="">
      </div>
      <div class="smallCircle smallCircle3">
        <img src="img/course/bottom_pic3.jpg" alt="">
      </div>
    </div>
    <div class="bottomWork">

      <p>
        <span> 從春到冬，應季花材不同，花市會有常供花材和季節性花材，季節性花材只在某一時間段供應，</br>
        </span>
        <span>
          在當期，花材既便宜又質量好，要趁此好好使用。可以在當期進行應季花材的團購倉買，積攢客戶。</br>
        </span>
        <span>
          注意事項：對於拿圖尋花的顧客，花藝師一定要判斷好，哪些花材此時沒有，或者需要高價買進口花替代，避免造成損失</br>
        </span>
        <span>
          每兩個月，花市的應季花材就會有變化，暫列一些。
        </span>
      </p>
    </div>
    <aside>
      <div class="asideTop ">
        <div class="asideH2">
          <h2>課程師資</h2>
        </div>
        <div class="marketing container ">
          <div class="slider">
            <div class=" asideWork slide-1">
              <img src="img/course/people01.jpg" alt="">
              <span>依璇 Jojo</span>
              <p>自由插畫家、設計師，畢業於國立臺北藝術大學戲劇學系，非美術科班出身、卻能以自由的雜食精神，開創出自己的道路。擅長融合印染、繪畫、刺繡…等技法，秉持自由創作的精神，擁有鮮明專屬藝術風格！</p>
            </div>
            <div class="  asideWork slide-2">
              <img src="img/course/people02.jpg" alt="">
              <span>小楊 Yia</span>
              <p>花雅集藝術設計總監</br>
                日本ＭAMI Flower Design School指定教室責任者</br>
                中原大學室內設計研究所</br>
                華夏科技大學兼任講師</br>
                第40屆全國技能競花藝賽職類裁判</br>
                第41屆國際技能競賽國手選拔賽花藝職類裁判</p>
            </div>
            <div class="  asideWork slide-3">
              <img src="img/course/people03.jpg" alt="">
              <span>Jackie Wu</span>
              <p>1965年出生於法國花藝世家。</br>
                1987年，他是熱血的年輕花藝師,法國國家奧斯卡花藝比賽冠軍。</br>
                同年，他參加了法國盃花藝比賽，並獲得季軍。</p>
            </div>
          </div>
        </div>
      </div>

      <div class="asideBot">
        <div class="btnAll">
          <button class="tablink" onclick="openPage('eight', this, '#E9E6D4')">八月課程</button>
          <button class="tablink" onclick="openPage('nine', this, '#E9E6D4')" id="defaultOpen">九月課程</button>
          <button class="tablink" onclick="openPage('ten', this, '#E9E6D4')">十月課程</button>
        </div>
        <div id="eight" class="tabcontent">
          <div class="tablinkTop tablinkMain">
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[0][0] ?>">
              <img src="img/course/<?= $t[0][5] ?>.jpg">
            </a>
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[0][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br><?= $t[0][4] ?>
                －
              </div>
            </div>
          </div>
          <div class="tablinkBot tablinkMain">
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[1][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br>
                </br><?= $t[1][4] ?>
                －
              </div>
            </div>
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[1][0] ?>">
              <img src="img/course/<?= $t[1][5] ?>.jpg">
            </a>
          </div>
        </div>

        <div id="nine" class="tabcontent">
          <div class="tablinkTop tablinkMain">
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[2][0] ?>">
              <img src="img/course/<?= $t[2][5] ?>.jpg">
            </a>
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[2][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br><?= $t[2][4] ?>
                －
              </div>
            </div>
          </div>
          <div class="tablinkBot tablinkMain">
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[3][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br><?= $t[3][4] ?>
                －
              </div>
            </div>
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[3][0] ?>">
              <img src="img/course/<?= $t[3][5] ?>.jpg">
            </a>
          </div>
        </div>

        <div id="ten" class="tabcontent">
          <div class="tablinkTop tablinkMain">
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[4][0] ?>">
              <img src="img/course/<?= $t[4][5] ?>.jpg">
            </a>
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[4][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br><?= $t[4][4] ?>
                －

              </div>
            </div>
          </div>
          <div class="tablinkBot tablinkMain">
            <div class="tablinkWork">
              <div class="tablinkH3">
                <h3><?= $t[5][1] ?></h3>
              </div>
              <div class="tablinkP">
                /</br><?= $t[5][4] ?>
                －
              </div>
            </div>
            <a class="tablinkImg" href="coursein.php?sid=<?= $t[5][0] ?>">
              <img src="img/course/<?= $t[5][5] ?>.jpg">
            </a>
          </div>
        </div>

      </div>

    </aside>
  </section>

  <Record>
    <div class="RecordH2">
      <h2>課程紀錄</h2>
    </div>
   
      
    
    <div class=" RecordAll RecordA01">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar01" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup01" aria-controls="navbarNavAltMarkup01" aria-expanded="false" aria-label="Toggle navigation">
          <h3 class="h3none">【藝享下午茶－當插畫與音樂在一起】</h3>
          <div class="RecordCircle01 CircleAll">
            <span>AUG</br>
              12
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup01">
          <div class="navbar-nav RecordMain Main01 ">
            <div class="RecordImg">
              <img src="img/course/Record01.jpg" alt="">
            </div>
            <div class="RecordWoek col-lg-6 col-md-9">
              <h3 class="MainNone">【藝享下午茶－當插畫與音樂在一起】</h3>
              <span>【藝享下午茶－當插畫與音樂在一起】活動回顧</br></br>
                2019年7月「藝享下午茶」插畫沙龍－「當插畫與音樂在一起」，我們邀請大家
                來與我們分享！</br>
                當天除了分享會還有小小的workshop活動~
                想知道當天活動有什麼有趣好玩的事情發生嗎</br></br>
                -
                <p>more</p>
              </span>
            </div>
            <div class="RecordCircle CircleAll">
              <span>JUL</br>
                20
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="RecordAll RecordA02">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar02" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup02" aria-controls="navbarNavAltMarkup02" aria-expanded="false" aria-label="Toggle navigation">
          <h3 class="h3none">【與花的故事－霞帔之紅】</h3>
          <div class="RecordCircle01 CircleAll ">
            <span>AUG</br>
              15
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup02">
          <div class="navbar-nav RecordMain Main02 ">
            <div class="RecordImg">
              <img src="img/course/Record02.jpg" alt="">
            </div>
            <div class="RecordWoek col-lg-6 col-md-9">
              <h3 class="MainNone">【與花的故事－霞帔之紅】</h3>
              <span>【與花的故事－霞帔之紅】活動回顧</br></br>
                聽著來自舊時代的歌曲，開啟這場臺式文化體驗。
                這次臺式風格捧花課程，巧偶總監Flower Reader 林哲瑋以傳統嫁衣鳳冠霞帔作為主題發想，取其濃烈的色彩與大器的形象，融合本土文化成為捧花最具吸引力的亮點
                總監特別選用臺灣代表性的蘭花作為主角，搭配火鶴、月光米、翹薑、姬菖蒲等特色花材，帶領大家重新認識這些在地素材的美，完成獨具臺式風格的捧花。
                透過總監深刻的教學分享，希望大家都能有所收穫，不論是花藝的知識技巧、培養設計的美感或是一個讓人難忘的故事，滿滿的養分都化為各位臉上滿足的笑容</br></br>
                -
                <p>more</p>
              </span>
            </div>
            <div class="RecordCircle CircleAll">
              <span>AUG</br>
                15
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>
    
  </Record>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php include __DIR__ . '/_html_footer.php' ?>
  <?php include __DIR__ . '/_scripts.php' ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // 課程切換
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    document.getElementById("defaultOpen").click();
  </script>



  <script>
    $('.slider').slick({
      centerMode: true,
      // centerPadding: '100px',
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      dots: false,
      arrows: false,
      responsive: [{
          breakpoint: 576,
          settings: {
            arrows: false,
            centerMode: true,
            // centerPadding: '1000px',
            slidesToShow: 1,
          }
        },

      ]
    });

    // ---------------------------turtle----------------------------------
    AOS.init();
    // -----呼叫AOS.js-------

    $(window).scroll(function() {
      let scrollTop = $(this).scrollTop()
      console.log(scrollTop)
      if (scrollTop >= 200) {

      } else {
      }
    })
    $(window).scroll(function() {
      let scrollTop = $(this).scrollTop()
      console.log(scrollTop)
      if (scrollTop >= 1500) {
        $(".smallCircle1").addClass("animate__animated animate__bounce");
      } else {
        $(".smallCircle1").removeClass("animate__animated animate__bounce");

      }
      if (scrollTop >= 1600) {
        $(".smallCircle2").addClass("animate__animated animate__bounce");
      } else {
        $(".smallCircle2").removeClass("animate__animated animate__bounce");

      }
      if (scrollTop >= 1550) {
        $(".smallCircle3").addClass("animate__animated animate__bounce");

      } else {
        $(".smallCircle3").removeClass("animate__animated animate__bounce");

      }
    })
 
  </script>
</body>

</html>