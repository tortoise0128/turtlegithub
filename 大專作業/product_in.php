<?php 
include __DIR__. "/_connect_db.php";

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1 ;
$sql = "SELECT * FROM `product`  WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();


?>

<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/_navbar.php" ?>

<?php include __DIR__. "/product_in_css.php" ?>




<aside class="container">
    <div class="row topSet">
        <div class="col-lg-3 productLeft" data-sid="<?= $row["sid"]?>">
            <div class="lib">
                <a href="product.php">/ Products</a>
                <a href="">/ Bouquet</a>
                <a>/ <?= $row['name'] ?></a>
            </div>

            <div class="contect">
                <h2><?= $row['name']?></h2>
                <h3>NT <?= $row['price'] ?></h3>

                <p>尺 寸: <?= $row['size'] ?><br>花 材: <?= $row['flower'] ?></p>
            </div>

            <div class="quantity">
                <span class="input-number-decrement" > - </span>
                <input class="input-number" type="text" value="1" min="1" max="99">
                <span class="input-number-increment" > + </span>
            </div>


            <div class="toCart">
                <button type="button" class="btn btnAdd">加入購物車</button>
                <i class="fas fa-heart likeAdd"></i>
            </div>
        </div>

        <div class="col-lg-7 productImg">
            <ul>
                <li><img id="main" src="img/small/<?= $row['img_small']?>-1.jpg" alt=""></li>
            </ul>
        </div>

        
        <div class="libRWD">
            <a href="product.php">/ Products</a>
            <a href="">/ Bouquet</a>
            <a>/ <?= $row['name'] ?></a>
        </div>

        <div class="titleRWD">
            <h2><?= $row['name'] ?></h2>
        </div>

        <div class="col-lg-2 containerBar productRight">
            <ul class="smallImg">
                <li class="active"><img src="img/big/<?= $row['img_small']?>-1.jpg" alt=""></li>
                <li><img src="img/big/<?= $row['img_small']?>-2.jpg" alt=""></li>
                <li><img src="img/big/<?= $row['img_small']?>-3.jpg" alt=""></li>
                <li><img src="img/big/<?= $row['img_small']?>-4.jpg" alt=""></li>
            </ul>
        </div>

        <div class="sizeRWD">
            <div class="contectRWD">
                <p>尺 寸: <?= $row['size'] ?><br>花 材: <?= $row['flower'] ?></p>
            </div>
        </div>
        <div class="infoRWD">
            <div class="tolikeRWD">
                <h3>NT <?= $row['price'] ?></h3>
                <i class="fas fa-heart likeAdd"></i>
            </div>
            <div class="quantityRWD">
                <h4 class="quantity">數 量</h4>
                <div>
                    <span class="input-number-decrement" > - </span>
                    <input class="input-number quantityNumber" type="text" value="1" min="1" max="99">
                    <span class="input-number-increment" > + </span>
                </div>
            </div>

            <div class="toCartRWD">
                <button type="button" class="btn btnAdd">加 入 購 物 車</button>
                
            </div>
        </div>
    </div>
</aside>



<main  class="container">
    <div class="row">
        <div class="col-lg-12 pick">
            <a class="tablink active productIntro" onclick="openPage('Intro', this, '')" id="defaultOpen">
                <i class="fas fa-genderless"></i> 商品介紹
            </a>

            <a class="tablink productSending" onclick="openPage('Sending', this, '')" >
                <i class="fas fa-genderless"></i> 運送方式
            </a>

            <a class="tablink productComment" onclick="openPage('About', this, '')">
                <i class="fas fa-genderless"></i> 商品評論(3)
            </a>

            <div id="Intro" class="tabcontent comment">
          
                <p><?= $row['intro'] ?>
                    <!-- 我要把這漫長冬至夜的三更剪下，<br>
                    輕輕捲起來放在溫香如春風的被下，<br>
                    等到我愛人回來那夜一寸寸將它攤開。<br> -->
                    <br>
                    -<br>
                    <br>
                    ※花束均附照顧卡，鑑賞期限約3~5天，但花材也會因天候環境和人為因素而影響其保存天數。<br>
                    ※若您選擇宅配，花束尺寸和包裝，會因應宅配箱而略做設計調整。<br>
                    ※花市偶有突發性的花材缺貨或品質不佳的情形，如有此狀況發生，請同意讓我們專業花藝設計師以等值以上的新鮮花材為您做設計調整。<br>
                    ※緊急訂購：指定店配隔天或宅配後天須送達的花禮為急件！以上兩種情況請務必來電確認訂單成立與否，<br>
                    &emsp;若沒有來電確認，恕無法保證準時出貨。若有當日配送的特殊訂購需求請電洽，<br>
                    &emsp;客服電話：02-2345-7778 / 02-2345-7828， 服務時間：AM09:00-PM06:00。<br>
                    ※如遇特殊節日（如：春節、情人節、母親節…等），因訂單量大，請提前三天訂購，並且恕無法指定送達時段，請見諒。
                </p>

            </div>

            <div id="Sending" class="tabcontent comment">
            
                <p>斑斕運送方式：<br>
                    1.帳款確認後將儘快處理您的訂單。<br>
                    2.配送方式：<br>
                    &emsp;(一)宅配：統一速達(黑貓宅急便)/順豐快遞<br>
                    &emsp;出貨時間：週一～週五(不含六日及國定例假日)<br>
                    &emsp;預計貨品到期日：出貨日+1天物流配運時間<br>
                    &emsp;(二)到店取貨<br>
                    &emsp;出貨時間：週一～週五(不含六日及國定例假日)<br>
                    &emsp;預計取貨日：訂單確認後2~3個工作天<br>
                    3.到貨當日，請務必確認有人可以收貨。<br>
                    &emsp;*客人希望的配送時段都會備註在宅配單上， 可是會因為宅配站所每日配送的貨物多寡，以及送貨路線等因素，都會影響到配送到達的時間！<br>
                    4.配送範圍限台灣本島各縣市(不含郵政信箱)。<br>
                    5.如本店無法接受您的訂單，將於收到您的訂單後二個工作日內通知您。但法令另有規定者除外。<br>
                    <br>
                    斑斕 運費說明：<br>
                    到店取貨：免運費。<br>
                    宅配到府：台灣本島每筆訂單為新台幣 80 元運費。<br>
                    為長期回饋會員，單筆商品訂購金額滿 1,000 元以上，享免運費優惠。
                </p>

            </div>

            <div id="About" class="tabcontent comment">
                <div class="discuss">
                    <div class="member">
                        <ul class="col-lg-2 containerBar col-md-1">
                            <li><img src="img/member(3).jpg" alt=""></li>
                        </ul>

                        <div class="col-lg-10 col-md-11 memberComment">
                            <div class="memberStar">
                                <h5>Chloe Lin</h5>
                                <div class="star" style="color: #ffed00 ;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                            <div class="message">
                                <p>2020/07/21</p>
                                <p>剛開始想說就簡單小捧花就好沒有太多想法！闆娘提供照片與我討論～拿到小捧花那瞬間好感動！</p>
                            </div>
                        </div>

                    </div>

                    <div class="member">
                        <ul class="col-lg-2 containerBar">
                            <li><img src="img/member(1).jpg" alt=""></li>
                        </ul>

                        <div class="col-lg-10 memberComment">
                            <div class="memberStar">
                                <h5>蘇菲雅</h5>
                                <div class="star" style="color: #ffed00 ;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star" style="color: #b9b4b4 ;"></i>
                                </div>
                            </div>

                            <div class="message">
                                <p>2020/07/12</p>
                                <p>可愛的女孩店員幫我包了給朋友的禮物，雖然不是買店裡的永生花商品，還是很熱心而且有耐心地跟我討論，很謝謝她讓我用多出來的花材做花束，我朋友收到很開心！謝謝。</p>
                            </div>
                        </div>

                    </div>

                    <div class="member">
                        <ul class="col-lg-2 containerBar">
                            <li><img src="img/member(2).jpg" alt=""></li>
                        </ul>

                        <div class="col-lg-10 memberComment">
                            <div class="memberStar">
                                <h5>曾志國</h5>
                                <div class="star" style="color: #ffed00 ;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                            <div class="message">
                                <p>2020/06/30</p>
                                <p>永生花束真的很美麗，跟在官網上看到的一模一樣，搭配的文案也寫的很好每束花都有一個主題，讓我在選擇的時候能快速做決定，下次如果還想買花的話，一定會再想到斑斕。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="discussAdd">
                    <div class="discussAddPlace">
                        <div class="rating">
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="commentAdd" placeholder="JoJoBall 說: "></textarea>
                        </div>

                        <button type="button" class="btn send">傳 送</button>
                    </div>

                    <button type="button" class="btn sendAdd">評 論</button>
                    
                </div>
            </div>

        </div> 

    </div>

</main>

<section class="container">

    <div class="row">
        <div class="col-lg-12"><h3>Related Products</h3></div>
        
        <div class="product">
            
        </div>
    </div>

</section>

<?php include __DIR__. "/_scripts.php" ?>


<script>

const product = $(".product")
const productTpl = function(obj){
    return `<div class="productItem">
                <div class="f-box">
                    <a href="product_in.php?sid=${obj.sid}"><img src="img/small/${obj.img_small}-1.jpg" alt=""></a>
                </div>
                <div class="RelatedInfo">
                    <h5 class="productName">${obj.name}</h5>
                    <h5>NT.${obj.price}</h5>
                </div>
            </div>`
};
function productHash(){
        let h = location.hash.slice(1);
        h = parseInt(h) || 1;
        // info.innerHTML = h;

        $.get('product_rand_api.php', {page: h}, function(data){
            console.log('data',data)

            product.empty();
            for(let s in data.rows){
                product.append( productTpl(data.rows[s]) );
            }

        },'json');
    };

    window.addEventListener('hashchange',productHash);
    productHash();

// ----------------------------------------------------


    (function(){
        window.inputNumber = function(el){
            let min = el.attr('min') || false;
            let max = el.attr('max') || false;
        
            let els = {};
            els.dec = el.prev();
            els.inc = el.next();
            el.each(function(){
                init($(this));
            });
            function init(el) {
                els.dec.on('click',decrement);
                els.inc.on('click',increment);
                function decrement() {
                    let value = el[0].value;
                    value--;
                    if(!min || value >= min){
                        el[0].value = value;
                    }
                }
                function increment() {
                    let value = el[0].value;
                    value++;
                    if(!max || value <= max){
                        el[0].value = value++;
                    }
                }
           }
        }
    })();

    inputNumber($('.input-number'));


    $(".likeAdd") .click(function(){
        $(this) .toggleClass("active")
    })

    $(".smallImg li") .click(function(){
        $(this) .toggleClass("active")
        .siblings() .removeClass("active")
    })


    // 縮圖更換
    $(".smallImg li").click(function(){
        let src=$(this).find("img") .attr("src")
        console .log(src)
        $("#main").attr("src",src)
    })

    function openPage(pageName,elmnt,color) {
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

    $(".pick a") .click(function(){
        $(this) .toggleClass("active")
        .siblings() .removeClass("active")
    })



    $('.btnAdd').click(function(){
        
        Swal.fire({
            title: "成功加入購物車!",
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
            });
        });

    $('.likeAdd').click(function(){
        Swal.fire({
            title: "成功加入收藏列表!",
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
            });
        });

    
// -----------------------------------------------

    const buy_btns = $('.btnAdd');

    buy_btns.click(function(){
        const p_item = $(this).closest('.productLeft');
        const sid = p_item.attr('data-sid');
        const qty = p_item.find('input').val();


        const sendObj = {
            action: 'add',
            sid, //sid: sid;
            quantity: qty
        }
        $.get('handle-cart-api.php', sendObj , function(data){
            console.log(data);
            setCartCount(data);
        }, 'json')
    });
    

</script>

<?php include __DIR__. "/_html_footer.php" ?>